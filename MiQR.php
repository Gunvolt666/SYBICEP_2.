
<?php 
   

include('phpqrcode/qrlib.php');
$tempDir = 'EXAMPLE_TMP_SERVERPATH'; 
     
    // here our data 
    $email = 'john.doe@example.com'; 
    $subject = 'question'; 
    $body = 'please write your question here'; 
     
    // we building raw data 
    $codeContents = 'mailto:'.$email; 
     
    // generating 
    QRcode::png($codeContents, $tempDir.'022.png', QR_ECLEVEL_L, 3); 
    
    // displaying 
    echo '<img src="'.'EXAMPLE_TMP_URLRELPATH'."022.png/>"'; 
    
    ?>