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

        function index(){
            // $authors = Banner::getAll();
            $this->render('Banner', null);
        }

        function checkAction($action){
            switch ($action){
                case 'index':
                    $this->index();
                    break;
            }
        }

    }

    $bannerController = new BannerController();
    $action = 'index';
    // if(isset($_GET['page']) && $_GET['page'] == 'searchAccount') $action = 'search';
    // else if(!isset($_POST['action'])) $action = 'index';
    // else $action = $_POST['action'];
    $bannerController->checkAction($action);
?>