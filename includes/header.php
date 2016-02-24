<?php 
    $companyName = "Franklin's Fine Dining";
    include('includes/arrays.php'); 
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        <link href="/styles.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body id="final-example">
        
        <div class="wrapper">
            
            <div id="banner">
                <a href="/" title="Return to Home">
                    <img src="img/banner.png" alt="Franklin's Fine Dining">
                </a>
            </div><!--banner-->
            
            <div id="nav">
                <?php include('includes/nav.php'); ?>
            </div><!--nav-->
            
            <div id="content">