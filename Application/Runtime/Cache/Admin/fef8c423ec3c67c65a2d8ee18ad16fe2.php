<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="webthemez" name="author"/>
    <title>订单列表</title>
    <!-- Bootstrap Styles-->
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ChildrenPlatform/Public/PostbirdAlertBox/css/postbirdAlertBox.css">
    <script src="/ChildrenPlatform/Public/Ajax/userAjax.js"></script>

    <script>
        var AppUrl = "/ChildrenPlatform";
    </script>


    <script src="/ChildrenPlatform/Public/Ajax/OrderAjax.js"></script>
    <!-- Bootstrap Styles-->
    <link href="/ChildrenPlatform/Public/backstage/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="/ChildrenPlatform/Public/backstage/assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="/ChildrenPlatform/Public/backstage/assets/css/custom-styles.css" rel="stylesheet"/>
    <!-- TABLE STYLES-->
    <link href="/ChildrenPlatform/Public/backstage/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet"/>

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
                    <a href="#"><i class="fa fa-sitemap"></i> 项目管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo U('Project/typelist');?>"> 分类管理</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Project/prolist');?>"> 信息管理</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Carousel/carousellist');?>"> 轮播图管理</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo U('Comment/commentlist');?>"><i class="fa fa-desktop"></i> 评论管理</a>
                </li>
                <li>
                    <a class="active-menu" href="<?php echo U('Order/order_list');?>"><i class="fa fa-desktop"></i> 订单管理</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                订单管理
                <small> 操作员：<?php echo (session('username')); ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo U('Index/index');?>"> 主页</a></li>
                <li class="active"> 订单管理</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            项目列表
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>购买用户</th>
                                        <th>商品图片</th>
                                        <th>购买商品</th>
                                        <th>购买数量</th>
                                        <th>联系电话</th>
                                        <th>总价</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tr id="order_<?php echo ($order["order_id"]); ?>">
                                            <td><?php echo ($order["username"]); ?></td>
                                            <td><img src="/ChildrenPlatform/Public/Uploads/commodity_image/<?php echo ($order["commodity_image"]); ?>"
                                                     width="50"></td>
                                            <td><?php echo ($order["commodity_name"]); ?></td>
                                            <td><?php echo ($order["number"]); ?></td>
                                            <td><?php echo ($order["telephone"]); ?></td>
                                            <td><?php echo ($order["price"]); ?></td>
                                            <td>
                                                <?php if(($order["state"] == 0)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-danger">未支付</span><?php endif; ?>
                                                <?php if(($order["state"] == 1)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-success">等待发货</span><?php endif; ?>
                                                <?php if(($order["state"] == 2)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-success">等待收货</span><?php endif; ?>
                                                <?php if(($order["state"] == 3)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-success">等待验货</span><?php endif; ?>
                                                <?php if(($order["state"] == 4)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-success">交易成功</span><?php endif; ?>
                                                <?php if(($order["state"] == 5)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-danger">退货中</span><?php endif; ?>
                                                <?php if(($order["state"] == 6)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-success">退货成功</span><?php endif; ?>
                                                <?php if(($order["state"] == 7)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-danger">退款中</span><?php endif; ?>
                                                <?php if(($order["state"] == 8)): ?><span id="state_<?php echo ($order["order_id"]); ?>"
                                                          class="label label-success">退款成功</span><?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-info dropdown-toggle" aria-expanded="false"
                                                            data-toggle="dropdown"> 操作 <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <?php if(($order["state"] == 5)): ?><li id="action_<?php echo ($order["order_id"]); ?>">
                                                                <a id="change_<?php echo ($order["order_id"]); ?>"
                                                                   onclick="sure_state('<?php echo ($order["order_id"]); ?>','6')"
                                                                   href="javascript:;"><i
                                                                        class="icon-envelope"></i>确认退货</a>
                                                            </li><?php endif; ?>
                                                        <?php if(($order["state"] == 7)): ?><li id="action_<?php echo ($order["order_id"]); ?>">
                                                                <a id="change_<?php echo ($order["order_id"]); ?>"
                                                                   onclick="sure_state('<?php echo ($order["order_id"]); ?>','8')"
                                                                   href="javascript:;"><i
                                                                        class="icon-envelope"></i>确认退款</a>
                                                            </li><?php endif; ?>
                                                        <li><a></i>
                                                            查看详情</a></li>
                                                        <li><a onclick="del_order('<?php echo ($order["order_id"]); ?>')"
                                                               href="javascript:;">
                                                            删除订单</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/ChildrenPlatform/Public/backstage/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="/ChildrenPlatform/Public/backstage/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- Custom Js -->
<script src="/ChildrenPlatform/Public/backstage/assets/js/custom-scripts.js"></script>

<script src="/ChildrenPlatform/Public/PostbirdAlertBox/js/postbirdAlertBox.min.js"></script>

</body>

</html>