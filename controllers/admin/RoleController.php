<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Role.php';

    class RoleController extends BaseController{
        private $role;

        function __construct()
        {
            $this->folder = 'admin';
            $this->role= new Role();
        }

        function index(){
            // $accounts = Account::getAll();
            // $roles = Role::getAll();
            // $result = [
            //     'paging' => $accounts,
            //     'roles' => $roles
            // ];
            $this->render('Role', null);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $roleController = new RoleController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $roleController->checkAction($action);
?>