<?php
/* Smarty version 4.1.0, created on 2022-03-15 23:13:32
  from 'C:\xampp\htdocs\web2\Templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62310f8ccdd2a4_26258994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64553fde2fede3babf32f20ad57e5121e9683b9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Templates\\category.tpl',
      1 => 1647382349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/vue/comment.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_62310f8ccdd2a4_26258994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="/web2">Carrito</a>
<?php if (!(isset($_SESSION['email']))) {?>
<a href="login">Login</a>
<?php }
if ((isset($_SESSION['email']))) {?>
<a href="logout">Logout</a>
 <?php }?>


<div id="categoria" data-id="<?php echo $_smarty_tpl->tpl_vars['categories']->value->id;?>
">
<h1>Categoria:<?php echo $_smarty_tpl->tpl_vars['categories']->value->nombre;?>
</h1>
</div>
<h2>Productos:</h2> 
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

<?php if ((isset($_SESSION['email']))) {?>
        <div id="user" data-rol="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <form id="commentsApi">
        <h5>Comentar Categoria</h5>
        <div>
            <textarea id="comment" rows="5" name="comment" placeholder="Escriba su comentario"></textarea>
        </div>
        <div>
            <select  name="score" id="score">
                <option value="">Puntuar</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>
            <button id="btnAddCat" type="submit">Enviar comentario</button>
        </div>
    </form>           
<?php }?>


<div id="app">
    <?php $_smarty_tpl->_subTemplateRender('file:Templates/vue/comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="./Js/comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
