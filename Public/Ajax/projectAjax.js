//删除项目
function delpro(f_id) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '删除操作不可逆，确认删除',
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: "delpro",
                data: {"commodity_id": f_id},
                type: "GET",
                dataType: "JSON",
                success: function () {
                    $("#f_" + f_id).remove();
                },
                error: function () {
                    alert("删除失败");
                }
            });
        }
    })
}

//修改状态
function changeprostate(f_id, state) {
    PostbirdAlertBox.confirm({
        'title': '提示',
        'content': '确认修改',
        'okBtn': '确认',
        'onConfirm': function () {
            $.ajax({
                url: "changestate",
                data: {"commodity_id": f_id, "state": state},
                type: "POST",
                dataType: "JSON",
                success: function () {
                    if (state == 0) {
                        $("#change_" + f_id).attr("onclick", "changeprostate('" + f_id + " ',1)");
                        $("#change_" + f_id).html("暂停使用");
                        $("#state_" + f_id).attr("class", "label label-success");
                        $("#state_" + f_id).html("正常");
                    } else {
                        $("#change_" + f_id).attr("onclick", "changeprostate('" + f_id + " ',0)");
                        $("#change_" + f_id).html("取消禁用");
                        $("#state_" + f_id).attr("class", "label label-danger");
                        $("#state_" + f_id).html("禁用");
                    }
                },
            })
        }
    })
}

function up_name(f_id) {
    PostbirdAlertBox.prompt({
        title: '请输入名称',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != '') {
                $.ajax({
                    url: "../../save_pro",
                    data: {"commodity_id": f_id, "name": data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $("#f_name").html(data);
                            }
                        });
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
            } else {
                alert("名称不能为空")
            }
        }
    });
}

function up_price(f_id) {
    PostbirdAlertBox.prompt({
        title: '请输入价格',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != '') {
                $.ajax({
                    url: "../../save_pro",
                    data: {"commodity_id": f_id, "price": data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $("#price").html(data);
                            }
                        });
                    },
                })
            } else {
                alert("价格不能为空")
            }
        }
    });
}

function up_address(f_id) {
    PostbirdAlertBox.prompt({
        title: '请输入地址',
        okBtn: '提交',
        onConfirm: function (data) {
            $.ajax({
                url: "../../save_pro",
                data: {"commodity_id": f_id, "address": data},
                type: "POST",
                dataType: "JSON",
                success: function (msg) {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': msg,
                        'okBtn': '确认',
                        'onConfirm': function () {
                            if (data != '') {
                                $("#address").html(data);
                            } else {
                                $("#address").html("此项目未填写地址！");
                            }
                        }
                    });
                },
            })
        }
    });
}

function up_telephone(f_id) {
    PostbirdAlertBox.prompt({
        title: '请输入手机号',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != "") {
                if (!data.match(/^(((13[0-9]{1})|159|153|176|18[0-9]{1})+\d{8})$/)) {
                    alert("手机号码格式不正确！");
                } else {
                    $.ajax({
                        url: "../../save_pro",
                        data: {"commodity_id": f_id, "telephone": data},
                        type: "POST",
                        dataType: "JSON",
                        success: function (msg) {
                            PostbirdAlertBox.alert({
                                'title': '提示',
                                'content': msg,
                                'okBtn': '确认',
                                'onConfirm': function () {
                                    $("#telephone").html(data);
                                }
                            });
                        },
                    })
                }
            } else {
                $.ajax({
                    url: "../../save_pro",
                    data: {"commodity_id": f_id, "telephone": data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $("#telephone").html("此项目无联系电话！");
                            }
                        });
                    },
                })
            }
        }
    });
}

function up_url(f_id) {
    PostbirdAlertBox.prompt({
        title: '请输入url地址',
        okBtn: '提交',
        onConfirm: function (data) {
            $.ajax({
                url: "../../save_pro",
                data: {"commodity_id": f_id, "url": data},
                type: "POST",
                dataType: "JSON",
                success: function (msg) {
                    PostbirdAlertBox.alert({
                        'title': '提示',
                        'content': msg,
                        'okBtn': '确认',
                        'onConfirm': function () {
                            if (data != '') {
                                $("#url").attr('href', data)
                                $("#url").html(data);
                            } else {
                                $("#url").removeAttr('href');
                                $("#url").html("url地址未填写");
                            }
                        }
                    });
                },
            })
        }
    });
}

function show_up_type() {
    $('#data_type').hide();
    $('#up_type').show();
}

function hide_up_type() {
    $('#data_type').show();
    $('#up_type').hide();
}

