<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login Sistem KRS</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#1e3c72,#2a5298);
}

.container{
width:380px;
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.title{
text-align:center;
margin-bottom:30px;
}

.title h2{
color:#2a5298;
}

.input-group{
margin-bottom:20px;
}

.input-group label{
display:block;
margin-bottom:5px;
font-weight:bold;
}

.input-group input{
width:100%;
padding:10px;
border:1px solid #ccc;
border-radius:5px;
}

.btn-login{
width:100%;
padding:12px;
border:none;
background:#2a5298;
color:white;
font-size:16px;
border-radius:5px;
cursor:pointer;
transition:0.3s;
}

.btn-login:hover{
background:#1e3c72;
}

.footer{
text-align:center;
margin-top:15px;
font-size:14px;
color:gray;
}

</style>

</head>

<body>

<div class="container">

<div class="title">
<h2>Sistem KRS</h2>
<p>Login</p>
</div>

<form>

<div class="input-group">
<label>NRP / NIM</label>
<input type="text" placeholder="Masukkan NRP">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" placeholder="Masukkan Password">
</div>

<button class="btn-login">Login</button>

</form>

<div class="footer">
<p>© 2026 Sistem KRS Universitas</p>
</div>

</div>

</body>
</html>