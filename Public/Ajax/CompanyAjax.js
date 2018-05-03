function add_commodity() {
    var data = $('#add_commodity_form').serialize() + "&small_pic=" + $('#finalImg_small').attr("src") + "&middle_pic=" + $('#finalImg_middle').attr("src");
    $.ajax({
        url: AppUrl + "/Home/Project/add_commodity",
        data: data,
        type: "POST",
        dataType: "JSON",
        success: function (msg) {
            //打印服务端返回的数据(调试用)
            // console.log(msg);
            PostbirdAlertBox.alert({
                'title': '提示',
                'content': msg.message,
                'okBtn': '确定',
                'onConfirm': function () {
                    if (msg.state != 0) {
                        $('#add_commodity_form')[0].reset();
                        $('#finalImg_small').attr("src", "");
                        $('#finalImg_middle').attr("src", "");
                    }
                }
            });
        },
        error: function () {
            alert("网络异常")
        }
    })
}