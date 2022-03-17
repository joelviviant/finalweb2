{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}


<div class="titulo" id="categoria" data-id="{$category->id_categoria}">
    <h1>Categoria:{$category->nombre}</h1>
</div>
<div class="titulo">
    <h2>Productos:</h2> 
</div>
<ul class="list-group w-25 m-auto">
    {foreach from=$productos  item=producto}
         <li class="list-group-item">
         <a href="viewProd/{$producto->id}">{$producto->nombre}</a>
         </li>
    {/foreach}
</ul>

{if isset ($smarty.session.email)}
        <div id="user" data-rol="{$rol}" data-id="{$id}">
        <form id="commentsApi">
        <h5 class="text-center">Comentar Categoria</h5>
        <div class="w-25 m-auto">
            <div>
                <textarea id="comment" class="form-control" rows="5" name="comment" placeholder="Escriba su comentario"></textarea>
            </div>
            <div>
                <select  class="form-select" name="score" id="score">
                    <option value="">Puntuar</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div>
                <button id="btnAddCat"  class="btn btn-primary my-2" type="submit">Enviar comentario</button>
            </div>
        </div>
    </form> 

    
    <div id="app">
        {include file='Templates/vue/comment.tpl'}
    </div>

    <script src="./Js/comments.js"></script>          
{/if}


{include file='Templates/footer.tpl'}