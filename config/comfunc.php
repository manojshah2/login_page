<?php
function getAge($dob_str){   
   $dob=new DateTime($dob_str);
   if ($dob->format('Y')<1900){
       return "";
   }
   $today=new DateTime('today');   
   return $dob->diff($today)->y." Yrs";
}

function formatDate($date_str){   
    $date_obj=new DateTime($date_str);
    return $date_obj->format('Y-m-d');
}

function getArrayValue($profile1,$database_col_name,$default_value=""){
    $actual_col=$database_col_name;
    if(array_key_exists($actual_col,$profile1)){
        return htmlspecialchars($profile1[$actual_col],ENT_QUOTES,"UTF-8");
    }else{
        return $default_value;
    }                
}

?>