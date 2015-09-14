<?php

class DateTimeView {


	public function show() {

        date_default_timezone_set('Europe/Stockholm');
        $timeString = date("l") . ", the " . date("jS \of F Y") . ", The time is " . date("H:i:s.");
        //Ingen bra lösning att skapa nya datumobjekt hela tiden. Ska göra om denna!
		return '<p>' . $timeString . '</p>';
	}

}