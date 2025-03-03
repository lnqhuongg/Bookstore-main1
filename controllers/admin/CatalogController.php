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
            // $accounts = Account::getAll();
            // $roles = Role::getAll();
            // $result = [
            //     'paging' => $accounts,
            //     'roles' => $roles
            // ];
            $this->render('Catalog', null);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $catalogController = new CatalogController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $catalogController->checkAction($action);
?>