<html>
<head>
<title>Find Largest & Smallest numbers in an Array</title>
</head>
<body>

	<h3>PHP Program to find Largest & Smallest numbers in a Array</h3>
	Enter the Numbers separated by Commas <br />
	<br /><br />
	<form method="post">
		<input type="text" name="numbers"/>
		<button type="submit">Check</button>
	</form>
</body>
</html>
<?php
		/*$numbers=$_REQUEST['numbers'];
		$numarray = explode(',', $numbers);
		$largest = $numarray[0];
		$smallest = $numarray[0];
		foreach($numarray as $num)
		{
			if($num>$largest)
			{
				$largest=$num;
			}
			else if($num < $smallest)
			{
				$smallest=$num;
			}
		}
		echo "Largest number is: $largest <br> ";
		echo "Smallest number is: $smallest ";
		*/



		$numbers=$_REQUEST['numbers'];
		$numarray = explode(',', $numbers);
		$even=null;
		$odd=null;
		foreach($numarray as $num)
		{

			if($num%2==0)
			{
				$even[]=$num;
			}
			else
			{
				$odd[]=$num;
			}
		}
		sort($even);

		sort($odd);

		$array = array_merge($even,$odd);

		print_r($array);
?>
