<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="resume_<?php echo $_POST['TemplateList'];?>_stylesheet.css">
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
	print();
});
</script>
</head>
<body>
<div id="main">
<h1 id="name"><?php echo $_POST['name'];?></h1>
</div>
			
<div id="header"><?php echo $_POST['name']." | ".$_POST['mail']." | ".$_POST['phone'];?></div>
<br>
<div class="table">
<h2 id="heading">Objective</h2>
			
<p><?php echo $_POST['objective'];?></p>
</div>
</div>
<div class="table" >
<h2 id="heading">Education</h2>	
<table>
<tr>
<th >Year</th>
<th>Institute</th>
<th>Course</th>
<th>Percentage</th>
</tr>
<tr><td class="year"><?php echo $_POST['collegeyear'];?></td>
<td class="institute"><?php echo $_POST['college'];?></td>
<td class="course"><?php echo $_POST['collegecourse'];?></td>
<td class="percent"><?php echo $_POST['collegepercentage']; 
if(!empty($_POST['collegesem']))
{echo "( till ".$_POST['collegesem']." semester )";}
?></td>
</tr>
<tr>

</tr>
<tr>
<td class="year"><?php echo $_POST['year10'];?></td>
<td class="institute"><?php echo $_POST['school10'];?></td>
<td class="course">12th</td>
<td class="percent"><?php echo $_POST['percentage10'];?></td>
	</tr>
</table>
</div>		
<div class="table">
<h2 id="heading">Summer Training</h2>
			
<ul>
<li>
Company Name :<?php echo $_POST['stcomapnyname'];?>
</li>
<li>
Duration :<?php echo $_POST['stduration'];?>
</li>
<li>
Project Undertaken :<?php echo $_POST['stproject'];?>
</li>
<li>
Technology Used :<?php echo $_POST['sttechnology'];?>
</li>
</ul>
</div>
<div class="table">
<h2 id="heading">Projects Undertaken</h2>
<ul>
<?php 
echo "<li>".$_POST['projectfinalyear']."</li>";
$i=1;
while(isset($_POST['project'.$i]))
{
if(!empty($_POST['project'.$i]))
{
echo "<li>".$_POST['project'.$i]."</li>";
}
$i++;
}
?>
</ul>
</div>	







	
<div class="table">
<h2 id="heading">Skill Set</h2>
<ul>
					
<?php 
				
echo "<li>".$_POST['mandatoryskill']."</li>";
	$i=1;
while(isset($_POST['skill'.$i]))
	{
if(!empty($_POST['skill'.$i]))
	{
echo "<li>".$_POST['skill'.$i]."</li>";
}
$i++;
}
?>
				
</ul>
</div>

<div class="table">
<h2 id="heading">Personal Details</h2>
<ul>
<li>
<span>Date Of Birth :</span><?php echo $_POST['dob'];?>
</li>
<li>
<span>Father's Name :</span><?php echo $_POST['fathersname'];?>
</li>
<li>
<span>Landline No. :</span><?php echo $_POST['landline'];?>
</li>
<li>
<span>Alternate No. :</span> <?php echo $_POST['otherno'];?>
</li>
</ul>
</div>	
<div id="disclaimer">
</div>
		
<div class="table">
<h2 id="heading">Job suggestion</h2>
<ul>
					
<?php 

if( $_POST['collegecourse']=='B.tech.')
{
echo"Developer </br>Automobile designer </br> Civil Engineer <br> Cloud Engineer";		}
?>

<?php
if( $_POST['collegecourse']=='LLB')
{
echo"Corporate lawyer <br> Criminal lawyer <br> International law expert <br> Arbitrator <br> Mediator";
}
?>


<?php
if( $_POST['collegecourse']=='MBBS')
{
echo"Orthodontist <br> ENT Surgeon <br> Aesthetic Surgeon <br> Pulmonologist <br> Gynecologist ";
}
?>

<?php
if( $_POST['collegecourse']=='B.com')
{
echo"Accountent </br> Manager </br> C.A.";
}

?>
				
</ul>
</div>

	
			
</body>
</html>	