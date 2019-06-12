#!/usr/bin/php
<?PHP
while (1)
{
	$line = readline("Enter a number: ");
	// Control-D is not a string, but a signal
	if (ord($line) == 0 && !is_string($line))
		break;
	elseif (is_numeric($line))
	{
		// Even Checking
		if ((int)$line % 2 == 0)
			echo "The number ".$line." is even\n";
		// Odd checking
		elseif ((int)$line % 2 != 0)
			echo "The number ".$line." is odd\n";
	}
	else
		echo "'$line' is not a number\n";
}
echo "\n";
?>
