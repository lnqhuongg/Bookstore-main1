<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Author.php';

    class AuthorController extends BaseController{
        private $author;

        function __construct()
        {
            $this->folder = 'admin';
            $this->author= new Author();
        }

        function index(){
            $authors = Author::getAll();
            $result = [
                'paging' => $authors
            ];
            $this->render('Author', $result, true);
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
            $this->author->nhap($_POST['author_name'], $_POST['author_email'], 1);
            
            // khởi tạo biến request lưu kết quả trả về từ phương thức add() ở class Author 
            $req = $this->author->add();

            if($req) {
                echo json_encode(array('btn'=>'add','success'=>true));
            } 
            else {
                echo json_encode(array('btn'=>'add','success'=>false));
            }
            exit;
        }

        // đổ dữ liệu vô form update (cập nhật thông tin tác giả)
        function show_data(){
            $author = Author::findByID($_POST['author_id']);
            echo json_encode($author==null ? null: $author->toArray());
            exit;
        }

        function update(){
            // lấy dữ liệu từ form nếu có thay đổi (nhấn vào nút - submit)
            $idTG = $_POST['author_id'];
            $tenTG = $_POST['author_name'];
            $email = $_POST['author_email'];
            $trangthai = isset($_POST['status']) ? 1 : 0;

            $this->author->nhap($tenTG, $email, $trangthai, $idTG);
            $req = $this->author->update();
            
            if($req) echo json_encode(array('btn'=>'update','success'=>true));
            else echo json_encode(array('btn'=>'update','success'=>false));
            exit;
        }

    }

    $authorController = new AuthorController();
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $authorController->checkAction($action);
?>