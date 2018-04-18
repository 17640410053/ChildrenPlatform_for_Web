//删除用户
function del_carousel(c_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '删除操作不可逆，确认删除',
        'okBtn': '确认',
        'onConfirm':function () {
            $.ajax({
                url: "del_carousel",
                data: {"c_id": c_id},
                type: "GET",
                dataType: "JSON",
                success: function () {
                    $("#ca_" + c_id).remove();
                },
                error: function () {
                    alert("删除失败");
                }
            });
        }
    });
}

//修改状态
function change_state_carousel(c_id, state) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '确认修改',
        'okBtn': '确认',
        'onConfirm':function () {
            $.ajax({
                url: "change_state_carousel",
                data: {"c_id": c_id, "state": state},
                type: "POST",
                dataType: "JSON",
                success: function () {
                    if (state == 0) {
                        $("#change_ca_" + c_id).attr("onclick", "change_state_carousel('" + c_id + " ',1)");
                        $("#change_ca_" + c_id).html("暂停使用");
                        $("#state_ca_" + c_id).attr("class", "label label-success");
                        $("#state_ca_" + c_id).html("正常");
                    } else {
                        $("#change_ca_" + c_id).attr("onclick", "change_state_carousel('" + c_id + " ',0)");
                        $("#change_ca_" + c_id).html("取消禁用");
                        $("#state_ca_" + c_id).attr("class", "label label-danger");
                        $("#state_ca_" + c_id).html("禁用");
                    }
                },
            })
        }
    })
}