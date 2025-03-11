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

// Hiển thị ảnh khi load lên khung
document.addEventListener("DOMContentLoaded", function () {
    const uploadImageInput = document.getElementById("uploadImage1");
    const previewImage = document.getElementById("previewImage1");
    const placeholderText = document.getElementById("placeholderText1");

    if (uploadImageInput) {
        uploadImageInput.addEventListener("change", function (event) {
            const file = event.target.files[0];

            if (file) {
                const imageUrl = URL.createObjectURL(file); // Lấy đường dẫn tạm của ảnh
                previewImage.src = imageUrl;
                previewImage.style.display = "block";
                placeholderText.style.display = "none";

                console.log("Link ảnh:", imageUrl); // In đường dẫn ảnh ra console
            } else {
                previewImage.src = "";
                previewImage.style.display = "none";
                placeholderText.style.display = "block";
            }
        });
    }
});



$(document).ready(function () { 

    const modalTitle = document.getElementById('bannerModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Banner 
    $('.open_add_form').on('click', function () {
        modalTitle.textContent = 'Thêm Banner mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('bannerForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
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

        var banner_id = $(this).closest('tr').find('.banner_id').text();
        console.log(banner_id);
        console.log('Đã mở open_edit_form');

        $.ajax({
            url: '../controllers/admin/BannerController.php', 
            type: 'POST',
            data: {
                'action': 'show_data',
                'banner_id': banner_id,
            },
            success: function(response){
                console.log(response);
                
                try {
                    const obj = JSON.parse(response);
                    console.log(obj);
                    
                    $('#banner_id').val(obj.data.idBN);
                    $('#description').val(obj.data.mota);
                    // Gán giá trị cho input date

                    $('#status').val(obj.data.trangthai);
                    
                    if(parseInt(obj.data.trangthai)){
                        $('#status').prop('checked', true);
                        $('#status-label').text('Đang hoạt động');
                    } else {
                        $('#status').prop('checked', false);
                        $('#status-label').text('Bị khóa');
                    }

                    // Cập nhật ảnh
                    if (obj.data.hinhanh) {
                        let imagePath = "/DoAnWeb2/Bookstore-main1/assets/uploads/" + obj.data.hinhanh;
                        $('#previewImage1').attr('src', imagePath).show();
                        $('#placeholderText1').hide();
                    } else {
                        $('#previewImage1').attr('src', '').hide();
                        $('#placeholderText1').show();
                    }
                } catch (error) {
                    console.error("Lỗi khi parse JSON:", error, "Response:", response);
                }
            },
        });


    
});

function BannerValidateError() {
    // Xóa thông báo lỗi cũ
    $('.text-message.description-msg').text('');

    // Lấy giá trị input
    var description = $('#description').val().trim();
    var image = $('#uploadImage1').val();
    
    var error = false;

    // Kiểm tra mô tả
    if (description === '') {
        $('.text-message.description-msg').text('Mô tả không được để trống');
        error = true;
    } else if (description.length > 500) {
        $('.text-message.description-msg').text('Mô tả không được vượt quá 500 ký tự');
        error = true;
    }

    // Kiểm tra hình ảnh
    if (image === '' && $('#previewImage1').attr('src') === 'https://via.placeholder.com/150') {
        toast({
            title: 'Error',
            message: 'Vui lòng tải ảnh lên',
            type: 'warning',
            duration: 3000
        });
        // aler
        error = true;
    }

    return error;
}

$(document).on('submit', '#bannerForm', function(event) {
    // Prevent the default form submission
    console.log("hahahaha");
    event.preventDefault();
    
    if(!BannerValidateError()){
        // Serialize form data
        var formData = new FormData( $('#bannerForm')[0]);

        $.ajax({
            url: '../controllers/admin/BannerController.php',
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
                            message: 'Cập nhật giảm giá thành công',
                            type: 'success',
                            duration: 3000
                        });
                        // alert('Cập nhật thành công');
                    }
                }else {
                    toast({
                        title: 'Thất bại',
                        message:obj.message,
                        type: 'error',
                        duration: 3000
                    });
                }
            },
        });
    }
});
});