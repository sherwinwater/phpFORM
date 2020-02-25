<html>
    <body>

        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?><br>
        radio button is : <?php
        $colour = isset($_POST["optColour"]) ? $_POST["optColour"] : "";
        echo $colour;
        ?><br>

        checkbox is         
        <?php
        $myPhp = isset($_POST["chkPhp"]) ? TRUE : FALSE;
        echo $myPhp
        ?><br>

    </body>
