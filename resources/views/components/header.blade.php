<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}

body {
margin: 0;
font-family: Arial;
}

.header {
overflow: hidden;
background-color: lightgray;
padding: 20px 10px;
}
.header a {
float: left;
color: black;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 15px;
line-height: 25px;
border-radius: 5px;
}
.header .logo {
font-size: 25px;
font-weight: bold;
}
.logo {
    font-size: 55px;
}
.header a:hover {
background-color: grey;
color: black;
}
.header .active {
background-color: white;
color: black;
}
.header-right {
float: right;
}
@media screen and (max-width: 500px) {
.header a {
float: none;
display: block;
text-align: left;
}
.header-right {
float: none;
}
}
</style>
</head>
<body>
<div class="header">
<a href="/" class="logo">carGarage</a>
<div class="header-right">
<a href="/">Login</a>
<a href="/">Register</a>
</div>
</div>
<div style="padding-left:20px">

</div>
</body>
</html>