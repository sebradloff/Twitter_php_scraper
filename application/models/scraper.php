<?php

class Scraper extends CI_Model {

	public function scrape(){
		// initializes curl sequence
		$ch = curl_init();

		// curls site from specific url
		curl_setopt($ch, CURLOPT_URL, "https://twitter.com/BarackObama");
		// returns raw html from the curled site
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// actually curls the site
		$output = curl_exec($ch);

		// close the curl session
		curl_close($ch);

		// returns html elements of the page
		return htmlentities($output);
	}

}

?>