<?php

class Scraper extends CI_Model {

	public function scrape($twitterName){
		$page = curl_init("https://twitter.com/BarackObama");
		print $page;
	}

}

?>