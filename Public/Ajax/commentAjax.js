//删除用户
function del_comment(r_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '删除操作不可逆，确认删除',
        'okBtn': '确认',
        'onConfirm':function () {
            $.ajax({
                url: AppUrl + "/Admin/Comment/del_comment",
                data: {"r_id": r_id},
                type: "GET",
                dataType: "JSON",
                success: function () {
                    $("#co_" + r_id).remove();
                },
                error: function () {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': "网络错误",
                        'okBtn': '确认',
                    });
                }
            });
        }
    });
}
