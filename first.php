<html>
	<head>
		<title>
			Test
		</title>
	</head>
	<body>
			<form action='' method='post'>
		 	Num1<input type='text' name='num1'><br/>
		 	Num2<input type='text' name='num2'><br/>
		 	<input type='submit' name='plus' value='Puls'>
		 	<input type='submit' name='minus' value='Minus'>
		 	<input type='submit' name='multi' value='Multi'> 
		 	<input type='submit' name='div' value='Div'> 
			</form>
			<?php
			$result = 0;
			if(isset($_POST['plus']))
			{
				$result = $_POST['num1'] + $_POST['num2'];

			}
				if(isset($_POST['minus']))
			{
				$result = $_POST['num1'] - $_POST['num2'];

			}
				if(isset($_POST['multi']))
			{
				$result = $_POST['num1'] * $_POST['num2'];

			}
			echo "Result: $result";
			?>
	</body>

</html>