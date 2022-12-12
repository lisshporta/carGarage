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
background-color: #C0C0C0;
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
<a href="/" class="logo"> carGarage <i class="fa fa-automobile" style="font-size:20px"></i> </a> 

<div class="header-right">

@guest
<a href="/login">Login <i class="fa fa-sign-in" aria-hidden="true"></i> </a>
<a href="/register">Register <i class="fa fa-user" aria-hidden="true"></i> </a>
@endguest

    @auth
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out ') }} <i class="fa fa-sign-out"></i>
    </x-dropdown-link>
</form>
    @endauth

</div>
</div>
<div style="padding-left:20px">

</div>
</body>
</html>