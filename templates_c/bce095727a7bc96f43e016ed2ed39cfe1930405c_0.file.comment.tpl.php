<?php
/* Smarty version 4.1.0, created on 2022-03-15 17:39:40
  from 'C:\xampp\htdocs\web2\Templates\Vue\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6230c14ce73d92_92549721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce095727a7bc96f43e016ed2ed39cfe1930405c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\Vue\\comment.tpl',
      1 => 1647362320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6230c14ce73d92_92549721 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div v-for="comment in comments">
        <p>{comments.comentario}</p>
        <p>Puntuo con: {comments.score} estrellas</p>
        <div v-if="rol == '0'">
            <button v-on:click="eliminar" v-bind:id="`${comments.id}`">Eliminar</button>
        </div>
    </div>
<?php }
}
