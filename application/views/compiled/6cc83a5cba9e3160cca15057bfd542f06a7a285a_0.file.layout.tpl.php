<?php
/* Smarty version 3.1.29, created on 2016-08-10 07:59:43
  from "C:\xampp\htdocs\CodeIgniter\application\views\templates\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57aac2cf007f26_53213231',
  'file_dependency' => 
  array (
    '6cc83a5cba9e3160cca15057bfd542f06a7a285a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CodeIgniter\\application\\views\\templates\\layout.tpl',
      1 => 1470808745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57aac2cf007f26_53213231 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_2023957aac2ced756c8_12669068',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

<div class="container">


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_2754857aac2cee7f103_68542759',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_246957aac2ceee4a11_98869403',
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
function block_2023957aac2ced756c8_12669068($_smarty_tpl, $_blockParentStack) {
echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Последние новости" : $tmp);
}
/* {/block 'title'} */
/* {block 'body'}  file:application/views/templates/layout.tpl */
function block_2754857aac2cee7f103_68542759($_smarty_tpl, $_blockParentStack) {
?>
body goes here<?php
}
/* {/block 'body'} */
/* {block 'footer'}  file:application/views/templates/layout.tpl */
function block_246957aac2ceee4a11_98869403($_smarty_tpl, $_blockParentStack) {
?>

<hr>
<div class="footer">
	<p>&copy 2016</p>
</div>
<?php
}
/* {/block 'footer'} */
}
