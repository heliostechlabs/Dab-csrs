<?php

$curl = curl_init();

curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://sakshamuat.axisbank.co.in/gateway/api/v2/CRMNext/login',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array('userName' => 'cd7702c6c60795c68f2bd594a5600e1a','password' => 'ab638c18b5e9d598fd709deee92a2a54'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
