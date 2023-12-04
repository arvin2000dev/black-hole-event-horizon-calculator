<?php
function calculateEventHorizonDistance($mass) {
    $gravitationalConstant = 6.674 * pow(10, -11); //Gravitational constant => 6.674×10−11
    $speedOfLight = 299792458; //meters per second

	//Formula: 2GM / c^2
	//G = Gravitational constant
	//M = Mass of the object
	//c = Speed of light
    $distance = (2 * $gravitationalConstant * $mass) / pow($speedOfLight, 2); 

    return $distance; //in meters
}

//if there were a blackhole with mass of the sun
$mass_of_the_sun = 1.989 * pow(10, 30);

echo "If the blackhole's mass were: " . $mass_of_the_sun . " then you would have to stay at: " . calculateEventHorizonDistance($mass_of_the_sun) . " meters in order to avoid it's event horizon";
