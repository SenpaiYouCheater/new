<?php
	function credits($deposit, $oplata, $procent, $comission)
	{
		while($deposit>0)
		{
			if(($deposit-$oplata)<0)
			{
				$sum = $sum + round($deposit);
				$day += 1;
				$deposit = $deposit-$oplata;
				break;
			}
			else
			{
				$deposit = $deposit - $oplata;
				$deposit = $deposit * $procent;
				$deposit = $deposit + $comission;
				$sum = $sum  + $oplata;
				$day += 1;
			}
		}
		echo "Всего заплатит: {$sum} за {$day} месяцев 	";
	}
	
	$deposit = 40000;
	$oplata = 5000;
	$procent = 1.04;
	$comission = 500;
	
	credits($deposit, $oplata, $procent, $comission);
	
	$procent = 1.02;
	$comission = 1000;
	
	credits($deposit, $oplata, $procent, $comission);
		
	$deposit = 40000 + 7777;
	$procent = 1.02;
	$comission = 0;
	
	credits($deposit, $oplata, $procent, $comission);
?>