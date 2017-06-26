<?php

$query="select *from posts";
$result=mysqli_query($con,$query);
// count the total number of records
$total_posts=mysqli_num_rows($result);
// using ceil function to divide the total records on per page
$total_pages=ceil($total_posts/$per_page);



for ($i=1;$i<=$total_pages;$i++)
{
	echo"<a href='home.php?page=$i'>$i</a>";
	
	
}
//going to first page
echo"

<div id='pagination'style='float:left;background-color:#eee;'>
<a href='home.php?page=$i'>$i</a>";
//going to last page
echo "<a href='home.php?page=$total_pages'>last page</a></div>";




?>