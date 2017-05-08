<?php

//include("trial.php");
if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0)))
{
   $errorcode = socket_last_error();
   $errormsg = socket_strerror($errorcode);
   
   die("Couldn't create socket: [$errorcode] $errormsg \n");
}

echo "Socket created \n";

//Connect socket to remote server
if(!socket_connect($sock , 'localhost' , 5001))
{
   $errorcode = socket_last_error();
   $errormsg = socket_strerror($errorcode);
   
   die("Could not connect: [$errorcode] $errormsg \n");
}

echo "Connection established \n";

$message = "GET / HTTP/1.1\r\n\r\n";

//Send the message to the server
if( ! socket_send ( $sock , $message , strlen($message) , 0))
{
   $errorcode = socket_last_error();
   $errormsg = socket_strerror($errorcode);
   
   die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully \n";

//Now receive reply from server
// must be called before data is sent



 if(socket_recv ( $sock , $buf , 2045 , MSG_WAITALL ) === FALSE)

{
   $errorcode = socket_last_error();
   $errormsg = socket_strerror($errorcode);
   
   die("Could not receive data: [$errorcode] $errormsg \n");
}
//print the received message

 $sv = $buf;
 echo $sv;  

$str = $sv;
        while($read = socket_read($sock, 1,PHP_NORMAL_READ)) {
   $str .= $read;
   if (strpos($str, "\n") !== false) break;  // this stops the loop when a new line is encountered, how to restart the loop and read the rest of the lines
}

echo "Server said: $str";

//echo $this->_buffer;
$output = $str;
//echo "This much bytes ".strlen($this->_buffer);
        $file = '/var/www/html/login-registration-php-new/log.txt';
                $handle = fopen($file,"w") or die("Could not open file for writing");
                fwrite($handle,$output) or die("Could not write");
                fclose($handle);

 ?>