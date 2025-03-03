<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Order.php';

    class OrderController extends BaseController{
        private $order;

        function __construct()
        {
            $this->folder = 'admin';
            $this->order= new Order();
        }

        function index(){
            // $accounts = Account::getAll();
            // $roles = Role::getAll();
            // $result = [
            //     'paging' => $accounts,
            //     'roles' => $roles
            // ];
            $this->render('Order', null);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $orderController = new OrderController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $orderController->checkAction($action);
?>