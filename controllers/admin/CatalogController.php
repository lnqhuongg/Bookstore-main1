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

        // load data lên table
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

        // add
        function add(){
            $this->catalog = new Catalog($_POST['catalog_name'], 1);
            
            // khởi tạo biến request lưu kết quả trả về từ phương thức add() ở class catalog
            $req = $this->catalog->add();

            if($req) {
                echo json_encode(array('btn'=>'add','success'=>true));
            } 
            else {
                echo json_encode(array('btn'=>'add','success'=>false));
            }
            exit;
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
            // lấy dữ liệu từ form nếu có thay đổi (nhấn vào nút - submit)
            $idTL = $_POST['catalog_id'];
            $tenTL = $_POST['catalog_name'];
            $trangthai = isset($_POST['status']) ? 1 : 0;

            $this->catalog = new Catalog($tenTL, $trangthai, $idTL);
            $req = $this->catalog->update();
            
            if($req) echo json_encode(array('btn'=>'update','success'=>true));
            else echo json_encode(array('btn'=>'update','success'=>false));
            exit;
        }
        
    }

    $catalogController = new CatalogController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $catalogController->checkAction($action);
?>
