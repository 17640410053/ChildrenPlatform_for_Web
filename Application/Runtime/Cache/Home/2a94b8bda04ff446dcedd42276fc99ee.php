<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page needs
	============================================ -->
    <title>儿童信息交流平台</title>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script>
        var AppUrl = "/ChildrenPlatform";
        var check_user_id = "<?php echo (session('user_id')); ?>"
    </script>
    <script src="/ChildrenPlatform/Public/Ajax/indexAjax.js"></script>
    <script src="/ChildrenPlatform/Public/Ajax/CartAjax.js"></script>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow"/>

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
	============================================ -->
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/postbirdAlertBox.css">

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
    <style type="text/css">
        #my_account {
        }
    </style>
</head>

<body class="common-home res layout-home1">
<div id="wrapper" class="wrapper-full banners-effect-7">
    <header id="header" class=" variantleft type_1">
        <div class="header-top compact-hidden">
    <div class="container">
        <div class="row">
            <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 compact-hidden">
                <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i
                        class="fa fa-angle-down"></i></a></h5>
                <div class="tabBlock">
                    <?php if(($_SESSION['user_id']== null)): ?><ul class="top-link list-inline" id="lo">
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
                                   data-toggle="dropdown" id="username"> <span><?php echo (session('username')); ?></span>
                                    <span
                                            class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu ">
                                    <?php if(($_SESSION['company_user_id']== null)): ?><li><a href=""><i class="fa fa-user"></i> 个人中心</a></li>
                                        <?php else: ?>
                                        <li><a href="<?php echo U('Company/company_center');?>"><i class="fa fa-user"></i> 个人中心</a>
                                        </li><?php endif; ?>
                                    <li><a href="<?php echo U('Index/logout');?>"><i class="fa fa-pencil-square-o"></i> 退出登录</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="wishlist"><a href="#" id="wishlist-total"
                                                    class="top-link-wishlist"><span> 收藏 (<span id="collect_num"><?php echo ($count_num); ?></span>)</span></a>
                            </li>
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
            <form name="reg5form" action="<?php echo U('Index/registration');?>" method="post" enctype="multipart/form-data"
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
                <a href="<?php echo U('Index/index');?>"><img src="/ChildrenPlatform/Public/Uploads/logo/logo.png" width="55%"
                                                   title="Your Store" alt="Your Store"/></a>
            </div>
            <!-- //end Logo -->

            <!-- Search -->
            <div id="sosearchpro" class="col-sm-7 search-pro">
                <div id="search0" class="search input-group">
                    <div class="select_category filter_type icon-select">
                        <select class="no-border" name="category_id" id="category_id">
                            <option value="0">全 部</option>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["type_id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <input class="autosearch-input form-control" id="search_value" type="text" value=""
                           size="50"
                           autocomplete="off" placeholder="搜 索" name="search">
                    <span class="input-group-btn">
						<button onclick="search_item()" class="button-search btn btn-primary"><i
                                class="fa fa-search"></i></button>
						</span>
                </div>
                <input type="hidden" name="route" value="product/search"/>
            </div>
            <!-- //end Search -->
            <div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
                <!--cart-->
                <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                        <div class="shopcart">
                            <span class="handle pull-left"></span>
                            <span class="title">我的购物车</span>
                            <?php if(($_SESSION['user_id']== null)): ?><p class="text-shopping-cart cart-total-full">请先登录 </p>
                                <?php else: ?>
                                <p class="text-shopping-cart cart-total-full"><span
                                        id="cart_num"><?php echo ($cart_data["cart_num"]); ?></span>件物品 - 共 ￥<span id="total_price"><?php echo ($cart_data["total_price"]); ?></span>
                                    元</p><?php endif; ?>
                        </div>
                    </a>

                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
                        <?php if(($_SESSION['user_id']== null)): ?><p class="text-center"><span>你还未登录，请先登录</span></p>
                            <p class="text-center">
                                <a
                                        class="btn btn-mega checkout-cart login" href="#"><i class="fa fa-share"></i>立即登录</a>
                                <a
                                        class="btn btn-mega checkout-cart registration" href="#"><i
                                        class="fa fa-share"></i>立即注册</a>
                            </p>
                            <?php else: ?>
                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                    <?php if(is_array($cart_list)): $i = 0; $__LIST__ = $cart_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?><tr id="cart_<?php echo ($cart["commodity_id"]); ?>">
                                            <td class="text-center" style="width:70px">
                                                <a href="<?php echo U('Project/project_detail?id='.$cart['commodity_id']);?>"> <img
                                                        src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($cart["voo"]["small_pic"]); ?>"
                                                        style="width:70px" alt="<?php echo ($cart["voo"]["name"]); ?>"
                                                        title="<?php echo ($cart["voo"]["name"]); ?>" class="preview"> </a>
                                            </td>
                                            <td class="text-left"><a class="cart_product_name"
                                                                     href="<?php echo U('Project/project_detail?id='.$cart['commodity_id']);?>"><?php echo ($cart["voo"]["name"]); ?></a>
                                            </td>
                                            <td class="text-center"> x<?php echo ($cart["commodity_num"]); ?></td>
                                            <td class="text-center"> ￥<?php echo ($cart["voo"]["price"]); ?></td>
                                            <td class="text-right">
                                                <a href="<?php echo U('Project/project_detail?id='.$cart['commodity_id']);?>"
                                                   class="fa fa-edit"></a>
                                            </td>
                                            <td class="text-right">
                                                <a onclick="deleteCart('<?php echo ($cart["commodity_id"]); ?>')"
                                                   class="fa fa-times fa-delete"></a>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <div>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="text-left"><strong>商品数量</strong>
                                            </td>
                                            <td class="text-right"><span
                                                    id="cart_num_table"><?php echo ($cart_data["cart_num"]); ?></span> 件
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><strong>总价</strong>
                                            </td>
                                            <td class="text-right">￥<span id="total_price_table"><?php echo ($cart_data["total_price"]); ?></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="text-right"><a
                                            class="btn btn-mega checkout-cart" href="#"><i
                                            class="fa fa-share"></i>去结算</a>
                                    </p>
                                </div>
                            </li><?php endif; ?>
                    </ul>
                </div>
                <!--//cart-->
            </div>
            <!-- Secondary menu -->
        </div>

    </div>
</div>
        <!-- //Header center -->
        <!-- Header Bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">

                    <div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
                        <div class="responsive so-megamenu ">
                            <div class="so-vertical-menu no-gutter compact-hidden">
                                <nav class="navbar-default">

                                    <div id="hot_hit" class="container-megamenu vertical open">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        热门点击
                                                        <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse"
                                                    class="navbar-toggle fa fa-list-alt">
                                            </button>
                                            热门
                                        </div>
                                        <div class="vertical-wrapper">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu">
                                                        <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subsetType): $mod = ($i % 2 );++$i;?><li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="<?php echo U('Project/project_child_type?id='.$subsetType['subsettype_id']);?>" class="clearfix">
                                                                    <img src="/ChildrenPlatform/Public/Uploads/type_icon/<?php echo ($subsetType["image"]); ?>"
                                                                         alt="icon">
                                                                    <span><?php echo ($subsetType["name"]); ?></span>
                                                                </a>
                                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>

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
                                        分类
                                    </div>

                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container">
                                                <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="<?php echo U('Index/index');?>">主 页</a>
                                                    </li>
                                                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="<?php echo U('Project/project_type?id='.$type['type_id']);?>" class="clearfix">
                                                                <strong><?php echo ($type["name"]); ?></strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 15%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <?php if(is_array($type[voo])): $i = 0; $__LIST__ = $type[voo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subsetType): $mod = ($i % 2 );++$i;?><li><a class="subcategory_item"
                                                                                           href="<?php echo U('Project/project_child_type?id='.$subsetType['subsettype_id']);?>"><?php echo ($subsetType["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            </div>
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
    <!-- Block Spotlight1  -->
    <div id="search_div" style="min-height: 500px">
        <div id="index_body">
            <section class="so-spotlight1 ">
                <div class="container">
                    <div class="row">
                        <div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
                            <div class="slider-container ">

                                <div class="module first-block">
                                    <div class="modcontent clearfix">
                                        <div id="custom_popular_search" class="clearfix">
                                            <h5 class="so-searchbox-popular-title pull-left">热门搜索：</h5>
                                            <div class="so-searchbox-keyword">
                                                <ul class="list-inline">
                                                    <?php if(is_array($search)): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?><li><a href="#">&nbsp; <?php echo ($search["detail"]); ?> &nbsp;</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="so-slideshow" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 two-block">
                                    <div class="module slideshow no-margin">
                                        <?php if(is_array($carousel)): $i = 0; $__LIST__ = $carousel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carousel): $mod = ($i % 2 );++$i;?><div class="item">
                                                <a href="<?php echo U('Project/project_detail?id='.$carousel['commodity_id']);?>"
                                                   target="_blank"><img
                                                        src="/ChildrenPlatform/Public/uploads/carousel_image/<?php echo ($carousel["image"]); ?>"
                                                        alt="slider1" class="img-responsive"></a>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <div class="loadeding"></div>
                                </div>


                                <div class="module col-md-4  hidden-sm hidden-xs three-block ">
                                    <div class="modcontent clearfix">
                                        <div class="htmlcontent-block">
                                            <ul class="htmlcontent-home">
                                                <?php if(is_array($hot_commodity)): $i = 0; $__LIST__ = $hot_commodity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_commodity): $mod = ($i % 2 );++$i;?><li>
                                                        <div class="banners">
                                                            <div>
                                                                <a href="<?php echo U('Project/project_detail?id='.$hot_commodity['commodity_id']);?>"
                                                                   target="_blank"><img
                                                                        src="/ChildrenPlatform/Public/uploads/commodity_image/<?php echo ($hot_commodity["middle_pic"]); ?>"
                                                                        alt="banner1"></a>
                                                            </div>
                                                        </div>
                                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="module hidden-xs col-sm-12 four-block">
                                    <div class="modcontent clearfix">
                                        <div class="policy-detail">
                                            <div class="banner-policy">
                                                <div class="policy policy1"><a href="#"> <span
                                                        class="ico-policy">&nbsp;</span>
                                                    90 day <br> money back </a></div>
                                                <div class="policy policy2"><a href="#"> <span
                                                        class="ico-policy">&nbsp;</span>
                                                    In-store exchange </a></div>
                                                <div class="policy policy3"><a href="#"> <span
                                                        class="ico-policy">&nbsp;</span>
                                                    lowest price guarantee </a></div>
                                                <div class="policy policy4"><a href="#"> <span
                                                        class="ico-policy">&nbsp;</span>
                                                    shopping guarantee </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //Block Spotlight1  -->
            <!-- Main Container  -->
            <div class="main-container container">
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <?php if(is_array($hot)): $i = 0; $__LIST__ = array_slice($hot,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_1): $mod = ($i % 2 );++$i;?><div class="module tab-slider titleLine">
                                <h3 class="modtitle">&nbsp; <?php echo ($hot_1["name"]); ?></h3>
                                <div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
                                    <div class="loadeding"></div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                             data-effect="starwars" data-ajaxurl="#" data-type_source="0">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap">
                                                <!--<div class="item-sub-cat">-->
                                                <!--<ul class="ltabs-tabs cf">-->
                                                <!--<?php if(is_array($hot)): $i = 0; $__LIST__ = array_slice($hot,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ho_1): $mod = ($i % 2 );++$i;?>-->
                                                <!--<li class="ltabs-tab tab-sel" data-category-id="20"-->
                                                <!--data-active-content=".items-category-20"><span class="ltabs-tab-label"><?php echo ($ho_1["type"]); ?> </span>-->
                                                <!--</li>-->
                                                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                <!--<?php if(is_array($hot)): $i = 0; $__LIST__ = array_slice($hot,1,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ho_2): $mod = ($i % 2 );++$i;?>-->
                                                <!--<li class="ltabs-tab " data-category-id="20"-->
                                                <!--data-active-content=".items-category-20"><span class="ltabs-tab-label"><?php echo ($ho_2["type"]); ?> </span>-->
                                                <!--</li>-->
                                                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                <!--</ul>-->
                                                <!--</div>-->
                                            </div>
                                            <!-- End Tabs-->
                                        </div>
                                        <div class="ltabs-items-container">
                                            <!--Begin Items-->
                                            <div class="ltabs-items ltabs-items-selected items-category-20 grid"
                                                 data-total="10">
                                                <div class="ltabs-items-inner ltabs-slider">
                                                    <?php if(is_array($hot_1[hot_vo])): $i = 0; $__LIST__ = $hot_1[hot_vo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_1_list): $mod = ($i % 2 );++$i;?><div class="ltabs-item product-layout">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container">
                                                                        <img src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($hot_1_list["small_pic"]); ?>"
                                                                             alt="Apple Cinema 30&quot;"
                                                                             class="img-responsive"/>
                                                                    </div>
                                                                    <!--Sale Label-->
                                                                    <!--<span class="label label-sale">Sale</span>-->
                                                                    <!--full quick view block-->
                                                                    <a class="quickview visible-lg" target="_blank"
                                                                       href="<?php echo U('Project/project_detail?id='.$hot_1_list['commodity_id']);?>">
                                                                        马上浏览</a>
                                                                    <!--end full quick view block-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a target="_blank"
                                                                               href="<?php echo U('Project/project_detail?id='.$hot_1_list['commodity_id']);?>"><?php echo ($hot_1_list["name"]); ?></a>
                                                                        </h4>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <?php if(($hot_1_list["starnum"] == 0)): ?><span style="color: #ebdb2c"> 暂无评价</span>
                                                                                    <?php else: ?>
                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_1_list["starnum"] > 0)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_1_list["starnum"] > 1)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_1_list["starnum"] > 2)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_1_list["starnum"] > 3)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_1_list["starnum"] > 4)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span><?php endif; ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price">
                                                                            <span class="price-new">￥<?php echo ($hot_1_list["price"]); ?></span>
                                                                            <!--<span class="price-old">$62.00</span>-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <?php if(is_array($hot_1_list[vo2])): $i = 0; $__LIST__ = $hot_1_list[vo2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$collect_1): $mod = ($i % 2 );++$i; if(($collect_1["state"] == 1)): ?><button class="wishlist" type="button"
                                                                                        data-toggle="tooltip"
                                                                                        id="collect_btn_<?php echo ($hot_1_list["commodity_id"]); ?>"
                                                                                        onclick="collect('<?php echo ($collect_1["state"]); ?>','<?php echo ($hot_1_list["commodity_id"]); ?>')">
                                                                                    <i class="fa fa-heart"></i>
                                                                                    <span id="collect_font_<?php echo ($hot_1_list["commodity_id"]); ?>"> 取消收藏</span>
                                                                                </button>
                                                                                <?php else: ?>
                                                                                <button class="wishlist" type="button"
                                                                                        id="collect_btn_<?php echo ($hot_1_list["commodity_id"]); ?>"
                                                                                        onclick="collect('<?php echo ($collect_1["state"]); ?>','<?php echo ($hot_1_list["commodity_id"]); ?>')">
                                                                                    <i class="fa fa-heart"></i>
                                                                                    <span id="collect_font_<?php echo ($hot_1_list["commodity_id"]); ?>"> 添加到我的收藏</span>
                                                                                </button><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </div>


                                            </div>
                                        </div>
                                        <!--End Items-->
                                    </div>

                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php if(is_array($hot)): $i = 0; $__LIST__ = array_slice($hot,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_2): $mod = ($i % 2 );++$i;?><div class="module tab-slider titleLine">
                                <h3 class="modtitle">&nbsp; <?php echo ($hot_2["name"]); ?></h3>
                                <div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
                                    <div class="loadeding"></div>
                                    <div class="ltabs-wrap ">
                                        <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                             data-effect="starwars" data-ajaxurl="#" data-type_source="0">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap">
                                            </div>
                                            <!-- End Tabs-->
                                        </div>
                                        <div class="ltabs-items-container">
                                            <!--Begin Items-->
                                            <div class="ltabs-items  ltabs-items-selected items-category-1 grid"
                                                 data-total="10">
                                                <div class="ltabs-items-inner ltabs-slider ">
                                                    <?php if(is_array($hot_2[hot_vo])): $i = 0; $__LIST__ = $hot_2[hot_vo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_2_list): $mod = ($i % 2 );++$i;?><div class="ltabs-item product-layout">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container">
                                                                        <img src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($hot_2_list["small_pic"]); ?>"
                                                                             alt="Apple Cinema 30&quot;"
                                                                             class="img-responsive"/>
                                                                    </div>
                                                                    <!--full quick view block-->
                                                                    <a class="quickview visible-lg" target="_blank"
                                                                       href="<?php echo U('Project/project_detail?id='.$hot_2_list['commodity_id']);?>">
                                                                        马上浏览</a>
                                                                    <!--end full quick view block-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a target="_blank"
                                                                               href="<?php echo U('Project/project_detail?id='.$hot_2_list['commodity_id']);?>"><?php echo ($hot_2_list["name"]); ?></a>
                                                                        </h4>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <?php if(($hot_2_list["starnum"] == 0)): ?><span style="color: #ebdb2c"> 暂无评价</span>
                                                                                    <?php else: ?>
                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_2_list["starnum"] > 0)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_2_list["starnum"] > 1)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_2_list["starnum"] > 2)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_2_list["starnum"] > 3)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                                    <span class="fa fa-stack">
                                                                                    <?php if(($hot_2_list["starnum"] > 4)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span><?php endif; ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price">
                                                                            <span class="price-new">￥<?php echo ($hot_2_list["price"]); ?></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="button-group">
                                                                        <?php if(is_array($hot_2_list[vo2])): $i = 0; $__LIST__ = $hot_2_list[vo2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$collect_2): $mod = ($i % 2 );++$i; if(($collect_2["state"] == 1)): ?><button class="wishlist" type="button"
                                                                                        data-toggle="tooltip"
                                                                                        id="collect_btn_<?php echo ($hot_2_list["commodity_id"]); ?>"
                                                                                        onclick="collect('<?php echo ($collect_2["state"]); ?>','<?php echo ($hot_2_list["commodity_id"]); ?>')">
                                                                                    <i class="fa fa-heart"></i>
                                                                                    <span id="collect_font_<?php echo ($hot_2_list["commodity_id"]); ?>"> 取消收藏</span>
                                                                                </button>
                                                                                <?php else: ?>
                                                                                <button class="wishlist" type="button"
                                                                                        id="collect_btn_<?php echo ($hot_1_list["commodity_id"]); ?>"
                                                                                        onclick="collect('<?php echo ($collect_2["state"]); ?>','<?php echo ($hot_2_list["commodity_id"]); ?>')">
                                                                                    <i class="fa fa-heart"></i>
                                                                                    <span id="collect_font_<?php echo ($hot_2_list["commodity_id"]); ?>"> 添加到我的收藏</span>
                                                                                </button><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                                    </div>
                                                                </div><!-- right block -->
                                                            </div>
                                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-container">
    <section class="footer-top">
        <div class="container content">
            <div class="row">
                <div class="col-sm-6 col-md-3 box-information">
                    <div class="module clearfix">
                        <h3 class="modtitle">综合信息</h3>
                        <div class="modcontent">
                            <ul class="menu">
                                <li><a href="#">关于我们</a></li>
                                <li><a href="#">常见问题</a></li>
                                <li><a href="#">联系我们</a></li>
                                <li><a href="#">加入我们</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 box-service">
                    <div class="module clearfix">
                        <h3 class="modtitle">周边服务</h3>
                        <div class="modcontent">
                            <ul class="menu">
                                <li><a href="#">友情链接</a></li>
                                <li><a href="#">帮助信息</a></li>
                                <li><a href="#">活动中心</a></li>
                                <li><a href="#">侵权申述</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 box-account">
                    <div class="module clearfix">
                        <h3 class="modtitle">合作机构</h3>
                        <div class="modcontent">
                            <ul class="menu">
                                <li><a href="#">暂无</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 collapsed-block ">
                    <div class="module clearfix">
                        <h3 class="modtitle">联系方式 </h3>
                        <div class="modcontent">
                            <ul class="contact-address">
                                <li style="padding-top: 10px"><span class="fa fa-map-marker"></span> 大连东软信息学院</li>
                                <li><span class="fa fa-envelope-o"></span> Email: <a href="#">534889865@qq.com</a>
                                </li>
                                <li><span class="fa fa-phone">&nbsp;</span> 17640410053</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom-block ">
        <div class=" container">
            <div class="row">
                <div class="col-sm-5 copyright-text"><a target="_blank" href="http://111.230.35.12/ChildrenPlatform/">官网首页</a>
                </div>
                <div class="col-sm-7">
                    <div class="block-payment text-right"><img
                            src="/ChildrenPlatform/Public/frontdesk/image/demo/content/payment.png" alt="payment" title="payment">
                    </div>
                </div>
                <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
            </div>
        </div>
    </div>
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


<!-- Theme files
============================================ -->
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/application.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/addtocart.js"></script>
<script src="/ChildrenPlatform/Public/PostbirdAlertBox/js/postbirdAlertBox.min.js"></script>
</body>
</html>