{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}


<h1>{$titulo}</h1>

<form action="updateProd" method="post">
    <label><a href="producto">Producto</a></label>
    <input type="text" name="nombre" value="{$producto->nombre}" id="nombre">
    <input hidden name="id" value="{$producto->id}" id="id">
    <label><a href="categorias">Categorias</a></label>
        <select name="categoria" id="categoria"> 
            {foreach from=$categories item=category}
                {if $category->id_categoria eq $producto->id_categoria}
                 <option selected value="{$category->id_categoria}">{$category->nombre}</option>
                {else}
                 <option value="{$category->id_categoria}">{$category->nombre}</option>
                {/if}
            {/foreach}                                  
        </select>
    <input type="submit" id="submit" value="Guardar" name="submit">			
</form>

{include file='Templates/footer.tpl'}