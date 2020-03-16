<?php 
require_once( "Session.php" );
$sesion = new Session();
if (!$sesion->select("user_inter"))
{
    $sesion->save('user_inter',date('Y-m-d H:i:s'));   
}
else $sec = time() - strtotime($sesion->select("user_inter"));

echo "Вы вошли ".$sec." сек назад"."<br>";

if (!$sesion->isSession('user_refresh'))
{
    $sesion->save('user_refresh',0);    
}
 else
 {
    $refreshCount = $sesion->select("user_refresh");
    $sesion->save('user_refresh', ++$refreshCount);  
    
}

 

    $text = $refreshCount?'Вы обновились '.$refreshCount.' раз.':"Вы еще не обновлялись";

echo $text ;

?>
