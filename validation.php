<!DOCTYPE html>
<html>
    <body>
    <h1>PHP XSS Example</h1>
    <p>This is an example of XSS.  Type something in the field below and then click Submit.</p>
    <form method="post">
        <input type="text" name="txtInput" id="txtInput" placeholder="Type anything."><br>
        <input type="text" name="txtProductCode" id="txtInput" placeholder="Type anything." pattern="\d{4}"><br>
        <input type="text" name="txtProductStatus" id="txtInput" placeholder="Type anything."><br>
        <input type="submit">
    </form>
    <p id="output">
        <?php
        $input = isset($_POST["txtInput"]) ? htmlentities($_POST["txtInput"]) : "";
        if (is_numeric($input)) {
            if (is_int($input)) {
                $total = $input * 1000;
            } else {
                echo "input is not an int";
            }
        } else {
            echo "input is not a float";
        }
        echo "<br>";
        echo strlen($input);
        ?>
        
    </p>

    </body>
</html>