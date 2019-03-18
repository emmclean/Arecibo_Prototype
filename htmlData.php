<?php

$bagno = $_POST['bagno'];
$Audio= $_POST['Audio'];
$Photo= $_POST['Photo'];
$Video= $_POST['Video'];

$html = <<<HEREDOC
     Sample Number: $bagno <br>
     Notes: $Audio <br>
     Photo of Sample: $Photo <br> <br>
     Video of Sample Site: $Video <br>
HEREDOC;  
file_put_contents('sample'+ $bagno + '.html', $html); 

header('location: newPage.html');
exit;
?>