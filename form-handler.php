<html>
    <head>
        <meta charset="utf-8">
        <title>My Form</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <main class="container">
        <?php
            $name       = $_POST['name'];
            //$password   = $_POST['password'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            $breed      = $_POST['breed'];
            $cuteDog    = $_POST['cute-dog'];
            $comments   = $_POST['comments'];
            
           
            //Display Name
            if(!empty($name)){
                echo "<h2>Your Name:</h2>";
                echo "<p>$name</p>";
            }

           //Name, Phone, and Email
           if(!empty($name) && !empty($phone) && !empty($email)){ ?>
           <h2>Contact Information:</h2>
           <?php echo "<p> Hi, $name, your phone number is $phone and your email is $email.</p>";

           }?>
        <h2> Your answers:</h2>
        <?php
            //Radio Buttons 
           if($breed == "yorkie") {
               echo "<p>C'mon, that wasn't even close!</p>";
           }elseif($breed == "german shepherd"){
               echo "<h2>That's it!</h2>";
           }else{
                echo "<p>Close, but not quite right.</p>";
            }

            //Ratings (Dropdown)
           if($cuteDog == "yes") {
               echo "<p>We agree!</p>";
           }elseif($cuteDog == "absolutely"){
               echo "<p>We knew you were smart!</p>";
           }else{
                echo "<p>Not really??? Get your eyes checked.</p>";
            }
            
        
           //Display Comments
           if(!empty($comments)){?>
           <h2>Comments:</h2>
           <?php echo $comments;
           }
        ?>
        </main>
    </body>
</html>