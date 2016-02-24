<?php 
    
    define("TITLE", "Team | Franklin's Fine Dining");

    include('includes/header.php');
?>

    <h1>Our Fresh and Fiery Team</h1>

    <div id="team-members" class="cf">
        <p class="text">A restaurant business demands energy, attention to detail and a strong sense of hospitality from its employees, but these qualities are only the start of what's required of the people leading the restaurant. These team leaders are responsible for maintaining high standards among the staff and ensuring a memorably good experience for customers.</p>
        <hr>
        <?php
        
            foreach($teamMembers as $member)
            {
        ?>
            <div class="member">
                <img class="team-member-photo" src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
                <h2><?php echo $member[name]; ?></h2>
                <p><?php echo $member[bio]; ?></p>

            </div><!--member-->
        <?php
            }
        ?>
    <hr class="team-page-hr">
        

<?php include('includes/footer.php'); ?>