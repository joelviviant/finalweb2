{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}


    <h1>Lista de Usuarios</h1>
        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$users item=$user}
                <tr>
                    <td>{$user->email}</td> 
                    {if $user->rol == 0}
                        <td>Administrador</td>
                    {elseif $user->rol == 1}
                         <td>Usuario</td>
                    {/if}
                    <td><a href="updateUser/{$user->id}"><button>Cambiar rol</button></a></td>
                    <td><a href="deleteUser/{$user->id}"><button>Borrar</button></a></td>
                    
                {/foreach}    
                </tr>
            </tbody>
        </table>
        {if $error}
            <div>
            <h6 {$error}</h6>
            </div>
        {/if}
          

{include file='Templates/footer.tpl'}