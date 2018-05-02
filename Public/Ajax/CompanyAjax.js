function add_commodity() {
    $.ajax({
        url: AppUrl + "/Home/Project/add_commodity",
        data: $('#add_commodity_form').serialize(),
        type: "POST",
        dataType: "JSON",
        success: function (msg) {
            //打印服务端返回的数据(调试用)
            // console.log(msg);
            alert(msg);
        },
        error: function () {
            alert("网络异常")
        }
    })
}