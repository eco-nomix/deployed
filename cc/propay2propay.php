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
	'100', 
	'32303991',  
	'123456', 
	'test comment'
    );
ProPay_To_ProPay_Transaction($Args);

function ProPay_To_ProPay_Transaction($Arguments)
{
	/* 
	*Required Parameter
	**Optional Parameter	
	Arguments[4]
	Arguments[0] = *CertString, This is your Commissions CertString
	Arguments[1] = *Amount, in lowest denomination of currency e.g. pennies, pence, yen $1.00 = 100 
	Arguments[2] = *Recieving Account Number
	Arguments[3] = **Invoice Number, this is your invoice number
	Arguments[4] = **Comment
	#This is not an exhaustive list of optional information that can be passed to the API See the API Documentation for additional parameters that may be passed
	*/

	$envelope = '<?xml version="1.0"?>
		     <!DOCTYPE Request.dtd>
		     <XMLRequest>
			     <certStr>' . $Arguments[0] . '</certStr>
			     <class>partner</class>
			     <XMLTrans>
			 	     <transType>02</transType>
				     <amount>' . $Arguments[1] . '</amount>
				     <recAccntNum>' . $Arguments[2] . '</recAccntNum>
				     <invNum>' . $Arguments[3] . '</invNum>
				     <comment1>' . $Arguments[4] . '</comment1>
			     </XMLTrans>
	 	     </XMLRequest>';
	
	Submit_Request($envelope);
}

function Submit_Request($envelope)
{
	echo "<pre>";
	print_r(htmlentities($envelope));
	echo "</pre><br /><br />";
	
	
	$header = array(
	"Content-type:text/xml; charset=\"utf-8\"",
	"Accept: text/xml"
	);

	$MSAPI_Call = curl_init();
	//Change the following URL to point to production instead of integration
	curl_setopt($MSAPI_Call, CURLOPT_URL, 'https://xmltest.propay.com/API/PropayAPI.aspx');
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
			$recieving_account_number = $result->XMLTrans->recAccntNum;
			$transaction_number = $result->XMLTrans->transNum;			
			$response = "Transaction completed successfully";
			$status = '_'.$status;			
			$status = $response_status->status->$status;
			
			$response .= "\nTransaction Status: " . $status; 
			$response .= "\nTransaction Number: " . $transaction_number;
			$response .= "\nReceiving Account Number: " . $recieving_account_number;
			if(isset($result->XMLTrans->invNum))
			{
				$invoice_number = $result->XMLTrans->invNum;
				$response .= "\nInvoice Number: " . $invoice_number;
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
