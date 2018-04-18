//登录
jQuery(document).ready(function () {
    $('#error').hide();
    var posturl = AppUrl + "/Home/Index/login";
    $('#login').click(function () {
        $.post(posturl, {
            'telephone': $("#l_telephone").val(),
            'password': $("#l_password").val(),
        }, function (data) {
            if (data.flag == 1) {
                location.reload();
            } else if (data.flag == 2) {
                $('#error').hide();
                PostbirdAlertBox.alert({
                    'title': '提示',
                    'content': "该账户因违规被禁封！",
                    'okBtn': '确认',
                })
            } else if (data.flag == 0) {
                $('#error').show();
            }
        })
    })
});

//注册验证
jQuery(document).ready(function () {
    $('#mess_success').hide();
    $('#mess_error').hide();
    $('#telephone').blur(
        function () {
            var telephone = $(this).val();
            $.post(AppUrl + "/Home/Index/check_tel", {
                'telephone': telephone
            }, function (data) {
                if (data == 0) {
                    error['telephone'] = 0;
                    $('#mess_error').hide();
                    $('#mess_success').show();
                } else {
                    error['telephone'] = 1;
                    $('#mess_error').attr('title', data);
                    $('#mess_success').hide();
                    $('#mess_error').show();
                }
            })
        }
    )
});

function collect(state, commodity_id) {
    if (check_user_id == "") {
        PostbirdAlertBox.confirm({
            'title': '提示',
            'content': '请先登录',
            'okBtn': '去登录',
            'onConfirm': function () {
                $('.box2').show();
            }
        });
    } else {
        var collect_num = $("#collect_num").html();
        $.ajax({
            url: AppUrl+"/Home/Index/collect",
            data: {"state": state, "user_id": check_user_id, "commodity_id": commodity_id},
            type: "POST",
            dataType: "JSON",
            success: function (msg) {
                if (msg == 1) {
                    $("#collect_btn_" + commodity_id).attr("onclick", "collect('1','" + commodity_id + " ')");
                    $("#collect_font_" + commodity_id).html("取消收藏");
                    $("#collect_num").html(parseInt(collect_num)+1);
                }
                if (msg == 2) {
                    $("#collect_btn_" + commodity_id).attr("onclick", "collect('0','" + commodity_id + " ')");
                    $("#collect_font_" + commodity_id).html("添加到我的收藏");
                    $("#collect_num").html(parseInt(collect_num)-1);
                }
            },
            error:function () {
                alert("网络错误");
            }
        });
    }
}

function search_item() {
    var value = $("#search_value").val();
    if(value == ""){
        PostbirdAlertBox.alert({
            'title': '提示',
            'content': "输入不能为空！",
            'okBtn': '确认',
        });
    }else {
        var type_id = $("#category_id").val();
        window.open("search?type_id="+ type_id + "&value=" + value);
    }
}