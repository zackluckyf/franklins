<?php

    define("TITLE", "Menu | Franklin's Fine Dining");

    include('includes/header.php');

?>

<div id="menu-items">
    
    <h1>Our Delicious Menu</h1>
    <p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
    <p><em>Click any meny item to learn more about it.</em></p>
    <hr>
    
    <ul>
        <?php foreach($menuItems as $dish => $item) { ?>
        
        <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title].=" "; ?></a><sup>$</sup><?php echo $item[price]; ?></li><br>
        
        <?php } ?>
    </ul>
    
    <hr>

</div>



<?php include('includes/footer.php'); ?>