<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

   <link rel="stylesheet" href="css/cabotcruisesStyles.css">
    <title>Cabot Cruises: <?php echo($title); ?></title>
</head>
<body>



<div id="wrapperHead">


<header>

<figure class="logo"><img src="images/logo0.png" alt="logo" srcset="images/logo1.png 1x, images/logo2.png 2x, images/logo3.png 3x"></figure>
<div class="theTitles">
<h1>Cabot Cruises</h1>
<h2>Holiday in the Sun</h2>
</div>

<div class="phone"><a href="tel:+8015555555"><span>801-555-5555</span></a></div>

</header>


</div>


<div id="wrapperNav">

    <nav class="clearfix">
    <button class="primaryBtn" onclick="toggleMenu()">&#9776;</button>
    <ul id="primaryNav" class="hide">
    <li class="active"><a href="index.php">HOME</a></li>
    <li><a href="#">CRUISES</a></li>
    <li onclick="toggleMenu2()"><a href="#">AGENTS</a>
    <ul id="secondaryNav" class="parent">
      <li><a href="#">TOP AGENTS</a></li>
      <li><a href="#">ADDITIONAL INFO</a></li>
    </ul>
    </li>
    <li><a href="#">BOOK</a></li>
    </ul>
    <div id="search" class="search-container">
      <form method="get" action="/action_page.php">
        <input type="text" placeholder="Search..." name="search">
        <button><i class="fa fa-search icon"></i></button>
      </form>
    </div>
    
    
    
    
    </nav>

    
    
    </div>


    <main>

