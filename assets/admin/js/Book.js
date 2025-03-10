
// Hiển thị modal chọn tác giả
document.getElementById('openAuthorModal').addEventListener('click', function (e) {
  const AuthorModal = new bootstrap.Modal(document.getElementById('AuthorModal'));
  AuthorModal.show(); 
});


// reload lại form 
document.getElementById('staticBackdropEdit').addEventListener('hidden.bs.modal', function () {
    document.getElementById('productForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
  
$(document).ready(function () {

    const modalTitle = document.getElementById('productModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm sách
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Sách mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('productForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display =     'none';
        });
    });


    // Modal Chỉnh sửa thông tin sách 
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Sách';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        let book_id = $(this).closest('tr').find('.book_id').text();
        console.log('hello');
        console.log(book_id);

        $.ajax({
            url: '../controllers/admin/BookController.php', 
            type: 'POST',
            data: {
                'action': 'show_data',
                'book_id': book_id,
            },
            success: function(response){
                console.log(response);
                
                try {
                    const obj = JSON.parse(response);
                    console.log(obj);
                    
                    $('#book_id').val(obj.idSP);
                    $('#book_name').val(obj.tenSP);
                    $('#book_nxb').val(obj.nxb);
                    $('#book_ncc').val(obj.idNCC);
                    $('#book_idTL').val(obj.idTL);
                    $('#book_giabia').val(obj.giabia);
                    $('#book_trongluong').val(obj.trongluong);
                    $('#book_idMGG').val(obj.idMGG);
                    $('#book_mota').val(obj.mota);

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
});