<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>登录界面</title>
    <link href="/ChildrenPlatform/Public/jQueryLogin/css/default.css" rel="stylesheet" type="text/css"/>
    <!--必要样式-->
    <link href="/ChildrenPlatform/Public/jQueryLogin/css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="/ChildrenPlatform/Public/jQueryLogin/css/demo.css" rel="stylesheet" type="text/css"/>
    <link href="/ChildrenPlatform/Public/jQueryLogin/css/loaders.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class='login'>
    <div class='login_title'>
        <span>管理员登录</span>
    </div>
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>
                <img alt="" src='/ChildrenPlatform/Public/jQueryLogin/img/user_icon_copy.png'>
            </div>
            <input name="login" placeholder='用户名' maxlength="16" type='text' autocomplete="off" value="root"/>
            <div class='validation'>
                <img alt="" src='/ChildrenPlatform/Public/jQueryLogin/img/tick.png'>
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src='/ChildrenPlatform/Public/jQueryLogin/img/lock_icon_copy.png'>
            </div>
            <input name="pwd" placeholder='密码' maxlength="16" type='text' autocomplete="off">
            <div class='validation'>
                <img alt="" src='/ChildrenPlatform/Public/jQueryLogin/img/tick.png'>
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src='/ChildrenPlatform/Public/jQueryLogin/img/key.png'>
            </div>
            <input name="code" placeholder='验证码' maxlength="4" type='text' name="ValidateNum" autocomplete="off">
            <div class='validation' style="opacity: 1; right: -5px;top: -3px;">
                <canvas class="J_codeimg" id="myCanvas" onclick="Code();">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
            </div>
        </div>
        <div class='login_fields__submit'>
            <input type='button' value='登录'>
        </div>
    </div>
    <div class='success'>
    </div>
    <div class='disclaimer'>
        <p>欢迎登陆后台管理系统</p>
    </div>
</div>
<div class='authent'>
    <div class="loader" style="height: 44px;width: 44px;margin-left: 28px;">
        <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <p>认证中...</p>
</div>
<div class="OverWindows"></div>
<link href="/ChildrenPlatform/Public/jQueryLogin/layui/css/layui.css" rel="stylesheet" type="text/css"/>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/ChildrenPlatform/Public/jQueryLogin/js/jquery-ui.min.js"></script>
<script type="text/javascript" src='/ChildrenPlatform/Public/jQueryLogin/js/stopExecutionOnTimeout.js?t=1'></script>
<script src="/ChildrenPlatform/Public/jQueryLogin/layui/layui.js" type="text/javascript"></script>
<script src="/ChildrenPlatform/Public/jQueryLogin/js/Particleground.js" type="text/javascript"></script>
<script src="/ChildrenPlatform/Public/jQueryLogin/Js/Treatment.js" type="text/javascript"></script>
<script src="/ChildrenPlatform/Public/jQueryLogin/js/jquery.mockjax.js" type="text/javascript"></script>
<script type="text/javascript">
    var canGetCookie = 0;//是否支持存储Cookie 0 不支持 1 支持
    var ajaxmockjax = 0;//是否启用虚拟Ajax的请求响 0 不启用  1 启用
    //默认账号密码
    var truelogin = "kbcxy";
    var truepwd = "mcwjs";

    var CodeVal = 0;
    Code();
    function Code() {
        if (canGetCookie == 1) {
            createCode("AdminCode");
            var AdminCode = getCookieValue("AdminCode");
            showCheck(AdminCode);
        } else {
            showCheck(createCode(""));
        }
    }
    function showCheck(a) {
        CodeVal = a;
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        ctx.clearRect(0, 0, 1000, 1000);
        ctx.font = "80px 'Hiragino Sans GB'";
        ctx.fillStyle = "#E8DFE8";
        ctx.fillText(a, 0, 100);
    }
    $(document).keypress(function (e) {
        // 回车键事件
        if (e.which == 13) {
            $('input[type="button"]').click();
        }
    });
    //粒子背景特效
//    $('body').particleground({
//        dotColor: '#E8DFE8',
//        lineColor: '#133b88'
//    });
    $('input[name="pwd"]').focus(function () {
        $(this).attr('type', 'password');
    });
    $('input[type="text"]').focus(function () {
        $(this).prev().animate({'opacity': '1'}, 200);
    });
    $('input[type="text"],input[type="password"]').blur(function () {
        $(this).prev().animate({'opacity': '.5'}, 200);
    });
    $('input[name="login"],input[name="pwd"]').keyup(function () {
        var Len = $(this).val().length;
        if (!(!$(this).val() != '' || !(Len >= 5))) {
            $(this).next().animate({
                'opacity': '1',
                'right': '30'
            }, 200);
        } else {
            $(this).next().animate({
                'opacity': '0',
                'right': '20'
            }, 200);
        }
    });
    var open = 1;
    layui.use('layer', function () {
        //非空验证
        $('input[type="button"]').click(function () {
            var login = $('input[name="login"]').val();
            var pwd = $('input[name="pwd"]').val();
            var code = $('input[name="code"]').val();
            if (login == '') {
                ErroAlert('请输入您的账号');
            } else if (pwd == '') {
                ErroAlert('请输入密码');
            } else if (code == '') {
                ErroAlert('请输入验证码');
            } else {
                var JsonData = {code: code};
                if (JsonData.code.toUpperCase()==CodeVal.toUpperCase()){
                    $('.login').addClass('test'); //倾斜特效
                    setTimeout(function () {
                        $('.login').addClass('testtwo'); //平移特效
                    }, 300);
                    setTimeout(function () {
                        $('.authent').show().animate({right: -320}, {
                            easing: 'easeOutQuint',
                            duration: 600,
                            queue: false
                        });
                        $('.authent').animate({opacity: 1}, {
                            duration: 200,
                            queue: false
                        }).addClass('visible');
                    }, 500);
                    //此处做为ajax内部判断
                    $.ajax({
                        url: "checkLogin",
                        data: {"username": login, "password": pwd, "code": code},
                        type: "POST",
                        dataType: "JSON",
                        success: function (data) {
                            setTimeout(function () {
                                $('.authent').show().animate({right: 90}, {
                                    easing: 'easeOutQuint',
                                    duration: 600,
                                    queue: false
                                });
                                $('.authent').animate({opacity: 0}, {
                                    duration: 200,
                                    queue: false
                                }).addClass('visible');
                                $('.login').removeClass('testtwo'); //平移特效
                            }, 2000);
                            setTimeout(function () {
                                $('.authent').hide();
                                $('.login').removeClass('test');
                                if (data.Status == '1') {
                                    //登录成功
                                    $('.login div').fadeOut(100);
                                    $('.success').fadeIn(1000);
                                    $('.success').html(data.Text);
                                    window.location  = "index.html";
                                } else {
                                    ErroAlert(data.Text);
                                }
                            }, 2400);
                        }
                    });
                }else {
                    ErroAlert('请输入正确的验证码');
                }
            }
        })
    });
</script>
</body>
</html>