<?php
/* Smarty version 4.1.0, created on 2022-03-16 18:16:53
  from 'C:\xampp\htdocs\web2\Templates\categoryEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62321b85801bd9_68517056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4f9e2f8cdabd53edc2f251e19332267afd5e29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\categoryEdit.tpl',
      1 => 1647451009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62321b85801bd9_68517056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2">Carrito</a>
<?php if (!(isset($_SESSION['email']))) {?>
<a href="login">Login</a>
<?php }
if ((isset($_SESSION['email']))) {?>
<a href="logout">Logout</a>
 <?php }?>

<div class="titulo">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<form class="w-25 m-auto" action="updateCat" method="post">
    <label>
        <a href="producto">Categoria</a>
    </label>
    <input class="form-control" type="text" class="form" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->nombre;?>
"id="nombre">
    <input hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id_categoria;?>
"id="id">
    <div class="boton-container">
        <input type="submit"  class="btn btn-primary my-2" id="submit" value="Guardar" name="submit">
    <div>		
</form>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
