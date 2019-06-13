<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
								
We, <b>Gunjan Agarwal, Anshu Kumar Pathak and Parth Choudhary, under the mentorship of our  respected Saleena mam</b> have prepared a Database Project on the topic-“<b> VITCC Book Store</b> ” .Our project  is designed to maintain an efficient management of the book store of the university.This project is part of our course <b>Database Management Systems (CSE2004).</b></br> The database provides various options and facilities including the online shipping of the required books on user’s demand. It gives all the details of the availability books of different categories on the demand of the user. 
In this project, we have incorporated the concepts of  SQL, PHP, HTML, CSS, Javascript and Bootstrap  which are of primary importance to design a responsive website. Use of Google APIs is also done to add more functionality and features. To insert various features and techniques in the database, we have written codes to implement the various operations.</br>
While making this project, we have kept in mind, the motto and objective of this project to ensure that we learn and get acquainted with the concepts of one of the most demanded field of the present era i.e. “Database systems” .We have also tried to learn the various database concepts which are useful for us in academics as well as in future aspects of our career. 

							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
