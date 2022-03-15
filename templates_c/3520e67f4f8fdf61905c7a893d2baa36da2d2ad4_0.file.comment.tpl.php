<?php
/* Smarty version 4.1.0, created on 2022-03-15 20:48:39
  from 'C:\xampp\htdocs\web2\Templates\vue\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6230ed9724c5e7_82333130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3520e67f4f8fdf61905c7a893d2baa36da2d2ad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\vue\\comment.tpl',
      1 => 1647373712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6230ed9724c5e7_82333130 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div v-for="comment in comments">
        <p>{{comment.comentario}}</p>
        <p>Puntuo con: {{comment.score}} estrellas</p>
        <div v-if="rol == 0">
            <button v-on:click="eliminar" v-bind:id="`${comment.id}`">Eliminar</button>
        </div>
       
    </div>
<?php }
}
