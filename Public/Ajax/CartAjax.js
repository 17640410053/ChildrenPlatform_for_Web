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
        var commodity_old_num = $("#commodity_num_" + commodity_id).html();
        $.ajax({
            url: AppUrl + "/Home/Cart/addCart",
            data: {"commodity_id": commodity_id, "commodity_num": commodity_num},
            type: "POST",
            dataType: "JSON",
            success: function (msg) {
                if (msg.state == 2) {
                    $("#commodity_num_" + commodity_id).html(parseInt(commodity_old_num) + parseInt(commodity_num));
                    $("#cart_num").html(msg.cart_num);
                    $("#total_price").html(msg.total_price);
                    $("#cart_num_table").html(msg.cart_num);
                    $("#total_price_table").html(msg.total_price);
                    addProductNotice('添加到购物车提醒', '<h3>成功添加到购物车</h3>', 'success');
                }
                if (msg.state == 1) {
                    addProductNotice('添加到购物车提醒', '<h3>成功添加到购物车</h3>', 'success');
                    var trHTML = "<tr id=\"cart_" + commodity_id + "\">\n" +
                        "<td class=\"text-center\" style=\"width:70px\">\n" +
                        "<a href=\"" + AppUrl + "/Home/Project/project_detail/id/" + commodity_id + "\"> <img src=\"" + AppUrl + "/Public/Uploads/commodity_image/" + msg.image + "\"\n" +
                        "style=\"width:70px\" alt=\"{$cart.voo.name}\"\n" +
                        "title=\"msg.name\" class=\"preview\"> </a>\n" +
                        "</td>\n" +
                        "<td class=\"text-left\"><a class=\"cart_product_name\" href=\"" + AppUrl + "/Home/Project/project_detail/id/" + commodity_id + "\">" + msg.name + "</a></td>\n" +
                        "<td class=\"text-center\"> x<span id=\"commodity_num_" + commodity_id + "\">" + commodity_num + "</span></td>\n" +
                        "<td class=\"text-center\"> ￥" + msg.price + "</td>\n" +
                        "<td class=\"text-right\">\n" +
                        "<a href=\"" + AppUrl + "/Home/project_detail/id/" + commodity_id + "\" class=\"fa fa-edit\"></a>\n" +
                        "</td>\n" +
                        "<td class=\"text-right\">\n" +
                        "<a onclick=\"deleteCart('" + commodity_id + "')\" class=\"fa fa-times fa-delete\"></a>\n" +
                        "</td>\n" +
                        "</tr>";
                    $("#cart_table").append(trHTML);
                    $("#commodity_num_" + commodity_id).html(parseInt(commodity_old_num) + parseInt(commodity_num));
                    $("#cart_num").html(msg.cart_num);
                    $("#total_price").html(msg.total_price);
                    $("#cart_num_table").html(msg.cart_num);
                    $("#total_price_table").html(msg.total_price);
                }
                if (msg.state == 0) {
                    addProductNotice('添加到购物车提醒', '<h3>添加到购物车失败，请重试</h3>', '未知错误');
                }
            },
            error: function () {
                addProductNotice('添加到购物车提醒', '<h3>添加到购物车失败</h3>', '网络错误');
            }
        })
    }
}

//删除购物车
function deleteCart(commodity_id) {
    $.ajax({
        url: AppUrl + "/Home/Cart/deleteCart",
        data: {"commodity_id": commodity_id},
        type: "POST",
        dataType: "JSON",
        success: function (msg) {
            if (msg.state == 1) {
                $("#cart_num").html(msg.cart_num);
                $("#total_price").html(msg.total_price);
                $("#cart_num_table").html(msg.cart_num);
                $("#total_price_table").html(msg.total_price);
                $("#cart_" + commodity_id).remove();
                addProductNotice('移除购物车提醒', '<h3>已从你的购物车移除</h3>', 'success');
            } else {
                addProductNotice('移除购物车提醒', '<h3>移除失败，请重试</h3>', '未知错误');
            }
        },
        error: function () {
            addProductNotice('移除购物车提醒', '<h3>移除购物车失败</h3>', '网络错误');
        }
    })
}