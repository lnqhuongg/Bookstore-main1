<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/ImportProduct.php';

    class ImportProductController extends BaseController{
        private $grn;

        function __construct()
        {
            $this->folder = 'admin';
            $this->grn= new ImportProdcut();
        }

        function index(){
            // $accounts = Account::getAll();
            // $roles = Role::getAll();
            // $result = [
            //     'paging' => $accounts,
            //     'roles' => $roles
            // ];
            $this->render('ImportProduct', null);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $importProductController = new ImportProductController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $importProductController->checkAction($action);
?>