let isCheck = false;
// reload lại form
document
  .getElementById("staticBackdropEditCatalog")
  .addEventListener("hidden.bs.modal", function () {
    document.getElementById("catalogForm").reset();
    let textMessage = document.querySelectorAll(".text-message");
    textMessage.forEach((element) => {
      element.textContent = "";
    });
    location.reload();
  });
console.log("Đã nhận js:");

$(document).ready(function () {
  const modalTitle = document.getElementById("catalogModalLabel");
  const modalSaveBtn = document.getElementById("saveModalBtn");
  let submit_btn = document.getElementById("submit_btn");

  // Modal Thêm
  $(".open_add_form").on("click", function () {
    isCheck = false;
    modalTitle.textContent = "Thêm danh mục mới";
    submit_btn.setAttribute("name", "action");
    submit_btn.setAttribute("value", "submit_btn_add");
    document
      .getElementById("catalogForm")
      .querySelectorAll(".edit")
      .forEach((element) => {
        console.log("Ẩn phần tử:", element);
        element.style.display = "none";
      });
  });

  // Modal Sửa thông tin
  $(".open_edit_form").on("click", function () {
    isCheck = true;
    modalTitle.textContent = "Chỉnh sửa thông tin Danh mục";
    submit_btn.setAttribute("name", "action");
    submit_btn.setAttribute("value", "submit_btn_update");
    var catalog_id = $(this).closest("tr").find(".catalog_id").text();
    console.log(catalog_id);
    console.log("Đã mở open_edit_form");

    $.ajax({
      url: "../controllers/admin/CatalogController.php",
      type: "POST",
      data: {
        action: "show_data",
        catalog_id: catalog_id,
      },
      success: function (response) {
        console.log(response);

        try {
          const obj = JSON.parse(response);
          console.log(obj);

          $("#catalog_id").val(obj.data.idTL);
          $("#catalog_percent").val(obj.data.tenTL);
          $("#status").val(obj.data.trangthai);

          if (parseInt(obj.data.trangthai)) {
            $("#status").prop("checked", true);
            $("#status-label").text("Đang hoạt động");
          } else {
            $("#status").prop("checked", false);
            $("#status-label").text("Bị khóa");
          }
        } catch (error) {
          console.error("Lỗi khi parse JSON:", error, "Response:", response);
        }
      },
    });
  });

  // Validate dữ liệu nhập
  function CatalogController() {
    // Xóa thông báo lỗi cũ
    $(".text-message.catalog-name-msg").text("");

    // Lấy giá trị input
    var tentl = $("#catalog_name").val().trim();

    var error = false;

    // Kiểm tra phần trăm giảm giá
    if (tentl === "") {
      $(".text-message.catalog-name-msg").text(
        "Tên danh mục không được để trống"
      );
      error = true;
    }

    return error;
  }

  $(document).on("submit", "#catalogForm", function (event) {
    // Prevent the default form submission
    console.log("hahahaha");
    event.preventDefault();

    if (!CatalogValidateError()) {
      // Serialize form data
      var formData = new FormData($("#catalogForm")[0]);

      $.ajax({
        url: "../controllers/admin/CatalogController.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          console.log(response);
          const obj = JSON.parse(response);
          console.log(obj);
          if (obj.success) {
            if (obj.btn == "add") {
              // console.log("Đang gọi toast()...");
              toast({
                title: "Thành công",
                message: "Thêm danh mục thành công",
                type: "success",
                duration: 3000,
              });
              // alert('Thêm thành công');
            } else {
              // console.log("Đang gọi toast()...");
              toast({
                title: "Thành công",
                message: "Cập nhật danh mục thành công",
                type: "success",
                duration: 3000,
              });
              // alert('Cập nhật thành công');
            }
          }
        },
      });
    }
  });
});
