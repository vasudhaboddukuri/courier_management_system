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
	
	a.normal{color:black;}
	a.normal:hover{color:black;font-size: 12px;}
	a.normal:visited{color:black;}
	
	a {
		color:#000000;
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
	}
	


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nitk - Courier Management System</title>
<meta name="keywords" content="NITK, -, Courier, Management, System" />


	<link href="templatemo_style.css" type="text/css" rel="stylesheet" /> 
	<script type="text/javascript" src="js/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
	<script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
	<script type="text/javascript" src="js/init.js"></script> 
    
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    <style type="text/css">

.style1 {color: #000000}
.style2 {
	color: #000000
}
table.login_tab1 {		background:rgba(255,255,255,0.9);
		cellspacing:0px; 
		cellpadding:0px;
}

    </style>

</head> 
<body> 


<img src="final.png" style="width:1270px;height:168px;">

<div id="templatemo_header">
    <div id="site_title">
	
<h2 span style="font:'Courier New', Courier, monospace">NITK - Courier Management System</span></h2>
</div>
</div>

<div id="templatemo_main">
    <div id="content"> 
		<div id="home" class="section">
        	
			<div id="home_about" class="box">
           	
               
            </div>
 

<div><!-- class="box home_box1 color1">-->
            	<a href="#about"><img src="images/templatemo_services.jpg" alt="About" /></a>
            </div>
<br>
<br>
<br>
            
            <div> <!--class="box home_box1 color2">-->
	            <a href="#track"><img src="images/testimonial.jpg" alt="Track" /></a>
            </div>
            <br>
<br>
<br>
           
            
            <div> <!-- class="box home_box1 color4 no_mr">-->
            	<a href="#login"><img src="images/contact.jpg" alt="Login" /></a>
            </div>
            
               
      </div> <!-- END of home -->
                
           
            
               
      </div> 
        
        <div class="section section_with_padding" id="about"> 
            <h2>About</h2>
         
            <div class="half right">
                <ol class="list_bullet">
                    <li>Track record of strong quarterly results</li>
                    <li>Strong brand image through phased re-branding of all company and franchise outlets</li>
                    <li>Corporate governance</li>
                    <li>Statutory disclosures</li>
                    <li>Better public relationship</li>
                    <li>An inclusive business philosophy</li>
                    <li>Management integrity</li>
                    <li>Future growth plans</li>
                    <li>Past and current profits</li>
                    </ol>
          </div>
           <!-- <div class="clear h40"></div>
            <div class="img_border img_fr">
                <img src="images/logistics.jpg" alt="image" width="400" />            </div>-->
<div class="half left">                
            	<ul id="aui_3_2_0_1134">
            	  <ul>
            	    <li>1. Promoting Premium Express Products for better customer satisfaction and higher profitability</li>
            	    <li>2. Value-added services to cater to evolved demands of customers</li>
            	    <li>3. Continuous optimization of resources to lower costs scientifically</li>
            	    <li>4. Revenue protection at every step of the value chain</li>
            	    <li>5. Superior cash flow management</li>
          	    </ul>
           	  </ul>
            	<p>&nbsp;</p>
       	  </div>

            <a href="#home" class="slider_nav_btn home_btn">home</a> 
            <a href="#home" class="slider_nav_btn previous_btn">Previous</a>
            <a href="#track" class="slider_nav_btn next_btn">Next</a> 

        </div> 
      <div class="section section_with_padding" id="track"> 
            <h2>Track Courier</h2>
            <p>&nbsp;</p>
            <div class="clear h40"></div>
          <div class="half left">
<form method="post" action="trackhome.php"> <table class="login_tab1">
  <tr>
    <td colspan="2" class='login_nam' valign='middle'>Track Courier</td>
  </tr>
  <tr>
    <td class='login style1'>Sender's Name:</td>
    <td class='login'><input type='text' name='username' />
    </td>
  </tr>
  <tr>
    <td class='login style1'>Courier Number:</td>
    <td class='login'><input type='int' name='cid' />
    </td>
  </tr>
  <tr>
    <td class='login' colspan='2'><input type='submit' name='submit2' value='Track Now !!' />
    </td>
    <td class='new'>&nbsp;</td>
  </tr>
</table></form>
<p>&nbsp;</p>
        </div>
          <div class="half right"></div>
            <div class="clear h40"></div>
        <div class="half left"></div>
          <div class="half right">
            <p><a href="#home" class="slider_nav_btn home_btn">Home</a> 
              <a href="#about" class="slider_nav_btn previous_btn">Previous</a>
              <a href="#login" class="slider_nav_btn next_btn">Next</a>      </p>
        </div>
                    
            </div> 
        <div class="section section_with_padding" id="login"> 
            <h2>Login Page</h2> 
            <div class="half left">
                <h4>&nbsp;</h4>
               
	 <td class='login_table' align='left'><form action='logging.php' method='post'>
	   <table class="login_tab">
			<tr>
				<td colspan="2" class='login_nam' valign='middle'>User Login</td>
			</tr>
			<tr>
				<td class='login style1'>Username:</td>
				<td class='login'><input type='text' name='username'> </td>
			</tr>
			<tr>
				<td class='login style1'>Password:</td>
				<td class='login'><input type='password' name='password'> </td>
			</tr>
            <tr>
            	<td class="login style1">User Type:</td>
                <td align="center" bgcolor="#c0c0c0"><select name="type">
						<option value = "client">Client</option>
						<option value = "employee">Employee</option>
						<option value = "admin">Admin</option>
					</select></td>
            </tr>
			<tr>
				<td class='login' colspan='2'><input type='submit' name='submit' value='Login'>




<form>
<input type="button" value="Sign Up"  onclick="window.location.href='register.php' " />
</form>


			</tr>
	  </table>
	  </form>	</td>

              
            </div>
            
           
	    <a href="#home" class="slider_nav_btn home_btn">home</a> 
            <a href="#track" class="slider_nav_btn previous_btn">Previous</a>
             
        </div> 
    </div> 
</div>
</div>

</body> 
</html>
