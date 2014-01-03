<?php

function valid_date_mmddyyyy($date){
		if(preg_match('/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/', $date, $matches)) 
	  	{
		  // if(checkdate($matches[1], $matches[2], $matches[3]))
		  //  {
		  //   return true;
		  //  }
	  		return true;
	  	}
		//$this->form_validation->set_message('valid_date_mmddyyyy','Incorrect date');
		return FALSE;
	}
function validate_date_reg($input)
{
   if (preg_match('/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/', $input))
   {
      return true; // it matched, return true
   }
   else
   {
      return false;
   }
}
function isDate($date){
#'~^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$~' 
  #return 1 === preg_match('~^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$~',$date); 
return (preg_match("~^\d{1,2}([/.-])\d{1,2}\\1\d{4}$~", $date)==1) ? TRUE : FALSE;
}
function valid_date_mm_dd_yyyy($date){
	if(preg_match("~^\d{1,2}([/.-])\d{1,2}\\1\d{4}$~", $date)==1){
		list($m,$d,$y)=explode("/",$date);
		return checkdate($m,$d,$y);
	}
	return FALSE;
}
if(valid_date_mm_dd_yyyy('2/28/2014')){
	echo 'Valid date';
}
else{
	echo 'Invalide date';
}

?>