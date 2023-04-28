<?php require_once APPROOT.'/views/header.php'; ?>
<title>Đăng nhập</title>

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
    <style>
        .frame_login{
            background-color: #f2f2f2c9;
            padding: 40px 30px 40px 30px;
        }
        .bg_login{
            background-image: url(https://img5.thuthuatphanmem.vn/uploads/2021/12/28/background-moi-truong-xanh-sach-dep_012013863.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg_login">
    <div class="row" style="justify-content: center;">
        <div class="col-md-6 p-5">
            <div class="frame_login">


                    <h4 style="font-weight: 700;">ĐĂNG NHẬP VÀO TÀI KHOẢN CỦA BẠN</h4>
                    <h6 class="mt-3 text-muted text-white" style="font-weight: 500;">Điền thông tin chi tiết</h6>
                    <form method="post">
                        <!-- login check -->
                
                        <?php if(!empty($errors)):?>
                        <div class = "alert alert-danger">
                            <?= implode("<br>", $errors);?>
                        </div>
                        <?php endif;?>
                        <!-- login -->
                        <div class="form-group mt-5">
                            <label for="phonenumber" style="font-weight: 700;">SỐ ĐIỆN THOẠI</label>
                            <div class="input-group">
                                <input  type="text" class="form-control mt-3"  name='phone'
                                        id="phonenumber" style="border-radius: 0; padding-left: 40px;" 
                                        placeholder="Nhập số điện thoại">
                                <span class="input-group-addon" 
                                        style="position: absolute; left: 15px; top: 23px;">
                                        <i class="fa fa-phone text-success"></i>
                                </span>
                            </div>
                            </div>                                  
                        <div class="form-group mt-3">
                            <label for="password" style="font-weight: 700;">MẬT KHẨU</label>
                            <div class="input-group">
                                <input  type="password" class="form-control mt-3" name='password'
                                        id="password" style="border-radius: 0; padding-left: 40px;"
                                        placeholder="Nhập mật khẩu">
                                <span class="input-group-addon" 
                                        style="position: absolute; left: 15px; top: 23px;">
                                        <i class="fa fa-lock text-success"></i>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger mt-4" 
                                style="min-width: 120px; border-radius: 0;">
                                Đăng Nhập
                        </button>
                        <p class="text-left text-muted mt-5 mb-0">Tạo tài khoản mới ? <a href="<?= ROOT ?>/home/signup"
                    class="fw-bold text-body"><u>Đăng ký</u></a></p>

                    </form>
            </div>
        </div>
    </div>
    <?php require_once APPROOT.'/views/footer.php'; ?>