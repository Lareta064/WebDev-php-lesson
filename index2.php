<?php 
	function greeting($name, $dayNumber){		 

	 	if( $dayNumber >=1 && $dayNumber <6){

	 		echo "Привет $name!  Хорошего и продуктивного рабочего дня!";
	 		
		 	} else {
		 		
		 		switch($dayNumber){		 		
			 		case(6): case(7):
			 		echo " Привет $name! Желаю Вам хорошо отдохнуть в этот день!";
			 		break;
			 		default:
			 		echo "Привет $name! Странный день недели, даже не знаю чего пожелать :(";
		 		}	 		
		 	}	 	
		}

	greeting('Лара',7);

 ?>
