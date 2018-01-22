<?php
function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics() {
	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth');

	$gifts = array(
		'A partridge in a pear tree',
		'Two turtle doves',		
		'Three French Hens',		
		'Four calling birds',		
		'Five golden rings',		
		'Six geese a-laying',		
		'Seven swama a-swimming',		
		'Eight maids a-milking',		
		'Nine ladies dancing',		
		'Ten lords a-leaping',		
		'Eleven pipers piping',		
		'Twelve drummers drumming',		
	);


	for ($i = 0; $i < 11; $i++) {

		if ($i == 0)
			echo '<p id="day' . $i . '">';
		else
			echo '<p>';

		echo 'On the ' . $days[$i] . ' day of Christmas my true love gave to me<br>';

		if ($i == 0)  
			echo $gifts[$i] . '<br>';
		else 
			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo 'and ' . $gifts[$j] . '<br>';
				else
					echo $gifts[$j] . '<br>';
			}

		echo '</p>';
	}
}



