<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
</head>
<body>
    <h1>登陆系统</h1>
    <form action="<?php echo U(MODULE_NAME.'/Login/loginHandle');?>" method="post">
        <table>
            <tr>
                <td>用户名</td>
                <td>
                    <input type="text" name="username" />
                </td>
            </tr>
            <tr>
                <td>密码</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="登陆" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>