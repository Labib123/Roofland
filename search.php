<?Php
//ini_set('display_errors', true);
//Set this display to display  all erros while testing and developing the script
error_reporting(0);// With this no error reporting will be there
include "connectDB.php";


$todo=$_POST['todo'];
$search_text=$_POST['search_text'];

if(strlen($serch_text) > 0){
if(!ctype_alnum($search_text)){
echo "Data Error";
exit;
}
}
////////// Displaying the search box /////
echo "<table>
<tr><td colspan=2 align='center'>";

echo "<form method=post action=''><input type=hidden name=todo value=search>
<input type=text name=search_text value='$search_text'><input type=submit value=Search><br>
<input type=radio name=type value=any checked>Match any where
<input type=radio name=type value=exact>Exact Match

</form>
";

echo "</td></tr>";

/////////// if form is submitted the data processing is  done here///////////////
echo "<tr><td width='600' valign=top>";

if(isset($todo) and $todo=="search"){

$type=$_POST['type'];

$search_text=ltrim($search_text);
$search_text=rtrim($search_text);

	if($type<>"any"){
$query="select * from residences where name='$search_text'";
		}else{
$kt=explode(" ",$search_text);//Breaking the string to array of words
// Now let us generate the sql
			while(list($key,$val)=each($kt)){
if($val<>" " and strlen($val) > 0){$q .= " name like '%$val%' or ";}

			}// end of while
$q=substr($q,0,(strLen($q)-3));
// this will remove the last or from the string.
$query="select * from student where $q ";
		} // end of if else based on type value
echo "<span style='background-color= #FFFF00'>$query</span><br>";
$count=$dbo->prepare($query);
$count->execute();
$no=$count->rowCount();
if($no > 0 ){echo " No of records = ".$no."<br><br>";
echo "<table><tr><th>ID</th><th>Name</th><th>Class</th><th>Mark</th><th>Sex</th></tr>";
foreach ($dbo->query($query) as $row){
echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[class]</td>
<td>$row[mark]</td><td>$row[sex]</td></tr>";
}
echo "</table>";
}else {
echo " No records found ";
}

}// End if form submitted
echo "</td><td width='400' valign=top>";
echo " Full records here ";
$query="select * from residences";


echo "<table><tr><th>ID</th><th>Name</th><th>Class</th><th>Mark</th><th>Sex</th></tr>";
foreach ($dbo->query($query) as $row){
echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[class]</td>
<td>$row[mark]</td><td>$row[sex]</td></tr>";
}
echo "</table>";

echo "</td></tr></table>";
?>
