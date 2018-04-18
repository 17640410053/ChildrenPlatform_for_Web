//添加到购物车
function addCart(commodity_id) {
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
        var commodity_num = document.getElementById("commodity_num").value;
        $.ajax({
            url: AppUrl+"/Home/Cart/addCart",
            data: {"commodity_id": commodity_id,"commodity_num": commodity_num},
            type: "POST",
            dataType: "JSON",
            success: function (msg) {
                if (msg == 1) {
                    addProductNotice('添加到购物车提醒', '<h3>成功添加到购物车</h3>', 'success');
                }
                if (msg == 0) {
                    addProductNotice('添加到购物车提醒', '<h3>未知错误，添加失败，请重试</h3>', 'success');
                }
            },
            error:function () {
                addProductNotice('添加到购物车提醒', '<h3>网络错误，添加败</h3>', 'fail');
            }
        })
    }
}