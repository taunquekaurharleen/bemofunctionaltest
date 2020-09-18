<?php  include('header.php');
 $msg="";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$help=$_POST['help'];
	$query_post="insert into contact_us(name,address,help) values ('$name','$address','$help')";
	$ress=mysqli_query($con,$query_post);
	
	if($ress)
	{
		$msg="Contacted Successfully";
		
	}
	else
	{
		$msg= "error during contact.Please try again later".mysqli_error($con);
	}
}
?>
<body>
<div id="wrapper">		
<div id="hwrap">
			<header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div id="headwrap">
			
					<div id="titlelogo">
							<a href="index.html">				
							<div id="logo"><img src="./img/bemo-logo2.png" width="167" height="100" alt="Site logo"></div>	
							<h1></h1></a>
							<h2></h2>
					</div>
						
						
						<div id="mwrap">
							<div id="lt"></div>
							<div id="lm"></div>
							<div id="lb"></div>
						</div>
						
						
						<div id="nwrap" style="margin-left:650px; margin-top:-100px; ">
							<div id="menuBtn"></div>
							<nav>
								<ul class="navigation">
								<li id="current"><a href="index.html" rel="self" id="current">Main</a></li>
								<li><a href="#" rel="self">How To Prepare</a></li>
								<li><a href="#" rel="self">CDA Interview Questions</a></li>
								<li><a href="contactus.php" rel="self">Contact Us</a></li>
								</ul>
							</nav>						
						</div>
				</div>
			</header>
		
		
			
				
				<div class="banner video_banner">
					<div id="feature" class="bghide"><img id="featureImg" src="./img/contact-us.png">
					<div id="extraContainer11">
						<div class="videoWrapper">
								    
						</div>
					</div>
					
					
					
						
						<div id="extraContainer1">
						</div>
					
						
						<div class="banner-text">
						
						</div>
							<div id="extraContainer9"></div>
					</div>
					
					
				</div>	
					
					
								
			</div>												
				
		
					
	
			<div class="clear"></div>
			
		
			<div id="container">
					<div id="extraContainer7"></div>
					<div id="extraContainer8"></div>
							
							<section>
								
								<div id="padding">
<div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span style="font-size:13px; "><br></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">info@bemoacademicconsulting.com</span></span></div><br>

<form method="post" enctype="multipart/form-data">
	 <div><div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span style="font-size:13px; "><br></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">info@bemoacademicconsulting.com</span></span></div>
		<label>Name:</label> *<br>
		<input class="form-input-field" type="text" value="" name="name" size="40"><br><br>

		<label>Email Address:</label> *<br>
		<input class="form-input-field" type="text" value="" name="address" size="40"><br><br>

		<label>How can we help you?</label> *<br>
		<textarea class="form-input-field" name="help" rows="8" cols="38"></textarea><br><br>
		<input class="form-input-button" type="reset" name="reset" value="Reset">
		<input class="form-input-button" type="submit" name="submit" value="Submit">
		<?php
						 if($msg!="")
						 {
							 echo "<p class='alert alert-success'>$msg</p>";
						 }
						
						?>
	</div>
</form>


<br>
<div class="form-footer"><span style="font-size:15px; font-weight:bold; "><u>Note</u></span><span style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy &amp; paste the email address)</span><span style="font-size:13px; "><br></span></div><br>

</div>
								
							</section>
						<div id="asidewrap">
							<aside>
								<div id="sidecontent">
									<div id="sideTitle"></div>	
									
	
									
								</div>	
							</aside>
						</div>	
						<div class="clear"></div>
				
								<div id="ecwrap"></div>
								<div id="ec2wrap">	<div id="extraContainer2"></div></div>
								<div id="ec3wrap">	<div id="extraContainer3"></div></div>
								<div id="ec4wrap">	<div id="extraContainer4"></div></div>
								<div id="ec5wrap">	<div id="extraContainer5"></div></div>
								<div id="ec6wrap">	<div id="extraContainer6"></div></div>

								<div id="extraContainer10"><aside>
								<div id="sidecontent">
									<div id="sideTitle"></div>	
									
	
									
								</div>	
							</aside></div></div>		
<?php  include('footer.php');?>						