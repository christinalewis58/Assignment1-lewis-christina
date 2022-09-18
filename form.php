<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/dbv8mjd.css">


</head>
<body>

    <label for="form-password">Password:</label>
    <form class="password-field" method="post" action="form.php">
         
    <input type="password" name="form-password">
    </form>
    
    <?php
    if(isset($_POST['form-password']) && $_POST['form-password'] == "secretpassword"){
    ?>

    <div>
        <img src="images/koda/png" alt="an adorable german shepherd" width=400 title="Koda the GSD">
    </div>
    <div>
        <h1>Rate my dog</h1>
        <form method="post" action="form-handler.php">
        <fieldset>
					<legend>Please complete the form</legend>
					<ul>
						<li>
							<label for="name">Name:</label>
							<input type="text" id="name" name="name">
						</li>
					
						<li>
							<label for="email">Email:</label>
							<input type="email" id="email" name="email">
						</li>

                        <li>
							<label for="phone">Phone:</label>
							<input type="tel" id="phone" name="phone">
						</li>
                        <li>
                       <p>What breed is Koda?</p> 
                        <input type="radio" name="breed"
                          
                            value="yorkie">Yorkie
                            <input type="radio" name="breed"
                            
                            value="german shepherd">German Shepherd
                            <input type="radio" name="breed"
                       
                            value="malinois">Malinois
                            <input type="radio" name="breed">
                        </li>
                        <li>
							<label for="cute-dog">Do you think Koda is cute?</label>
							<select id="cute-dog" name="cute-dog">
								<option value="yes">Yes</option>
								<option value="absolutely">Absolutely</option>
								<option value="no">Eh, not really</option>
							</select>
						</li>
                        <li>
                            Comments: <textarea name="comments" rows="5" cols="40"></textarea>
                        </li>
					
					</ul>
				</fieldset>
                <input type="submit" value="Submit" >
        </form>
    </div>
    <?php }elseif(isset($_POST['form-password']) && $_POST ['form-password'] != "secretpassword"){
        echo "<p style='color: red; font-style: bold;'> WRONG PASSWORD!</P>";
        }?>
    
    

    <footer></footer>
</body>
</html>