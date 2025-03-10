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
                
            }
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