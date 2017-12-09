<?php
/*
ProPay provides the following code “AS IS.” 
ProPay makes no warranties and ProPay disclaims all warranties and conditions, express, implied or statutory, 
including without limitation the implied warranties of title, non-infringement, merchantability, and fitness for a particular purpose. 
ProPay does not warrant that the code will be uninterrupted or error free, 
nor does ProPay make any warranty as to the performance or any results that may be obtained by use of the code.
*/

$Args = array(
	'266b61d4ee64b929624512be3a4d08', 
	'projectmanager24x7@gmail.com', 
	'Ravindra ', 
	'Singh', 
	'123 abc', 
	'sakti nagar', 
	'indore',
	'MP', 
	'452001',
	'IND',
	'+911234567890',
	'+911234567890',
	'1085',
	'07-27-1984',
	''	
	);
Sign_Up_For_ProPay_Account($Args);

function Sign_Up_For_ProPay_Account($Arguments)
{
	
	

	$envelope= '<?xml version="1.0"?>
		    <!DOCTYPE Request.dtd>
		    <XMLRequest>
		    	<certStr>' . $Arguments[0] .'</certStr>
			<class>partner</class>
				<XMLTrans>
					<transType>01</transType>
					<sourceEmail>' . $Arguments[1] . '</sourceEmail>
					<firstName>' . $Arguments[2] . '</firstName>
					<lastName>' . $Arguments[3] . '</lastName>
					<addr>' . $Arguments[4] . '</addr>
					<aptNum>' . $Arguments[5] . '</aptNum>
					<city>' . $Arguments[6] . '</city>
					<state>' . $Arguments[7] . '</state>
					<zip>' . $Arguments[8] . '</zip>
					<country>' . $Arguments[9] . '</country>
					<dayPhone>' . $Arguments[10] . '</dayPhone>
					<evenPhone>' . $Arguments[11] . '</evenPhone>
					<externalId>' . $Arguments[12] . '</externalId>
					<ssn>' . $Arguments[13] . '</ssn>
					<dob>' . $Arguments[14] . '</dob>
					<tier>' . $Arguments[15] . '</tier>
				</XMLTrans>
		     </XMLRequest>';

  	Submit_Request($envelope);
}

function Submit_Request($envelope)
{
	$header = array(
	"Content-type:text/xml; charset=\"utf-8\"",
	"Accept: text/xml"
	);

	$MSAPI_Call = curl_init();
	//Change the following URL to point to production instead of integration
	curl_setopt($MSAPI_Call, CURLOPT_URL, 'https://xmltest.propay.com/api/propayapi.aspx');
	curl_setopt($MSAPI_Call, CURLOPT_TIMEOUT, 30);
	curl_setopt($MSAPI_Call, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($MSAPI_Call, CURLOPT_POST, true);
	curl_setopt($MSAPI_Call, CURLOPT_POSTFIELDS, $envelope);
	curl_setopt($MSAPI_Call, CURLOPT_HTTPHEADER, $header);
	curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($MSAPI_Call, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

	$response = curl_exec($MSAPI_Call);
	$err = curl_error($MSAPI_Call);
	curl_close($MSAPI_Call);
	//Call Parse Function for the XML response
	Parse_Response($response);
}

function Parse_Response($api_response)
{
	$response_status = simplexml_load_file('MSAPI_Response.xml');
	$result = simplexml_load_string($api_response);	
	//Pretty Print response
	$api_result = new DOMDocument('1.0');
	$api_result->preserveWhiteSpace = false;
	$api_result->formatOutput = true;
	$api_result->loadXML($api_response);
	
	if(isset($result->XMLTrans->status))	
	{
		$status = $result->XMLTrans->status;
		if($status != '00')
		{
			$status = '_'.$status;			
			$status = $response_status->status->$status;
			$response = "Transaction may not have completed successfully";
			$response .= "\nTransaction Status: " . $status; 
			$response .= "\n";
			$response .= $api_result->saveXML();
			print_r($response);
			
		}
		else
		{		
			$user_name = $result->XMLTrans->sourceEmail;
			$user_password = $result->XMLTrans->password;
			$user_account_number = $result->XMLTrans->accntNum;
			$user_tier = $result->XMLTrans->tier;			
			$response = "Transaction completed successfully";
			$status = '_'.$status;			
			$status = $response_status->status->$status;
			$response .= "\nTransaction Status: " . $status; 
			$response .= "\nAccount Number: " . $user_account_number;
			$response .= "\nUser Name: " . $user_name;
			$response .= "\nTemporary Password: " . $user_password;
			$response .= "\nAssigned Tier: " . $user_tier;
			print_r($response);	
		}		
	
	}
	else
	{
		print_r($api_result->saveXML());
	};
	
}
?>
