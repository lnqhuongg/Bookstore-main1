
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
        let product_id = $(this).closest('tr').find('.product_id').text();
        console.log('hello');
    });
});