<?php

	$message = 'Welcome to PHP';
	$num1    = 11;
	$num2    = 23;

	$total = $num1 + $num2;

	echo "<h3>$message</h3>";
	echo "<p>The sum of $number1 and $number2 is $total.";

	echo '<p>The sum of ' . $number1 . 'and ' . $number2 . ' is ' . $total . '.';
	// when using single quotes to use variable it must be used in this way.

?>


<?php
	$logged_in = false;

if ( $logged_in ) {
	echo 'Welcome';
} else {
	echo 'Please log in';
}
?>


<?php

	$js_libraries = array( 'React', 'Angular', 'Vue' );

	print_r( $js_libraries );  // Array([0]=>React [1]=>Angular [2]=>Vue).
	echo '<br>';
	var_dump( $js_libraries ); // array(3) {[0]=> string(5) "React" [1]=> string(7) "Angular" [2]=>string(3) "Vue"}.

	echo $js_libraries[1];   // Angular.

	echo '<hr>';

	/* Associative Array */
	$js_libraries = array(
		'React'   => 'Facebook',
		'Angular' => 'Google',
		'Vue'     => 'Evan You',
	);

	var_dump( $js_libraries );

	echo '<h3>' . $js_libraries['React'] . '</h3>';



	/* Multidimensional Array */
	$users = array(
		array(
			'userID'   => 'User1',
			'password' => '1234',
		),
		array(
			'userID'   => 'User2',
			'password' => '5678',
		),
	)

	var_dump( $users );
	echo '<h3>' . $users[0]['userID'] . '</h3>';    // User1.
	?>


<?php

/*  While Loop */

echo '<h1>While Loop</h1>';

$limit  = 10;
$number = 0;

echo '<ul>';
while ( $number <= $limit ) {
	echo "<li>$number</li>";
	$number++;
}
echo '</ul>';




echo '<h1>For Loop</h1>';

echo '<ul>';
for ( $i = 0; $i <= $limit; $i++ ) {
	echo "<li>$i</li>"
}
echo '</ul>';



/* Do while Loop */
echo '<h1>Do while Loop</h1>';

$number = 0;

do {
	echo "<li>$number</li>"
	$number++;
} while ( $number <= $limit );



/* Foreach Loop */

$names = array( 'Jane', 'Charlie', 'Ana' );

echo '<ul>';
foreach ( $names as $name ) {
	echo "<li>$name</li>"
}
echo '</ul>';






$languages = array(
	'PHP'    => 'Laravel',
	'Python' => 'Django',
);

echo '<ul>';
foreach ( $languages as $language => $framework ) {
	echo "<li>Framewor for $language: $framework</li>"
}
echo '</ul>';
?>


<?php

/* Functions */

function say_hi() {
	echo 'Hi, everyone';
}
say_hi();

function add( $num1, $num2 ) {
	return $num1 + $num2;
}

echo '<h4>The sum of 20 and 30 is ' . add( 20, 30 ) . ' ./h4>';


