<?php
/* Smarty version 4.1.0, created on 2022-03-14 14:37:50
  from 'C:\xampp\htdocs\web2\Templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f452e29a804_66787657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91d187a0fa2bdfd5866d32363d69c3eafb0b93c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\error.tpl',
      1 => 1647265066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_622f452e29a804_66787657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="/web2">Volver</a>

<h1>Usted no tiene los permisos necesarios para realizar esta acción</h1>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
