<?php
/* Smarty version 4.1.0, created on 2022-03-14 21:53:12
  from 'C:\xampp\htdocs\web2\Templates\productEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622fab3873adf4_27941727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65e3e23083dcd951ec6b5299dc799df9e96991aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\productEdit.tpl',
      1 => 1647288113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_622fab3873adf4_27941727 (Smarty_Internal_Template $_smarty_tpl) {
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

<form action="updateProd" method="post">
    <label><a href="producto">Producto</a></label>
    <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" id="nombre">
    <input hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" id="id">
    <label><a href="categorias">Categorias</a></label>
        <select name="categoria" id="categoria"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value->id_categoria == $_smarty_tpl->tpl_vars['producto']->value->id_categoria) {?>
                 <option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                <?php } else { ?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                  
        </select>
    <input type="submit" id="submit" value="Guardar" name="submit">			
</form>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
