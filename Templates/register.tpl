{include file='Templates/header.tpl'}

<a href="/web2">Volver</a>

<div class="titulo">
    <h2>Registrarse</h2> 
    <h3>Genere un nuevo usuario completando los campos</h3>
</div>
    
    <form method="post" class="w-25 m-auto d-flex flex-column" action="registerUser">
        <input class="form-control mb-2" type="email"  id="email" name="email" placeholder=" Ingrese un email valido" required>
        <input class="form-control mb-2" type="password"  id="password" name="password" placeholder=" Cree una contraseña"  required>
        <input class="btn btn-primary mb-2" type="submit" id="submit" value="Registrar" name="submit">	
    </form>
     

{include file='Templates/footer.tpl'}

