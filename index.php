<?php
///FIND CAPITAL SMALL AND NUMBER IN A STRING////////// 
 
$str ="Shashi Bhushan Dwivvedi aABC  80nadf94253DFV";
Countt($str);
function Countt($str)
{
    
    for ($i = 0; $i < strlen($str); $i++)
    {
        if ($str[$i] >= 'A' &&  $str[$i] <= 'Z')
		{
			echo $str[$i];
		}
            
           
        
        else if ($str[$i]>= '0' &&  $str[$i]<= '9')
		{
			echo $str[$i];
		}
                 
            
    }
    
}

?>