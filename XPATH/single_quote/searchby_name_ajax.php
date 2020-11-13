<?php
    $reqBody = file_get_contents('php://input'); 
    $searchReq = json_decode($reqBody,true);
    
    header('Content-Type: application/json');

if ($searchReq) {
if($searchReq['name_ajax'])
{
//take values from the HTML form
    $name = $searchReq['name_ajax'];
    $xml = simplexml_load_file("./../data.xml");
    // Executes the XPath search
    $query = "/cities/city[name='" . $name . "']";
    $result = $xml->xpath($query);

    if(is_array($result)) {
      if($result)
      {
         $message = json_encode($result);
         echo $message;
      }
      else
      {
          $message = '{"ERROR" : "No city found matching the criteria"}';
  	  echo $message;
      }
    } else {
        $message = '{"ERROR" : "Invalid XPATH query"}';
	echo $message;
    }
}
else
{
        $message = '{"Invalid request, search criteria not specified"}';
	echo $message;
}
} else {
        $message = '{"Invalid request, no request body"}';
	echo $message;
}
?>
