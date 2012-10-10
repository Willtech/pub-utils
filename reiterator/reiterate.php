<?php

#####################################################################
#####################################################################

// /pub-utils/reiterator/reiterate.php - a re-numbering iterator
//
// Utility to iterate over a file input as a string and
// replacing after $b which is before $e and  with $n++;

// NOTICE
// ======
// Per detail in the included LICENCE this work Public Utilities
// by Willtech is licensed under the
// Creative Commons Attribution-ShareAlike 3.0 Unported License
// Based on a work at git://github.com/Willtech/pub-utils.git
// To view a copy of this license, visit:
// http://creativecommons.org/licenses/by-sa/3.0/.
// Both this NOTICE and the LICENCE must be included with every
// file in any distribution.

function output ($output) {

	## Output the reiterated input string in the template at the point of the placeholder
	## using htmlentities to encode unsafe characters.

	$tpl = file_get_contents("output.tpl");
	$result = preg_replace("/{reiterated}/",htmlentities($output, ENT_QUOTES),$tpl);
	return $result;
}

## placeholder
$reiterated = "reiterated here";

echo output ($reiterated);

?>

