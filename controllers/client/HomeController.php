<?php
    include dirname(__FILE__). '/../../models/Book.php';
    include dirname(__FILE__). '/../../models/Author.php';
    include dirname(__FILE__). '/../../models/Catalog.php';
    include dirname(__FILE__). '/../../models/Stationery.php';
    include dirname(__FILE__). '/../../models/StationeryType.php';
    include dirname(__FILE__). '/../../models/Banner.php';
    include dirname(__FILE__). '/../BaseController.php';

    class HomeController extends BaseController {
        
        function __construct(){
            $this->folder = 'client';
        }

        function checkAction($action){
            switch($action) {
                case 'home':
                default:
                    $this->index();
                    break;
            }
        }

        function index()
        {
            // $product = Product::getAll();
            // $category = Catalog::getAllActive();
            $newProducts = Product::newProducts();
            $bookBestSellers = Book::getBestSellers();
            $stationeryBestSellers = Stationery::getBestSellers();
            $banners = Banner::getAllActive();
            $result = [
                'bookBestSellers' => $bookBestSellers,
                'stationeryBestSellers' => $stationeryBestSellers,
                'banners' => $banners
            ];

            $this->render('Home', $result, false);
        }
    }

    $homeController = new HomeController();
    if (!isset($_GET['page'])) $action = 'home';
    else $action = $_GET['page'];
    $homeController->checkAction($action);
?>