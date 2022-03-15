{include file='Templates/header.tpl'}

<a href="/web2">Volver</a>
<h2>Registrarse</h2> 
<h3>Genere un nuevo usuario completando los campos:</h3>
    
    <form method="post" action="registerUser">
        <label >Ingrese un mail valido: </label>
        <input type="email"  id="email" name="email" placeholder=" Ingrese un email valido" required>
        <label >Ingrese una contraseña: </label> 
        <input type="password"  id="password" name="password" placeholder=" Cree una contraseña"  required>
        <input type="submit" id="submit" value="Registrar" name="submit">	
    </form>
     

{include file='Templates/footer.tpl'}

