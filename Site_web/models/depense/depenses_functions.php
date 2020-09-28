<?php
// Le calendrier FORM

function calendar_mois($cld){
	if ($cld=="01"){return "Janvier";}
	elseif ($cld=="02"){return "Février";}
	elseif ($cld=="03"){return "Mars";}
	elseif ($cld=="04"){return "Avril";}
	elseif ($cld=="05"){return "Mai";}
	elseif ($cld=="06"){return "Juin";}
	elseif ($cld=="07"){return "Juillet";}
	elseif ($cld=="08"){return "Août";}
	elseif ($cld=="09"){return "Septembre";}
	elseif ($cld=="10"){return "Octobre";}
	elseif ($cld=="11"){return "Novembre";}
	else{return "Décembre";}
}
?>