<?php
/* Smarty version 3.1.29, created on 2016-08-10 12:28:54
  from "C:\xampp\htdocs\CodeIgniter\application\views\many_news.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ab01e6ef0219_38413935',
  'file_dependency' => 
  array (
    '40562ce8fd75b6f975f2507e1f5ebddb34d4f91f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CodeIgniter\\application\\views\\many_news.html',
      1 => 1470824931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/layout.tpl' => 1,
  ),
),false)) {
function content_57ab01e6ef0219_38413935 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1807157ab01e61c0f03_18411300',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:application/views/templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:many_news.html */
function block_1807157ab01e61c0f03_18411300($_smarty_tpl, $_blockParentStack) {
?>

    <ul class="nav nav-pills">
        <li <?php if ($_smarty_tpl->tpl_vars['active_cat']->value === 0) {?>class="active"<?php }?>><a href="/last_news/">Все</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['active_cat']->value === 'politics') {?>class="active"<?php }?>><a href="/last_news/politics">Политика</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['active_cat']->value === 'criminal') {?>class="active"<?php }?>><a href="/last_news/criminal">Криминал</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['active_cat']->value === 'finanse') {?>class="active"<?php }?>><a href="/last_news/finanse">Финансы</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['active_cat']->value === 'other') {?>class="active"<?php }?>><a href="/last_news/other">Прочее</a></li>
    </ul>

<h2>Последние новости</h2>

<?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
<p>
    <a class="btn btn-success" href="/admin/create" role="button"><span class="glyphicon glyphicon-plus"></span> Добавить новость</a>
</p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <?php
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
        <h3 class="panel-title">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
                <a href="/admin/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><span class='glyphicon glyphicon-pencil'></span></a>
                <a href="/news/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><span class='glyphicon glyphicon-remove'></span></a>
            <?php }?>
            <br>
            <i class="small">Категория: <?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</i>
        </h3>
    </div>
    <div class="panel-body">
        <p><i><?php echo $_smarty_tpl->tpl_vars['item']->value['time_update'];?>
</i></p>
        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['image_name'])) {?>
        <img src="/application/uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
" class="img-rounded" height="200">
        <?php }?>
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
}?>

<?php if ($_smarty_tpl->tpl_vars['pages_count']->value > 1) {?>
    <ul class="pagination">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?> class="disabled" <?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>/last_news/<?php if (!($_smarty_tpl->tpl_vars['active_cat']->value === 0)) {
echo $_smarty_tpl->tpl_vars['active_cat']->value;?>
/<?php }
echo $_smarty_tpl->tpl_vars['page']->value-1;
}?>">&laquo;</a></li>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages_count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages_count']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?> class="active" <?php }?>><a href="/last_news/<?php if (!($_smarty_tpl->tpl_vars['active_cat']->value === 0)) {
echo $_smarty_tpl->tpl_vars['active_cat']->value;?>
/<?php }
echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['pages_count']->value) {?> class="disabled" <?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value != $_smarty_tpl->tpl_vars['pages_count']->value) {?>/last_news/<?php if (!($_smarty_tpl->tpl_vars['active_cat']->value === 0)) {
echo $_smarty_tpl->tpl_vars['active_cat']->value;?>
/<?php }
echo $_smarty_tpl->tpl_vars['page']->value+1;
}?>">&raquo;</a></li>
    </ul>
<?php }
}
/* {/block 'body'} */
}
