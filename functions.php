<?php
function post_background_color($id){
	switch($id){
		case 4:
			return "background-color: green; ";
		case 5:
			return "background-color: blue; ";			
	}
}

function post_date_format($date){
	$data_ex = explode("-",$date);
	return $data_ex[0]."<br>".$data_ex[1];
}