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
        let lvpp_id = $(this).closest('tr').find('.lvpp_id').text();
        console.log('hello');

        
        $.ajax({
            url: '../controllers/admin/StationeryTypeController.php', 
            type: 'POST',
            data: {
                'action': 'show_data',
                'lvpp_id': lvpp_id,
            },
            success: function(response){
                console.log(response);
                
                try {
                    const obj = JSON.parse(response);
                    console.log(obj);
                    
                    $('#lvpp_id').val(obj.data.idLoai);
                    $('#lvpp_name').val(obj.data.tenLoai);
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
    $('#stationeryTypeForm').submit(function(event) {
        event.preventDefault();
        
        if(!StationeryTypeValidateError()){
            var formData = new FormData( $('#stationeryTypeForm')[0]);
            $.ajax({
                url: '../controllers/admin/StationeryTypeController.php', // URL to handle form submission
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    const obj = JSON.parse(response);
                    console.log(obj);
                    console.log('hihi');
                    // if(obj.success){
                    //     if(obj.btn == 'add') {
                    //         alert('Thêm thành công');
                    //     } else {
                    //         alert('Cập nhật thành công');
                    //     }
                    // }
                    // else {
                    //     alert('tên loại văn phòng phẩm đã tồn tại');
                    // }
                    if(obj.success){
                        if(obj.btn == 'add') {
                            // console.log("Đang gọi toast()...");
                            toast({
                                title: 'Thành công',
                                message: 'Thêm loại văn phòng phẩm thành công',
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
                    }
                    else{
                        toast({
                            title: 'Thất bại',
                            message: 'Tên loại văn phòng phẩm đã tồn tại',
                            type: 'error',
                            duration: 4000
                        });
                    }
                },
            });
        }
    });
    $(document).ready(function () {
        // Hàm gửi AJAX tìm kiếm và phân trang
        function fetchSearchResults(keyword, page = 1) {
            $.ajax({
                url: "../controllers/admin/StationeryTypeController.php",
                type: "POST",
                data: { action: "search", keyword: keyword, page: page },
                success: function (response) {
                    let data = JSON.parse(response);
                    if (data.success) {
                        $(".table-group-divider").html(data.html);
                        $(".pagination").html(data.pagination); // Cập nhật phân trang
                    } else {
                        $(".table-group-divider").html("<tr><td colspan='4' class='text-center'>Không tìm thấy kết quả</td></tr>");
                        $(".pagination").html("");
                    }
                },
                error: function () {
                    console.error("Lỗi khi tải dữ liệu.");
                }
            });
        }
    
        // Sự kiện nhập từ ô tìm kiếm
        $("#searchInput").on("input", function () {
            let keyword = $(this).val().trim();
            if (keyword.length === 0) {
                loadDefaultData(); // Nếu trống, load dữ liệu mặc định
            } else {
                fetchSearchResults(keyword, 1);
            }
        });
    
        // Sự kiện click phân trang
        $(document).on("click", ".pagination-btn", function (e) {
            e.preventDefault();
            let page = $(this).data("page");
            let keyword = $("#searchInput").val().trim();
            fetchSearchResults(keyword, page);
        });
    
        // Hàm tải dữ liệu mặc định
        function loadDefaultData() {
            $.ajax({
                url: "../controllers/admin/StationeryTypeController.php",
                type: "POST",
                data: { action: "load_default" },
                success: function (response) {
                    let data = JSON.parse(response);
                    $(".table-group-divider").html(data.html);
                    if(data.pagination) {
                        $(".pagination").html(data.pagination);
                    }
                },
                error: function () {
                    console.error("Lỗi khi tải dữ liệu mặc định.");
                }
            });
            //load khi chuyển
            let page = $(this).data("page");
            let keyword = $("#searchInput").val().trim();
            fetchSearchResults(keyword, page);
        }
    });
        
});





