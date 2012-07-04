<?php

function getValue( array $data, $key, $default = "" )
{
	if ( array_key_exists( $key, $data ) )
	{
		$value = $data[$key];		
	}
	else {
		$value = $default;
	}
	
	return $value;
}
