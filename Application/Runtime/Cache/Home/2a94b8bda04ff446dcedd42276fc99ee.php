<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户首页</title>
</head>
<body>
    <h1>您好！<?php echo ($userinfo['nickname']); ?></h1>
    <h2>您的账户余额：<?php echo ($agent["account"]); ?>元</h2>
    <h2>请选择接下来的操作</h2>
    <ul>
        <li>购物
            <ul>
                <li>
                    <a href="<?php echo U(MODULE_NAME.'/Product/index');?>">查看所有商品分类</a>
                </li>
                <li>
                    <a href="<?php echo U(MODULE_NAME.'/Cart/index');?>">查看购物车</a>
                </li>
            </ul>
        </li>
        <br>
        <li>订单管理
            <ul>
                <li>
                    <a href="<?php echo U(MODULE_NAME.'/Order/index');?>">查看正在进行的订单</a>
                </li>
                <li>
                    <a href="<?php echo U(MODULE_NAME.'/Order/orderCompleted');?>">查看过往订单</a>
                </li>
            </ul>
        </li>
        <br>
        <li>个人信息管理
            <ul>
                <li>
                    账户资金
                </li>
                <li>
                    更改个人信息
                </li>
                <li>
                    更改密码
                </li>
            </ul>
        </li>
    </ul>
    <?php if($userinfo['role'] < 2): ?><a href="<?php echo U('Admin/Index/index');?>">进入后台管理界面</a><br><?php endif; ?>
    <a href="<?php echo U(MODULE_NAME.'/Index/logout');?>">退出登陆</a>
</body>
</html>