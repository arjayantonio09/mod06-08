<?php
function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics($x) {
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

		return '<p>' . 'On the ' . $days[$x] . ' day of Christmas,' . '<br>' . 'my true love sent to me: ' . '<br>' . $gifts[$x] . '</p>';
}



