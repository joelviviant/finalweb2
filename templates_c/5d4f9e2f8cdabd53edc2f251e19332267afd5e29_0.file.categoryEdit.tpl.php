<?php
/* Smarty version 4.1.0, created on 2022-03-14 18:44:33
  from 'C:\xampp\htdocs\web2\Templates\categoryEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f7f012bb359_81394669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4f9e2f8cdabd53edc2f251e19332267afd5e29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\categoryEdit.tpl',
      1 => 1647211712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_622f7f012bb359_81394669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2">Carrito</a>
<a href="logout">Logout</a> 
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<form action="updateCat" method="post">
    <label>
        <a href="producto">Categoria</a>
    </label>
    <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->nombre;?>
"id="nombre">
    <input hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id_categoria;?>
"id="id">
    <input type="submit" id="submit" value="Guardar" name="submit">			
</form>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
