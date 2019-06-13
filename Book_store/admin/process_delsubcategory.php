<?php
require('includes/config.php');
	if(empty($_POST['subcatnm']))
		{
			echo "No Selected Category";
			
		}
		else
		{
	
			
			
			$cid=$_POST['subcatnm'];
			
			$q="delete from subcat where subcat_id = $cid";
			
	if(mysqli_query($conn,$q))
	{		echo "Subcategory deleted";
	}
			
			//$q = "delete from book where b_subcat = ".$cid;
			//mysql_query($conn,$q);
			
			header("location:category.php");
		}
?>
	
	