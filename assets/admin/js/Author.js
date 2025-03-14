// reload lại form 
document.getElementById('staticBackdropEditAuthor').addEventListener('hidden.bs.modal', function () {
    document.getElementById('authorForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
console.log("Đã nhận js:");

$(document).ready(function () { 

    const modalTitle = document.getElementById('authorModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Tác giả 
    $('.open_add_form').on('click', function () {
        console.log('Đã mở open_add_form');
        modalTitle.textContent = 'Thêm Tác giả mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('authorForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
    });

    // Modal Sửa thông tin Tác giả
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Tác giả';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        var author_id = $(this).closest('tr').find('.author_id').text();
        console.log(author_id);
        console.log('Đã mở open_edit_form');

        $.ajax({
            url: '../controllers/admin/AuthorController.php', 
            type: 'POST',
            data: {
                'action': 'show_data',
                'author_id': author_id,
            },
            success: function(response){
                console.log(response);
                
                try {
                    const obj = JSON.parse(response);
                    console.log(obj);
                    
                    $('#author_id').val(obj.idTG);
                    $('#author_name').val(obj.tenTG);
                    $('#author_email').val(obj.email);
                    $('#status').val(obj.trangthai);
                    
                    if(parseInt(obj.trangthai)){
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

    

    // Validate dữ liệu nhập dô
    function AuthorValidateError(){
        // Xóa text validate 
        $('.text-message.author-name-msg').text('');
        $('.text-message.author-email-msg').text('');

         // Validate form
         var ten = $('#author_name').val().trim();
         var email = $('#author_email').val().trim();

         var error = false;

         const regexEmail =
             /^(?=.{1,255}$)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
     
         if (ten === '') {
             $('.text-message.author-name-msg').text('Tên tác giả không được để trống');
             error = true;
         }
         else if (email === '') {
             $('.text-message.author-email-msg').text('Email không được để trống');
             error = true;
         }
         else if (!regexEmail.test(email)) {
             $('.text-message.author-email-msg').text('Vui lòng nhập đúng định dạng của email (Ví dụ: abc@example.com)');
             error = true;
         }
         return error;
    }

    $('#authorForm').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();
        
        if(!AuthorValidateError()){
            // Serialize form data
            var formData = new FormData( $('#authorForm')[0]);

            // AJAX request to handle form submission
            $.ajax({
                url: '../controllers/admin/AuthorController.php', // URL to handle form submission
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    const obj = JSON.parse(response);
                    console.log(obj);
                    console.log('hihi');
                    if(obj.success){
                        if(obj.btn == 'add') {
                            // console.log("Đang gọi toast()...");
                            // toast({
                            //     title: 'Thành công',
                            //     message: 'Thêm tác giả thành công',
                            //     type: 'success',
                            //     duration: 3000
                            // });
                            alert('Thêm thành công');
                        } else {
                            // console.log("Đang gọi toast()...");
                            // toast({
                            //     title: 'Thành công',
                            //     message: 'Cập nhật tác giả thành công',
                            //     type: 'success',
                            //     duration: 3000
                            // });
                            alert('Cập nhật thành công');
                        }
                    }
                    else {
                        // console.log("Đang gọi toast()...");
                        // toast({
                        //     title: 'Lỗi',
                        //     message: 'Email đã tồn tại',
                        //     type: 'error',
                        //     duration: 3000
                        // });
                        alert('email đã tồn tại');
                    }
                },
            });
        }
    });
    // Xử lý nhập từ khóa tìm kiếm : mã, tên vpp
    $(document).ready(function () {
        $("#searchInput").on("input", function () {
            let keyword = $(this).val().trim(); // Lấy giá trị nhập vào
            
            if (keyword.length === 0) {
                loadDefaultData(); // Nếu ô tìm kiếm trống, hiển thị danh sách mặc định
                return;
            }
    
            $.ajax({
                url: "../controllers/admin/AuthorController.php",
                type: "POST",
                data: { action: "search", keyword: keyword },
                success: function (response) {
                    let data = JSON.parse(response);
                    if (data.success) {
                        $(".table-group-divider").html(data.html);
                    } else {
                        $(".table-group-divider").html("<tr><td colspan='4' class='text-center'>Không tìm thấy kết quả</td></tr>");
                    }
                },
            });
        });
    
        // Hàm tải lại dữ liệu mặc định khi ô tìm kiếm trống
        function loadDefaultData() {
            $.ajax({
                url: "../controllers/admin/AuthorController.php",
                type: "POST",
                data: { action: "load_default" },
                success: function (response) {
                    let data = JSON.parse(response);
                    $(".table-group-divider").html(data.html);
                },
            });
        }
    });
});