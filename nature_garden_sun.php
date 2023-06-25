<?php

// START OF FILE

// Declare variables
$antiqueStore = array();
$uniquePieces = array();
$location = array();

// Loop to populate antique store array
for($i=0; $i<2000; $i++) {
	$antiqueStore[$i] = '';
}

// Loop to populate unique pieces array
for($i=0; $i<2000; $i++) {
	$uniquePieces[$i] = '';
}

// Loop to populate locations array
for($i=0; $i<2000; $i++) {
	$location[$i] = '';
}

// Function to get unique pieces from around the world and store them in antique store array
function getUniquePieces($antiqueStore, $uniquePieces, $location){
	$uniquePieces = array();
	$location = array();
	
	for($i=0; $i<2000; $i++) {
		$uniquePieces[$i] = fetchUniquePieces();
		$location[$i] = fetchLocation();
		$antiqueStore[$i] = array(
			'uniquePiece' => $uniquePieces[$i],
			'location' => $location[$i]
		);
	}
	return $antiqueStore;
}

// Function to fetch unique pieces from around the world
function fetchUniquePieces() {
	$pieces = array(
		'antique chair',
		'antique table',
		'antique lamp',
		'antique bureau',
		'antique clock',
		'antique mirror',
		'antique vase',
		'antique painting',
		'antique jewelry',
		'antique rug'
	);
	
	$randomIndex = array_rand($pieces);
	return $pieces[$randomIndex];
}

// Function to fetch a location
function fetchLocation() {
	$locations = array(
		'France',
		'Italy',
		'Spain',
		'Germany',
		'Portugal',
		'Greece',
		'Turkey',
		'Netherlands',
		'Switzerland',
		'Austria'
	);
	
	$randomIndex = array_rand($locations);
	return $locations[$randomIndex];
}

// Call the function to get unique pieces from around the world and store them in antique store array
$antiqueStore = getUniquePieces($antiqueStore, $uniquePieces, $location);

// END OF FILE

?>