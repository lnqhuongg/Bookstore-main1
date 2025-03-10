let isCheck=false;
// reload lại form 
document.getElementById('staticBackdropEditDiscount').addEventListener('hidden.bs.modal', function () {
    document.getElementById('discountForm').reset();
    let textMessage = document.querySelectorAll('.text-message');
    textMessage.forEach(element => {
        element.textContent = '';
    });
    location.reload();
});
console.log("Đã nhận js:");

$(document).ready(function () { 

    const modalTitle = document.getElementById('discountModalLabel');
    const modalSaveBtn = document.getElementById('saveModalBtn');
    let submit_btn = document.getElementById('submit_btn');

    // Modal Thêm Mã giảm giá 
    $('.open_add_form').on('click', function () {
        isCheck=false;
        modalTitle.textContent = 'Thêm Mã giảm giá mới';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_add');
        document.getElementById('discountForm').querySelectorAll('.edit').forEach(element => {
            console.log("Ẩn phần tử:", element);
            element.style.display = 'none';
        });
    });

// Hàm định dạng ngày về YYYY-MM-DD (chuẩn cho input type="date")
function formatDateForInput(dateString) {
    if (!dateString) return ''; // Nếu không có dữ liệu thì trả về chuỗi rỗng
    
    let date = new Date(dateString);
    let year = date.getFullYear();
    let month = (date.getMonth() + 1).toString().padStart(2, '0'); // Thêm số 0 nếu cần
    let day = date.getDate().toString().padStart(2, '0'); 

        return `${year}-${month}-${day}`; // Trả về định dạng YYYY-MM-DD
    }
    
    // Modal Sửa thông tin Mã giảm giá 
    $('.open_edit_form').on('click', function () {
        isCheck=true;
        modalTitle.textContent = 'Chỉnh sửa thông tin Mã giảm giá';
        submit_btn.setAttribute('name', 'action');
        submit_btn.setAttribute('value', 'submit_btn_update');
        var discount_id = $(this).closest('tr').find('.discount_id').text();
        console.log(discount_id);
        console.log('Đã mở open_edit_form');

        $.ajax({
            url: '../controllers/admin/DiscountController.php', 
            type: 'POST',
            data: {
                'action': 'show_data',
                'discount_id': discount_id,
            },
            success: function(response){
                console.log(response);
                
                try {
                    const obj = JSON.parse(response);
                    console.log(obj);
                    
                    $('#discount_id').val(obj.data.idMGG);
                    $('#discount_percent').val(obj.data.phantram);
                    // Gán giá trị cho input date
                    $('#discount_calendarInput_start').val(formatDateForInput(obj.data.ngaybatdau));
                    $('#discount_calendarInput_end').val(formatDateForInput(obj.data.ngayketthuc));
                    $('#status').val(obj.data.trangthai);
                    
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

    // Validate dữ liệu nhập
    function DiscountValidateError() {
        // Xóa thông báo lỗi cũ
        $('.text-message.discount-percent-msg').text('');
        $('.text-message.discount-start-msg').text('');
        $('.text-message.discount-end-msg').text('');

        // Lấy giá trị input
        var phantram = $('#discount_percent').val().trim();
        var ngaybatdau = $('#discount_calendarInput_start').val().trim();
        var ngayketthuc = $('#discount_calendarInput_end').val().trim();

        var error = false;

        // Regex kiểm tra số phần trăm hợp lệ (số nguyên hoặc thập phân, không âm)
        const regexPhanTram = /^(100(\.0{1,2})?|[1-9]?\d(\.\d{1,2})?)$/;

        // Kiểm tra phần trăm giảm giá
        if (phantram === '') {
            $('.text-message.discount-percent-msg').text('Phần trăm không được để trống');
            error = true;
        } else if (!regexPhanTram.test(phantram)) {
            $('.text-message.discount-percent-msg').text('Phần trăm phải là số từ 0 đến 100 (tối đa 2 chữ số thập phân)');
            error = true;
        }

    // Lấy ngày hiện tại, chỉ lấy phần "YYYY-MM-DD"
    var today = new Date().toISOString().split('T')[0];
    // Kiểm tra ngày bắt đầu
    if (ngaybatdau === '') {
        $('.text-message.discount-start-msg').text('Ngày bắt đầu không được để trống');
        error = true;
    } else if (!isCheck && ngaybatdau < today) {
        $('.text-message.discount-start-msg').text('Ngày bắt đầu phải từ hôm nay trở đi');
        error = true;
    }

        // Kiểm tra ngày kết thúc
        if (ngayketthuc === '') {
            $('.text-message.discount-end-msg').text('Ngày kết thúc không được để trống');
            error = true;
        } else if (ngaybatdau !== '' && new Date(ngayketthuc) <= new Date(ngaybatdau)) {
            $('.text-message.discount-end-msg').text('Ngày kết thúc phải lớn hơn ngày bắt đầu');
            error = true;
        }

        return error;
        }

    $(document).on('submit', '#discountForm', function(event) {
        // Prevent the default form submission
        console.log("hahahaha");
        event.preventDefault();
        
        if(!DiscountValidateError()){
            // Serialize form data
            var formData = new FormData( $('#discountForm')[0]);

            $.ajax({
                url: '../controllers/admin/DiscountController.php',
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
                                message: 'Thêm giảm giá thành công',
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
                    }
                },
            });
        }
    });
});