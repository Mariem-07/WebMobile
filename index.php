<?php
function isMobile(){
//User agent
$user_agent = $_SERVER['HTTP_USER_AGENT'];
//test si il s'agit d'un mobile
return preg_match('/Android/i',$user_agent) || preg_match('/iPhone/i',$user_agent)
       ||preg_match('/blackberry/i',$user_agent);
 
}
if(isMobile())
echo 'bonjour';

?>
