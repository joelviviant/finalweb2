<?php
/* Smarty version 4.1.0, created on 2022-03-16 22:52:34
  from 'C:\xampp\htdocs\web2\Templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62325c22c3e060_91412085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf26f1df4d8090c3c9c9947c5103292fd0a63695' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\users.tpl',
      1 => 1647467554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62325c22c3e060_91412085 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1>Lista de Usuarios</h1>
</div>    
        <table class="table table-striped w-50 m-auto">
            <thead>
                <tr>
                    <th class="text-center">Email</th>
                    <th class="text-center">Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td> 
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == 0) {?>
                        <td class="text-center">Administrador</td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->rol == 1) {?>
                         <td class="text-center">Usuario</td>
                    <?php }?>
                    <td class="text-center"><a href="updateUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><button class="btn btn-secondary" >Cambiar rol</button></a></td>
                    <td class="text-center"><a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><button class="btn btn-danger" >Eliminar</button></a></td>
                    
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                </tr>
            </tbody>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div>
            <h6 <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h6>
            </div>
        <?php }?>
          

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
