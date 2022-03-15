<?php
/* Smarty version 4.1.0, created on 2022-03-14 21:03:56
  from 'C:\xampp\htdocs\web2\Templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f9fac8779f4_71188558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '418dcaa2938c55e13d836b2d81865e7f0ac50bbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\product.tpl',
      1 => 1647288235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_622f9fac8779f4_71188558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2">Carrito</a>
<?php if (!(isset($_SESSION['email']))) {?>
<a href="login">Login</a>
<?php }
if ((isset($_SESSION['email']))) {?>
<a href="logout">Logout</a>
<a href="showUsers">Lista de Usuarios</a>

 <?php }?>


<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<?php if ((isset($_SESSION['email']))) {?>
    <form action="addProd" method="post">
    <label>Producto</label>
    <input type="text" name="nombre" id="nombre">
    <label>Categorias</a></label>
        <select name="categoria" id="categoria">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>   
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                                     
        </select>
    <input type="submit" id="submit" value="Agregar" name="submit">			
    </form>
<?php }?>

<table>
    <tr>
        <th><a href="producto">Productos</a></th>
        <th><a href="categorias">Categorias</a></th>			
    </tr>
    <tr>
        <td>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <li>
                        <a href="viewProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                 
            </ul>
        </td>			
        <td>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <li>
                        <a href="viewCat/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</a> 
                        <?php if ((isset($_SESSION['email']))) {?>
                            <a href="deleteProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">🗑️Borrar</a> 
                            <a href="editProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Editar</a>
                        <?php }?>
                       
</li>    
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>	
        </td>
     </tr>
</table>



<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
