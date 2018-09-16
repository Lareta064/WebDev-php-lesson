<?php 

	 function greeting($name, $dayNumber){

	 		/*вариант через switch case*/
	 	echo "<h3> Используем switch case </h3>";
	 	echo "Привет $name, ";

	 		switch($dayNumber){
		 		case(1): case(2): case(3): case(4): case(5):
		 		echo "хорошего рабочего дня!";
		 		break;

		 		case(6): case(7):
		 		echo "хорошего выходного дня!";
		 		break;
		 		default:
		 		echo "странный день недели, даже не знаю чего пожелать :(";
	 	}	 	
	}

	greeting('Лара', 6);

	    echo "<br><br>";

	    /*вариант через if*/

		 function greetingToo($name, $dayNumber){

		 echo "<h3> Используем условие if </h3>";

	 	if( $dayNumber >=1 && $dayNumber <6){
	 		echo "Привет $name, хорошего рабочего дня!";
	 	} else if($dayNumber ==6 || $dayNumber ==7){
	 		echo "Привет $name, хорошего выходного дня!";
	 	}
	 	else{
	 		echo "Привет $name, странный день недели, даже не знаю чего пожелать :(";
	 	}
	}

	greetingToo('Лара', 6);


 ?>
