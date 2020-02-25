<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div>TODO write content</div>

        <h1>PHP XSS Example</h1>
        <p>This is an example of XSS.  Type something in the field below and then click Submit.</p>
        <form method="post">
            <input type="text" name="txtInput" id="txtInput" placeholder="Type anything."><br>
            <!--<input type="email" name="email" id="email" placeholder="email."><br>-->
            <input type="submit">
        </form>
        <?php
//        htmlentities() & htmlspecialchars()
        echo "----------htmlentities() & htmlspecialchars()-------" . "<br>";

        $input = $_POST["txtInput"];
        $input1 = htmlentities($input);
        $input2 = htmlentities($input1, ENT_QUOTES);
        $input3 = htmlspecialchars($input1, ENT_QUOTES);

        $inputSe = htmlentities($input1);
        $inputSpecial1 = htmlspecialchars($input1);
        $inputSpecial = htmlspecialchars($inputSpecial);

        $x = "helloworld";
        ?>
        <?php echo "hello" ?><br>
        <?php echo $x ?><br>

        <?php echo "----------\$_POST[]-------" . "<br>"; ?>
        <?php echo $_POST["txtInput"] ?> <br>
        <?php echo $input ?> <br>
        <?php echo "----------htmlentities() -------" . "<br>"; ?>
        <?php echo $inputSe ?><br>
        <?php echo $input2 ?><br>
        <?php echo "----------htmlspecialchars()-------" . "<br>"; ?>
        <?php echo $input3 ?><br>
        <br>

        Hello, today is <?= date('l, F jS, Y'); ?><br>

        <?php $inputJS = "<script type='text/javascript'>
            var c = document.body.children;
            for (i = 0; i < c.length; i++) {
                c[i].innerHTML = 'Gotcha!';Ï
            }</script>"
        ?>

        <!--filter_var()-->
        <?php
        echo "------------filter_var()-----------" . "<br>";

        $email = "ss@gmal";
        // **Using validation filter:
        // outputs "Not a valid email." because $data is not a valid email address
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $email;
        } else {
            echo "Not a valid email.";
        }
        echo "<br>";

        // **Using sanitization filter:
        // cleans up the email and stores it in $cleanEmail
        $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $cleanEmail;
        echo "<br>";
        ?>

        <!--filter_input()-->
        <?php
        $name1 = filter_input(INPUT_POST, "txtInput", FILTER_SANITIZE_STRING);
        echo "-------------filter_input()-----------" . "<br>";
        echo $name1;
        ?>

        <!--isset()-->
        <?php
        echo "----------isset()----------<br>";
        $a = 0;
// True because $a is set
        if (isset($a)) {
            echo "Variable 'a' is set.<br>";
        }

        $b = null;
// False because $b is NULL
        if (isset($b)) {
            echo "Variable 'b' is set.";
        } else {
            echo "Variable 'b' is not set";
        }
        ?>






        <!--JS click-->
        <?php echo "<br>"; ?>
        <input type="button" value="inputJS" id="inputJS">
        <script type="text/javascript">
            var inputJS = document.getElementById('inputJS');
            inputJS.addEventListener("click", showMe);
            function showMe() {
                alert("hello");
                // <?php echo "<p>hello </p>" ?>;  // cannot execute it

            }
        </script>      
    </body>
</html>