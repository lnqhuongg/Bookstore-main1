<?php
    if(isset($_GET['page']) && ($_GET['page'] !== "")){ 
        include '../inc/admin/header.php';
        switch(trim($_GET['page'])){
            // Trang Tài khoản
            case 'account':
                include '../controllers/admin/AccountController.php';
                break;
            // Trang Tác giả
            case 'author':
                include '../controllers/admin/AuthorController.php';
                break;
            // Trang Sách 
            case 'book':
                include '../controllers/admin/BookController.php';
                break;
            // Trang Văn phòng phẩm
            case 'stationery':
                include '../controllers/admin/StationeryController.php';
                break;
            // Trang Nhà cung cấp
            case 'supplier':
                include '../controllers/admin/SupplierController.php';
                break;
            // Trang Mã giảm giá
            case 'discount':
                include '../controllers/admin/DiscountController.php';
                break;
            // Trang Đơn hàng
            case 'order':
                include '../controllers/admin/OrderController.php';
                break;
            // Trang Nhóm quyền
            case 'role':
                include '../controllers/admin/RoleController.php';
                break;
            // Trang Thể loại (Sách)
            case 'catalog':
                include '../controllers/admin/CatalogController.php';
                break;
            // Trang Loại văn phòng phẩm
            case 'stationeryType':
                include '../controllers/admin/StationeryTypeController.php';
                break;
            // Trang Phiếu nhập sản phẩm 
            case 'importProduct':
                include '../controllers/admin/ImportProductController.php';
                break;
            // Trang Banner 
            case 'banner':
                include '../controllers/admin/BannerController.php';
                break;
            // Trang Thông tin cá nhân quản trị 
            case 'profile':
                include '../controllers/admin/ProfileController.php';
                break;

            // Thống kê - Chưa làm hiển thị 
            // case 'statistical':
            //     include '../controllers/admin/ImportProductController.php';
            //     break;
            
            // Không có trang đăng nhập riêng cho quản trị  
            default:
                header('Location: index.php?page=account');
                break;
        }
    }

?>