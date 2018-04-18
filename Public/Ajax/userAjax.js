//删除用户
function del_user(u_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '删除操作不可逆，确认删除',
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: "del_user",
                data: {"u_id": u_id},
                type: "GET",
                dataType: "JSON",
                success: function () {
                    $("#u_" + u_id).remove();
                },
                error: function () {
                    alert("删除失败");
                }
            });
        }
    });
}

//重置密码
function editpswd(u_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '是否重置密码',
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: "editpswd",
                data: {"u_id": u_id},
                type: "GET",
                dataType: "JSON",
                success: function (msg) {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': msg,
                        'okBtn': '确认',
                    })
                }
            });
        }
    });
}

//修改状态
function changestate(i_id, state) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '确认修改',
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: "changestate",
                data: {"i_id": i_id, "state": state},
                type: "POST",
                dataType: "JSON",
                success: function () {
                    if (state == 0) {
                        $("#change_" + i_id).attr("onclick", "changestate('" + i_id + " ',1)");
                        $("#change_" + i_id).html("暂停使用");
                        $("#state_" + i_id).attr("class", "label label-success");
                        $("#state_" + i_id).html("正常");
                    } else {
                        $("#change_" + i_id).attr("onclick", "changestate('" + i_id + " ',0)");
                        $("#change_" + i_id).html("取消禁用");
                        $("#state_" + i_id).attr("class", "label label-danger");
                        $("#state_" + i_id).html("禁用");
                    }
                },
            })
        }
    })
}

function user_add() {
    PostbirdAlertBox.prompt({
        title: '请输入插入数量',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data == "") {
                alert("输入不能为空！");
            } else if (isNaN(data)) {
                alert("请输入数字！")
            } else {
                $.ajax({
                    url: "add_user",
                    data: {"k": data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            onConfirm: function () {
                                location.reload();
                            }
                        })
                    }
                });
            }
        }
    });
}