<?php
/* Smarty version 4.1.0, created on 2022-03-16 17:45:56
  from 'C:\xampp\htdocs\web2\Templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62321444678e82_56363663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '418dcaa2938c55e13d836b2d81865e7f0ac50bbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\product.tpl',
      1 => 1647449122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62321444678e82_56363663 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="titulo">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</div>

<?php if ((isset($_SESSION['email']))) {?>
<div class="form-container">
    <form action="addProd" method="post">
    <div class="form-group form-producto">
        <div id="producto">
            <label>Producto</label>
            <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        <div id="categoria">
        <label>Categorias</a></label>
            <select class="form-control" name="categoria" id="categoria">
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
        </div>
        <div id="agregar">
            <div class="boton-container">
                <input type="submit" id="submit" value="Agregar" class="btn btn-primary" name="submit">
            </div>
        </div>
    </div>		
    </form>
</div>
<?php }?>

<div class="tabla-container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-center"><a href="producto">Producto</a></th>
            <th class="text-center"><a href="categorias">Categoria</a></th>
            <?php if ((isset($_SESSION['email']))) {?>
                <th></a></th>	
            <?php }?>		
            
        </tr>
        </thead>
        <tbody>
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                <tr>
                    <td class="text-center"> <a href="viewProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a>  </td>
                    <td class="text-center"> <a href="viewCat/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</a></td>
                    <?php if ((isset($_SESSION['email']))) {?>
                        <td class="text-center"> 
                            <a href="deleteProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" class="material-icons text-decoration-none text-danger" >delete</a>
                            <a href="editProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" class="material-icons text-decoration-none text-warning">edit</a> 
                        </td>
                    <?php }?>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            
        
        </tbody>
    </table>
</div>



<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
