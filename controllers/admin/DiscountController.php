<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Discount.php';

    class DiscountController extends BaseController{
        private $discount;

        function __construct()
        {
            $this->folder = 'admin';
            $this->discount = new Discount();
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
            
             // Kiểm tra mã giảm giá đã tồn tại
             if (Discount::isExist(null, $_POST['discount_percent'], $_POST['discount_begin'], $_POST['discount_end'])) {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => false,
                    'message' => 'Mã giảm giá đã tồn tại'
                ));
                exit;
            }

            // Thêm mã giảm giá
            $req = $this->discount->add();
        
            if($req) {
                echo json_encode(array(
                    'btn' => 'add',
                    'success' => true,
                    'message' => 'Thêm mã giảm giá phẩm thành công'
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
            // Lấy dữ liệu từ form nếu có thay đổi (nhấn vào nút - submit)
            $idMGG = $_POST['discount_id'];
            $phantram = $_POST['discount_percent'];
            $ngaybatdau = $_POST['discount_begin'];
            $ngayketthuc = $_POST['discount_end'];
            $trangthai = isset($_POST['status']) ? 1 : 0;
        
            // Kiểm tra trùng mã giảm giá trước khi cập nhật
            if (Discount::isExist($idMGG, $phantram, $ngaybatdau, $ngayketthuc)) {
                echo json_encode(array(
                    'btn' => 'update',
                    'success' => false,
                    'message' => 'Mã giảm giá đã tồn tại'
                ));
                exit;
            }
            
            $this->discount = new Discount($phantram, $ngaybatdau, $ngayketthuc, $trangthai, $idMGG);
            $req = $this->discount->update();
            
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