<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
	============================================ -->
    <title></title>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow"/>

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
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

<body class="res layout-subpage banners-effect-6">


<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
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
                                            <li><a href="#"><i class="fa fa-user"></i> 个人中心</a></li>
                                            <li><a href="<?php echo U('logout');?>"><i class="fa fa-pencil-square-o"></i> 退出登录</a>
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
                                        <p class="text-shopping-cart cart-total-full"><span id="cart_num"><?php echo ($cart_data["cart_num"]); ?></span>件物品
                                            - 共 ￥<span id="total_price"><?php echo ($cart_data["total_price"]); ?></span> 元</p><?php endif; ?>
                                </div>
                            </a>

                            <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
                                <?php if(($_SESSION['user_id']== null)): ?><p class="text-center"><span>你还未登录，请先登录</span></p>
                                    <p class="text-center">
                                        <a
                                                class="btn btn-mega checkout-cart login" href="#"><i
                                                class="fa fa-share"></i>立即登录</a>
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
                                                        <a href="<?php echo U('Project/project_detail?id='.$cart['commodity_id']);?>">
                                                            <img src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($cart["voo"]["small_pic"]); ?>"
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
                                                    <td class="text-right"><span id="cart_num_table"><?php echo ($cart_data["cart_num"]); ?></span>
                                                        件
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
                                                            <a href="<?php echo U('Project/project_type?id='.$type['type_id']);?>"
                                                               class="clearfix">
                                                                <strong><?php echo ($type["name"]); ?></strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 15%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <?php if(is_array($type[voo])): $i = 0; $__LIST__ = $type[voo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subsetType): $mod = ($i % 2 );++$i;?><li><a class="subcategory_item"
                                                                                           href="<?php echo U('Project/project_child_type?id='.$subsetType['subsetType_id']);?>"><?php echo ($subsetType["name"]); ?></a>
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
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        <div class="row">
            <!--Left Part Start -->
            <aside class="col-sm-4 col-md-3" id="column-left">
                <div class="module menu-category titleLine">
                    <h3 class="modtitle"><?php echo ($detail["name"]); ?></h3>
                    <div class="modcontent">
                        <div class="box-category">
                            <ul id="cat_accordion" class="list-group">
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Smartphone &
                                    Tablets</a> <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: block;">
                                        <li><a href="category.html">Men's Watches</a></li>
                                        <li><a href="category.html">Women's Watches</a></li>
                                        <li><a href="category.html">Kids' Watches</a></li>
                                        <li><a href="category.html">Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a> <span
                                        class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Cycling</a></li>
                                        <li><a href="category.html">Running</a></li>
                                        <li><a href="category.html">Swimming</a></li>
                                        <li><a href="category.html">Football</a></li>
                                        <li><a href="category.html">Golf</a></li>
                                        <li><a href="category.html">Windsurfing</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a> <span
                                        class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a> <span
                                        class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Men's Watches</a></li>
                                        <li><a href="category.html">Women's Watches</a></li>
                                        <li><a href="category.html">Kids' Watches</a></li>
                                        <li><a href="category.html">Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a> <span
                                        class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a> <span
                                        class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a> <span
                                        class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Sports</a> <span
                                        class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Home &amp; Garden</a><span
                                        class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a> <span
                                        class="dcjq-icon"></span></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </aside>
            <!--Left Part End -->
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
                <div class="products-category">
                    <!-- Filters -->
                    <div class="product-filter filters-panel">
                        <div class="row">
                            <div class="col-md-2 visible-lg">
                                <div class="view-mode">
                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid"
                                                data-toggle="tooltip" data-original-title="九宫格"><i
                                                class="fa fa-th"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                                data-original-title="列表"><i class="fa fa-th-list"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Filters -->
                    <!--changed listings-->
                    <div class="products-list row grid">
                        <?php if(is_array($company_goods)): $i = 0; $__LIST__ = $company_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="product-layout col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container">
                                            <img data-src="image/demo/shop/product/e11.jpg"
                                                 src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($goods["small_pic"]); ?>"
                                                 alt="Apple Cinema 30&quot;" class="img-responsive"/>
                                        </div>
                                        <!--end countdown box-->
                                        <!--full quick view block-->
                                        <a class="quickview  visible-lg" data-fancybox-type="iframe" target="_blank" href="<?php echo U('Project/project_detail?id='.$goods['commodity_id']);?>"> 查看详情</a>
                                        <!--end full quick view block-->
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a target="_blank" href="<?php echo U('Project/project_detail?id='.$goods['commodity_id']);?>"><?php echo ($goods["name"]); ?></a></h4>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <?php if(($goods["starnum"] == 0)): ?><span style="color: #ebdb2c"> 暂无评价</span>
                                                        <?php else: ?>
                                                        <span class="fa fa-stack">
                                                                                    <?php if(($goods["starnum"] > 0)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                        <span class="fa fa-stack">
                                                                                    <?php if(($goods["starnum"] > 1)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                        <span class="fa fa-stack">
                                                                                    <?php if(($goods["starnum"] > 2)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                        <span class="fa fa-stack">
                                                                                    <?php if(($goods["starnum"] > 3)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span>

                                                        <span class="fa fa-stack">
                                                                                    <?php if(($goods["starnum"] > 4)): ?><i class="fa fa-star fa-stack-1x"></i>
                                                                                        <?php else: ?>
                                                                                        <i class="fa fa-star-o fa-stack-1x"></i><?php endif; ?>
                                                                                </span><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <span class="price-new">￥<?php echo ($goods["price"]); ?></span>
                                                <!--<span class="price-old">$122.00</span>-->
                                                <!--<span class="label label-percent">-40%</span>-->
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p><?php echo ($goods["intro"]); ?></p>
                                            </div>
                                        </div>
                                    </div><!-- right block -->

                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>                    <!--// End Changed listings-->
                    <!-- Filters -->
                    <!-- //end Filters -->

                </div>

            </div>


        </div>
        <!--Middle Part End-->
    </div>
    <!-- Footer Container -->
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

<!-- Include Libs & Plugins
	============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
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


<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/addtocart.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/application.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/frontdesk/js/themejs/cpanel.js"></script>

</body>
</html>