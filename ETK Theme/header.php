<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/nog1bda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head();?>
    <title><?php bloginfo("name") ?></title>
	
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-TSQ0XZ9T0G%22%3E"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-TSQ0XZ9T0G');
	</script>
</head>
<body>

<header id="header" style="z-index: 999;">
	<a href="http://josephpunk.dk/dev.etk/"><div id="icon-logo"></div></a>
    <a id="icon-menu" href="javascript:void(0);" onclick="toggleNav()"></a>
</header>

<div id="nav" class="nav-line-round">
    <div class="row nav-court-field nav-line-round nav-court-doubles">
        <a href="http://josephpunk.dk/dev.etk/">Home</a>
    </div>
    <div class="row">
        <div class="col nav-court-field nav-line-round nav-court-center">
            <a href="http://josephpunk.dk/dev.etk/trainings">Trainings</a>
        </div>
        <div class="col">
            <div class="row nav-court-field nav-line-round nav-court-service">
                <a href="http://josephpunk.dk/dev.etk/become-a-member">Become a member</a>
            </div>
            <div class="row nav-court-field nav-line-round nav-court-service">
                <a href="http://josephpunk.dk/dev.etk/news">News feed</a>
            </div>
        </div>
        <div class="col nav-court-field nav-line-round nav-court-center">
            <a href="http://josephpunk.dk/dev.etk/sponsors">Sponsors</a>
        </div>
    </div>
    <div class="row nav-court-field nav-line-round nav-court-doubles">
        <a href="http://josephpunk.dk/dev.etk/leaderboard">Hall of fame</a>
    </div>
</div>


<div id="nav-mobile" class="nav-line-left nav-line-right" style="display: none;">
    <div class="row nav-mobile-court-field nav-line-top">
        <a href="http://josephpunk.dk/dev.etk/">Home</a>
    </div>
    <div class="row nav-mobile-court-field nav-line-top">
        <a href="http://josephpunk.dk/dev.etk/become-a-member">Become a member</a>
    </div>
    <div class="row nav-mobile-court-field nav-line-top">
        <a href="http://josephpunk.dk/dev.etk/trainings">Trainings</a>  
    </div>
    <div class="row nav-mobile-court-field nav-line-top">
        <a href="http://josephpunk.dk/dev.etk/news">News feed</a>
    </div>
    <div class="row nav-mobile-court-field nav-line-top">
        <a href="http://josephpunk.dk/dev.etk/leaderboard">Hall of fame</a>        
    </div>
    <div class="row nav-mobile-court-field nav-line-top nav-line-bottom">
        <a href="http://josephpunk.dk/dev.etk/sponsors">Sponsors</a>  
    </div>
</div>


<script>

function toggleNav() {
    var nav = document.getElementById("nav");
    var navMobile = document.getElementById("nav-mobile");

    if (window.innerWidth > 600) {    
        if (nav.style.display === "block") {
            nav.style.display = "none";
        } else {
            nav.style.display = "block";
        }
    } else {
        if (navMobile.style.display === "block") {
            navMobile.style.display = "none";
        } else {
            navMobile.style.display = "block";
        }
    }
}

</script>

<style>

</style>