<?php 
header('Content-Type: image/png');
//	$dato = $_GET['token'];
    $dato= trim(file_get_contents('dato.txt'));
        // create curl resource 
        $ch = curl_init(); 

        // set url https://ticketserver-xmaop.c9users.io/hello-world.php
        curl_setopt($ch, CURLOPT_URL, "http://chart.apis.google.com/chart?chs=400x400&cht=qr&chld=|1&chl=http%3A%2F%2Fticketserver-xmaop.c9users.io%2Ftoken.php%3Ftoken%3D" . $dato); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
		$imdata = base64_encode($output); 
		//echo '<img width="400" height="400" src="data:image/x-icon;base64,' . $imdata . '" />';//
        echo $output;
        // close curl resource to free up system resources 
        curl_close($ch);      
?>
