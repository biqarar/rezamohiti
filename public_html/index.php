<?php
/**
 @ In the name Of Allah
**/

// if Dash exist, require it else show related error message
if ( file_exists( '../dash/autoload.php') )
{
	require_once( '../dash/autoload.php');
}
elseif ( file_exists( '../../dash/autoload.php') )
{
	require_once( '../../dash/autoload.php');
}
else
{   // A config file doesn't exist
	exit("<p>We can't find <b>Dash</b>! Please contact administrator!</p>");
}
?>