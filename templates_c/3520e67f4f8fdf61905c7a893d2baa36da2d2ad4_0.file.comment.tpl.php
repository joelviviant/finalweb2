<?php
/* Smarty version 4.1.0, created on 2022-03-16 18:04:08
  from 'C:\xampp\htdocs\web2\Templates\vue\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6232188854ff23_30077458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3520e67f4f8fdf61905c7a893d2baa36da2d2ad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\vue\\comment.tpl',
      1 => 1647450246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6232188854ff23_30077458 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="card w-25 m-auto" v-for="comment in comments">
            <div class="card-body">
                <div class="d-flex">
                    <p v-for="item in Number(comment.score)" class="material-icons text-warning">star</p>
                </div>
                <p>{{comment.comentario}}</p>
                
                <div v-if="rol == 0">
                    <button v-on:click="eliminar" class="btn btn-danger" v-bind:id="`${comment.id}`">Eliminar</button>
                </div>
            </div>
    </div>



<?php }
}
