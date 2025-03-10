<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Book.php';

    class BookController extends BaseController{
        private $book;

        function __construct()
        {
            $this->folder = 'admin';
            $this->book= new Book();
        }

        function index(){
            $book = Book::getAll();
            $result = [
                'paging' => $book, 
            ];
            $this->render('Book', $result, true);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            case 'show_data':
                $this->show_data();
                break;
            }
        }

        function show_data(){
            $book = Book::findByID($_POST['book_id']);
            echo json_encode($book==null ? null: $book->toArray());
            exit;
        }

        

    }

    $bookController = new BookController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $bookController->checkAction($action);
?>