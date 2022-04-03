<?php
function page_navigator($backLink,$nextLink,$backClass = '',$nextClass = ''){
	echo '
		<div class="navigation">
			<a href="#'.$backLink.'" data-transition="slide"  data-direction="reverse" class="'.$backClass.'" id="backbtn"><img src="img/navigation_back.jpg" /></a>
			<a href="#'.$nextLink.'" data-transition="slide" class="'.$nextClass.'" id="nextbtn"><img src="img/navigation_next.jpg" /></a>
			<div class="clear"></div>
		</div>
	';
}

function detect_new_user(){
	$_SESSION['user_id'] = get_user_count() + 1;
	
	//add to user table. but no data yet
	//just user status that is incomplete
	add_new_user();
}