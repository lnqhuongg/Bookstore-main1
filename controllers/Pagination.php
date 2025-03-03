<?php
class Pagination {
    public $folder;
    public $num_per_page;
    public $curr_page;
    public $total_records;
    public $pageTitle;
    public $total_pages;
    public $start; // dữ liệu sẽ được lấy từ start trở đi
    
    public function __construct($folder, $pageTitle, $total_records) {
        // folder 
        $this->folder = $folder;

        // 
        $this->pageTitle = $pageTitle;

        // 
        $this->total_records = count($total_records);

        $this->start = ($this->curr_page-1)*$this->num_per_page;
        
        // số trang 
        if($this->folder == 'admin') $this->num_per_page = NUM_PER_PAGE_ADMIN;
        else $this->num_per_page = NUM_PER_PAGE_CLIENT;

        // lấy trang hiện tại
        $this->curr_page = $this->getCurrPage();

        // lấy số tất cả các trang 
        $this->total_pages = $this->getTotalPages();
    }

    // Lấy vị trí bắt đầu để truy vấn DB - $start
    public function getStart() {
        return ($this->curr_page - 1) * $this->num_per_page;
    }

    // Tính tổng số trang - $total_pages
    public function getTotalPages() {
        return ceil($this->total_records/$this->num_per_page);
    }

    // Lấy trang thiện tại - $curr_page
    function getCurrPage(){
        return isset($_GET['index']) ? $_GET['index'] : 1;
    }

    function paging(){
        $view = '<li class="page-item me-2">';
        if($this->curr_page>1)
            $view.= '
                <a class="page-link rounded-circle" href="index.php?page=
                '.$this->pageTitle.'&index='.($this->curr_page-1).'
                aria-label="Previous">
                  <span aria-hidden="true"><i class="pre fa-solid fa-angle-left"></i></span>
                </a></li>';
        else 
            $view.='
                <a class="page-link rounded-circle" href="index.php?page=
                '.$this->pageTitle.'
                &index=1" aria-label="Previous">
                <span aria-hidden="true"><i class="pre fa-solid fa-angle-left"></i></span>
                </a></li>';
        for($i=1; $i<=$this->total_pages; $i++){
            $view.='<li class="page-item me-2 ">';
            if($this->curr_page==$i)
                $view.='
                    <a class="page-link rounded-circle active" href="index.php?page=
                    '.$this->pageTitle.'
                    &index='.$i.'">'.$i.'</a></li>';
            else 
                $view.= '
                    <a class="page-link rounded-circle" href="index.php?page='
                    .$this->pageTitle.'
                    &index='.$i.'">'.$i.'</a></li>';
        }
        $view.='<li class="page-item me-2">';
        if(($this->curr_page) < ($this->total_pages))
            $view.= '
                <a class="page-link rounded-circle" href="index.php?page='
                .$this->pageTitle.'
                &index='
                .($this->curr_page+1).'
                aria-label="Next">
                  <span aria-hidden="true"><i class="next fa-solid fa-angle-right"></i></span>
                </a></li>';
        else 
            $view.= '
                <a class="page-link rounded-circle" href="index.php?page='
                .$this->pageTitle.'
                &index='
                .$this->total_pages.'
                "aria-label="Next">
                  <span aria-hidden="true"><i class="next fa-solid fa-angle-right"></i></span>
                </a></li>'; 
        return $view;
    }
}
?>
