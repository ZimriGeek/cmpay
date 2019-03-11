<?php /*a:1:{s:75:"F:\phpStudy\PHPTutorial\WWW\cmpay\application\admin\view\index\welcome.html";i:1552315553;}*/ ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>控制台 - 小红帽科技|草帽聚合支付 - 后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/admin/style/admin.css" media="all">
</head>
<body>

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <!--数据统计-->
        <div class="layui-col-sm6 layui-col-md3">
            <div class="layui-card">
                <div class="layui-card-header">
                    订单总量
                    <span class="layui-badge layui-bg-blue layuiadmin-badge">月</span>
                </div>
                <div class="layui-card-body layuiadmin-card-list">
                    <p class="layuiadmin-big-font"><?php echo htmlentities($order['total']); ?></p>
                </div>
            </div>
        </div>
        <div class="layui-col-sm6 layui-col-md3">
            <div class="layui-card">
                <div class="layui-card-header">
                    交易总额
                    <span class="layui-badge layui-bg-cyan layuiadmin-badge">月</span>
                </div>
                <div class="layui-card-body layuiadmin-card-list">
                    <p class="layuiadmin-big-font">￥<?php echo htmlentities($order['fees']); ?></p>
                </div>
            </div>
        </div>
        <div class="layui-col-sm6 layui-col-md3">
            <div class="layui-card">
                <div class="layui-card-header">
                    成交额
                    <span class="layui-badge layui-bg-green layuiadmin-badge">月</span>
                </div>
                <div class="layui-card-body layuiadmin-card-list">
                    <p class="layuiadmin-big-font">￥<?php echo htmlentities($order['paid']); ?></p>
                </div>
            </div>
        </div>
        <div class="layui-col-sm6 layui-col-md3">
            <div class="layui-card">
                <div class="layui-card-header">
                    商户总量
                    <span class="layui-badge layui-bg-orange layuiadmin-badge">月</span>
                </div>
                <div class="layui-card-body layuiadmin-card-list">

                    <p class="layuiadmin-big-font"><?php echo htmlentities($user['total']); ?></p>
                </div>
            </div>
        </div>
        <!--//END 数据统计-->
        <div class="layui-col-sm12">
            <div class="layui-card">
                <div class="layui-card-header">
                    数据统计
                </div>
                <div class="layui-card-body">
                    <div class="layui-row">
                        <div class="layui-col-sm8">
                            <div class="layui-carousel layadmin-carousel layadmin-dataview" data-anim="fade" lay-filter="app-index-welcome-carousel">
                                <div carousel-item id="app-index-welcome-carousel">
                                    <div><i class="layui-icon layui-icon-loading1 layadmin-loading"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-col-sm4">
                            <div class="layui-card">
                                <div class="layui-card-body">
                                    <div class="layui-carousel layadmin-carousel layadmin-backlog">
                                <div carousel-item>
                                    <ul class="layui-row layui-col-space10">
                                        <li class="layui-col-xs6">
                                            <a lay-href="<?php echo url('admin/balance/paid'); ?>?status=0" class="layadmin-backlog-body">
                                                <h3>待审提现</h3>
                                                <p><cite><?php echo htmlentities($cash['wait']); ?></cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs6">
                                            <a lay-href="<?php echo url('admin/user/index'); ?>" class="layadmin-backlog-body">
                                                <h3>待审商户</h3>
                                                <p><cite><?php echo htmlentities($user['failed']); ?></cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs6">
                                            <a lay-href="<?php echo url('admin/orders/index'); ?>?status=1" class="layadmin-backlog-body">
                                                <h3>待付订单</h3>
                                                <p><cite><?php echo htmlentities($order['wait']); ?></cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs6">
                                            <a lay-href="<?php echo url('admin/orders/index'); ?>?status=2" class="layadmin-backlog-body">
                                                <h3>已付订单</h3>
                                                <p><cite><?php echo htmlentities($order['success']); ?></cite></p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="layui-row layui-col-space10">
                                        <li class="layui-col-xs6">
                                            <a href="javascript:;" onclick="layer.tips('不跳转', this, {tips: 3});" class="layadmin-backlog-body">
                                                <h3>待付订单</h3>
                                                <p><cite>99</cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs6">
                                            <a href="javascript:;" onclick="layer.tips('不跳转', this, {tips: 3});" class="layadmin-backlog-body">
                                                <h3>已付订单</h3>
                                                <p><cite>20</cite></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            <!--</div>-->
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-sm12">
            <div class="layui-card">
                <div class="layui-card-header">最新订单</div>
                <div class="layui-card-body">
                    <table id="app-order-recent-list" lay-filter="app-order-paid-list"></table>
                    <script type="text/html" id="buttonTpl">
                        {{#  if(d.status == '2'){ }}
                        <button class="layui-btn layui-btn-xs">已支付</button>
                        {{#  } else if(d.status == '1'){ }}
                        <button class="layui-btn layui-btn-warm layui-btn-xs">等待中</button>
                        {{#  } else { }}
                        <button class="layui-btn layui-btn-danger layui-btn-xs">关闭</button>
                        {{#  } }}
                    </script>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script src="/static/admin/layui/layui.js"></script>
<script>
    layui.config({
        base: '/static/admin/' //静态资源所在路径
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index','table', 'welcome'],function () {
        var $ = layui.query,
            util = layui.util,
            table = layui.table;

        //初始化表格
        table.render({
            elem: "#app-order-recent-list",
            url: 'getOrdersList',
            cols: [[{
                field: "id",
                width: 120,
                title: "ID",
                fixed: "left"
                },
                {
                    field: "trade_no",
                    title: "平台订单号"
                },
                {
                    field: "out_trade_no",
                    title: "商户订单号"
                },
                {
                    field: "subject",
                    title: "交易项目"
                },
                {
                    field: "body",
                    title: "交易内容"
                },
                {
                    field: "amount",
                    width: 100,
                    title: "交易金额"
                },
                {
                    field: "channel",
                    width: 100,
                    title: "交易方式"
                },
                {
                    field: "update_time",
                    width: 180,
                    title: "创建时间",
                    templet: function(d) {return util.toDateString(d.update_time*1000); }
                },
                {
                    field: "status",
                    title: "订单状态",
                    fixed: "right",
                    templet: "#buttonTpl",
                    minWidth: 100,
                    align: "center"
                }]],
            text: "对不起，加载出现异常！"
        })
    });
</script>
</body>
</html>