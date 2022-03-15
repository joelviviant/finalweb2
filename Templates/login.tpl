{include file='Templates/header.tpl'}

<a href="/web2">Carrito</a>
<a href="register">Registrarse</a>

<h1>{$titulo}</h1>

<form action="verify" method="post">
    <input placeholder="email" type="text" name="email" id="email" required>
    <input placeholder="password" type="password" name="password" id="password" required>
    <input type="submit" id="submit" value="Login" name="submit">			
</form>

<h4>{$error}</h4>


{include file='Templates/footer.tpl'}