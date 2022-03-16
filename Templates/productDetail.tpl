{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>

 {/if}


<h1>{$titulo}</h1>
<div id="producto" data-id="{$producto->id}">
<h2>Producto: {$producto->nombre}</h2>
</div>
<h2>Categoria: {$producto->categoria}</h2>

{if isset ($smarty.session.email)}
        <div id="user" data-rol="{$rol}" data-id="{$id}">
        <form id="commentsApi">
        <h5>Comentar Producto</h5>
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
            <button  id="btnAdd" type="submit">Enviar comentario</button>
        </div>
    </form>   
    

    <div id="app">
        {include file='Templates/vue/comment.tpl'}
    </div>

    <script src="./Js/comments.js"></script>        
{/if}

{include file='Templates/footer.tpl'}