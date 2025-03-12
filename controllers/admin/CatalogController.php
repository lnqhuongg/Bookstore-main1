<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Catalog.php';

    class CatalogController extends BaseController{
        private $catalog;

        function __construct()
        {
            $this->folder = 'admin';
            $this->catalog= new Catalog();
        }

        function index(){
            $catalogs = Catalog::getAll();
            $result = [
                'paging' => $catalogs
            ];
            $this->render('Catalog', $result, true);
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
        function show_data(){
            $catalog = Catalog::findByID($_POST['catalog_id']);
            if ($catalog == null) {
                echo json_encode(['success' => false, 'message' => 'Không tìm thấy dữ liệu']);
            } else {
                echo json_encode(['success' => true, 'data' => $catalog->toArray()]);
            }
            exit;
        }

        function update(){
            // Lấy dữ liệu từ form nếu có thay đổi (nhấn vào nút - submit)
            $idTL = $_POST['catalog_id'];
            $tenTL = $_POST['catalog_name'];
            $trangthai = isset($_POST['status']) ? 1 : 0;
        
            // Kiểm tra trùng mã giảm giá trước khi cập nhật
            if (Catalog::isExist($idTL, $tenTL)) {
                echo json_encode(array(
                    'btn' => 'update',
                    'success' => false,
                    'message' => 'Tên thể loại đã tồn tại'
                ));
                exit;
            }
            
            $this->catalog = new Catalog($tenTL, $trangthai, $idTL);
            $req = $this->catalog->update();
            
            if($req) {
                echo json_encode(array(
                    'btn' => 'update',
                    'success' => true,
                    'message' => 'Cập nhật mã giảm giá thành công'
                ));
            } else {
                echo json_encode(array(
                    'btn' => 'update',
                    'success' => false,
                    'message' => 'Có lỗi xảy ra khi cập nhật'
                ));
            }
            exit;
        }
        

        // add
        function add(){
            $this->catalog = new  Catalog($_POST['catalog_name'],1);
            
             // Kiểm tra mã giảm giá đã tồn tại
             if (Catalog::isExist(null, $_POST['catalog_name'])) {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => false,
                    'message' => 'Tên thể loại đã tồn tại'
                ));
                exit;
            }

            // Thêm mã giảm giá
            $req = $this->catalog->add();
        
            if($req) {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => true,
                    'message' => 'Thêm thể loại thành công'
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

    $catalogController = new CatalogController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $catalogController->checkAction($action);
?>