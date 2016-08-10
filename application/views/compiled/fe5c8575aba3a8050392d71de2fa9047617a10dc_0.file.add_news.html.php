<?php
/* Smarty version 3.1.29, created on 2016-08-10 11:45:54
  from "C:\xampp\htdocs\CodeIgniter\application\views\add_news.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57aaf7d2b4ec28_25036227',
  'file_dependency' => 
  array (
    'fe5c8575aba3a8050392d71de2fa9047617a10dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CodeIgniter\\application\\views\\add_news.html',
      1 => 1470812158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/layout.tpl' => 1,
  ),
),false)) {
function content_57aaf7d2b4ec28_25036227 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_2949257aaf7d282a062_72737681',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_546957aaf7d288f986_28312250',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:application/views/templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:add_news.html */
function block_2949257aaf7d282a062_72737681($_smarty_tpl, $_blockParentStack) {
?>
Добавление / редактирование новости<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:add_news.html */
function block_546957aaf7d288f986_28312250($_smarty_tpl, $_blockParentStack) {
?>

    <h2>Добавление / редактирование новости</h2>
    <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Название новости</label>
            <input type="text" class="form-control span6" id="title" name="title" placeholder="Название новости" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
        <div class="form-group">
            <label for="content">Текст новости</label>
            <textarea rows="5" id="content" name="content" placeholder="Текст новости" class="form-control span6"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
        </div>
        <div class="form-group">
            <label for="category">Выбор категории</label>
            <select id="category" class="form-control span6" name="category">
                <option value="4">Политика</option>
                <option value="3">Криминал</option>
                <option value="2">Финансы</option>
                <option value="1">Прочее</option>
            </select>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['image_name']->value)) {?>
            <div class="form-group">
                <label class="radio">
                    <input type="radio" name="image_edit" value="old" checked>
                    Оставить старое изображение<br>
                    <img src="/application/uploads/<?php echo $_smarty_tpl->tpl_vars['image_name']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image_name']->value;?>
" class="img-rounded" height="200">
                </label>
                <label class="radio">
                    <input type="radio" name="image_edit" value="new">
                    Заменить новым
                </label>
            </div>
        <?php }?>
        <div class="form-group">
            <label for="file">Загрузить изображение</label>
            <input type="file" id="file" name="pic">
        </div>
        <button type="submit" class="btn btn-default">Опубликовать</button>
        <a class="btn btn-default" href="/news" role="button">Назад</a>
    </form>
<?php
}
/* {/block 'body'} */
}
