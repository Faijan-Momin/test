<?php

$user_ip = getHostByName(getHostName()); 

 $hostname = $_SERVER["HTTP_USER_AGENT"];

 $server_address = $_SERVER['REMOTE_ADDR'];

echo '<br>'.$user_ip;
echo '<br>'.$hostname;
echo '<br>'.$server_address.'<br>';


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip; // Output IP address [Ex: 177.87.193.134]

$ip_server = $_SERVER['SERVER_ADDR']; 
  
// Printing the stored address 
echo "Server IP Address is: $ip_server"; 
  

if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
?> 