{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}

<h2>Categorias</h2>
{if isset ($smarty.session.email)}
     <form action="addCat" method="post">
         <input type="text" name="nombre" id="nombre">
         <input type="submit" id="submit" value="Agregar" name="submit">
    </form>
{/if}
<h3>Lista de Categorias</h3>   
    <ul>
        {foreach from=$categorias item=categoria}
            <li> 
                <a href="viewCat/{$categoria->id_categoria}">{$categoria->nombre}</a>
                {if isset ($smarty.session.email)}
                    <a href="deleteCat/{$categoria->id_categoria}">🗑️Borrar</a>
                     <a href="editCat/{$categoria->id_categoria}">Editar</a>
                {/if}
            </li>
        {/foreach}
</ul>

{include file='Templates/footer.tpl'}
