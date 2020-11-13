<HTML> 
<BODY>
<?php
if(isset($_REQUEST["name"]))
{
//take values from the HTML form
    $name = $_REQUEST["name"];
    $xml = simplexml_load_file("./../data.xml");
    // Executes the XPath search
    $query = "/cities/city[name='" . $name . "']";
    echo "Query: " . htmlentities( $query) . "<BR>";
    $result = $xml->xpath($query);

    if(is_array($result)) {
      if($result)
      {
         $message = "Cities matching your query: <br>";
         foreach ($result as $city) {
           $message =  $message. "<br><b>City: " . ucwords($city->name) . "</b>";
           $message =  $message. "<br>Pincode: " . ucwords($city->pincode);
           $message =  $message. "<br>Population: " . ucwords($city->population);
           $message =  $message. "<br>State: " . ucwords($city->state);
         }
         echo $message;
      }
      else
      {
          $message = "<b>No city found matching the criteria.</b>";
  	    echo $message;
      }
    } else {
        $message = "<b>ERROR: Invalid XPATH query.</b>";
	    echo $message;
    }
}
else
{
        $message = "<b>Invalid request, search criteria not specified.</b>";
	    echo $message;
}
?>
</BODY>
</HTML>
