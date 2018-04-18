<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
	============================================ -->
    <title>物品详情-<?php echo ($deail["f_name"]); ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow"/>

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <script src="/ChildrenPlatform/Public/Ajax/indexAjax.js"></script>
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/ChildrenPlatform/Public/frontdesk/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/ChildrenPlatform/Public/frontdesk/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/ChildrenPlatform/Public/frontdesk/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ChildrenPlatform/Public/frontdesk/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/ChildrenPlatform/Public/frontdesk/ico/favicon.png">

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="/ChildrenPlatform/Public/frontdesk/css/bootstrap/css/bootstrap.min.css">
    <link href="/ChildrenPlatform/Public/frontdesk/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/frontdesk/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/frontdesk/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/frontdesk/css/themecss/lib.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/frontdesk/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="/ChildrenPlatform/Public/frontdesk/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/frontdesk/css/themecss/so-categories.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/frontdesk/css/themecss/so-listing-tabs.css" rel="stylesheet">

    <link id="color_scheme" href="/ChildrenPlatform/Public/frontdesk/css/theme.css" rel="stylesheet">

    <link href="/ChildrenPlatform/Public/frontdesk/css/responsive.css" rel="stylesheet">


</head>

<body class="res layout-subpage">


<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <!-- Header Top -->
        <div class="header-top compact-hidden">
            <div class="container">
                <div class="row">
                    <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 compact-hidden">
                        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i
                                class="fa fa-angle-down"></i></a></h5>
                        <div class="tabBlock">
                            <?php if(($_SESSION['u_id']== null)): ?><ul class="top-link list-inline" id="lo">
                                    <li class="account" id="my_account">
                                        <a href="#" class="btn btn-xs dropdown-toggle"
                                           data-toggle="dropdown"> <span>请先登录</span> <span
                                                class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu ">
                                            <li class="registration"><a href="#"><i class="fa fa-user"></i> 注 册</a></li>
                                            <li class="login"><a href="#"><i class="fa fa-pencil-square-o"></i> 登 录</a>
                                            </li>
                                        </ul>
                                </ul>
                                <?php else: ?>
                                <ul class="top-link list-inline" id="ur">
                                    <li class="account" id="my_account">
                                        <a href="#" class="btn btn-xs dropdown-toggle"
                                           data-toggle="dropdown" id="username"> <span><?php echo (session('u_name')); ?></span>
                                            <span
                                                    class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu ">
                                            <li><a href="#"><i class="fa fa-user"></i> 个人信息</a></li>
                                            <li><a href="<?php echo U('Index/logout');?>"><i class="fa fa-pencil-square-o"></i> 退出登录</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="wishlist"><a href="#" id="wishlist-total" class="top-link-wishlist"
                                                            title="Wish List (2)"><span> 收藏 (2)</span></a></li>
                                    <li class="checkout"><a href="#" class="top-link-checkout"
                                                            title="Checkout"><span>结算</span></a>
                                    </li>
                                    <li class="login"><a href="#" title="Shopping Cart"><span>购物车</span></a></li>
                                </ul><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->
        ﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/ChildrenPlatform/Public/login/js/jquery.easydrag.handler.beta2.js"></script>
    <script type="text/javascript" src="/ChildrenPlatform/Public/login/js/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.registration').click(function () {
                $('.box2').hide();
                $('.regbox2').show();
            });

            $('.reg5     a').click(function () {
                $('.regbox2').hide();
//                $(".tabBlock").load(location.href+" .tabBlock");
            });

            $('.qklg').click(function () {
                $('.regbox2').hide();
                $('.box2').show();
            });
            $('.regbox').easydrag();
        });
    </script>
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style-type: none;
        }

        .regbox {
            float: left;
            position: relative;
            padding: 0px;
            top: 10%;
            opacity: 0.5;
            z-index: 4;
            opacity: 1;
        }

        .regbox2 {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            display: none;
            z-index: 5;
            position: fixed;
            background: rgba(0, 0, 0, 0.52) none repeat scroll 0% 0%;
            opacity: 1;
        }

        .reg5 {
            width: 650px;
            height: 65px;
            background: #55ACEF;
            text-align: center;
            position: relative;
            margin: 90px auto 0px auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .reg5 h2 {
            font-size: 30px;
            line-height: 65px;
            color: #ffffff;
        }

        .reg5 a {
            position: absolute;
            width: 16px;
            height: 16px;
            right: 20px;
            top: 17px;
            font-size: 35px;
        }

        .reg51 {
            width: 650px;
            padding: 40px 40px 50px;
            margin: 0 auto;
            background: #EFEFEF;
            height: 300px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .reg5left {
            float: left;
            width: 300px;
            height: 200px;
            font-size: 13px;
        }

        .login5left span {
            line-height: 24px;
            color: #55ACEF;
            margin-left: 10px;
        }

        .reg5left1 {
            width: 100%;
            margin-bottom: 22px;
            float: left;
            position: relative;
            display: block;
        }

        .reg5left1 input {
            text-indent: 10px;
            width: 270px;
            color: #999;
            font-size: 13px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #999;
            border-radius: 5px;
        }

        .reg5left2 {
            height: 45px;
            line-height: 45px;
            width: 100%;
            margin-bottom: 22px;
            float: left;
            position: relative;
            display: block;
        }

        .reg5left2 .dl {
            float: left;
            width: 97px;
            height: 45px;
            line-height: 45px;
            text-align: center;
            background: none repeat scroll 0% 0% #55ACEF;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            font-size: 14px;
            outline: medium none;
        }

        .reg5left2 .wjmm {
            color: #55ACEF;
            margin-left: 20px;
        }

        .reg5right {
            float: left;
            margin-left: 50px;
            width: 220px;
            height: 220px;
            border-left: 1px solid #CBCBCB;
            padding-left: 35px;
        }

        .reg5right span {
            line-height: 24px;
            color: #55ACEF;
            margin-left: 10px;
        }

        .reg5right1 {
            height: 40px;
            line-height: 40px;
            border-radius: 5px;
            border: 1px solid #55ACEF;
            width: 100%;
            margin-bottom: 22px;
            float: left;
            position: relative;
        }

        .reg5right1 .sjdl {
            height: 22px;
            line-height: 20px;
            padding-left: 50px;
            display: inline-block;
            color: #55ACEF;
            position: relative;
            margin-top: 10px;
        }

        .reg5right2 {
            width: 100%;
            float: left;
            margin-bottom: 22px;
            position: relative;
            font-size: 13px;
            text-align: center;
        }

        .reg5right2 .qklg {
            color: #55ACEF;
            font-size: 14px;
        }

        .reg5right3 {
            text-align: center;
            height: 40px;
            line-height: 40px;
            width: 100%;
            float: left;
            margin-bottom: 22px;
            position: relative;
            display: inline-block;
            font-size: 13px;
        }

        .reg5right3 b {
            height: 4px;
            border-top: 1px solid rgb(203, 203, 203);
            display: inline-block;
            width: 45px;
        }

        .reg5right3 .found {
            margin-left: 7px;
        }

        .reg5right3 .back {
            margin-right: 7px;
        }

        .reg5right4 {
            text-align: center;
            width: 100%;
            float: left;
            margin-bottom: 22px;
            position: relative;
            display: block;
        }

        .reg5right4 a {
            width: 46px;
            height: 46px;
            position: absolute;
        }

        .reg5right4 .wb {
            background-position: 0px -47px;
            margin-left: -60px
        }

        .reg5right4 .qq {
            background-position: 0px 0px;
        }
    </style>
</head>

<body>
<div class="regbox">
    <div class="regbox2">
        <div class="reg5">
            <h2>儿童信息交流平台</h2>
            <a class="close">×</a>
        </div>
        <div class="reg51">
            <form name="reg5form" action="<?php echo U('registration');?>" method="post" enctype="multipart/form-data"
                  onsubmit="return check();">
                <div class="reg5left">
                    <div class="reg5left1">
                        <input type="text" id="telephone" name="telephone" placeholder="请输入手机号" required pattern="[0-9]{11}">
                        <span id="mess_success" title="手机号可用" style="margin-left: 5px"><img src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/yes.png"></span>
                        <span id="mess_error" title="" style="margin-left: 5px"><img src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/no.png"></span>
                    </div>
                    <div class="reg5left1">
                        <input type="password" id="password" name="password" placeholder="输入密码" required>
                    </div>
                    <div class="reg5left1">
                        <input type="password" name="repassword" placeholder="再次输入密码" required>
                    </div>
                    <div class="reg5left2">
                        <a class="dl" id="reg_submit" href="#" onclick="document.reg5form.submit()">注册</a>
                        <a class="wjmm">忘记密码</a>
                    </div>
                </div>
                <div class="reg5right">
                    <span></span>
                    <div class="reg5right1">
                        <a class="sjdl">手机短信登录</a>
                    </div>
                    <div class="reg5right2">
                        拥有账号？<a class="qklg">直接登录</a>
                    </div>
                    <div class="reg5right3">
                        <b class="found"></b>合作账号登录<b class="back"></b>
                    </div>
                    <div class="reg5right4">
                        <a class="wb"></a><a class="qq"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

        ﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/ChildrenPlatform/Public/login/js/jquery.easydrag.handler.beta2.js"></script>
    <script type="text/javascript" src="/ChildrenPlatform/Public/login/js/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.login').click(function () {
                $('.regbox2').hide();
                $('.box2').show();
            });

            $('.login5 a').click(function () {
                $('.box2').hide();
//                $(".tabBlock").load(location.href+" .tabBlock");
            });

            $('.zcdl').click(function () {
                $('.box2').hide();
                $('.regbox2').show();
            });
            $('.box').easydrag();
        });
    </script>
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style-type: none;
        }

        .box {
            float: left;
            position: relative;
            padding: 0px;
            top: 10%;
            opacity: 0.5;
            z-index: 4;
            opacity: 1;
        }

        .box2 {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            display: none;
            z-index: 5;
            position: fixed;
            background: rgba(0, 0, 0, 0.52) none repeat scroll 0% 0%;
            opacity: 1;
        }

        .login5 {
            width: 650px;
            height: 65px;
            background: #55ACEF;
            text-align: center;
            position: relative;
            margin: 90px auto 0px auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .login5 h2 {
            font-size: 30px;
            line-height: 65px;
            color: #ffffff;
        }

        .login5 a {
            position: absolute;
            width: 16px;
            height: 16px;
            right: 20px;
            top: 17px;
            font-size: 35px;
        }

        .login51 {
            width: 650px;
            padding: 40px 40px 50px;
            margin: 0 auto;
            background: #EFEFEF;
            height: 300px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .login5left {
            float: left;
            width: 300px;
            height: 200px;
            font-size: 13px;
        }

        .login5left span {
            line-height: 24px;
            color: #55ACEF;
            margin-left: 10px;
        }

        .login5left1 {
            width: 100%;
            margin-bottom: 22px;
            float: left;
            position: relative;
            display: block;
        }

        .login5left1 input {
            text-indent: 10px;
            width: 296px;
            color: #999;
            font-size: 13px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #999;
            border-radius: 5px;
        }

        .login5left2 {
            height: 45px;
            line-height: 45px;
            width: 100%;
            margin-bottom: 22px;
            float: left;
            position: relative;
            display: block;
        }

        .login5left2 .dl {
            float: left;
            width: 97px;
            height: 45px;
            line-height: 45px;
            text-align: center;
            background: none repeat scroll 0% 0% #55ACEF;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            font-size: 14px;
            outline: medium none;
        }

        .login5left2 .wjmm {
            color: #55ACEF;
            margin-left: 20px;
        }

        .login5right {
            float: left;
            margin-left: 50px;
            width: 220px;
            height: 220px;
            border-left: 1px solid #CBCBCB;
            padding-left: 35px;
        }

        .login5right span {
            line-height: 24px;
            color: #55ACEF;
            margin-left: 10px;
        }

        .login5right1 {
            height: 40px;
            line-height: 40px;
            border-radius: 5px;
            border: 1px solid #55ACEF;
            width: 100%;
            margin-bottom: 22px;
            float: left;
            position: relative;
        }

        .login5right1 .sjdl {
            height: 22px;
            line-height: 20px;
            padding-left: 50px;
            display: inline-block;
            color: #55ACEF;
            position: relative;
            margin-top: 10px;
        }

        .login5right2 {
            width: 100%;
            float: left;
            margin-bottom: 22px;
            position: relative;
            font-size: 13px;
            text-align: center;
        }

        .login5right2 .zcdl {
            color: #55ACEF;
            font-size: 14px;
        }

        .login5right3 {
            text-align: center;
            height: 40px;
            line-height: 40px;
            width: 100%;
            float: left;
            margin-bottom: 22px;
            position: relative;
            display: inline-block;
            font-size: 13px;
        }

        .login5right3 b {
            height: 4px;
            border-top: 1px solid rgb(203, 203, 203);
            display: inline-block;
            width: 45px;
        }

        .login5right3 .found {
            margin-left: 7px;
        }

        .login5right3 .back {
            margin-right: 7px;
        }

        .login5right4 {
            text-align: center;
            width: 100%;
            float: left;
            margin-bottom: 22px;
            position: relative;
            display: block;
        }

        .login5right4 a {
            width: 46px;
            height: 46px;
            position: absolute;
        }

        .login5right4 .wb {
            background-position: 0px -47px;
            margin-left: -60px
        }

        .login5right4 .qq {
            background-position: 0px 0px;
        }
    </style>
</head>

<body>
<div class="box">
    <div class="box2">
        <div class="login5">
            <h2>儿童信息交流平台</h2>
            <a class="close">×</a>
        </div>
        <div class="login51">
            <form name="login5form" action="" method="post">
                <div class="login5left">
                    <span></span>
                    <span id="error" style="color: #FF0000">用户名或密码错误</span>
                    <div class="login5left1">
                        <input type="text" name="l_telephone" id="l_telephone" placeholder="用户名/手机号/邮箱"/></input>
                    </div>
                    <div class="login5left1">
                        <input type="password" name="l_password" id="l_password" placeholder="密码"/></input>
                    </div>
                    <div class="login5left2">
                        <a class="dl" href="#" id="login">登录</a>
                        <a class="wjmm">忘记密码</a>
                    </div>
                </div>
                <div class="login5right">
                    <span></span>
                    <div class="login5right1">
                        <a class="sjdl">手机短信登录</a>
                    </div>
                    <div class="login5right2">
                        没有账号？<a class="zcdl">快速注册</a>
                    </div>
                    <div class="login5right3">
                        <b class="found"></b>合作账号登录<b class="back"></b>
                    </div>
                    <div class="login5right4">
                        <a class="wb"></a><a class="qq"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

        <!-- Header center -->
        <div class="header-center left">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
                        <a href="index"><img src="/ChildrenPlatform/Public/Uploads/logo/logo.png" width="55%"
                                             title="Your Store" alt="Your Store"/></a>
                    </div>
                    <!-- //end Search -->

                    <!-- Secondary menu -->
                </div>

            </div>
        </div>
        <!-- //Header center -->
        <!-- Header Bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <!-- Main menu -->
                    <div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">
                        <div class="responsive so-megamenu ">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        Navigation
                                    </div>

                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->

                </div>
            </div>

        </div>

        <!-- Navbar switcher -->
        <!-- //end Navbar switcher -->
    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#">物品详情</a></li>
        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">

                <div class="product-view row">
                    <div class="left-content-product col-lg-10 col-xs-12">
                        <div class="row">
                            <div class="content-product-left class-honizol col-sm-6-1 col-xs-12 ">
                                <div>
                                    <img itemprop="image" class="product-image-zoom"
                                         src="/ChildrenPlatform/Public/Uploads/itempic/<?php echo ($deail["s_pic"]); ?>"
                                         data-zoom-image="/ChildrenPlatform/Public/frontdesk/image/demo/shop/product/J9.jpg"
                                         alt="Bint Beef">
                                </div>

                            </div>

                            <div class="content-product-right col-sm-6 col-xs-12">
                                <div class="title-product">
                                    <h1><?php echo ($deail["f_name"]); ?></h1>
                                </div>
                                <!-- Review ---->
                                <div class="box-review form-group">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                    <a class="reviews_button" href=""
                                       onclick="$('a[href=\'#tab-1\']').trigger('click'); return false;">105条评论</a> |
                                    <a class="write_review_button" href=""
                                       onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">添加评论</a>
                                </div>

                                <div class="product-label form-group">
                                    <div class="product_page_price price" itemprop="offerDetails" itemscope=""
                                         itemtype="http://data-vocabulary.org/Offer">
                                        <span class="price-new" itemprop="price">$114.00</span>
                                        <!--<span class="price-old">$122.00</span>-->
                                    </div>
                                    <!--<div class="stock"><span>库存:</span> <span-->
                                            <!--class="status-stock">有货</span></div>-->
                                </div>

                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="price-tax" style="margin-bottom: 10px"><span>地址：</span> <?php if(($deail["address"] == null)): ?>此项目未填写地址！<?php else: ?> <?php echo ($deail["address"]); endif; ?></div>
                                        <div class="reward" style="margin-bottom: 10px"><span>电话：</span> <?php if(($deail["telephone"] == null)): ?>此项目无联系电话！<?php else: ?> <?php echo ($deail["telephone"]); endif; ?></div>
                                        <div class="brand" style="margin-bottom: 10px"><span>分类：</span> <?php echo ($deail["m_id"]); ?></div>
                                        <div class="model" style="margin-bottom: 10px"><span>官网：</span><a target="_blank" href="<?php echo ($deail["url"]); ?>"> 点击浏览</a></div>
                                    </div>
                                </div>
                                <!-- end box info product -->

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Tabs -->
                <div class="producttab ">
                    <div class="tabsslider  vertical-tabs col-xs-12">
                        <ul class="nav nav-tabs col-lg-2 col-sm-3">
                            <li class="active"><a data-toggle="tab" href="#tab-1">评论（105）</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">发表评论</a></li>
                        </ul>
                        <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor
                                    invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua.</p>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,no
                                    sea takimata sanctus est Lorem ipsumdolor sit amet. Lorem ipsum dolor sitamet,
                                    consetetur sadipscing elitr, seddiam nonumy eirmod tempor invidunt ut labore et
                                    dolore magna aliquyam erat,sed diam voluptua. </p>
                                <p>At vero eos et accusam et justo duo dolores
                                    et ea rebum. Stet clita kasd gubergren,
                                    no sea takimata sanctus est Lorem ipsum
                                    dolor sit amet. Lorem ipsum dolor sit
                                    amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut
                                    labore et dolore magna aliquyam erat,
                                    sed diam voluptua. At vero eos et accusam
                                    et justo duo dolores et ea rebum. Stet
                                    clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.
                                    <br>
                                </p>

                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                <form>
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                <td class="text-right">29/07/2015</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>Best this product opencart</p>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2 id="review-title">Write a review</h2>
                                    <div class="contacts-form">
                                        <div class="form-group"><span class="icon icon-user"></span>
                                            <input type="text" name="name" class="form-control" value="Your Name"
                                                   onblur="if (this.value == '') {this.value = 'Your Name';}"
                                                   onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                        </div>
                                        <div class="form-group"><span class="icon icon-bubbles-2"></span>
                                            <textarea class="form-control" name="text"
                                                      onblur="if (this.value == '') {this.value = 'Your Review';}"
                                                      onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                        </div>
                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

                                        <div class="form-group">
                                            <b>Rating</b> <span>Bad</span>&nbsp;
                                            <input type="radio" name="rating" value="1"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="2"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="3"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="4"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="5"> &nbsp;<span>Good</span>

                                        </div>
                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->

                <!-- Related Products -->
                <div class="related titleLine products-list grid module ">
                    <h3 class="modtitle">Related Products </h3>
                    <div class="releate-products ">
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/e11.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/e12.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#">
                                        Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                class="fa fa-shopping-cart"></i> <span
                                                class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/11.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/10.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>

                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#">
                                        Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                class="fa fa-shopping-cart"></i> <span
                                                class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/35.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/34.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#">
                                        Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                class="fa fa-shopping-cart"></i> <span
                                                class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/14.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/15.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#">
                                        Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                class="fa fa-shopping-cart"></i> <span
                                                class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Related  Products-->


            </div>


        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <footer class="footer-container">
        <!-- Footer Top Container -->
        <section class="footer-top">
            <div class="container content">
                <div class="row">
                    <div class="col-sm-6 col-md-3 box-information">
                        <div class="module clearfix">
                            <h3 class="modtitle">Information</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Order history</a></li>
                                    <li><a href="#">Order information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 box-service">
                        <div class="module clearfix">
                            <h3 class="modtitle">Customer Service</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 box-account">
                        <div class="module clearfix">
                            <h3 class="modtitle">My Account</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#" target="_blank">Our Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 collapsed-block ">
                        <div class="module clearfix">
                            <h3 class="modtitle">Contact Us </h3>
                            <div class="modcontent">
                                <ul class="contact-address">
                                    <li><span class="fa fa-map-marker"></span> My Company, 42 avenue des Champs Elysées
                                        75000 Paris France
                                    </li>
                                    <li><span class="fa fa-envelope-o"></span> Email: <a href="#">
                                        sales@yourcompany.com</a></li>
                                    <li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789 <br>Phone 2: (123)
                                        4567890
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Footer Top Container -->

        <!-- Footer Bottom Container -->
        <div class="footer-bottom-block ">
            <div class=" container">
                <div class="row">
                    <div class="col-sm-5 copyright-text">Copyright &copy; 2017.Company name All rights reserved.<a
                            target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
                    </div>
                    <div class="col-sm-7">
                        <div class="block-payment text-right"><img src="image/demo/content/payment.png" alt="payment"
                                                                   title="payment"></div>
                    </div>
                    <!--Back To Top-->
                    <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

                </div>
            </div>
        </div>
        <!-- /Footer Bottom Container -->


    </footer>
    <!-- //end Footer Container -->

</div>


<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/libs.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/jquery-ui/jquery-ui.min.js"></script>



<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/addtocart.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/application.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/cpanel.js"></script>

</body>
</html>