<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Discount.php';

    class DiscountController extends BaseController{
        private $discount;

        function __construct()
        {
            $this->folder = 'admin';
            $this->discount = new Discount(0, '', '', 0, 0);
        }

        // Load data lên table
        function index(){
            $discounts = Discount::getAll();
            $result = [
                'paging' => $discounts
            ];
            $this->render('Discount', $result, true);
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
            $this->discount = new  Discount($_POST['discount_percent'], $_POST['discount_begin'], $_POST['discount_end'], 1);
            
            // khởi tạo biến request lưu kết quả trả về từ phương thức add() ở class Discount
            $req = $this->discount->add();

            if($req) {
                echo json_encode(array('btn'=>'add','success'=>true));
            } 
            else {
                echo json_encode(array('btn'=>'add','success'=>false));
            }
            exit;
        }

        function show_data(){
            $discount = Discount::findByID($_POST['discount_id']);
            if ($discount == null) {
                echo json_encode(['success' => false, 'message' => 'Không tìm thấy dữ liệu']);
            } else {
                echo json_encode(['success' => true, 'data' => $discount->toArray()]);
            }
            exit;
        }
        

        function update(){
            // lấy dữ liệu từ form nếu có thay đổi (nhấn vào nút - submit)
            $idMGG = $_POST['discount_id'];
            $phantram = $_POST['discount_percent'];
            $ngaybatdau = $_POST['discount_begin'];
            $ngayketthuc = $_POST['discount_end'];
            $trangthai = isset($_POST['status']) ? 1 : 0;

            $this->discount = new Discount($phantram, $ngaybatdau, $ngayketthuc, $trangthai, $idMGG);
            $req = $this->discount->update();
            
            if($req) echo json_encode(array('btn'=>'update','success'=>true));
            else echo json_encode(array('btn'=>'update','success'=>false));
            exit;
        }


    }

    $discountController = new DiscountController();
    // $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $discountController->checkAction($action);
?>