<?php
function showCarousel($dir,$pat,$alt,$mod=1){
	$max=glob($dir . '/' . $pat);
	//if(empty($max)) {return;}
	if($mod==1) {
		foreach($max as $file){
		echo $file;
		}
	
	
	}
	elseif($mod==2) {
	
	}
   else {
   
   }

}
?>