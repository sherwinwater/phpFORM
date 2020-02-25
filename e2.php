<?php
echo "<h1>This is a PHP Page by [Your Name]</h3>";
echo "<p>Today I'm beginning to learn some PHP.  I'm liking it so far!</p>";

echo "<p>";
echo "Email me at <a href=\"mailto:[your email]@sheridancollege.ca\">
[your email]@sheridancollege.ca</a>!</p>";
?>


<?php
$expression = true;
if ($expression == true) :
    ?>
    This will show if the expression is true.
<?php else : ?>
    Otherwise this will show.
<?php endif; ?>

<?php echo 'if you want to serve PHP code in XHTML or XML documents,
                use these tags'; ?>
<?= '\n print this' ?>
<?= "\n print this" ?>

<html>

    <body>
        <!-- $highlight = true; -->
        <p<?php if ($highlight) : ?> class="highlight" <?php endif; ?>>This is a paragraph.</p>
    </body>

</html>

<?php for ($i = 0; $i < 5; ++$i) : ?>
    Hello, there!
<?php endfor; ?>

<?php
echo 'Ending tag 
excluded \n';
echo '<p>But html is still visible</p>';
?>
<?php
$item = 2;
switch ($item) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "None of those.";
}
?>

<?php
$myString = "Hello, World!";
echo $myString{
0}; // prints H
echo $myString[1]; // prints e
echo "<a>hello</a>";
echo $myString{
12}; // prints !
// the next two statements print a null-string:
echo $myString[24];
echo $myString{
25};

echo $myString . "  " . "contacnation";

// if the index used in the brackets is not valid, "" is returned
?>

<!-- array -->
<?php
$s = ["java", "php"];
$s1 = array("j", 123, true);
echo $s[0];
echo $s1[2]; // true is 1

$languages = array(
    0 => "Java", 1 => "PHP", 2 => "Perl",
    3 => "C#", 4 => "Visual Basic"
);
// or
$languages2 = [
    0 => "Java", 1 => "PHP", 2 => "Perl",
    3 => "C#", 4 => "Visual Basic"
];
$sideDishes = [
    "naan" => 2.95,
    "dhal" => 3.95,
    "kitchari" => 4.95,
    "sag aloo" => 3.95,
    "mango chutney" => 1.95,
    "raita" => 1.95
];
echo $languages[1];
echo $sideDishes["dhal"];
// echo $Languages[0]; // case sensitive

foreach ($languages as $a) {
    echo $a . "" . "100";
}

echo "<p>Languages I know:<br />";
foreach ($languages as $aLang) {
    echo "$aLang<br>";
    // echo "$aLang";
}
echo count($languages);
echo "</p>";

// $key => $value
foreach ($sideDishes as $side => $price) {
    echo "$side: \$$price<br>";
}
// naan: $2.95
// dhal: $3.95
// kitchari: $4.95
// sag aloo: $3.95
// mango chutney: $1.95
// raita: $1.95
// adding and removing array elements
$languages[] = "english";
$languages["andy"] = "history";  //
array_push($languages, "chemistry");
array_push($languages, "chemistry2");
array_unshift($languages, "a", "b", "c");
array_pop($languages);
array_shift($languages);

foreach ($languages as $a) {
    // echo $a."<br>";
    echo "$a<br>";
    // echo $a;
}
foreach ($languages as $key => $value) {
    echo "$key: $value<br>";
}
// 0: Java
// 1: PHP
// 2: Perl
// 3: C#
// 4: Visual Basic
// 5: english
// andy: history
?>