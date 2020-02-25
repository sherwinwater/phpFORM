<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Fill this In!!!! </title>
    <meta name="author" content="Wendi Jollymore" />
</head>

<body>
    <h1> html </h1>
    <?php
//    phpinfo();
    echo "<h2>This is another page</h2>\n";
    echo "<p>Not very exciting, yet.</p>\n";

    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?>
</body>

</html>