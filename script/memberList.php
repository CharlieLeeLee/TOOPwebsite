<?php
//connectsto the MySQL server 'toop', gets the memberList table, then creates the table 
//for the members page.

//setting up connections.
include_once("db_connect.php");
$dbc = new databaseConnection();

$date=getDate();
$current_year = $date['year'];
$current_day = $date['yday'];  //numeric dayof the year
$count = 0;

foreach($dbc->listEntries("memberList", "1=1") as $row){
	$fullName=$row['Firstname'] . " " . $row['Lastname'];
	$bio = htmlspecialchars($row['bio'], ENT_QUOTES);
	$photo = $row['photofilename'];
	$class = $row['classOf'];
	$grad=$row['grad'];
	
	//skip alumni if we aren't listing them
	if ($grad=='Yes' && !$list_alums){
		continue;
	}
	
	//skip undergrads if we're listing alumni
	if($list_alums && $grad=='No')  {
		continue;
	}
	
	//If no photo, use a default
	if($photo == null){
		$photo = "../images/Logo.png"; //NEED TO MAKE A DEFAULT PHOTO
	}
	
	//Echo the html for a member.
	if($count % 6 = 0) {
		$outstr="</tr><tr>
		<td><img src="$photo"><p>"$FullName"</p>";
	}
	else {
		$outstr="<td><img src="$photo"><p>"$FullName"</p>";
	}
	
	echo $outstr;
}//end foreach

?>