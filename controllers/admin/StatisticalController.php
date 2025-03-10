<?php
    include dirname(__FILE__).'/../BaseController.php';
    include dirname(__FILE__).'/../../models/Statistical.php';

    class StatisticalController extends BaseController{
        function __construct()
        {
            $this->folder = 'admin';
        }

        function index(){
            $this->render('Statistical', null, false);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $statisticalController = new StatisticalController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    if(!isset($_POST['action'])) $action = 'index';
    else $action = $_POST['action'];
    $statisticalController->checkAction($action);
?>