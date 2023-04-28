<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="../../../public/assets/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/employee/UI_Employee1.css" >
    <!-- ======= Scripts ====== -->
    <script src="../../../public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../public/assets/jquery/jquery-3.6.4.js"></script>
</head>
<body style="margin: 0;">
    <!-- Topbar Start -->
    <div class="row me-0 align-items-center d-flex p-3" style="background-color: #d9e6ff; padding-top: 0;">
        <div class="col-md-6 ps-3">
            <a href="#" style="text-decoration: none; color: black;">
                <h1 style="margin-top: 0; margin-bottom: 0;">UWC-2.0</h1>
            </a>
        </div>
        <div class="col-md-6 pe-4">
            <div class="align-items-center d-flex justify-content-end">
                <i class="fas fa-bell me-4"></i>
                <div class="inline-block me-4">
<<<<<<< HEAD:app/views/user/index.php
                    <div style="font-weight: 500;">Minh Lee</div>
                    <div>Collector</div>
=======
                    <div style="font-weight: 500;">Harry Maguire</div>
                    <div>Back Officer</div>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/employee/UI_Employee.php
                </div>
                <img src="../../../View/images/avt_user.jpg" alt="Avatar" class="avatar me-4">
                <div>
                    <a href="../login.php" class="nav-item nav-link" style="font-weight: 500;">
                        <i class="bi bi-box-arrow-right text-dark"></i>
                        Đăng xuất
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- List Tab Start -->
    <div class="row me-0">
        <div class="col-md-3 mt-4">
            <div class="list-group">
<<<<<<< HEAD:app/views/user/index.php
                <a class="list-group-item active" href="#" data-url= "<?=ROOT?>/user/profile_tab">
=======
                <a class="list-group-item active" href="#" data-url="component/profile_tab.php">
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/employee/UI_Employee.php
                <i class="fas fa-address-card me-2"></i>Thông Tin Cá Nhân</a>
                <a class="list-group-item" href="#" data-url="component/calendar_tab.php">
                <i class="bi bi-calendar3 me-2"></i>Lịch Làm Việc</a>
                <a class="list-group-item" href="#" data-url="component/notify_tab.php">
                <i class="fas fa-comments me-2"></i>Giao Tiếp</a>
            </div>
        </div>
        <div class="col-md-9 mt-4">
            <div id="tab-content"></div>
        </div>
    </div>
    <!-- List Tab End -->
    <script>   
      $(document).ready(function() {
        $('#tab-content').load($('a.list-group-item.active').data('url'));
        $('a.list-group-item').click(function() {
          var url = $(this).data('url');
          var clickedTab = $(this);
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
              $('#tab-content').html(data);
              $('a.list-group-item').removeClass('active');
              clickedTab.addClass('active');
            }
          });
          return false;
        });
      });
    </script>
</body>

</html>