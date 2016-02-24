<ul>
    
    <?php 
    
    foreach($navItems as $item){
        echo "<button class='nav-button'><li><a href='$item[slug]'>$item[title]</a></li></button>";
    }
    
    ?>
    
</ul>             
