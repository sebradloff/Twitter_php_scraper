<?php
	
	class Parser extends CI_Model {


		public function getFollowerNumber(){
			include('application/libraries/simple_html_dom.php');
			
			$rawHTML = file_get_html('https://twitter.com/BarackObama');

			$metrics = array();
			
			foreach($rawHTML->find('span[class="ProfileNav-value"]') as $span){ 
    		array_push($metrics, $span->innertext);
    	}

    	$followerNumber = $metrics[3];
    	
    	return $followerNumber;
	
		}

	}

?>