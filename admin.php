<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/finance/view/style.css">
	<style>
			/*=========================================================================================================*/
		/*------------------position contenu-----------------------------*/
		#p {position: fixed;top: 0; bottom: 0; left: 0; right: 0;height: 100%;margin:0;padding:0;background-size: 100% ;width:100%;color:black;height: 760px; padding-bottom: 100px !important;}
		/*-----------fin position contenu-----------------------------------*/
		/*-------------position background-----------------------------------*/
		#p:before {content: "";position: absolute;height: 760px; width: 100%;background: url(background3.jpeg);background-size: cover;z-index: -1; -webkit-filter: blur(2px);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}
		/*------------- fin position background-----------------------------------*/
		/*-----------------formualaire connexion----------------------------------*/
		#p #formcon{border : 1px solid black;width: 350px;padding: 2%;margin : 10% 10% 0% 35%;background-color: rgba(255,136,79,0.5);border-radius: 20px;}
		#p #formcon label,input[type="submit"]{font-family: verdana,serif,arial,"Times New Roman" ;font-size: 20px;text-transform: uppercase;letter-spacing: 0.2em;}
		#p #formcon input[type="text"],input[type="password"]{width: 100%;padding: 11px;box-sizing: border-box;border-radius: 15px;}
		#conn input[type="submit"]{width: 100%;padding: 11px;box-sizing: border-box;border-radius: 15px;} 
		#conn input[type="submit"]{background-color: grey;margin-top: 1%;}
		#conn input[type="submit"]:hover{ cursor: pointer; /*modifier pointeur au survol*/opacity: 0.8;}
		#p #formcon input[type="text"]:focus{box-shadow: red 5px 5px; }
		#p .user{width: 35%;margin-left: 30%;}
		#p #formcon a{color: black;}
		#formcon a:action{color: red;}
		a{text-decoration: none;}
		label{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div id="p" >
		<form id="formcon" action="controller/userController.php" method="post" style="padding-bottom: 100px">
		<img src="user.png" class="user"><br>
		<label for="login">Login :</label><br>
		<input type="text" name="login"> <br>
		<label for="mdp">Mot de passe :</label><br>
		<input type="password" name="mdp"> <br>
		<input type="submit" name="btnConnexion" value="connexion" id="conn" style="margin-left: 60px; margin-top: 30px; padding: 8px 25px; border-radius: 2%;"><br>
	</form>
	</div>

</body>
</html>