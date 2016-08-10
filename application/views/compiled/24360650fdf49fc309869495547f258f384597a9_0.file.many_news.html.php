<?php
/* Smarty version 3.1.29, created on 2016-08-08 08:24:04
  from "C:\xampp\htdocs\test-work\CodeIgniter\application\views\many_news.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a82584e11004_62665886',
  'file_dependency' => 
  array (
    '24360650fdf49fc309869495547f258f384597a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test-work\\CodeIgniter\\application\\views\\many_news.html',
      1 => 1470584972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/layout.tpl' => 1,
  ),
),false)) {
function content_57a82584e11004_62665886 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_2786057a82584a9a3b4_59045818',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:application/views/templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:many_news.html */
function block_2786057a82584a9a3b4_59045818($_smarty_tpl, $_blockParentStack) {
?>

<h2>Последние новости</h2>
<?php if (isset('admin')) {?>
<a class="btn btn-success" href="/news/create" role="button">Добавить новость</a>
<?php }
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
    </div>
    <div class="panel-body">
        <p><i><?php echo $_smarty_tpl->tpl_vars['item']->value['time_update'];?>
</i></p>
        <img src="..." alt="..." class="img-rounded">
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
<a href="/news/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><i>Читать далее</i></a></p>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
}
/* {/block 'body'} */
}
