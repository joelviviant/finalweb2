{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}


<h1>{$titulo}</h1>

<form action="updateCat" method="post">
    <label>
        <a href="producto">Categoria</a>
    </label>
    <input type="text" name="nombre" value="{$categorias->nombre}"id="nombre">
    <input hidden name="id" value="{$categorias->id_categoria}"id="id">
    <input type="submit" id="submit" value="Guardar" name="submit">			
</form>


{include file='Templates/footer.tpl'}

