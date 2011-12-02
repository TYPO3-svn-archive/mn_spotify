<?php

require_once(PATH_tslib.'class.tslib_pibase.php');
 
class SendMail extends tslib_pibase {
    
    function main(){
        
        $feUserObj = tslib_eidtools::initFeUser(); // Initialize FE user object    
        tslib_eidtools::connectDB(); //Connect to database
        
        print "Hej";    
        
    }
    
}
 
$output = t3lib_div::makeInstance('SendMail');
$output->main();

?>