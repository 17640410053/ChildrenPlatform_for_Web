function del_follow(user_id, company_id,follow_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': "你确定要取消关注吗",
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: AppUrl + "/Home/Follow/un_follow",
                data: {"user_id": user_id, "company_id": company_id,"follow_id":follow_id},
                type: "POST",
                dataType: "JSON",
                success: function (msg) {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': msg,
                        'okBtn': '确认',
                        onConfirm: function () {
                            $('#follow_' + company_id).remove();
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
    });
}