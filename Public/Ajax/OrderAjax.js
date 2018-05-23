function application_for_refund(user_id, order_id, state) {
    if (state == 7) {
        var content = "你确定要退款吗"
    } else if (state == 5) {
        var content = "你确定要退货吗"
    } else if (state == 4) {
        var content = "收货后不能退货，你确定吗"
    }
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': content,
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: AppUrl + "/Home/Order/application_for_refund",
                data: {"user_id": user_id, "order_id": order_id, "state": state},
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

function create_order() {
    var data = $('#checkout_form').serialize();
    $.ajax({
        url: AppUrl + "/Home/Order/create_order",
        data: data,
        type: "POST",
        dataType: "JSON",
        success: function (msg) {
            PostbirdAlertBox.alert({
                'title': '提示',
                'content': msg,
                'okBtn': '确认',
                onConfirm: function () {
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

function sure_state(order_id, state) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': "确认操作",
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: AppUrl + "/Admin/Order/sure_state",
                data: {"order_id": order_id, "state": state},
                type: "POST",
                dataType: "JSON",
                success: function (msg) {
                    if (msg == 1) {
                        if (state == "6") {
                            $('#state_' + order_id).html("退货成功");
                            $("#state_" + order_id).attr("class", "label label-success");
                            $('#action_' + order_id).remove();
                        }
                        if (state == "8") {
                            $('#state_' + order_id).html("退款成功");
                            $("#state_" + order_id).attr("class", "label label-success");
                            $('#action_' + order_id).remove();
                        }
                    } else {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认'
                        });
                    }
                },
                error: function () {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': "网络错误",
                        'okBtn': '确认'
                    });
                }
            });
        }
    });
}

function del_order(order_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': "确认删除",
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: AppUrl + "/Admin/Order/delete_order",
                data: {"order_id": order_id},
                type: "POST",
                dataType: "JSON",
                success: function (msg) {
                    if (msg == 1) {
                        $('#order_' + order_id).remove();
                    } else {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认'
                        });
                    }
                },
                error: function () {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': "网络错误",
                        'okBtn': '确认'
                    });
                }
            });
        }
    });
}