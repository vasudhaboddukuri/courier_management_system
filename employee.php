<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	body {
			background-color:#2781BA;
			background-image:url('images/bg1.gif');
			
		}
		
	table {
				border: 0px red solid;
			
				padding-top:0px;
				margin-top:0px;
				cellspacing:0px; 
				cellpadding:0px;
	}
	td {
		border:0px green dotted;
	}
	
	table.login_tab {
		background:rgba(255,255,255,0.9);
		cellspacing:0px; 
		cellpadding:0px;
	}
	
	table.main_tab {
		background:rgba(0,0,0,0);
		width:70%;
	}
	
	td.login {
			background-color:#C0C0C0;
			padding-left:5px;
			padding-right:5px;
	}
	td.login_table {
			background:rgba(248,248,255,1);
			padding-top:50px;
			padding-left:40px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
	}
	td.login_nam {
		height:30px;
		font-size:13pt;
		color:white;
		background-color:#3b5998;
		padding-left:5px;
	}
	td.new {
		height:30px;
		font-weight:none;
		font-size:11pt;
	}
	
	a {
		color:#999933;
	}
	a:hover {
	
		font-size:20pt;
	}
	td.marquee{
		padding-top:1px;
		padding-bottom:1px;
		padding-left:130px;
		background:rgba(0,0,0,1);
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
	}
	td.footer {
		background-color:#2952A3;
		background-image:url('images/tdback1.gif');
		border-top: 1px grey solid;
		color:#999933;
		text-align:center;
		font-size:8pt;
		padding-bottom:5px;
		padding-top:5px;
	}
	


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SidEx - Courier Management System</title>
<meta name="keywords" content="metro, free website template, beautiful grid, image grid menu, colorful theme" />
<meta name="description" content="Metro is a free website template by templatemo.com and it features jQuery horizontal scrolling among pages." />

	<link href="templatemo_style.css" type="text/css" rel="stylesheet" /> 
	<script type="text/javascript" src="js/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
	<script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
	<script type="text/javascript" src="js/init.js"></script> 
    
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    <style type="text/css">
<!--
.style1 {color: #000000}
.style2 {
	color: #000000
}
table.login_tab1 {		background:rgba(255,255,255,0.9);
		cellspacing:0px; 
		cellpadding:0px;
}
-->
    </style>
</head> 
<body> 
<div id="templatemo_header">
    <div id="site_title">
      <h2>Welcome Employee !!</h2>
    </div>
</div>
<div id="templatemo_main">
    <div id="content"> 
		<div id="home" class="section">
        	
			<div id="home_about" class="box">
           	  <h3><a href="index.php#contact">Logout</a></h3>

</div>
            
<br>
<br>
<br>
<form>
<input type="button" value="View Courier Orders"  onclick="window.location.href='#services' " />
</form>
<br>
<br>
<form>
<input type="button" value="Update Courier Details"  onclick="window.location.href='#testimonial' " />
</form>
<br>
<br>
<form>
<input type="button" value="Change Password"  onclick="window.location.href='#contact' " />
</form>
<br>
<br>
<form>
<input type="button" value="View Courier Details"  onclick="window.location.href='report.php' " />
</form>
 
</div>
     
     

   <div class="section section_with_padding" id="services"> 
            <h2>&nbsp;&nbsp;View Courier Orders</h2>
            <div class="half left">
             <table>
             <form action="viewce.php" method="post" style="background-color:#000000">
                     <tr>
                       <!-- <td width="355" colspan='2' bgcolor="#000000" class='login' align="center">-->
<input type='submit' name='submit' value='Click here to view courier orders'>
                     <!--  </td>-->
                        
                    </tr>
             </form>
             </table>   
          	</div>
            
            <div class="clear h40"></div>
            
            <div class="img_border img_fr">
          </div>
                 
			<div class="half left">                
            	
   	  	  </div>

            <a href="#home" class="slider_nav_btn home_btn">home</a> 
            <a href="#home" class="slider_nav_btn previous_btn">Previous</a>
            <a href="#testimonial" class="slider_nav_btn next_btn">Next</a> 

        </div> 
      <div class="section section_with_padding" id="testimonial"> 
            <h2>Update Courier Status</h2>
            <p>&nbsp;</p>
            <div class="clear h40"></div>
          <div class="half left">
<table class="login_tab1"><form action="updatestatus.php" method="post">
  <tr>
    <td colspan="2" class='login_nam' valign='middle'>Update Courier Status</td>
  </tr>
  <tr>
    <td class='login style1'>Courier ID:</td>
    <td class='login'><input type='text' name='cid' />    </td>
  </tr>

  
   <tr>
            	<td class="login style1">New Status:</td>
                <td align="center" bgcolor="#c0c0c0"><select name="status">
						<option value = "Loaded">Loaded</option>
						<option value = "In Transit">In Transit</option>
						<option value = "Delivered">Delivered</option>
					</select></td>
            </tr>
  
  <tr>
    <td class='login' colspan='2'><input type='submit' name='update' value='Update' />    </td>
    <td class='new'>&nbsp;</td>
  </tr>
</table></form>
<p>&nbsp;</p>
        </div>
          <div class="half right"></div>
            <div class="clear h40"></div>
        <div class="half left"></div>
          <div class="half right">
            <p><a href="#home" class="slider_nav_btn home_btn">home</a> 
              <a href="#services" class="slider_nav_btn previous_btn">Previous</a>
              <a href="#contact" class="slider_nav_btn next_btn">Next</a>      </p>
        </div>
                    
            </div> 
               <div class="section section_with_padding" id="contact"> 
            <h2>Change Password</h2> 
            <?php session_start();
            if($_SESSION['change']==1){ echo "Password Changed !!"; $_SESSION['change']=0;}
            ?>
          <div class="half left">
                <h4>&nbsp;</h4>
                <table width="91%" align='center' cellpadding= "0" cellspacing= "0" class='main_tab'>

	
	
	<tr>
	 <td class='login_table' align='left'><form action='changepasse.php' method='post'>
	  <table class="login_tab">	
	 <td class='login_table' align='left'>
	 
			<tr>
				<td colspan="2" class='login_nam' valign='middle'>Change Password</td>
			</tr>
			<tr>
				<td class='login style1'>Username:</td>
				<td class='login'><input type='text' name='username'> </td>
			</tr>
			<tr>
				<td class='login style1'>Old Password:</td>
				<td class='login'><input type='password' name='opassword'> </td>
			</tr>
            <tr>
				<td class='login style1'>New Password:</td>
				<td class='login'><input type='password' name='npassword'> </td>
			</tr>
          
			<tr>
				<td class='login' colspan='2'><input type='submit' name='submit' value='Change'>
			  </td>
                
			</tr>
	  </table>
	  	</td>
	</tr>
	
</table></form>
              
            </div>

    </div> 
</div>
</div>

</body> 
</html>
