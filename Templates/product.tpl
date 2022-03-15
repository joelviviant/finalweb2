{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
<a href="showUsers">Lista de Usuarios</a>

 {/if}


<h1>{$titulo}</h1>

{if isset ($smarty.session.email)}
    <form action="addProd" method="post">
    <label>Producto</label>
    <input type="text" name="nombre" id="nombre">
    <label>Categorias</a></label>
        <select name="categoria" id="categoria">
            {foreach from=$categorias item=$categoria}
                <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>   
            {/foreach}                                                     
        </select>
    <input type="submit" id="submit" value="Agregar" name="submit">			
    </form>
{/if}

<table>
    <tr>
        <th><a href="producto">Productos</a></th>
        <th><a href="categorias">Categorias</a></th>			
    </tr>
    <tr>
        <td>
            <ul>
                {foreach from=$productos item=$producto}
                    <li>
                        <a href="viewProd/{$producto->id}">{$producto->nombre}</a>
                    </li>
                {/foreach}                 
            </ul>
        </td>			
        <td>
            <ul>
                {foreach from=$productos item=$producto}
                    <li>
                        <a href="viewCat/{$producto->id_categoria}">{$producto->categoria}</a> 
                        {if isset ($smarty.session.email)}
                            <a href="deleteProd/{$producto->id}">🗑️Borrar</a> 
                            <a href="editProd/{$producto->id}">Editar</a>
                        {/if}
                       
</li>    
                {/foreach}
            </ul>	
        </td>
     </tr>
</table>



{include file='Templates/footer.tpl'}