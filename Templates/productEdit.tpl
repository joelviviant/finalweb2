{include file='Templates/header.tpl'}
<a href="/web2">Carrito</a>
{if !isset ($smarty.session.email)}
<a href="login">Login</a>
{/if}
{if isset ($smarty.session.email)}
<a href="logout">Logout</a>
 {/if}

<div class="titulo">
    <h1>{$titulo}</h1>
</div>
<div class="form-container">
    <form action="updateProd" method="post">
        <div class="form-group form-producto">
            <div id="producto">
                <label><a href="producto">Producto</a></label>
                <input type="text" class="form-control" name="nombre" value="{$producto->nombre}" id="nombre">
                <input hidden name="id" value="{$producto->id}" id="id">
            </div>
            <div id="categoria">
                <label><a href="categorias">Categoria</a></label>
                <select class="form-control" name="categoria" id="categoria"> 
                    {foreach from=$categories item=category}
                        {if $category->id_categoria eq $producto->id_categoria}
                        <option selected value="{$category->id_categoria}">{$category->nombre}</option>
                        {else}
                        <option value="{$category->id_categoria}">{$category->nombre}</option>
                        {/if}
                    {/foreach}                                  
                </select>
            </div>
            <div id="agregar">
                <div class="boton-container">
                    <input type="submit" id="submit" class="btn btn-primary" value="Guardar" name="submit">
                </div>
            </div>
        </div>			
    </form>
</div>
{include file='Templates/footer.tpl'}
