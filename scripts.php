<?
	function connect(){
	$myServer = "localhost";
	$myUser = "";
	$myPass = "";
	$myDB = "";
	//connection to the database
	$dbhandle = mysql_connect($myServer, $myUser, $myPass) or die("Couldn't connect to SQL Server on $myServer"); 
	$selected = mysql_select_db($myDB, $dbhandle)
  or die("Couldn't open database $myDB"); 
	}
	
	function checklogin($username, $password){
		connect();
		$username = cleanQuery($username);
		$password = cleanQuery($password);
		$fetch = mysql_query("SELECT * FROM users WHERE username='$username' AND pass='$password'");
		$num_rows =mysql_num_rows($fetch);
		if($num_rows == 1){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		}else{
			echo"<BR><BR><font color=\"red\">Login Failed</font>";
		}
		
		
	}
	
	function insertProp($shortdescription, $address, $description, $rooms, $bathrooms, $location, $rent,$notes){
		connect();
		$insert = mysql_query("INSERT INTO properties (shortdescription, address, description, rooms, bathrooms, location, rent, notes) VALUES ('$shortdescription','$address','$description','$rooms','$bathrooms','$location','$rent','$notes')");
	}
	
	function deleteProp($propid){
		connect();
		$del = mysql_query("DELETE FROM properties WHERE propid='$propid'");
	}
	
function echoLD($propid)
{
	$position=80; // Define how many characters you want to display.
	
	$fetch = mysql_query("SELECT description FROM properties WHERE propid='$propid'");
	$get = mysql_fetch_array($fetch);
	$desc = $get['description'];	
	$post = substr($desc,$position,1); // Find what is the last character displaying. We find it by getting only last one character from your display message.
	
	if($post !=" "){ // In this step, if last character is not " "(space) do this step .
	
	// Find until we found that last character is " "(space)
	// by $position+1 (14+1=15, 15+1=16 until we found " "(space) that mean character 20)
		while($post !=" "){
				$i=1;
				$position=$position+$i;
				$message=$desc;
				$post = substr($message,$position,1);
			}
	}	
	
	$post = substr($desc,0,$position); // Display your message
	echo "<span id=\"font4\"><p>".$post."...<a href =\"http://www.setag.net/viewpage.php?propid=$propid\" id=\"linkpage2\">[MORE]</a></p></span>";

}	

function addEditDate()
{
	date_default_timezone_set('America/Chicago');
	$editDate = date("m/d/y g:i A");
	$insert = mysql_query("INSERT INTO edits (date) VALUES ('$editDate')");
}

function getLastEdit()
{
	$fetch = mysql_query("SELECT date FROM edits ORDER BY date DESC LIMIT 0,1");
	$get = mysql_fetch_array($fetch);
	$date = $get['date'];	
	return $date;
	
}

function cleanQuery($string)
{
  if(get_magic_quotes_gpc())  // prevents duplicate backslashes
  {
    $string = stripslashes($string);
  }
  if (phpversion() >= '4.3.0')
  {
    $string = mysql_real_escape_string($string);
  }
  else
  {
    $string = mysql_escape_string($string);
  }
  return $string;
}
	
	

?>
