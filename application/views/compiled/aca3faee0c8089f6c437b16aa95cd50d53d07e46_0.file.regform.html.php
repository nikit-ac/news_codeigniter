<?php
/* Smarty version 3.1.29, created on 2016-08-09 17:01:50
  from "C:\OpenServer\domains\CodeIgniter\application\views\regform.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a9e24e4ee530_48654719',
  'file_dependency' => 
  array (
    'aca3faee0c8089f6c437b16aa95cd50d53d07e46' => 
    array (
      0 => 'C:\\OpenServer\\domains\\CodeIgniter\\application\\views\\regform.html',
      1 => 1470642352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/layout.tpl' => 1,
  ),
),false)) {
function content_57a9e24e4ee530_48654719 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_1821957a9e24e49c4a2_82576734',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_602457a9e24e4b7a32_29641463',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:application/views/templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:regform.html */
function block_1821957a9e24e49c4a2_82576734($_smarty_tpl, $_blockParentStack) {
echo 'Вход в админ панель';
}
/* {/block 'title'} */
/* {block 'body'}  file:regform.html */
function block_602457a9e24e4b7a32_29641463($_smarty_tpl, $_blockParentStack) {
?>

    <h2>Вход в админ панель</h2>
    <form action="admin" method="post">
        <div class="form-group">
            <label for="name">Логин</label>
            <input type="text" class="form-control" id="name" name="login" placeholder="Логин">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
        </div>
        <button type="submit" class="btn btn-default">Вход</button>
    </form>
    <br>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <p class="text-danger">Неправильно введены логин или пароль</p>
    <?php }?>
    <a href="/news"><i>К новостям</i></a>
<?php
}
/* {/block 'body'} */
}
