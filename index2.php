<?php 

	 function greeting($name, $dayNumber){

	 		/*вариант через switch case*/
	 	echo "<h3> Используем switch case </h3>";
	 	echo "Привет $name, ";

	 		switch($dayNumber){
		 		case(1):
		 		echo "хорошего рабочего дня!";
		 		break;

		 		case(2):
		 		echo "хорошего рабочего дня!";
		 		break;

		 		case(3):
		 		echo "хорошего рабочего дня!";
		 		break;

		 		case(4):
		 		echo "хорошего рабочего дня!";
		 		break;

		 		case(5):
		 		echo "хорошего рабочего дня!";
		 		break;

		 		case(6):
		 		echo "хорошего выходного дня!";
		 		break;

		 		case(7):
		 		echo "хорошего выходного дня!";
		 		break;

		 		default:
		 		echo "странный день недели, даже не знаю чего пожелать :(";
	 	}	 	
	}

	greeting('Лара', 1);

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
