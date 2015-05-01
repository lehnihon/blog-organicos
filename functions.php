<?php
function post_background_color($id){
	switch($id){
		case 8:
			return "background-color: #cfea1c; ";
		case 9:
			return "background-color: blue; ";			
	}
}

function post_date_format($date){
	$data_ex = explode("-",$date);
	return "<span class='dia'>".$data_ex[0]."</span><span class='mes'>".strtoupper($data_ex[1])."</span>";
}