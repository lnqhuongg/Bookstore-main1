// reload lại form 
document.getElementById('staticBackdropEditBanner').addEventListener('hidden.bs.modal', function () {
    document.getElementById('bannerForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
console.log("Đã nhận js:");


$(document).ready(function () { 

    const modalTitle = document.getElementById('bannerModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Banner 
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Banner mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        // document.getElementById('bannerForm').querySelectorAll('.edit').forEach(element => {
        //     console.log("Ẩn phần tử:", element);
        //     element.style.display = 'none';
        // });
    });

    // Modal Sửa thông tin Banner 
    $('.open_edit_form').on('click', function () {
        modalTitle.textContent = 'Chỉnh sửa thông tin Banner';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        document.getElementById('bannerForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.disabled = true;
        });

        // Xóa class của label
        let labelElement = document.querySelector('label[for="uploadImage1"]');
        if (labelElement) {
            labelElement.classList.remove('btn', 'btn-outline-success');
            console.log("Đã xóa class của label");
        }
        // let product_id = $(this).closest('tr').find('.product_id').text();
        console.log('hello');
    });
});