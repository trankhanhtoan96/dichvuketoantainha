<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= $this->setting_model->get('icon') ?>"/>
    <title><?= !empty($meta_title) ? $meta_title : '' ?></title>
    <meta name="description" content="<?= !empty($meta_description) ? $meta_description : '' ?>">

    <!--define language-->
    <script>
        var CI_language = <?= json_encode($this->lang->language) ?>;
        CI_language.language = '<?= $this->config->item('language') ?>';
        CI_language.base_url = '<?= base_url() ?>';
        CI_language.site_url = '<?= site_url() ?>';
    </script>

    <!--jquery-->
    <script src="<?= base_url('vendors/jquery.min.js') ?>"></script>

    <!--bootstrap-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('vendors/bootstrap/css/bootstrap.min.css') ?>"/>
    <script src="<?= base_url('vendors/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!--font awesome-->
    <link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" type="text/css" rel="stylesheet">

    <!--custom css-->
    <link href="<?= base_url(APPNAME . 'views/style.css') ?>" rel="stylesheet" type="text/css"/>

    <!--spinner load-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendors/Spinner/Spinner.css') ?>"/>
    <script src="<?= base_url('vendors/Spinner/Spinner.js') ?>"></script>

    <!--alertify-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendors/AlertifyJS/alertify.min.css') ?>"/>

    <!--custom script-->
    <script src="<?= base_url(APPNAME . 'views/script.js') ?>"></script>
</head>
<body>

<!--menu-->
<nav class="navbar navbar-default navbar-fixed-top" style="font-size:18px;">
    <div class="container-fluid" style="background-color: #292929;padding:5px">
        <div class="container">
            <a class="btn btn-danger" href="tel:(+84)937319194">
                <i class="fa fa-phone"></i> <b> 0937.31.91.94</b>
            </a>&nbsp;
            <a class="btn btn-danger" href="mailto:dvkthang@yahoo.com">
                <i class="fa fa-envelope"></i> <b> dvktHang@yahoo.com</b>
            </a>
            <div class="pull-right">
                <form method="get" name="form_change_ci_language" id="form_change_ci_language">
                    <select style="background-color: #898B8B;color:#FFF;border:#898B8B" class="form-control"
                            name="ci_change_language_to" id="ci_change_language_to">
                        <option value="vi" <?= $this->config->item('language') == 'vi' ? 'selected' : '' ?>>Tiếng việt
                        </option>
                        <option value="en" <?= $this->config->item('language') == 'en' ? 'selected' : '' ?>>English
                        </option>
                    </select>
                </form>
                <script type="text/javascript">
                    $('#ci_change_language_to').on('change', function () {
                        $('#form_change_ci_language').submit();
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= site_url() ?>">
                <img class="img-responsive navbar-brand" style="height:70px;padding:0"
                     src="<?= $this->setting_model->get('logo') ?>"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?= site_url('gioi-thieu.html') ?>">GIỚI THIỆU</a></li>
                <li><a href="<?= site_url() ?>">BẢNG GIÁ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DỊCH
                        VỤ
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('dich-vu-thanh-lap-doanh-nghiep.html') ?>"><i
                                    class="fa-chevron-circle-right fa"></i> THÀNH LẬP DOANH NGHIỆP</a></li>
                        <li><a href="<?= site_url('dich-vu-bao-cao-thue.html') ?>"><i
                                    class="fa-chevron-circle-right fa"></i> BÁO CÁO THUẾ</a></li>
                        <li><a href="<?= site_url('dich-vu-quyet-toan-thue.html') ?>"><i
                                    class="fa-chevron-circle-right fa"></i> QUYẾT TOÁN THUẾ</a></li>
                        <li><a href="<?= site_url('dich-vu-bao-cao-tai-chinh.html') ?>"><i
                                    class="fa-chevron-circle-right fa"></i> BÁO CÁO TÀI CHÍNH</a></li>
                        <li><a href="<?= site_url('dich-vu-lam-so-sach-ke-toan.html') ?>"><i
                                    class="fa-chevron-circle-right fa"></i> LÀM SỔ SÁCH KẾ TOÁN</a></li>
                        <li><a href="<?= site_url('dich-vu-lam-bhxh-bhyt.html') ?>"><i
                                    class="fa-chevron-circle-right fa"></i> LÀM BHYT - BHXH</a></li>
                    </ul>
                </li>
                <li><a href="<?= site_url('danh-muc/kinh-nghiem-ke-toan.html') ?>">KINH NGHIỆM</a></li>
                <li><a href="<?= site_url('danh-muc/tin-tuc-ke-toan.html') ?>">TIN TỨC KẾ TOÁN</a></li>
                <li><a href="<?= site_url('lien-he.html') ?>">LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="height: 114px;"></div>