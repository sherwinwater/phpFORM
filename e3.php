<?php
$varA = 5;
function foo()
{
	global $varA;
	echo $varA;
}
foo();
?>

<?php
$a = 1; /* global scope */

function test()
{
//	echo $a; /* reference to local scope variable */
}
test();
?>

<!--//static-->

<?php
function test2()
{
	static $a = 0;
	echo $a;
	$a++;
}
test2();
test2();
?>


<?php
function test3()
{
	static $count = 0;

	$count++;
	echo $count;
	if ($count < 10) {
		test3();
	}
	$count--;
}
?>

<?php
function foo3()
{
	static $int = 0;          // correct 
	static $int = 1 + 2;        // correct (as of PHP 5.6)
	// static $int = sqrt(121);  // wrong  (as it is a function)

	$int++;
	echo $int;
}
?>
<?php
// include "e2.php";  // will show all of e2.php
//echo $languages[0];
// require "2.php"; // error occurs
?>