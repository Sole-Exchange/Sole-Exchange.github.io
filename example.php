<?php
if($_POST["message"]){
    mail("tiana.horn@gmail.com", "Test Email", $_POST["message"], "From: tiana.horn@yahoo.com");
}    
?>

<!DOCTYPE html>
<html>
<title>
Sole Exchange
</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
    <link rel="stylesheet" href="css/style.css?v=7"/>
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/mobile.css"/>

</head>
    <body>
        <div class="main">
            <nav class="floating-menu  flex-wrap flex justify-between fl-100">
                <img class="navtxt" src="https://fontmeme.com/permalink/190921/59cce7361c725d731cd1d4f69445be2e.png" alt="Sole Exchange" border="0">
            </nav> 
            <div class="poppin ">
                    <group class=" container flex-wrap flex even justify-between fl-100">

                    <h2 class="title "NETFLIX>  NETFLIX FOR <br> SNEAKERHEADS</h2> 
                    <img class="shoe " src="images/Concord.png" alt="Sneaker (Jordan Concords)">
                    <h3 class="soon ">COMING SOON</h3> 
                    
                        <form method="POST" name="emailform" action="">
                            <fieldset class="contact">
                            <input placeholder="&#xf0e0; GET NOTIFIED" style="font-family:Poppins, FontAwesome"  type="email" name="email" tabindex="2" required>
                            <textarea name="message"></textarea>
                            <input type="submit">
                            </fieldset>
                        </form>
                    </group>
            </div> 
        </div>
    </body>
    <footer class="footer body poppin pv4 white"><small>Copyright LaQuan Jordan 2019</small></footer>
</html>