function up_type(f_id) {//
    var s_id = $('#sel_up_type').val();
    var type = $('#select2-sel_up_type-container').html();
    if (s_id != null) {
        $.ajax({
            url: "../../up_type",
            data: {"commodity_id": f_id, "subsettype_id": s_id},
            type: "POST",
            dataType: "JSON",
            success: function (msg) {
                PostbirdAlertBox.alert({
                    'title': '提示',
                    'content': msg,
                    'okBtn': '确认',
                    'onConfirm': function () {
                        $("#type").html(type);
                        $('#data_type').show();
                        $('#up_type').hide();
                    }

                });
            },
        })
    } else {
        PostbirdAlertBox.alert({
            'title': '提示',
            'content': "类型不能为空！！",
            'okBtn': '确认'
        });
    }
}

function up_m_img(f_id) {
    var base64 = $('#m_imghead')[0].src;
    $.ajax({
        url: "../../up_img",
        data: {"commodity_id": f_id, "m_base64": base64},
        type: "POST",
        dataType: "JSON",
        success: function () {
            PostbirdAlertBox.alert({
                'title': '提示',
                'content': "修改成功",
                'okBtn': '确认',
                'onConfirm': function () {
                    $("#m_preview").load(location.href + " #m_preview", "");
                    $("#m_img__up_sum").hide();
                }
            });
        }
    });
}

function up_s_img(f_id) {
    var base64 = $('#imghead')[0].src;
    $.ajax({
        url: "../../up_img",
        data: {"commodity_id": f_id, "s_base64": base64},
        type: "POST",
        dataType: "JSON",
        success: function () {
            PostbirdAlertBox.alert({
                'title': '提示',
                'content': "修改成功",
                'okBtn': '确认',
                'onConfirm': function () {
                    $("#preview").load(location.href + " #preview", "");
                    $("#s_img__up_sum").hide();
                }
            })
        }
    });
}

function del_type(type_id) {
    PostbirdAlertBox.prompt({
        title: '请输入delete确认',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data == "delete"){
                $.ajax({
                    url: AppUrl + "/Admin/Project/del_type",
                    data: {"type_id": type_id},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $('#type_'+type_id).remove();
                            }
                        })
                    },
                    error:function () {
                        alert("网络错误")
                    }
                });
            }else {
                alert("取消操作")
            }
        }
    });
}

function del_subset_type(subsettype_id) {
    PostbirdAlertBox.prompt({
        title: '请输入delete确认',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data == "delete"){
                $.ajax({
                    url: AppUrl + "/Admin/Project/del_subset_type",
                    data: {"subsettype_id": subsettype_id},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $('#type_'+subsettype_id).remove();
                            }
                        })
                    },
                    error:function () {
                        alert("网络错误")
                    }
                });
            }else {
                alert("取消操作")
            }
        }
    });
}

function update_type(type_id) {
    PostbirdAlertBox.prompt({
        title: '输入需要修改的名称',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != ""){
                $.ajax({
                    url: AppUrl + "/Admin/Project/update_type",
                    data: {"type_id": type_id,"name":data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $('#name_type_'+type_id).html(data);
                            }
                        })
                    },
                    error:function () {
                        alert("网络错误！")
                    }
                });
            }else {
                alert("名称不能为空！")
            }
        }
    });
}

function update_subset_type(type_id) {
    PostbirdAlertBox.prompt({
        title: '输入需要修改的名称',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != ""){
                $.ajax({
                    url: AppUrl + "/Admin/Project/update_subset_type",
                    data: {"subsetType_id": type_id,"name":data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                $('#name_type_'+type_id).html(data);
                            }
                        })
                    },
                    error:function () {
                        alert("网络错误！")
                    }
                });
            }else {
                alert("名称不能为空！")
            }
        }
    });
}

function add_subset_type(type_id) {
    PostbirdAlertBox.prompt({
        title: '请输入需要添加子类的名称',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != ""){
                $.ajax({
                    url: AppUrl + "/Admin/Project/add_subset_type",
                    data: {"type_id": type_id,"name":data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                            }
                        })
                    },
                    error:function () {
                        alert("网络错误！")
                    }
                });
            }else {
                alert("名称不能为空！")
            }
        }
    });
}

function add_type() {
    PostbirdAlertBox.prompt({
        title: '请输入分类的名称',
        okBtn: '提交',
        onConfirm: function (data) {
            if (data != ""){
                $.ajax({
                    url: AppUrl + "/Admin/Project/add_type",
                    data: {"name":data},
                    type: "POST",
                    dataType: "JSON",
                    success: function (msg) {
                        PostbirdAlertBox.alert({
                            'title': '提示',
                            'content': msg,
                            'okBtn': '确认',
                            'onConfirm': function () {
                                location.reload();
                            }
                        })
                    },
                    error:function () {
                        alert("网络错误！")
                    }
                });
            }else {
                alert("名称不能为空！")
            }
        }
    });
}

function esc_up_img() {
    $("#preview").load(location.href + " #preview", "");
    $("#m_preview").load(location.href + " #m_preview", "");
    $("#s_img__up_sum").hide();
    $("#m_img__up_sum").hide();
}
