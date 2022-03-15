{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}

 
<h1>{$titulo}</h1>

    <ul>
        {foreach from=$productos item=producto}
            <li>
                <a href="viewProd/{$producto->id}">{$producto->nombre}</a>
            </li>     
        {/foreach}                     
    </ul>

{include file='Templates/footer.tpl'}