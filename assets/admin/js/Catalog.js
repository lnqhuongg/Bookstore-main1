// reload lại form 
document.getElementById('staticBackdropEditCatalog').addEventListener('hidden.bs.modal', function () {
    document.getElementById('catalogForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
console.log("Đã nhận js:");

$(document).ready(function () { 

    const modalTitle = document.getElementById('catalogModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Danh mục sách 
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Danh mục sách mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('catalogForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
    });

    // Modal Sửa thông tin Danh mục sách 
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Danh mục sách';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        let catalog_id = $(this).closest('tr').find('.catalog_id').text();
        console.log('hello');

        $.ajax({
            url: '../controllers/admin/CatalogController.php', 
            type: 'POST',
            data: {
                'action': 'show_data',
                'catalog_id': catalog_id,
            },
            success: function(response){
                console.log(response);
                
                try {
                    const obj = JSON.parse(response);
                    console.log(obj);
                    
                    $('#catalog_id').val(obj.data.idTL);
                    $('#catalog_name').val(obj.data.tenTL);
                    
                    
                    if(parseInt(obj.data.trangthai)){
                        $('#status').prop('checked', true);
                        $('#status-label').text('Đang hoạt động');
                    } else {
                        $('#status').prop('checked', false);
                        $('#status-label').text('Bị khóa');
                    }
                } catch (error) {
                    console.error("Lỗi khi parse JSON:", error, "Response:", response);
                }
            },
        });
    });
    
    
});

function CatalogValidateError() {
    // Xóa thông báo lỗi cũ
    $('.text-message.catalog-name-msg').text('');

    let catalogName = $('#catalog_name').val().trim();
    let error = false;

    // Regex kiểm tra tên (chỉ chứa chữ cái và khoảng trắng)
    const regexTenTL = /^[A-Za-zÀ-Ỹà-ỹ\s]+$/;

    // Kiểm tra tên danh mục
    if (catalogName === '') {
        $('.text-message.catalog-name-msg').text('Tên danh mục không được để trống');
        error = true;
    } else if (!regexTenTL.test(catalogName)) {
        $('.text-message.catalog-name-msg').text('Tên danh mục chỉ được chứa chữ cái và khoảng trắng');
        error = true;
    }

    return error;
}

$(document).on('submit', '#catalogForm', function(event) {
    // Prevent the default form submission
    console.log("hahahaha");
    event.preventDefault();
    
    if(!CatalogValidateError()){
        // Serialize form data
        var formData = new FormData( $('#catalogForm')[0]);

        $.ajax({
            url: '../controllers/admin/CatalogController.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                const obj = JSON.parse(response);
                console.log(obj);
                if(obj.success){
                    if(obj.btn == 'add') {
                        // console.log("Đang gọi toast()...");
                        toast({
                            title: 'Thành công',
                            message: obj.message,
                            type: 'success',
                            duration: 3000
                        });
                        // alert('Thêm thành công');
                    }else if (obj.btn == 'update') {
                        toast({
                            title: 'Thành công',
                            message: obj.message, 
                            type: 'success',
                            duration: 3000
                        });
                    }
                     else {
                        // console.log("Đang gọi toast()...");
                        toast({
                            title: 'Thành công',
                            message: 'Cập nhật giảm giá thành công',
                            type: 'success',
                            duration: 3000
                        });
                        // alert('Cập nhật thành công');
                    }
                }else {
                    toast({
                        title: 'Thất bại',
                        message: obj.message,
                        type: 'error',
                        duration: 3000
                    });
                }
            },
        });
    }
});


