<?php
function showCarousel($dir,$pat,$alt,$mod=1){
	$max=glob($dir . '/' . $pat);
	$i=0;
	if(empty($max)) {return;}
	if($mod==1) {
		echo '
<div id="myCarousel" class="carousel slide" data-ride="carousel">		
<ol class="carousel-indicators">
		';
		//Indicators
		foreach($max as $file){
			if($i==0){echo ' 
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			';}
			else {echo ' 
			<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>
			';}
			$i++;
		}
		$i=0;
		echo '
		</ol>
		<div class="carousel-inner" role="listbox">';
		//Wrapper for slides
		foreach ($max as $file){
		if($i==0) {echo '
		<div class="item active" ><img class="img-responsive center-block" src="' . $file . '" alt="'.$alt.'#'.$i.'"></div>
		';}
		else{echo '
		<div class="item" ><img class="img-responsive center-block" src="' . $file . '" alt="'.$alt.'#'.$i.'"></div>'
		;}
		$i++;
	}
	echo '</div>';
	//Left and right controls
	echo '
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="false"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
';

	}
	elseif($mod==2) {
	
	}
   else {
   
   }

}
?>