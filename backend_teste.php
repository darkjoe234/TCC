<!DOCTYPE html>
<html>
<title>Admin</title>

<head>
</head>

<body>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="cssbackend.css">

    <div class="underlay-photo"></div>
    <div class="underlay-black"></div>
    
<form class="login-form" method="POST" action="PHP_login.php">
        <p class="login-text">
            <span class="fa-stack fa-lg">
	      <i class="fa fa-circle fa-stack-2x"></i>
	      <i class="fa fa-lock fa-stack-1x"></i>
	    </span>
        </p>

        <input type="username" class="login-username" autofocus="false" required="true" placeholder="Usuário" name="usuario" />
        <input type="password" class="login-password" required="true" placeholder="Senha"  name="senha"/>
        <input type="submit" name="Login" value="Login" class="login-submit"  />
        </form>
    </form>



</body>
</html>