<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Document</title>
    <style>
        body {
        font-family: "Lato", sans-serif;
        }

        .small-font-size {
            font-size: 20px !important;
        }

        .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        }

        .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
        }

        .sidenav a:hover {
        color: #f1f1f1;
        }

        .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        }

        #main {
        transition: margin-left .5s;
        padding: 16px;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- banner collapse -->
    <a data-toggle="collapse" href="#BannerArea" >Banner</a>
    <div class="collapse ml-2" id="BannerArea">
        <a class="small-font-size" href="/banner/create">Create Banner</a>
        <a class="small-font-size" href="/banner">Show Banner</a>
    </div>
    <!--category collapse  -->
    <a class="my-2" data-toggle="collapse" href="#CategoryArea" >Category</a>
    <div class="collapse ml-2" id="CategoryArea">
        <a class="small-font-size" href="/category/create">Create Category</a>
        <a class="small-font-size" href="/category">Show Category</a>
    </div>
    <!-- subcategory collapse -->
    <a class="my-2" data-toggle="collapse" href="#SubCategoryArea" >Sub Category</a>
    <div class="collapse ml-2" id="SubCategoryArea">
        <a class="small-font-size" href="/subcategory/create">Create Sub Category</a>
        <a class="small-font-size" href="/subcategory">Show Sub Category</a>
    </div>
    <!-- product collapse -->
    <a class="my-2" data-toggle="collapse" href="#ProductArea" >Product</a>
    <div class="collapse ml-2" id="ProductArea">
        <a class="small-font-size" href="/product/create">Create Product</a>
        <a class="small-font-size" href="/product">Show Product</a>
    </div>
     <!-- discount product collapse -->
    <a class="my-2" data-toggle="collapse" href="#discountProduct" >Discount</a>
    <div class="collapse ml-2" id="discountProduct">
        <a class="small-font-size" href="/discountProduct/create">Create Discount</a>
        <a class="small-font-size" href="/discountProduct">Show Discount</a>
    </div>
    <!-- user collapse -->
    <a class="my-2" data-toggle="collapse" href="#UserArea" >User</a>
    <div class="collapse ml-2" id="UserArea">
        <a class="small-font-size" href="/user">Show Users</a>
    </div>
    <a href="/order">Order</a>
    

</div>

<div id="main">
    <nav class="navbar navbar-light bg-light">
        <span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <!-- <a class="navbar-brand" href="#"> -->
        
                <form action="/logout" method="post">
                    @csrf
                    <button  type="submit" class="btn btn-outline-secondary">Logout</button>
                </form>
    </nav>

    <div class="mx-5">
    @yield('content');
    </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>