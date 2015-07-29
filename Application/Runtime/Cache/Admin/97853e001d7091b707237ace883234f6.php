<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>处理退货申请</title>
</head>
<body>
    <h1>处理退货申请</h1>
    <form action="<?php echo U(MODULE_NAME.'/Order/returnHandle');?>" method="post">
        <table>
            <tr>
                <td>处理方式</td>
                <td>
                    <select name="operate">
                        <option value="1">同意退货申请</option>
                        <option value="0">驳回退货申请</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>说明</td>
                <td>
                    <textarea name="remark"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="oid" value="<?php echo ($oid); ?>" />
                    <input type="submit" value="提交" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>