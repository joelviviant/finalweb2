<?php
/* Smarty version 4.1.0, created on 2022-03-16 04:35:15
  from 'C:\xampp\htdocs\web2\Templates\categoryList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62315af3c034f3_80818813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517e4cd2ee926cfa896cc396f13e64cf1e1eb428' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\categoryList.tpl',
      1 => 1647401713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62315af3c034f3_80818813 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1>Categorias</h1>
</div>
<?php if ((isset($_SESSION['email']))) {?>
<div class="form-container">
    <form action="addCat" method="post">
        <div class="form-group form-categoria">
            <div id="categoria-nombre">
                <label>Nombre</label>  
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div id="agregar-categoria">
                <div class="boton-container">
                    <input type="submit" class="btn btn-primary" id="submit" value="Agregar" name="submit">
                </div>
            </div>
        </div>
    </form>
</div>
<?php }?>



<div class="tabla-container-categorias">
    <table class="table table-striped">
     <thead>
        <tr>
            <th class="text-center" >Categoria</a></th>
            <?php if ((isset($_SESSION['email']))) {?>
                <th></a></th>	
            <?php }?>	
        </tr>
    </thead>  
    <tbody> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <tr>
                <td class="text-center">
                    <a href="viewCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a>
                </td>
                    <?php if ((isset($_SESSION['email']))) {?>
                    <td class="text-center">
                        <a href="deleteCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" class="material-icons text-decoration-none text-danger" >delete</a>
                        <a href="editCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" class="material-icons text-decoration-none text-warning">edit</a> 
                    </td>
                    <?php }?>
             <tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </tbody>
    </table>
</div>




<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
