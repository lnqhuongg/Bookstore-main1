// reload lại form 
document.getElementById('staticBackdropEditSupplier').addEventListener('hidden.bs.modal', function () {
    document.getElementById('supplierForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});

console.log("Đã nhận js:");

$(document).ready(function () { 

    const modalTitle = document.getElementById('supplierModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Nhà cung cấp  
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Nhà cung cấp mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('supplierForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
    });

    // Modal Sửa thông tin Nhà cung cấp 
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Nhà cung cấp';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        // let product_id = $(this).closest('tr').find('.product_id').text();
        console.log('hello');
    });
});