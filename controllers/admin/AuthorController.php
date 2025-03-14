<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Author.php';

    class AuthorController extends BaseController{
        private $author;

        function __construct()
        {
            $this->folder = 'admin'; 
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
                case 'search':
                    $this->search();
                    break;
                case 'load_default':
                    $this->loadDefaultData();
                    break;
            }
        }

        function add(){
            $this->author = new Author($_POST['author_name'], $_POST['author_email'], 1);
            
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

            $this->author = new Author($tenTG, $email, $trangthai, $idTG);
            $req = $this->author->update();

            $this->author = new Author($tenTG, $email, $trangthai, $idTG);
            $req = $this->author->update(); 
            
            if($req) echo json_encode(array('btn'=>'update','success'=>true));
            else echo json_encode(array('btn'=>'update','success'=>false));
            exit;
        }
        // Tìm kiếm -> nhập keyword -> hiển thị lên html
        function search() {
            $keyword = $_POST['keyword'];
            $authors = Author::search($keyword);
        
            if ($authors) {
                $html = "";
                foreach ($authors as $author) {
                    $html .= "<tr>
                        <td class='align-middle text-center'>{$author->getIdTG()}</td>
                        <td class='align-middle text-center'>{$author->getTenTG()}</td>
                        <td class='align-middle text-center'>{$author->getEmail()}</td>
                        <td class='align-middle text-center'>
                            ".($author->getTrangthai() ? "<span class='text-success fw-bold'>Đang hoạt động</span>" : "<span class='text-danger fw-bold'>Bị khóa</span>")."
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
            $authors = Author::getAll();
            $html = "";
            foreach ($authors as $author) {
                $html .= "<tr>
                    <td class='align-middle text-center'>{$author->getIdTG()}</td>
                        <td class='align-middle text-center'>{$author->getTenTG()}</td>
                        <td class='align-middle text-center'>{$author->getEmail()}</td>
                        <td class='align-middle text-center'>
                            ".($author->getTrangthai() ? "<span class='text-success fw-bold'>Đang hoạt động</span>" : "<span class='text-danger fw-bold'>Bị khóa</span>")."
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

    }

    $authorController = new AuthorController();
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $authorController->checkAction($action);
?>