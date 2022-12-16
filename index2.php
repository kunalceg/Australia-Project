<?php
$page = @$_GET['page'];

$def = "home";
$ext = "php";
$url = "";

if (isset($page)) {
    $page = substr(strtolower(preg_replace('([^a-zA-Z0-9-.@/])', '', $page)), 0, 250);
    $pg = explode('/',$page);
	$pgname = @$pg[0];
	$pid = @$pg[1];
	$ptid = @$pg[2];

	if (file_exists("$pgname.$ext") and is_readable("$pgname.$ext") and !(isset($pid))) {
		include("$page.$ext"); 
    }
	else if(file_exists("$pgname.$ext") and is_readable("$pgname.$ext") and isset($pid)) {
		$url = "../";
		if(isset($ptid)) 
		{
			$url = "../../";
		}
		include("$pgname.$ext");		
	}	
	else 
	{
       include("error404.$ext");
    }
}
else
{	 
	include("$def.$ext");
}
?>