// reload lại form 
document.getElementById('staticBackdropEditAccount').addEventListener('hidden.bs.modal', function () {
    document.getElementById('accountForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
console.log("Đã nhận js:");


$(document).ready(function () { 

    const modalTitle = document.getElementById('accountModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm tài khoản 
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Tài khoản mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('accountForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
    });

    // Modal Sửa thông tin tài khoản 
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Tài khoản';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        // let product_id = $(this).closest('tr').find('.product_id').text();
        console.log('hello');
    });
});