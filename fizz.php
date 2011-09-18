<?php

//initialize variable
$i=0;

for ($i=1; $i<101; $i++)
{
	if ($i % 3 == 0)
	{
		if ($i % 6 == 0) { echo "fizz-buzz <br />\n"; }
		else { echo "fizz <br />\n"; }
	}
	else { echo $i . "<br />\n"; }
}

//you must run this from a browser

?>