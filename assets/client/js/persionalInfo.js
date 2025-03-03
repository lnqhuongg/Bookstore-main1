const avatarInput = document.getElementById('avatarInput');
const avatarPreview = document.getElementById('avatarPreview');

avatarInput.addEventListener('change', function(event) {
    const file = event.target.files[0]; // Lấy file đầu tiên trong danh sách

    // Kiểm tra nếu file tồn tại và là loại file ảnh
    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();

        // File được chọn
        reader.onload = function(e) {
            avatarPreview.src = e.target.result; // Gán ảnh được đọc vào thuộc tính src của thẻ img
        };

        reader.readAsDataURL(file); //Đọc file url
    } else {
        alert('Vui lòng chọn một file ảnh hợp lệ!');
    }
});
