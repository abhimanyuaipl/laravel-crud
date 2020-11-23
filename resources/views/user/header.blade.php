<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('header')
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: black;
  padding: 20px 10px;
}

.header a {
  float: left;
  color:gray;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}



.header-right a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
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
.logo{
  padding: 5px;

}
/* 
.logo:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
} */

</style>
</head>
<body>

<div class="header">
  <a href="" class="logo" ><img src="https://freefrontend.com/assets/img/css-logos/Netflix-logo.png" height="100px" width="200px"></a>
  <div class="header-right">
    <a class="active" href="formpage">Home</a>
    <a href="contact">Contact</a>
    <a href="about">About</a>
    <a href="#">Login/Signup</a>
  </div>
</div>

<div style="padding-left:20px">
 
</div>

</body>
</html>
