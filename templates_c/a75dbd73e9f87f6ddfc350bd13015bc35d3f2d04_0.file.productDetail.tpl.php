<?php
/* Smarty version 4.1.0, created on 2022-03-16 18:05:05
  from 'C:\xampp\htdocs\web2\Templates\productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623218c1a0dec2_11294800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75dbd73e9f87f6ddfc350bd13015bc35d3f2d04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\productDetail.tpl',
      1 => 1647450304,
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
function content_623218c1a0dec2_11294800 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div id="producto" class="m-auto" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">
        <h2 class="text-center">Producto: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h2> 
    </div>
    <h2 class="text-center">Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</h2>

    <?php if ((isset($_SESSION['email']))) {?>
            <div id="user" data-rol="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <form id="commentsApi">
            <h5 class="text-center">Comentar Producto</h5>
            <div class="w-25 m-auto">
                <div>
                    <textarea class="form-control" id="comment" rows="5" name="comment" placeholder="Escriba su comentario"></textarea>
                </div>
                <div>
                    <select class="form-select" name="score" id="score">
                        <option value="">Puntuar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div>
                    <button  id="btnAdd"  class="btn btn-primary my-2" type="submit">Enviar comentario</button>
                </div>
            </div>
        </form>   
        

        <div id="app">
            <?php $_smarty_tpl->_subTemplateRender('file:Templates/vue/comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

    <?php echo '<script'; ?>
 src="./Js/comments.js"><?php echo '</script'; ?>
>        
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
