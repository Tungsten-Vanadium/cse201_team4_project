<?

$con = mysql_connect("localhost","username","password");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("app_market", $con); // NAME 'app_market' NEEDS CHANGED

$key = $_GET['id'];

if( ! is_numeric($key) )
  die('invalid key');

$query = "SELECT * FROM `info` WHERE `APPid` =$key LIMIT 0 , 30";

$info = mysql_query($query);

while($row = mysql_fetch_array($key, MYSQL_ASSOC))
{
  $name = htmlspecialchars($row['APPname'],ENT_QUOTES);
  $description = htmlspecialchars($row['APPdescription'],ENT_QUOTES);
  $developer = htmlspecialchars($row['APPdev'],ENT_QUOTES);
  $platform = htmlspecialchars($row['APPplatform'],ENT_QUOTES);
  $link = htmlspecialchars($row['APPlink'],ENT_QUOTES);
  $version = htmlspecialchars($row['APPversion'],ENT_QUOTES);
  $price = htmlspecialchars($row['APPprice'],ENT_QUOTES);
  $dateAdded = htmlspecialchars($row['APPdatesubmitted'],ENT_QUOTES);
  $dateUpdated = htmlspecialchars($row['APPdateupdated'],ENT_QUOTES);
  
  echo "  <div id = "app_float">
      	Name: $name<br />
      	Developers: $developer<br />
	Description: $description<br />
	Platforms: $platform<br />
	Link: $link<br />
	Version: $version<br />
	Price: $price<br />
	Date Added: $dateAdded<br />
	Date Updated: $dateUpdated<br />
    </div>
  ";
}

mysql_close($con);

?>