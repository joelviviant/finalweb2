<?php
/* Smarty version 4.1.0, created on 2022-03-16 23:04:03
  from 'C:\xampp\htdocs\web2\Templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62325ed3ea4188_63929326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95025ee9604a623156c2003b2d3df3bf12ffd0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\register.tpl',
      1 => 1647468243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62325ed3ea4188_63929326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="/web2">Volver</a>

<div class="titulo">
    <h2>Registrarse</h2> 
    <h3>Genere un nuevo usuario completando los campos:</h3>
</div>
    
    <form method="post" class="w-25 m-auto d-flex flex-column" action="registerUser">
        <input class="form-control mb-2" type="email"  id="email" name="email" placeholder=" Ingrese un email valido" required>
        <input class="form-control mb-2" type="password"  id="password" name="password" placeholder=" Cree una contraseña"  required>
        <input class="btn btn-primary mb-2" type="submit" id="submit" value="Registrar" name="submit">	
    </form>
     

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
