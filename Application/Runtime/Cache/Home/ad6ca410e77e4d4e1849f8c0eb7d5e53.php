<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
	============================================ -->
    <title><?php echo ($type); ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow"/>

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script>
        var AppUrl = "/ChildrenPlatform";
        var check_u_id = "<?php echo (session('u_id')); ?>"
    </script>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="/ChildrenPlatform/Public/Ajax/indexAjax.js"></script>
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/postbirdAlertBox.css">
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

<body class="res layout-subpage banners-effect-6">


<div id="wrapper" class="wrapper-full ">
    <header id="header" class=" variantleft type_1">
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
                                            <li><a href="#"><i class="fa fa-user"></i> 个人中心</a></li>
                                            <li><a href="<?php echo U('Index/logout');?>"><i class="fa fa-pencil-square-o"></i>
                                                退出登录</a>
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
                                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mt): $mod = ($i % 2 );++$i;?><option value="<?php echo ($mt["m_id"]); ?>"><?php echo ($mt["type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
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
                                                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mt): $mod = ($i % 2 );++$i;?><li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="<?php echo U('Project/projectype?id='.$mt['m_id']);?>"
                                                               class="clearfix">
                                                                <strong><?php echo ($mt["type"]); ?></strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 15%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <?php if(is_array($mt[voo])): $i = 0; $__LIST__ = $mt[voo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($i % 2 );++$i;?><li><a class="subcategory_item"
                                                                                           href="<?php echo U('Project/projectchildtype?id='.$lv['s_id']);?>"><?php echo ($lv["type"]); ?></a>
                                                                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
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

    <div id="search_div" style="min-height: 500px">
        <div id="index_body">
            <div class="main-container container">
                <ul class="breadcrumb">
                    <li><a href="#"> <?php echo ($type); ?></a></li>
                </ul>
                <div class="row">
                    <!--Left Part Start -->
                    <aside class="col-sm-4 col-md-3" id="column-left">
                        <div class="module menu-category titleLine">
                            <h3 class="modtitle"> 热门推荐</h3>
                            <div class="modcontent">
                                <div class="box-category">
                                    <ul id="cat_accordion" class="list-group">
                                        <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?><li class=""><a href="<?php echo U('Project/projectchildtype?id='.$hot['s_id']);?>"
                                                            class="cutom-parent"><?php echo ($hot["type"]); ?></a>
                                                <span class="dcjq-icon"></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <div class="module latest-product titleLine">
                            <h3 class="modtitle"> 其他推荐</h3>
                            <div class="modcontent ">
                                <?php if(is_array($other)): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$other): $mod = ($i % 2 );++$i;?><div class="product-latest-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="<?php echo U('Project/projectdetail?id='.$other['f_id']);?>"
                                                   target="_blank"><img
                                                        src="/ChildrenPlatform/Public/uploads/itempic/<?php echo ($other["s_pic"]); ?>"
                                                        alt="<?php echo ($other["f_name"]); ?>"
                                                        class="img-responsive"
                                                        style="width: 100px; height: 100px;"></a>
                                            </div>
                                            <div class="media-body">
                                                <div class="caption" style="margin-top: 12px">
                                                    <h4><a href="<?php echo U('Project/projectdetail?id='.$other['f_id']);?>"
                                                           target="_blank"> <?php echo ($other["f_name"]); ?></a></h4>

                                                    <div class="price">
                                                        <span class="price-new"> ￥<?php echo ($other["price"]); ?></span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <?php if(($other["star"] == 0)): ?><span style="color: #ebdb2c"> 暂无评价</span>
                                                                <?php else: ?>
                                                                <span class="fa fa-stack">
                                                                                    <?php if(($other["star"] > 0)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($other["star"] > 1)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($other["star"] > 2)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($other["star"] > 3)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($other["star"] > 4)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                            </div>
                        </div>
                    </aside>

                    <div id="content" class="col-md-9 col-sm-8">
                        <div class="products-category">
                            <div class="products-list row grid">
                                <?php if(is_array($item)): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "暂无匹配结果！" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="product-layout col-md-4 col-sm-6 col-xs-12 ">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container lazy second_img ">
                                                    <img data-src="/ChildrenPlatform/Public/uploads/itempic/<?php echo ($item["s_pic"]); ?>" src=""
                                                         alt="Apple Cinema 30&quot;" class="img-responsive"/>
                                                </div>
                                                <a class="quickview visible-lg"
                                                   href="<?php echo U('Project/projectdetail?id='.$item['f_id']);?>"
                                                   target="_blank">
                                                    马上浏览</a>
                                            </div>


                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="<?php echo U('Project/projectdetail?id='.$item['f_id']);?>">
                                                        <?php echo ($item["f_name"]); ?></a></h4>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <?php if(($item["star"] == 0)): ?><span style="color: #ebdb2c"> 暂无评价</span>
                                                                <?php else: ?>
                                                                <span class="fa fa-stack">
                                                                                    <?php if(($item["star"] > 0)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($item["star"] > 1)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($item["star"] > 2)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($item["star"] > 3)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                                <span class="fa fa-stack">
                                                                                    <?php if(($item["star"] > 4)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span><?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div class="price">
                                                        <span class="price-new"> ￥<?php echo ($item["price"]); ?></span>
                                                        <!--<span class="price-old">$122.00</span>-->
                                                        <!--<span class="label label-percent">-40%</span>-->
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <?php if(is_array($item[voo])): $i = 0; $__LIST__ = $item[voo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$collect): $mod = ($i % 2 );++$i; if(($collect["state"] == 1)): ?><button class="wishlist" type="button"
                                                                    data-toggle="tooltip"
                                                                    id="collect_btn_<?php echo ($item["f_id"]); ?>"
                                                                    onclick="collect('<?php echo ($collect["state"]); ?>','<?php echo ($item["f_id"]); ?>')">
                                                                <i class="fa fa-heart"></i>
                                                                <span id="collect_font_<?php echo ($item["f_id"]); ?>"> 取消收藏</span>
                                                            </button>
                                                            <?php else: ?>
                                                            <button class="wishlist" type="button"
                                                                    id="collect_btn_<?php echo ($item["f_id"]); ?>"
                                                                    onclick="collect('<?php echo ($collect["state"]); ?>','<?php echo ($item["f_id"]); ?>')">
                                                                <i class="fa fa-heart"></i>
                                                                <span id="collect_font_<?php echo ($item["f_id"]); ?>"> 添加到我的收藏</span>
                                                            </button><?php endif; endforeach; endif; else: echo "暂无匹配结果！" ;endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
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
</div>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/libs.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/jquery-ui/jquery-ui.min.js"></script>


<!-- Theme files
============================================ -->


<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/addtocart.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/application.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/cpanel.js"></script>


<script src="/ChildrenPlatform/Public/PostbirdAlertBox/js/postbirdAlertBox.min.js"></script>

</body>
</html>