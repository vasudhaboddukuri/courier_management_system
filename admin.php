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
-->
    </style>
    <script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
    </script>
</head> 
<body> 
<div id="templatemo_header">
    <div id="site_title">
      <h2>Welcome Admin !!</h2>
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
<input type="button" value="Services"  onclick="window.location.href='#services' " />
</form>
<br>
<br>
<form>
<input type="button" value="Remove Employee"  onclick="window.location.href='#testimonial' " />
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
            <h2>&nbsp;&nbsp;View Employee List</h2>
            <div class="half left">
             <table>
             <form action="viewemp.php" method="post" >
                    
<input type='submit' name='submit' value='Click here to view the employee list'>
                      
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
            <h2>Remove Employee</h2>
            <p>&nbsp;</p>
            <div class="clear h40"></div>
          <div class="half left">
            <table cellpadding="4" cellspacing="0" align="center" width="70%">
              <script language="JavaScript" type="text/javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
            </script>
              <tbody>
               
                <tr>
                  <td class="bottom" valign="middle">&nbsp;</td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td class="aalpha" valign="top"><div align="center" class="style1">Enter the Employee's username</div></td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td valign="top"><div align="center">
<br>
<br>
                      <form action="removeemp.php" method="post" name="form" id="form" >
                        <input name="emp" class="gentxt" id="emp" maxlength="50" type="text" />
                        <input name="Submit" type="submit" class="gentxt" value="Submit">
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td valign="top">&nbsp;</td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
                </tr>
              </tbody>
            </table>
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
      <div class="half left">
                <h4>&nbsp;</h4>
                <table width="91%" align='center' cellpadding= "0" cellspacing= "0" class='main_tab'>

	
	
	<tr>
	 <td class='login_table' align='left'><form action='changepassa.php' method='post'>
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
	  </form>	</td>
	</tr>
	
</table>
              
            </div>
            
           
                
			<a href="#home" class="slider_nav_btn home_btn">home</a> 
            <a href="#testimonial" class="slider_nav_btn previous_btn">Previous</a>
             
        </div> 
    </div> 
</div>
</div>


</body> 
</html>
