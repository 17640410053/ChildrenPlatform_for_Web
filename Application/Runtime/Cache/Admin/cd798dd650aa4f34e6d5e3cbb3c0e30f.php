<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="webthemez" name="author"/>
    <title>查看详情</title>
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/postbirdAlertBox.css">
    <!-- Bootstrap Styles-->
    <link href="/ChildrenPlatform/Public/backstage/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="/ChildrenPlatform/Public/backstage/assets/css/font-awesome.css" rel="stylesheet"/>

    <link href="/ChildrenPlatform/Public/backstage/assets/css/select2.min.css" rel="stylesheet">
    <link href="/ChildrenPlatform/Public/backstage/assets/css/checkbox3.min.css" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="/ChildrenPlatform/Public/backstage/assets/css/custom-styles.css" rel="stylesheet"/>
    <script src="/ChildrenPlatform/Public/take_photo/js/takeimg.js"></script>
    <script src="/ChildrenPlatform/Public/Ajax/projectAjax.js"></script>
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo U('Index/index');?>"><strong>儿童生活娱乐信息共享平台</strong></a>

        <div id="sideNav" href="">
            <i class="fa fa-bars icon"></i>
        </div>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong> 张月晨</strong>
                            <span class="pull-right text-muted">
                                        <em>2017-11-10</em>
                                    </span>
                        </div>
                        <div>儿童生活娱乐信息平台是一个很好的平台...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong> 刘振德</strong>
                            <span class="pull-right text-muted">
                                        <em>2017-11-08</em>
                                    </span>
                        </div>
                        <div>大学生实习平台和儿童实习平台申请为合作关系...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong> 杨力</strong>
                            <span class="pull-right text-muted">
                                        <em>1017-11-05</em>
                                    </span>
                        </div>
                        <div>儿童生活娱乐信息平台申请结项，望周知...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-tasks">
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong> 用户信息统计</strong>
                                <span class="pull-right text-muted">60% 完成度</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong> 项目信息管理</strong>
                                <span class="pull-right text-muted">28% 完成度</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                    <span class="sr-only">28% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong> 评论信息管理</strong>
                                <span class="pull-right text-muted">60% 完成度</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong> 分类信息管理</strong>
                                <span class="pull-right text-muted"> 已完成</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">85% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Tasks</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> 新的消息
                            <span class="pull-right text-muted small">4 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 条新的事务
                            <span class="pull-right text-muted small">12 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> 消息
                            <span class="pull-right text-muted small">4 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> 会话
                            <span class="pull-right text-muted small">4 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> 服务器维护
                            <span class="pull-right text-muted small">4 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> 个人中心</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo U('Index/loginOut');?>"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i> 数据统计</a>
                </li>
                <li>
                    <a href="<?php echo U('Users/userlist');?>"><i class="fa fa-desktop"></i> 用户管理</a>
                </li>

                <li>
                    <a><i class="fa fa-sitemap"></i> 项目管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse in">
                        <li>
                            <a href="<?php echo U('Project/typelist');?>"> 分类管理</a>
                        </li>
                        <li>
                            <a class="active-menu" href="<?php echo U('Project/prolist');?>"> 信息管理</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Carousel/carousellist');?>"> 轮播图管理</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->

    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                查看详情
                <small> 操作员：<?php echo (session('username')); ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo U('Index/index');?>"> 主页</a></li>
                <li class="active"><a href="<?php echo U('Project/prolist');?>"> 信息管理</a></li>
                <li class="active"> 查看详情</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">查看详情</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-inline" name="up_pro_form" id="up_pro_form" action="<?php echo U('Project/up_img');?>" method="post" enctype="multipart/form-data" onsubmit="return check();">
                                <?php if(is_array($pro_detail)): $i = 0; $__LIST__ = $pro_detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><div class="form-group">
                                        <label>名 称：</label>
                                        <span id="f_name"><?php echo ($pro["name"]); ?></span>
                                        <img onclick="up_name('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>价 格：￥</label>
                                        <span id="price"><?php echo ($pro["price"]); ?></span>
                                        <img onclick="up_price('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>地 址：</label>
                                        <span id="address"><?php if(($pro["address"] == null)): ?>此项目未填写地址！<?php else: echo ($pro["address"]); endif; ?></span>
                                        <img onclick="up_address('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>电 话：</label>
                                        <span id="telephone"><?php if(($pro["telephone"] == null)): ?>此项目无联系电话！<?php else: echo ($pro["telephone"]); endif; ?></span>
                                        <img onclick="up_telephone('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div>
                                    <br>
                                    <div class="form-group" id="data_type">
                                        <label>类 型：</label>
                                        <span id="type"><?php echo ($pro["subsettype_id"]); ?></span>
                                        <img style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png"
                                             onclick="show_up_type()" href="javascript:;">
                                    </div>
                                    <div id="up_type" class="form-group">
                                        <label>类 型：</label>
                                        <select class="selectbox" style="width: 200px" name="type" id="sel_up_type">
                                            <option value="0" disabled selected>请选择类型</option>
                                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><optgroup label="<?php echo ($li["name"]); ?>">
                                                    <?php if(is_array($li[voo])): $i = 0; $__LIST__ = $li[voo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lio): $mod = ($i % 2 );++$i;?><option value="<?php echo ($lio["subsettype_id"]); ?>"><?php echo ($lio["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </optgroup><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <a class="btn btn-default" style="background: #00EEEE" onclick="up_type('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;">确认</a>
                                        <a class="btn btn-default" onclick="hide_up_type()" href="javascript:;">取消</a>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>网络地址：</label>
                                        <a href="<?php echo ($pro["url"]); ?>" target="_blank" id="url"><?php echo ($pro["url"]); ?></a>
                                        <img onclick="up_url('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div>
                                    <br>
                                    <!--小图-->
                                    <div class="form-group" id="s_img_show">
                                        <label>封面（little）：</label>
                                        <div class="col-sm-9 big-photo" style="margin-left: 5%">
                                            <div id="preview">
                                                <img id="imghead" border="0"
                                                     src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($pro["small_pic"]); ?>"
                                                     width="100" height="100">
                                            </div>
                                            <input type="file" name="s_img" onchange="previewImage(this)"
                                                   style="display: none;" id="previewImg">
                                            <div id="s_img__up_sum">
                                                <a class="btn btn-default" style="background: #00EEEE;margin-top: 15px"  onclick="up_s_img('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;" >确认</a>
                                                <a class="btn btn-default" style="margin-top: 15px;margin-left: 5px" onclick="esc_up_img()"  href="javascript:;">取消</a>
                                            </div>
                                        </div>
                                        <img onclick="$('#previewImg').click();" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div>
                                    <!--中图-->
                                    <div class="form-group" id="m_img_show">
                                        <label>封面（middle）：</label>
                                        <div class="col-sm-9 big-photo" style="margin-left: 5%">
                                            <div id="m_preview">
                                                <img id="m_imghead" border="0"
                                                     src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($pro["middle_pic"]); ?>"
                                                     width="200" height="100">
                                            </div>
                                            <input type="file" name="m_img" onchange="m_previewImage(this)"
                                                   style="display: none;" id="m_previewImg">
                                            <div id="m_img__up_sum">
                                                <a class="btn btn-default" style="background: #00EEEE;margin-top: 15px" onclick="up_m_img('<?php echo ($pro["commodity_id"]); ?>')" href="javascript:;" >确定</a>
                                                <a class="btn btn-default" style="margin-top: 15px;margin-left: 5px" onclick="esc_up_img()" href="javascript:;">取消</a>
                                            </div>
                                        </div>
                                        <img onclick="$('#m_previewImg').click();" href="javascript:;"
                                             style="margin-left:10px "
                                             src="/ChildrenPlatform/Public/frontdesk/image/theme/icons/modify.png">
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/jquery.metisMenu.js"></script>
<script src="/ChildrenPlatform/Public/backstage/assets/js/select2.full.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#s_img__up_sum").hide();
        $("#m_img__up_sum").hide();
        $("#up_type").hide();
        $(".selectbox").select2();
    });
</script>
<!-- Custom Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/custom-scripts.js"></script>
<script src="/ChildrenPlatform/Public/PostbirdAlertBox/js/postbirdAlertBox.min.js"></script>

</body>

</html>