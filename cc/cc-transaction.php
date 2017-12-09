<?php
/*
ProPay provides the following code “AS IS.” 
ProPay makes no warranties and ProPay disclaims all warranties and conditions, express, implied or statutory, 
including without limitation the implied warranties of title, non-infringement, merchantability, and fitness for a particular purpose. 
ProPay does not warrant that the code will be uninterrupted or error free, 
nor does ProPay make any warranty as to the performance or any results that may be obtained by use of the code.
*/

$Args = array(
	'ca08a19ee8f439598dd407055aa1ae', 
	'32303991', 
	'1', 
	'4111111111111111',
	'1217',
	'123', 
	'Ravendra Patel', 
	'313 Mangal Nagar', 
	'bhawarkua', 
	'indore',
	'MP', 
	'452001', 
	'testing transactions', 
	'125247'	
	);

Credit_Card_Transaction($Args);

function Credit_Card_Transaction($Arguments)
{
	/*
	*Required Parameter
	**Optional Parameter	
	Arguments[13]
	Arguments[0] = *CertString
	Arguments[1] = *Account Number 
	Arguments[2] = *Amount, in lowest denomination of currency e.g. pennies, pence, yen $1.00 = 100
	Arguments[3] = *Credit Card Number
	Arguments[4] = *Credit Card Expiration Date, mmyy
	Arguments[5] = **CVV, Accepts both 3 and 4 digit CVV
	Arguments[6] = **Card Holder Name
	Arguments[7] = **Address Line 1
	Arguments[8] = **Address Line 2
	Arguments[9] = **City
	Arguments[10] = **State
	Arguments[11] = **Postal Code
	Arguments[12] = **Comment
	Arguments[13] = **Invoice Number, your invoice number must be unique per transaction within a minute window
	This is not an exhaustive list of optional information that can be passed to the API See the API Documentation for additional parameters that may be passed
	*/

	$envelope = '<?xml version="1.0"?>
		     <!DOCTYPE Request.dtd>
		     <XMLRequest>
			     <certStr>' . $Arguments[0] . '</certStr>
			     <class>partner</class>
			     <XMLTrans>
				     <transType>04</transType>
				     <accountNum>' . $Arguments[1] . '</accountNum>
				     <amount>' . $Arguments[2] . '</amount>
				     <ccNum>' . $Arguments[3] . '</ccNum>
				     <expDate>' . $Arguments[4] . '</expDate>
				     <CVV2>' . $Arguments[5] . '</CVV2>	
				     <cardholderName>' . $Arguments[6] . '</cardholderName>
				     <addr>' . $Arguments[7] . '</addr>
				     <aptNum>' . $Arguments[8] . '</aptNum>
				     <city>' . $Arguments[9] . '</city>
				     <state>' . $Arguments[10] . '</state>
				     <zip>' . $Arguments[12] . '</zip>
				     <comment1>' . $Arguments[12] . '</comment1>
				     <invNum>' . $Arguments[13] . '</invNum>
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
	
	print_r($result);
	
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
			if(isset($result->XMLTrans->responseCode))
			{
				$response_code = $result->XMLTrans->responseCode;
				$response_code = '_'.$response_code;
				$response_code = $response_status->responseCode->$response_code;
				$response .= "\nResponse Code: " . $response_code;
			}
			if(isset($result->XMLTrans->CVV2Resp))
			{
				$CVV2_response = $result->XMLTrans->CVV2Resp;
				$CVV2_response = '_'.$CVV2_response;
				$CVV2_response = $response_status->CVV2Resp->$CVV2_response;
				$response .= "\nCVV2 Response: " . $CVV2_response; 
			}
			$response .= "\n";
			$response .= $api_result->saveXML();
			print_r($response);
			
		}
		else
		{
			$account_number = $result->XMLTrans->accountNum;
			$transaction_number = $result->XMLTrans->transNum;
			$authorization_code = $result->XMLTrans->authCode;
			$AVS = $result->XMLTrans->AVS;
			$AVS = '_'.$AVS;	
			$AVS = $response_status->AVS->$AVS;
			$response_code = $result->XMLTrans->responseCode;
			$response_code = '_'.$response_code;
			$response_code = $response_status->responseCode->$response_code;				
			$response = "Transaction completed successfully";
			$status = '_'.$status;			
			$status = $response_status->status->$status;
			$response .= "\nTransaction Status: " . $status; 
			$response .= "\nAccount Number: " . $account_number;	
			$response .= "\nTransaction Number: " . $transaction_number;
			$response .= "\nAuthorization Number: " . $authorization_code;
			$response .= "\nAVS Code: " . $AVS;
			$response .= "\nResponse Code: " . $response_code;
			if(isset($result->XMLTrans->CVV2Resp))
			{
				$CVV2_response = $result->XMLTrans->CVV2Resp;
				$CVV2_response = '_'.$CVV2_response;
				$CVV2_response = $response_status->CVV2Resp->$CVV2_response;
				$response .= "\nCVV2 Response: " . $CVV2_response; 
			}
			print_r($response);	
		}		
	
	}
	else
	{
		print_r($api_result->saveXML());
	};
	
}

?>
