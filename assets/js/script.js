$(document).ready(function() {

	var allLyrics = $("p");
	var currLyrics = 0;

	function changeLyrics() {
		$(allLyrics[currLyrics]).fadeOut(1000, function() {
			if (currLyrics == allLyrics.length - 1) {
				currLyrics = 0;
			} else {
				currLyrics++;	
			}
			$(allLyrics[currLyrics]).fadeIn(1000);
		});
	}
	setInterval(changeLyrics, 3000);
});
