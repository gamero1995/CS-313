<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="homePage.css">
    <script src="homePage.js"></script>
    <title>Jose Gamero's Home Page
    </title>
</head>
<body>
    <header>
        <div class="topnav">
            <a class="active" href="homePage.php">Home</a>
            <a href="assignment.php">Assignments</a>
        </div>
        <h1>Jose Gamero's Home Page</h1>
    </header>
    <img src="family.jpg" alt="family" width="500" height="333">
    <br>
    <div id="aboutMe">
        <p>
            Hello Everybody! My name is Jose Gamero. I am a student at BYU-Idaho. 
            I am currently studing software Engineering. I was born in Lima,Peru but 
            raised in Everett, Washington. <br>I am married to my sweetheart and have the 
            craziest two year old.
            <br>
            I love playing, watching, talking about sports! I specially love
            basketball, Football and soccer.
            <br>
        </p>
    </div>
    <h2>Can you guess which team is for what sport?</h2>
    <div class="row">
            <div class="column">
              <img src="https://3.bp.blogspot.com/-efCdQIbkJw4/XHDSWmJunyI/AAAAAAAAGvw/_z1qK0bIdw4e6X0deQLJ1M5hZvO_bvZPgCHMYCw/s1600/barcelona-logo-png-images.jpg" alt="Barcelona" style="width:100%" >
            </div>
            <div class="column">
              <img src="https://partycity6.scene7.com/is/image/PartyCity/_pdp_sq_?$_1000x1000_$&$product=PartyCity/801417" alt="Spurs" style="width:100%">
            </div>
            <div class="column">
              <img src="https://rfathead-res.cloudinary.com/image/upload/q_auto,f_auto/c_pad,h_900/g_north,c_crop,h_900,w_900/c_pad,h_900,w_900/roomplus/14-14385_nfl_premask_Seattle_Seahawks_Stacked_Logotype_2015_logo_6628.jpg" alt="Seahawks" style="width:100%" >
            </div>
          </div>
          <?php
                echo date("h:i:sa");
            ?>
</body>
</html>