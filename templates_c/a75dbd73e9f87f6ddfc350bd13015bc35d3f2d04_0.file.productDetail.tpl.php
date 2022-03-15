<?php
/* Smarty version 4.1.0, created on 2022-03-15 23:07:46
  from 'C:\xampp\htdocs\web2\Templates\productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62310e328ff327_82623234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75dbd73e9f87f6ddfc350bd13015bc35d3f2d04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\productDetail.tpl',
      1 => 1647382053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/vue/comment.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62310e328ff327_82623234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2">Carrito</a>
<?php if (!(isset($_SESSION['email']))) {?>
<a href="login">Login</a>
<?php }
if ((isset($_SESSION['email']))) {?>
<a href="logout">Logout</a>

 <?php }?>


<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div id="producto" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">
<h2>Producto: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h2>
</div>
<h2>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</h2>

<?php if ((isset($_SESSION['email']))) {?>
        <div id="user" data-rol="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <form id="commentsApi">
        <h5>Comentar Producto</h5>
        <div>
            <textarea id="comment" rows="5" name="comment" placeholder="Escriba su comentario"></textarea>
        </div>
        <div>
            <select  name="score" id="score">
                <option value="">Puntuar</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>
            <button  id="btnAdd" type="submit">Enviar comentario</button>
        </div>
    </form>           
<?php }?>


<div id="app">
    <?php $_smarty_tpl->_subTemplateRender('file:Templates/vue/comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="./Js/comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
