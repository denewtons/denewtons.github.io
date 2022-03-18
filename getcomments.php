<?php
include('conn.php');
$sql="SELECT * FROM feedback ORDER BY name";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
for($count=0;$row=mysqli_fetch_assoc($result);$count++){
	$name=$row['name'];
print("<tr>");
$no=$count+1;
print("<td>$no</td>");
foreach($row as $key=>$value)
	print("<td>$value</td>");
print("</tr>");
}
}else{
print("**No Investments made yet**");

}

?>