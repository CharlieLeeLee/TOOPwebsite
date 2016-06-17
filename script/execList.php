<?
//Connectsto the MySQL server 'toop', gets themember list table, then creates the list
//for the Executive Board

$execs = array();

function convert($cd){
        //exec positions are stored as two letter codes
        switch($cd){
                case 'AD' : return 'Artistic Director';
                case 'FO' : return 'Financial Officer';
                case 'SE' : return 'Secretary';
                case 'DR' : return 'Dramaturge';
                case 'TD' : return 'Technical Director';
                case 'HI' : return 'Development Coordinator';
                case 'PM' : return 'Production Manager';
                case 'PR' : return 'Head of Public Relations';
        }
}

//constructs list of e board members
function get_list(){
	include_once("db_connect.php");
	$dbc = new databaseConnection();
	
	$eboard = $dbc->listContacts();
	foreach($eboard as $row){
		$fullName=$row['firstName'] . " " . $row['lastName'];
		$photo = $row['photofilename'];
		$pos = $row['exec_pos'];
		$bio = htmlspecialchars($row['bio'], ENT_QUOTES);
		
		//if missing photo, use default
		if ($photo == null){
			$photo = "../images/Logo.png"; // ADD DEFAULT PICTURE
		}
		
		$execs[] = [$fullName, $photo, $pos, $bio];
		
	}// end foreach
}

//echo each eboard member for the table
foreach($execs as $m){
	$outstr = "<td><a rel='8' href='#"$m['pos']"div' target='_blank' class='gallery memlink' background-image='url('"$m['photo']"')'></a></td>";
	echo $outstr;
}

echo "</tr></table></div>

<div style='display:none'>";

//echo each eboard member for the lightboxes
foreach($execs as $m){
	$outstr = "<div id='"$m['pos']"div' class='meminfo'>
		<div class = 'case clienteditor'>
		<h1>"$m['fullName']"</h1>
		<h2>"convert($m['pos'])"</h2
		<p>"$m['bio']"</p>
		</div>
		<div class = 'clear'></div>
	</div>";
	
	echo $outstr;
}