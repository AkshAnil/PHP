<?php
	class greeting
	{
		public $str = "Hello ";

		function show_greeting()
        	{
            		return $this->str;
        	}	
	}

	$message = new greeting;
    	var_dump($message);
	echo "<br><br>". $message->show_greeting(). "MananJi<br>";
	echo "Made By Akash Anil 134";
?>