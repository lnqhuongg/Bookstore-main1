<?php   
    include dirname(__FILE__).'/../config/config.php';
    include dirname(__FILE__).'/../lib/Database.php';
    require dirname(__FILE__).'/Pagination.php';
    
    class BaseController {
        /** 
         * Description: 
         * - path name: foldername.fileName
         * - lấy từ sau folder view 
         * - 
        */

        protected $folder; // Định nghĩa thư mục chứa các view

        function render($file, $result = array(), $paging = false) {
            $view_file = dirname(__FILE__).'/../views/'.$this->folder.'/'.$file.'.php';
            
            if (is_file($view_file)) {
                if($paging) {
                    $paging = new Pagination($this->folder, $file, $result['paging']);
                    $pagingButton = $paging->paging($this->folder);
                }
                require($view_file);
            } else {
                echo "Trang không tồn tại!";
            }
        }
    }
?>