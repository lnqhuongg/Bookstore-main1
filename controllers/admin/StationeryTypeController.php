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