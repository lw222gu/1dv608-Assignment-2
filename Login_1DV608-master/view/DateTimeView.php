<?php

class DateTimeView {


	public function show() {

        date_default_timezone_set('Europe/Stockholm');
        $timeString = date("l jS \of F Y") . ", the time is " . date("H:i:s.");
		return '<p>' . $timeString . '</p>';
	}
}