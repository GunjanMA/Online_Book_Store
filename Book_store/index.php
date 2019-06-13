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
							<h1 class="title"><div align=center>Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo "VITCC Book Store";
									echo "<br>";
									echo "<h3>We are here to help you out...</h3>";
								}
							?>
							</div>
							</h1>
							
						</div>
						<h4> Search the product around the internet with this search tab...</h4>
						<script>
						  (function() {
							var cx = '008335025987078895930:ad-nvhpsiwe';
							var gcse = document.createElement('script');
							gcse.type = 'text/javascript';
							gcse.async = true;
							gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						  })();
						</script>
						<gcse:search></gcse:search>	
						
						
						
												
					</div>
<div align=center><h3>Visitor Counter</h3><a href='https://www.counter12.com'><img src='https://www.counter12.com/img-Z798250ZwC8xZWCa-5.gif' border='0' alt='free web counter'></a><script type='text/javascript' src='https://www.counter12.com/ad.js?id=Z798250ZwC8xZWCa'></script></div>
					<div align=center><a href="\dbms\Book_store\responsive-image-gallery-with-flexbox\index.html"><h3>Visit our Gallery</h3></a>
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
