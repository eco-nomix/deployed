The HPP-Dev sample application is designed to be used by developers integrating the Hosted Payment Page into their software solutions. 
To use this sample, put a Valid HostedTransactionIdentifier in the text input field, then press the start button. 
In a production setting this value is best stored in the browser session as it is needed to get the results of the transaction once the Hosted Payment Page process is complete.
 
All three included Javascript files must load, so the solution should be loaded from a web server, rather than the file system directly.
To change the endpoint, update the 'baseURI' in the hpp.js file according to the notes in the hpp.js.
To change the element ID of the iFrame to load the Hosted Payment Page, update the 'iFrameId' variable.
To change the Timeout Value, update the 'TimeoutInterval' variable.  Note that this is an integer and is expressed in milliseconds. 
Additional Information about the timeout value can be found in section 3.2 of the Hosted Payment Page Manual version 4.x.x

There are several helper functions that are optional for creating and controlling the user experience.  
These are particularly useful for development but may or may not be included in your production solution. 
There are several underlying functions in the hpp.js file that should not be altered, except by advanced users who understand well how SignalR and the Hosted Payment Page work. 
For an overview of how the Hosted Payment Page works, please read section 3.0 of the Hosted Payment Page Manual version 4.x.x.
If changes are made to the functions in the sample files where it is indicated they should not be changed, ProPay technical support may be unable to assist with troubleshooting your solution.