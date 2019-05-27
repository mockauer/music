<?php
echo "<big><b>Zufällige Umbenennenung aller Dateien im Verzeichnis (einmalig)</b></big><br/><br/>";

$dirname=('test/zahlen/');
$handle=opendir ($dirname);
$dateien=scandir($dirname);
$count=count($dateien)-2;





// while ( $file = readdir ( $handle ) ) {
   for( $i=0; $i < $count; $i++ ) {
   $file = readdir ( $handle );
if( $file == "." or $file == "..") {
    }else{
	// $ohne_zahlen=substr($file,4);
	$ohne_zahlen=substr($file,4);
	$rest = substr($file, 0, 4);
	
	// echo trim($rest);
	// $test=substr($file,3)
	if(!is_int($rest)){
	// echo "Ohne Zahl: ".$ohne_zahlen." | ";
	$alt=$dirname.$file;
	// echo "Alt: ".$alt." | ";
	$neu=$dirname.$ohne_zahlen;
	// echo "Neu: ".$neu."<br/><br/>";
	$umbenennen=rename($alt,$neu);
	if(isset($umbenennen))
	{
		echo "$alt in $neu umbenannt.<br/>";
		
	}
	} 
   }
   
}
echo "<span style='font-size: 15px; color: red;'>Die Dateien aus dem Verzeichnis ".$dirname." in das Verzeichnis 'ohnezahlen' verschieben und dann auf --> ";
echo "<a href='weiter.php'>Weiter</a>"; 
closedir( $handle );


?>