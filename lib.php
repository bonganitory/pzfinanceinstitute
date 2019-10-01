<?php
function fetch($data)
{
	include "storage.bongani";
	
	foreach($GLOBALS[$data] as $key=>$fetched)
	{
		$GLOBALS[$key] = $fetched;
	}
}
?>