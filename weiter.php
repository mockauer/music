<?php
//include("connect_db.php");
echo "<big><b>Zufällige Umbenennenung aller Dateien im Verzeichnis (einmalig)</b></big><br/><br/>";

$dirname=('test/ohnezahlen/');
$handle=opendir ($dirname);
$dateien=scandir($dirname);
$count=count($dateien)-2;



    $zahlen = array();
    for( $i=0; $i < $count; $i++ ) {
        $temp = rand( 1,$count );
        if( in_array( $temp, $zahlen ) )
        {
            $i--;
            continue;
        }
        $zahlen[] = $temp;
		
		
		
    }

	
	while ( $file = readdir ( $handle ) ) {
if( $file == "." or $file == "..") {
    }else{
		
	$titel[]=$file;
	
	
	}
	}
	$h=0;
	$l=0;
while ($h <= count($zahlen)-1) {
	if($zahlen[$h]>0 && $zahlen[$h]<10)
	{
		$zahlen[$h]="00".$zahlen[$h];
	}
	else if($zahlen[$h]>9 && $zahlen[$h]<100)
	{
		$zahlen[$h]="0".$zahlen[$h];
	}
	else if($zahlen[$h]>100)
	{
		$zahlen[$h]=$zahlen[$h];
	}
    //$neu=$zahlen[$h]." - ".$titel[$h];
    $neu=$zahlen[$h]." ".$titel[$h];

$h++;



$alt=$dirname.$titel[$l];


$neu=$dirname.$neu;


$ub=rename($alt,$neu);
if(isset ($ub))
	{
		echo "Datei wurde von ".$alt." in ".$neu." umbenannt.<br/>";
	}
$l++;
}




closedir($handle);








?>