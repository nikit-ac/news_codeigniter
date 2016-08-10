<?php
/* Smarty version 3.1.29, created on 2016-08-10 18:04:01
  from "C:\OpenServer\domains\CodeIgniter\application\views\one_news.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ab4261323550_24551090',
  'file_dependency' => 
  array (
    '84dc71809c85bac929da0d54ecff9c37420716c8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\CodeIgniter\\application\\views\\one_news.html',
      1 => 1470841439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/layout.tpl' => 1,
  ),
),false)) {
function content_57ab4261323550_24551090 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_2561557ab4261287134_45118816',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_2370857ab42612aa3b5_48320047',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:application/views/templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:one_news.html */
function block_2561557ab4261287134_45118816($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['title']->value;
}
/* {/block 'title'} */
/* {block 'body'}  file:one_news.html */
function block_2370857ab42612aa3b5_48320047($_smarty_tpl, $_blockParentStack) {
?>


    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

    <?php if (isset($_smarty_tpl->tpl_vars['image_name']->value)) {?>
        <div><img src="/application/uploads/<?php echo $_smarty_tpl->tpl_vars['image_name']->value;?>
"></div>
    <?php }?>

    <p><i><?php echo $_smarty_tpl->tpl_vars['time_update']->value;?>
</i></p>
    <pre class="one_news__content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</pre>

    <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
        <a class="btn btn-success" href="/admin/edit/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" role="button"><span class="glyphicon glyphicon-pencil"></span> Редактировать новость</a>
        <a class="btn btn-danger" href="#delete" role="button"  data-toggle="modal"><span class="glyphicon glyphicon-remove"></span> Удалить новость</a>

        <!-- Modal Delete -->
        <div class="modal fade " id="delete" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>Вы действительно хотите удалить новость <strong>"<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"</strong>? </h4>
                        <a class="btn btn-danger" href="/admin/delete/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" role="button">Да</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    <?php }?>
    <a href="/news"><i>Вернуться к остальным</i></a>
<?php
}
/* {/block 'body'} */
}
