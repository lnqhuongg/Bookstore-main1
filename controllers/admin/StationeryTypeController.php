<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/StationeryType.php';

    class StationeryTypeController extends BaseController{
        private $type;

        function __construct()
        {
            $this->folder = 'admin';
            $this->type= new StationeryType();
        }

        function index(){
            $stationeryTypes = StationeryType::getAll();
            $result = [
                'paging' => $stationeryTypes
            ];
            $this->render('StationeryType',$result, true);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
                case 'submit_btn_add':
                    $this->add();
                    break;
                case 'search':
                    $this->search();
                    break;
                case 'load_default':
                    $this->loadDefaultData();
                    break;
            }
        }

        // Tìm kiếm -> nhập keyword -> hiển thị lên html
        function search() {
            $keyword = $_POST['keyword'];
            $stationeryTypes = StationeryType::search($keyword);
        
            if ($stationeryTypes) {
                $html = "";
                foreach ($stationeryTypes as $stationeryType) {
                    $html .= "<tr>
                        <td class='align-middle text-center'>{$stationeryType->getIdLoai()}</td>
                        <td class='align-middle text-center'>{$stationeryType->getTenLoai()}</td>
                        <td class='align-middle text-center'>
                            ".($stationeryType->getTrangthai() ? "<span class='text-success fw-bold'>Đang hoạt động</span>" : "<span class='text-danger fw-bold'>Bị khóa</span>")."
                        </td>
                        <td class='align-middle text-center'>
                            <button type='button' class='btn btn-sm open_edit_form' data-bs-toggle='modal' data-bs-target='#staticBackdropEditTypeStationery'>
                                <img src='../assets/admin/img/edit.png' style='width:20px' alt=''>
                            </button>
                        </td>
                    </tr>";
                }
                echo json_encode(["success" => true, "html" => $html]);
            } else {
                echo json_encode(["success" => false]);
            }
            exit;
        }
        
        // Trường hợp không nhập từ khóa tìm kiếm -> load lại bảng
        function loadDefaultData() {
            $stationeryTypes = StationeryType::getAll();
            $html = "";
            foreach ($stationeryTypes as $stationeryType) {
                $html .= "<tr>
                    <td class='align-middle text-center'>{$stationeryType->getIdLoai()}</td>
                    <td class='align-middle text-center'>{$stationeryType->getTenLoai()}</td>
                    <td class='align-middle text-center'>
                        ".($stationeryType->getTrangthai() ? "<span class='text-success fw-bold'>Đang hoạt động</span>" : "<span class='text-danger fw-bold'>Bị khóa</span>")."
                    </td>
                    <td class='align-middle text-center'>
                        <button type='button' class='btn btn-sm open_edit_form' data-bs-toggle='modal' data-bs-target='#staticBackdropEditTypeStationery'>
                            <img src='../assets/admin/img/edit.png' style='width:20px' alt=''>
                        </button>
                    </td>
                </tr>";
            }
            echo json_encode(["success" => true, "html" => $html]);
            exit;
        }
        

        function add(){
            $this->type = new StationeryType($_POST['lvpp_name'], 1);
            
            // Kiểm tra tên loại đã tồn tại
            if (StationeryType::isExist(null, $_POST['lvpp_name'])) {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => false,
                    'message' => 'Tên loại văn phòng phẩm đã tồn tại'
                ));
                exit;
            }
        
            // Thực hiện thêm loại văn phòng phẩm
            $req = $this->type->add();
        
            if($req) {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => true,
                    'message' => 'Thêm loại văn phòng phẩm thành công'
                ));
            } else {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => false,
                    'message' => 'Có lỗi xảy ra, vui lòng thử lại'
                ));
            }
            exit;
        }
        

    }

    $stationeryTypeController = new StationeryTypeController();
    // $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $stationeryTypeController->checkAction($action);
?>