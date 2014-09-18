<?php

class Scraper extends CI_Model {

	public function scrape(){
		include('application/libraries/simple_html_dom.php');

		$rawHTML = file_get_html('https://twitter.com/BarackObama');

		return $rawHTML;
	}

}

?>