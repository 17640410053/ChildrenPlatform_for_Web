//发表评论
function add_comment() {
    if (com_user_id == ""){
        PostbirdAlertBox.confirm({
            'title': '提示',
            'content': '请先登录',
            'okBtn': '去登录',
            'onConfirm':function () {
                $('.box2').show();
            }
        });
    }else {
        var details = $("#details").val();
        if (details == "输入你的评论"){
            PostbirdAlertBox.alert({
                'title': '提示',
                'content': "请输入正确的评论！",
                'okBtn': '确认',
            });
        }else {
            var count = $("#count-1").html();
            $.ajax({
                url: "../../add_cot",
                data: {"commodity_id": com_commodity_id,"user_id":com_user_id,"details":details},
                type: "POST",
                dataType: "JSON",
                success:function (msg) {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': msg,
                        'okBtn': '确认',
                        'onConfirm':function () {
                            $("#details").html("输入你的评论");
                            $("#count-1").html(parseInt(count)+1);
                            $("#count-2").html(parseInt(count)+1);
                            $("#review").load(location.href+" #review");
                        }
                    })
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(XMLHttpRequest.status);
                    alert(XMLHttpRequest.readyState);
                    alert(textStatus);
                },
                complete: function (XMLHttpRequest, textStatus) {
                    this; // 调用本次AJAX请求时传递的options参数
                }
            })
        }
    }
}

window.onload = function (){
    var oStar = document.getElementById("star");
    var aLi = oStar.getElementsByTagName("li");
    var oP = oStar.getElementsByTagName("p")[0];
    var i = iScore = iStar = star_num;
    fnPoint();

    for (i = 1; !(i > aLi.length); i++){
        aLi[i - 1].index = i;

        //鼠标移过显示分数
        aLi[i - 1].onmouseover = function (){
            fnPoint(this.index);
        };

        //鼠标离开后恢复上次评分
        aLi[i - 1].onmouseout = function (){
            fnPoint();
            //关闭浮动层
            oP.style.display = "none"
        };

        //点击后进行评分处理
        aLi[i - 1].onclick = function (){
            var Touch_Star = this.index;
            if (com_user_id == ""){
                PostbirdAlertBox.confirm({
                    'title': '提示',
                    'content': '请先登录',
                    'okBtn': '去登录',
                    'onConfirm':function () {
                        $('.box2').show();
                    }
                });
            }else if (check_star == "0"){
                PostbirdAlertBox.confirm({
                    'title': '提示',
                    'content': '评分只能一次，是否评分',
                    'okBtn': '确认',
                    'onConfirm':function () {
                        $.ajax({
                            url: "../../add_star",
                            data: {"commodity_id": com_commodity_id,"user_id":com_user_id,"starNum":Touch_Star},
                            type: "POST",
                            dataType: "JSON",
                            success:function (msg) {
                                check_star = "1";
                                PostbirdAlertBox.alert({
                                    'title': '提示',
                                    'content': "评论成功",
                                    'okBtn': '确认',
                                    'onConfirm':function () {
                                        iStar = msg;
                                        fnPoint(msg);
                                    }
                                });
                            }
                        })
                    }
                });
            }else {
                PostbirdAlertBox.alert({
                    'title': '提示',
                    'content': "请勿重复评论",
                    'okBtn': '确认',
                })
            }
        };
    }
    //评分处理
    function fnPoint(iArg){
        //分数赋值
        iScore = iArg || iStar;
        for (i = 0; !(i >= aLi.length); i++) aLi[i].className = !(i >= iScore) ? "on" : "";
    }
};