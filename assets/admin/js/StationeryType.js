// reload lại form 
document.getElementById('staticBackdropEditTypeStationery').addEventListener('hidden.bs.modal', function () {
    document.getElementById('stationeryTypeForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
console.log("Đã nhận js:");

$(document).ready(function () { 

    const modalTitle = document.getElementById('stationeryTypeModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Loại văn phòng phẩm 
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Loại văn phòng phẩm mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('stationeryTypeForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
    });

    // Modal Sửa thông tin Loại văn phòng phẩm 
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Loại văn phòng phẩm';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        // let product_id = $(this).closest('tr').find('.product_id').text();
        console.log('hello');
    });
    function StationeryTypeValidateError() {
        // Xóa thông báo lỗi cũ
        $('.text-message.lvpp-name-msg').text('');
    
        // Lấy giá trị input
        var tenLoaiVpp = $('#lvpp_name').val().trim();
    
        // Regex kiểm tra chỉ chứa chữ cái và khoảng trắng
        var regexTenLoaiVpp = /^[a-zA-ZÀ-Ỹà-ỹ\s]+$/;
    
        var error = false;
    
        // Kiểm tra tên loại văn phòng phẩm
        if (tenLoaiVpp === '') {
            $('.text-message.lvpp-name-msg').text('Tên thể loại không được để trống');
            error = true;
        } else if (!regexTenLoaiVpp.test(tenLoaiVpp)) {
            $('.text-message.lvpp-name-msg').text('Tên thể loại chỉ được chứa chữ cái, không có số hoặc ký tự đặc biệt');
            error = true;
            
        }
        console.log(error);
        return error;

        
    }

    $(document).on('submit', '#stationeryTypeForm', function(event) {
        // Prevent the default form submission
        console.log("hahahaha");
        event.preventDefault();
        
        if(!StationeryTypeValidateError()){
            // Serialize form data
            var formData = new FormData( $('#stationeryTypeForm')[0]);

            $.ajax({
                url: '../controllers/admin/StationeryTypeController.php',
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
                        } else {
                            // console.log("Đang gọi toast()...");
                            toast({
                                title: 'Thành công',
                                message: 'Cập nhật loại văn phòng phẩm thành công',
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
});




