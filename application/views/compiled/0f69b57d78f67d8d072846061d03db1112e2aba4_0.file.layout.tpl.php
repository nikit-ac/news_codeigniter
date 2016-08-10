<?php
/* Smarty version 3.1.29, created on 2016-08-10 18:04:01
  from "C:\OpenServer\domains\CodeIgniter\application\views\templates\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ab426150ba47_12501108',
  'file_dependency' => 
  array (
    '0f69b57d78f67d8d072846061d03db1112e2aba4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\CodeIgniter\\application\\views\\templates\\layout.tpl',
      1 => 1470841322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ab426150ba47_12501108 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_2725857ab4261361d62_29290828',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1284357ab42614c5536_88575416',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_986457ab42614ec646_17441807',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


</div> <!-- .container -->

<?php echo '<script'; ?>
 src="/assets/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'title'}  file:application/views/templates/layout.tpl */
function block_2725857ab4261361d62_29290828($_smarty_tpl, $_blockParentStack) {
echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Последние новости" : $tmp);
}
/* {/block 'title'} */
/* {block 'body'}  file:application/views/templates/layout.tpl */
function block_1284357ab42614c5536_88575416($_smarty_tpl, $_blockParentStack) {
?>
body goes here<?php
}
/* {/block 'body'} */
/* {block 'footer'}  file:application/views/templates/layout.tpl */
function block_986457ab42614ec646_17441807($_smarty_tpl, $_blockParentStack) {
?>

<hr>
<div class="footer">
	<p>&copy 2016</p>
</div>
<?php
}
/* {/block 'footer'} */
}
