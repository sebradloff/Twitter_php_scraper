<?php
	
	class Parser extends CI_Model {

		public function getFollowerNumber($rawHTML){
			$dom = new DOMDocument();

			// the @ ignores any warnings that could be thrown by the raw html
			@$dom->loadHTML($rawHTML);
			
			# Iterate over all the <a> tags
			foreach($dom->find('span[class=ProfileNav-value]') as $span) {
			        echo $span;
			        echo "<br />";
			}



		}

	}

?>