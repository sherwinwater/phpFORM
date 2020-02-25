<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $str = "A 'quote' is <b>bold</b>";

        // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
        $x = htmlentities($str);

        echo htmlentities($x)."<br>";
        // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($x, ENT_QUOTES);
        ?>
    </body>
</html>
