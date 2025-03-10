<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Banner.php';

    class BannerController extends BaseController{
        private $banner;

        function __construct()
        {
            $this->folder = 'admin';
            $this->banner= new Banner();
        }

        // Load lên bảng
        function index(){
            $banners = Banner::getAll();
            $result = [
                'paging' => $banners
            ];
            $this->render('Banner', $result, true);
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

        function uploadImage($file, $upload_dir) {
            // Lấy tên file gốc
            $img_name = basename($file["name"]);
        
            // Đường dẫn đầy đủ
            $img_path = $upload_dir . $img_name;
        
            // Di chuyển file
            if (move_uploaded_file($file["tmp_name"], $img_path)) {
                return $img_name; // Trả về tên file để lưu vào DB
            } else {
                return null; // Nếu lỗi, trả về null
            }
        }
        
        
        // addadd
        function add(){
            // Kiểm tra xem file có được tải lên không
            if (!isset($_FILES['uploadImage1']) || $_FILES['uploadImage1']['error'] != 0) {
                echo json_encode(array('btn' => 'add', 'success' => false, 'error' => 'File upload error', 'file' => $_FILES['uploadImage1']));
                exit;
            }
        
            // Thư mục upload
            $upload_dir = '../../assets/uploads/';
        
            // Gọi hàm upload ảnh
            $imageName = $this->uploadImage($_FILES['uploadImage1'], $upload_dir);
        
            // Tạo đối tượng Banner với mô tả và ảnh
            $this->banner = new Banner($_POST['description'], $imageName);
        
            // Thêm vào database
            $req = $this->banner->add();
        
            if($req) {
                echo json_encode(array('btn'=>'add','success'=>true, 'image' => $imageName));
            } else {
                echo json_encode(array('btn'=>'add','success'=>false));
            }
            exit;
        }

        // Show dữ liệu lên modal
        function show_data(){
            $banner = Banner::findByID($_POST['banner_id']);
            if ($banner == null) {
                echo json_encode(['success' => false, 'message' => 'Không tìm thấy dữ liệu']);
            } else {
                echo json_encode(['success' => true, 'data' => $banner->toArray()]);
            }
            exit;
        }

        // Update
        function update(){
            // Lấy dữ liệu từ form nếu có thay đổi
            $idBN = $_POST['banner_id'];
            $mota = $_POST['description'];
            $trangthai = isset($_POST['status']) ? 1 : 0;
        
            // Tìm banner trong DB
            $banner = Banner::findByID($idBN);
            if ($banner == null) {
                echo json_encode(['btn' => 'update', 'success' => false, 'message' => 'Không tìm thấy banner']);
                exit;
            }
        
            // Cập nhật thông tin mới (KHÔNG CẬP NHẬT HÌNH ẢNH)
            $banner->setMota($mota);
            $banner->setTrangthai($trangthai);
        
            // Thực hiện cập nhật vào database
            $req = $banner->update();
        
            if ($req) {
                echo json_encode(['btn' => 'update', 'success' => true]);
            } else {
                echo json_encode(['btn' => 'update', 'success' => false, 'message' => 'Lỗi cập nhật dữ liệu']);
            }
            exit;
        }
        
        
        

    }

    $bannerController = new BannerController();
    // $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $bannerController->checkAction($action);
?>