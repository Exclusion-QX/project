<?php 
										
	function rating_show($rating){
		if (!(isset($rating))) {
				echo '<span></span>	
				<span></span>    
				<span></span>  
				<span></span>    
				<span></span>';
			} elseif (($rating > 0) && ($rating < 1.5)) {
				echo '<span class="active"></span>	
				<span></span>    
				<span></span>  
				<span></span>    
				<span></span>';
			} elseif (($rating >= 1.5) && ($rating < 2.5)) {
				echo '<span class="active"></span>	
				<span class="active"></span>    
				<span></span>  
				<span></span>    
				<span></span>';
			} elseif (($rating >= 2.5) && ($rating < 3.5)) {
				echo '<span class="active"></span>	
				<span class="active"></span>    
				<span class="active"></span>  
				<span></span>    
				<span></span>';
			} elseif (($rating >= 3.5) && ($rating < 4.5)) {
				echo '<span class="active"></span>	
				<span class="active"></span>    
				<span class="active"></span>  
				<span class="active"></span>    
				<span></span>';
			} else {
				echo '<span class="active"></span>	
				<span class="active"></span>    
				<span class="active"></span>  
				<span class="active"></span>    
				<span class="active"></span>';
			}	
	}

?>