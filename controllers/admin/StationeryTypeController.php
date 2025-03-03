<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/StationeryType.php';

    class StationeryTypeController extends BaseController{
        private $type;

        function __construct()
        {
            $this->folder = 'admin';
            $this->type= new StationeryType();
        }

        function index(){
            // $accounts = Account::getAll();
            // $roles = Role::getAll();
            // $result = [
            //     'paging' => $accounts,
            //     'roles' => $roles
            // ];
            $this->render('StationeryType', null);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $stationeryTypeController = new StationeryTypeController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $stationeryTypeController->checkAction($action);
?>