<?php

//	gibt true aus, wenn mail-adresse formal richtig ist
function teste_email($test) {
	return (ereg("^[a-z0-9]+([\._a-z0-9-]+)*@([a-z0-9]+([a-z0-9\.-]+)*\.)+([a-z]{2,4}|museum)$",strtolower(trim($test))));
}

// Funktion, um Mailadressen zu verschluesseln
function htmlencode($string){
   $ret_string="";
   $len=strlen($string);
   for ($x=0;$x<$len;$x++){
       $ord=ord(substr($string, $x, 1));
       $ret_string .= "&#$ord;";
   }
   return $ret_string;
}

// Alle uebergebenen Daten filtern
function _filterData($value)
{
  // wenn der uebergebene Wert ein Objekt oder eine Variable vom Typ bool ist
  // soll er nicht veraendert werden
  if(is_object($value))
  {
    return $value;
  }
  else if(is_bool($value))
  {
    return $value;
  }
  
  // $value ist ein Array
  else if(is_array($value))
  {
    $newarray = array();
    foreach($value as $key => $singlevalue)
    {
      if (get_magic_quotes_gpc())
      {
        $singlevalue = stripslashes($singlevalue);
     	}
     	$singlevalue = str_replace("location.href", "", $singlevalue);
     	$singlevalue = str_replace("DELETE", "", $singlevalue);
     	$singlevalue = str_replace("UPDATE", "", $singlevalue);
     	$singlevalue = str_replace("SELECT", "", $singlevalue);
     	$singlevalue = str_replace("WHERE", "", $singlevalue);
     	$singlevalue = str_replace("cmd", "", $singlevalue);
      $singlevalue = str_replace("´", "'", $singlevalue);
      $singlevalue = str_replace("`", "'", $singlevalue);
      $singlevalue = strip_tags($singlevalue);
      $newarray[$key]= $singlevalue;
    }
    return $newarray;
  }
  // $value ist einer der uebriggebliegenen Datentypen
  else 
  {
    if (get_magic_quotes_gpc())
    {
      $value = stripslashes($value);
   	}
   	$value = str_replace("location.href", "", $value);
   	$value = str_replace("DELETE", "", $value);
   	$value = str_replace("UPDATE", "", $value);
   	$value = str_replace("SELECT", "", $value);
   	$value = str_replace("WHERE", "", $value);
    $value = str_replace("cmd", "", $value);
    $value = str_replace("´", "'", $value);
    $value = str_replace("`", "'", $value);
    return strip_tags($value);
  }
}

function formularmissbrauch($value){
  // wenn der uebergebene Wert ein Objekt oder eine Variable vom Typ bool ist
  // soll er nicht veraendert werden
  $missbrauch = false;
  if(is_object($value))
  {
    return $missbrauch;
  }
  else if(is_bool($value))
  {
    return $missbrauch;
  }
  
  // $value ist ein Array
  else if(is_array($value))
  {
    $anz_html = 0;
    foreach($value as $singlevalue)
    {
      $singlevalue = strtolower($singlevalue);
      $anz_html = substr_count($singlevalue, '://');
      if($anz_html > 0)
      {
        $missbrauch = true;
      }
      else if (stristr($singlevalue,"content-type") || 
          stristr($singlevalue,"multipart/mixed") || 
          stristr($singlevalue,"text/plain") || 
          stristr($singlevalue,"from:") || 
          stristr($singlevalue,"to:") || 
          stristr($singlevalue,"bcc:") ||
          stristr($singlevalue,"forumup.it") || 
          stristr($singlevalue,"manwoman.cn") || 
          stristr($singlevalue,"tramadol") || 
          stristr($singlevalue,"beijing") || 
          stristr($singlevalue,"viagra") || 
          stristr($singlevalue,"cialis") || 
          stristr($singlevalue,"diazepam") || 
          stristr($singlevalue,"valium") || 
          stristr($singlevalue,"wowgame") || 
          stristr($singlevalue,"wowgold") || 
          stristr($singlevalue,"@blog.163.com") || 
          stristr($singlevalue,"tjzrr") || 
          stristr($singlevalue,"rgergerger") || 
          (stristr($singlevalue,"£") && stristr($singlevalue,"hotmail.com")) || 
          (stristr($singlevalue,"¶") && stristr($singlevalue,"hotmail.com")) || 
          (stristr($singlevalue,"¼") && stristr($singlevalue,"hotmail.com")) || 
          (stristr($singlevalue,"¾") && stristr($singlevalue,"hotmail.com")) || 
          (stristr($singlevalue,"æ") && stristr($singlevalue,"hotmail.com")) || 
          (stristr($singlevalue,"±") && stristr($singlevalue,"hotmail.com")) || 
          stristr($singlevalue,"popular links")
          )
      {
        $missbrauch = true;
      }
    }
    return $missbrauch;
  }
  // $value ist einer der uebriggebliegenen Datentypen
  else 
  {
    $value = strtolower($value);
    $anz_html = substr_count(value, '://');
    if($anz_html > 0)
    {
      $missbrauch = true;
    }
    else if (stristr($value,"content-type") || 
        stristr($value,"multipart/mixed") || 
        stristr($value,"text/plain") || 
        stristr($value,"from:") || 
        stristr($value,"to:") || 
        stristr($value,"bcc:") ||
        stristr($value,"forumup.it") || 
        stristr($value,"manwoman.cn") || 
        stristr($value,"tramadol") || 
        stristr($value,"beijing") || 
        stristr($value,"viagra") || 
        stristr($value,"cialis") || 
        stristr($value,"diazepam") || 
        stristr($value,"valium") || 
        stristr($value,"wowgame") || 
        stristr($value,"wowgold") || 
        stristr($value,"@blog.163.com") ||
        stristr($value,"tjzrr") ||
        stristr($value,"rgergerger") ||
        (stristr($value,"£") && stristr($value,"hotmail.com")) || 
        (stristr($value,"¶") && stristr($value,"hotmail.com")) || 
        (stristr($value,"¼") && stristr($value,"hotmail.com")) || 
        (stristr($value,"¼") && stristr($value,"hotmail.com")) || 
        (stristr($value,"æ") && stristr($value,"hotmail.com")) || 
        substr_count($value, 'http:') >= 5 ||
        stristr($value,"popular links")
        )
    {
      $missbrauch = true;
    }
    return $missbrauch;
  }
}
?>