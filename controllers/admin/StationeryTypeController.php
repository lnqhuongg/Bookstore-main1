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
                case 'show_data':
                    $this->show_data();
                    break;
                case 'submit_btn_update':
                    $this->update();
                    break;
                case 'search':
                    $this->search();
                    break;
                case 'load_default':
                    $this->loadDefaultData();
                    break;
            }
        }
        function add(){
            $this->type = new StationeryType($_POST['lvpp_name'], 1);
            
            // Thực hiện thêm loại văn phòng phẩm
            $req = $this->type->add();
        
            if($req) {
                echo json_encode(array('btn'=>'add','success'=>true));
            } 
            else {
                echo json_encode(array('btn'=>'add','success'=>false));
            }
            exit;
        }
        function show_data(){
            $stationnaryType = StationeryType::findByID($_POST['lvpp_id']);
            if ($stationnaryType == null) {
                echo json_encode(['success' => false, 'message' => 'Không tìm thấy dữ liệu']);
            } else {
                echo json_encode(['success' => true, 'data' => $stationnaryType->toArray()]);
            }
            exit;
        }
        

        function update(){
            // lấy dữ liệu từ form nếu có thay đổi (nhấn vào nút - submit)
            $idLoai = $_POST['lvpp_id'];
            $tenLoai = $_POST['lvpp_name'];
            $trangthai = isset($_POST['status']) ? 1 : 0;

            $this->type = new StationeryType($tenLoai, $trangthai, $idLoai);
            $req = $this->type->update();
            
            if($req) echo json_encode(array('btn'=>'update','success'=>true));
            else echo json_encode(array('btn'=>'update','success'=>false));
            exit;
        }
        // Tìm kiếm -> nhập keyword -> hiển thị lên html
        function search() {
            if ($_POST['action'] == "search") {
                $keyword = $_POST['keyword'] ?? "";
                $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
                $limit = NUM_PER_PAGE_ADMIN; // Sử dụng hằng số từ file config
            
                $stationeryTypes = StationeryType::search($keyword);
                $total_records = count($stationeryTypes);
                
                // Tính số trang và xác định vị trí bắt đầu
                $total_pages = ($total_records > 0) ? ceil($total_records / $limit) : 1;
                if ($page > $total_pages) {
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $stationeryTypes = array_slice($stationeryTypes, $start, $limit); 
            
                if ($stationeryTypes) {
                    $html = "";
                    foreach ($stationeryTypes as $stationeryType) {
                        $html .= "<tr>
                            <td class='align-middle text-center'>{$stationeryType->getIdLoai()}</td>
                            <td class='align-middle text-center'>{$stationeryType->getTenLoai()}</td>
                            <td class='align-middle text-center'>
                                ".($stationeryType->getTrangthai() 
                                    ? "<span class='text-success fw-bold'>Đang hoạt động</span>" 
                                    : "<span class='text-danger fw-bold'>Bị khóa</span>")."
                            </td>
                            <td class='align-middle text-center'>
                                <button type='button' class='btn btn-sm open_edit_form' data-bs-toggle='modal' data-bs-target='#staticBackdropEditTypeStationery'>
                                    <img src='../assets/admin/img/edit.png' style='width:20px' alt=''>
                                </button>
                            </td>
                        </tr>";
                    }
            
                    // Sinh nút phân trang page-link rounded-circle
                    $pagination = "<li class='page-item " . ($page == 1 ? "disabled" : "") . "'>
                                        <a href='#' class='page-item me-2 page-link rounded-circle pagination-btn' data-page='" . ($page - 1) . "'> < </a>
                                   </li>";
                    for ($i = 1; $i <= $total_pages; $i++) {
                        $active = ($i == $page) ? "active" : "";
                        $pagination .= "<li class='pagination page-item $active rounded-circle me-2'><a href='#' class='pagination-btn' data-page='$i'>$i</a></li>";
                    }
                    $pagination .= "<li class='page-item " . ($page == $total_pages ? "disabled" : "") . "'>
                                        <a href='#' class='page-item me-2 page-link rounded-circle pagination-btn' data-page='" . ($page + 1) . "'> > </a>
                                   </li>";
            
                    echo json_encode(["success" => true, "html" => $html, "pagination" => $pagination]);
                } else {
                    echo json_encode(["success" => false]);
                }
                exit;
            }
            
        }
        
        // Trường hợp không nhập từ khóa tìm kiếm -> load lại bảng
        function loadDefaultData() {
            $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
            $limit = NUM_PER_PAGE_ADMIN; // Sử dụng hằng số từ file config

            $stationeryTypes = StationeryType::getAll();
            $total_records = count($stationeryTypes);
            $total_pages = ($total_records > 0) ? ceil($total_records / $limit) : 1;
            if ($page > $total_pages) {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $stationeryTypes = array_slice($stationeryTypes, $start, $limit);
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
            // Sinh nút phân trang
            // $pagination = "<li class='page-item " . ($page == 1 ? "disabled" : "") . "'>
            // <a href='#' class='page-link pagination-btn' data-page='" . ($page - 1) . "'> < </a>
            // </li>";
            // for ($i = 1; $i <= $total_pages; $i++) {
            // $active = ($i == $page) ? "active" : "";
            // $pagination .= "<li class='page-item $active'><a href='#' class='page-link pagination-btn' data-page='$i'>$i</a></li>";
            // }
            // $pagination .= "<li class='page-item " . ($page == $total_pages ? "disabled" : "") . "'>
            //     <a href='#' class='page-link pagination-btn' data-page='" . ($page + 1) . "'> > </a>
            // </li>";

            echo json_encode(["success" => true, "html" => $html]);
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