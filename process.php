<?php include_once('includes/header.php');?>
    
    <h2>
        <pre>
        <!-- WELCOME <?php echo print_r($_POST) ?>! -->
            WELCOME <?php echo $_POST['username'] ?>
            <br>Your password is <?php echo $_POST['password'] ?>
            
        </pre>
    </h2>    

<?php include_once('includes/footer.php');?>