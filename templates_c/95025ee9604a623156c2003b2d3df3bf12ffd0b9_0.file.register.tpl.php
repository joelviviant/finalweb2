<?php
/* Smarty version 4.1.0, created on 2022-03-14 19:49:27
  from 'C:\xampp\htdocs\web2\Templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f8e37203069_14039393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95025ee9604a623156c2003b2d3df3bf12ffd0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\register.tpl',
      1 => 1647283698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_622f8e37203069_14039393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="/web2">Volver</a>
<h2>Registrarse</h2> 
<h3>Genere un nuevo usuario completando los campos:</h3>
    
    <form method="post" action="registerUser">
        <label >Ingrese un mail valido: </label>
        <input type="email"  id="email" name="email" placeholder=" Ingrese un email valido" required>
        <label >Ingrese una contraseña: </label> 
        <input type="password"  id="password" name="password" placeholder=" Cree una contraseña"  required>
        <input type="submit" id="submit" value="Registrar" name="submit">	
    </form>
     

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
