{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}

<div class="titulo">
    <h1>Lista de Usuarios</h1>
</div>    
        <table class="table table-striped w-50 m-auto">
            <thead>
                <tr>
                    <th class="text-center">Email</th>
                    <th class="text-center">Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$users item=$user}
                <tr>
                    <td class="text-center">{$user->email}</td> 
                    {if $user->rol == 0}
                        <td class="text-center">Administrador</td>
                    {elseif $user->rol == 1}
                         <td class="text-center">Usuario</td>
                    {/if}
                    <td class="text-center"><a href="updateUser/{$user->id}"><button class="btn btn-secondary" >Cambiar rol</button></a></td>
                    <td class="text-center"><a href="deleteUser/{$user->id}"><button class="btn btn-danger" >Eliminar</button></a></td>
                    
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