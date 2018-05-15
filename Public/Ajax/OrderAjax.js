function application_for_refund(user_id, order_id,state) {
    if (state == 7){
        var content = "你确定要退款吗"
    } else if (state == 5){
        var content = "你确定要退货吗"
    } else if (state == 4){
        var content = "收货后不能退货，你确定吗"
    }
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': content,
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: AppUrl + "/Home/Order/application_for_refund",
                data: {"user_id": user_id, "order_id": order_id,"state":state},
                type: "POST",
                dataType: "JSON",
                success: function (msg) {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': msg.message,
                        'okBtn': '确认',
                        onConfirm: function () {
                            $('#operation_' + order_id).html(msg.operation);
                            $('#state_' + order_id).html(msg.state)
                        }
                    });
                },
                error: function () {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': "网络错误",
                        'okBtn': '确认',
                        onConfirm: function () {
                        }
                    });
                }
            });
        }
    })
}