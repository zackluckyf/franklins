<?php 
    //nav menu items
    $navItems = array(
        array(
            slug => "index.php",
            title => "Home"
        ), 
        array(
            slug => "team.php",
            title => "Team"
        ),
        array(
            slug => "menu.php",
            title => "Menu"
        ),
        array(
            slug => "contact.php",
            title => "Contact"
        ),
    );

    $teamMembers = array(
        array(
            name => "Frankie III",
            position => "Owner",
            bio => "Frankie is the great-grandson of the original Frankie, he is the owner of Franklin's Fine Dining. He cooks a mean frittata!",
            img => "frankie"
        ), 
        array(
            name => "Francis",
            position => "General Manager",
            bio => "Francis knows her stuff. The big sister of Frankie himself, she runs the show. Don't miss her Margarita Mondays!",
            img => "francis"
        ), 
        array(
            name => "Carlos",
            position => "Head Chef",
            bio => "Carlos is the epitome of the phrase &ldquo;Don't judge a book by its cover&rdquo; &mdash; You simply cannot find a better chef.",
            img => "carlos"
        ),      
    );

    $menuItems = array(
        
        "club-sandwich" => array(
        
            title => "Club Sandwich",
            price => 11,
            blurb => "Freshly Roasted Turkey Breast, Bacon, Lettuce, Tomato and Mayonnaise on White Toast. Served with French Fries or Green Salad.",
            drink => "Club Soda"
        ),
        "dill-salmon" => array(
        
            title => "Lemon &amp; Dill Salmon",
            price => 18,
            blurb => "This dish is a sweet delight that blends the taste of the freshest dill with the locked-in flavor of broiled salmon.",
            drink => "Fancy Wine"
        ),
        "super-salad" => array(
        
            title => "The Super Salad<sup>&reg;</sup>",
            price => 34,
            blurb => "Avocado, Tomato, Grilled Corn, Black Beans, Cucumber and Romaine All Tossed with Our Barbeque Ranch Dressing. Topped with Lots of Crispy Fried Onion Strings for Crunch.",
            drink => "Jug o' Water"
        ),
        "mexican-barbacoa" => array(
        
            title => "Mexican Barbacoa",
            price => 23,
            blurb => "Sandwich on a roll with mexican barbacoa and smothered in hot or mild salsa. Served with French fries and an avocado slice.",
            drink => "Beer with a lime"
        ),
    );


?>