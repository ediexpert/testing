<?php

 /**
 * NAME         : MUHAMMAD AKRAM BIN AHMAD
 * MATRIC       : 2014873252
 * DESCRIPTION  : Get an information from  NIC (eg. MAC address)
 */
   
   ob_start();    // This function use to turn on the output buffering  
    
   system('ipconfig /all');   //This function use to get the ipconfig details
    
   $comdata = ob_get_contents();   // Capture the output into a variable 
    
   ob_clean();  // Clean or erase the output buffer 
   
   $find_mac = "Physical";  //find the "Physical" & Find the position of Physical text  
   
   $pmac = strpos($comdata, $find_mac);  
     
   $macaddress=substr($comdata,($pmac+36),17);  // Get Physical Address
    
   echo $macaddress;  //Display Mac Address 
   
  

?>