<?php
/* Smarty version 3.1.29, created on 2018-03-13 15:17:38
  from "D:\php\BK\App\Back\View\Friendship\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aa7eb92d76315_56157603',
  'file_dependency' => 
  array (
    'ce11e2a6aec9c4be585e65daa2e7afc6b31a6580' => 
    array (
      0 => 'D:\\php\\BK\\App\\Back\\View\\Friendship\\index.html',
      1 => 1520954255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_5aa7eb92d76315_56157603 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 设置“添加链接”链接
			window.location.href = 'index.php?p=Back&c=Friendship&a=add';
		});
	});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/friendship.js"><?php echo '</script'; ?>
>
<div class="admin">
	<form action="index.php?p=Back&c=Friendship&a=delAll" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>链接列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="frd_id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加链接" />
            <input type="submit" class="button button-small border-yellow"  value="批量删除" onclick=" return confirm('确认全部删除吗?')" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="10%">选择</th>
                <th width="20%">链接名称</th>
                <th width="50%">链接地址</th>
                <th width="10%">操作</th>
                <th width="10%">移动</th>
            </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['friendInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
            <tr>
                <td><input type="checkbox" name="frd_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['frd_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['frd_name'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['frd_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['frd_url'];?>
</a></td> 
                <td>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=Friendship&a=edit&frd_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['frd_id'];?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=Friendship&a=del&frd_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['frd_id'];?>
" onclick="return confirm('确认删除吗?')">删除</a>
                </td>
                <td>
                    <a href="javascript:void(0)" onClick="moveUp(this)">上移</a>
                    <a href="javascript:void(0)" onClick="moveDown(this)">下移</a>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        </table>
		<div class="panel-foot text-center">
           
        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
