<html>
<title>Membership Form</title>
<head>
<style type="text/css">
.error
{
background-color:red;
color: white;
padding: 0.2em;
}
</style>
</head>
<body>
<?php
	if(isset($_POST["btnSave"]))
	{
		processForm();
	}
	else
	{
		displayForm(array());
	}
	function validateField($fieldName,$missingFields)
		{

			if(in_array($fieldName,$missingFields))
			{
				echo 'class="error"';
			}
		}
	function setValue($fieldName)
		{
			if(isset($_POST[$fieldName]))
			{
				echo $_POST[$fieldName];
			}
		}
	function setChecked($fieldName,$fieldValue)
		{
			if(isset($_POST[$fieldName]) and $_POST[$fieldName]==$fieldValue)
				{
						echo 'checked="checked"';
				}
		}
function setSelected($fieldName,$fieldValue)
{
			if(isset($_POST[$fieldName]) and $_POST[$fieldName]==$fieldValue)
			{
				echo 'selected="selected"';
			}
}
function processForm()
{
$requiredFields=array("txtfname","txtmname","txtlname","platform","city");
$missingFields=array();
foreach ($requiredFields as $rf)
{
if(!isset($_POST[$rf]) or empty($_POST[$rf]))
{
$missingFields[]=$rf;
}
}
if($missingFields)
{
displayForm($missingFields);
}
else
{
displayThanks();
}
}
function displayForm($missingFields)
{
if($missingFields)
{ ?>
<p class="error">There were some problems with form you submitted.Please complete the field highlighted below and click save to submit the form again</p>
<?php }
else
{ ?>
<p>To Register please fill in details below. The fields with * sign are required</p>
<?php } ?>
<form action="GeneratingWF.php" method="post">
<fieldset style="width:200px;">
<legend>Personal Information</legend>
<label for="txtfname" <?php validateField("txtfname",$missingFields);?>>First Name</label></br>
<input type="text" name="txtfname" value="<?php setValue("txtfname")?>"/></br>
<label for="txtmname" <?php validateField("txtmname",$missingFields);?>>Middle Name</label></br>
<input type="text" name="txtmname" value="<?php setValue("txtmname");?>"/></br>
<label for="txtlname" <?php validateField("txtlname",$missingFields);?>>Last Name</label></br>
<input type="text" name="txtlname" value="<?php setValue("txtlname");?>"/></br>
</fieldset>
<fieldset style="width:200px;">
<legend <?php validateField("platform",$missingFields);?>>Platform Intrested</legend>
<input type="radio" name="platform" value="Dot Net" <?php setChecked("platform","Dot Net");?>/>Dot Net</br>
<input type="radio" name="platform" value="JAVA" <?php setChecked("platform","JAVA");?>/>JAVA</br>
<input type="radio" name="platform" value="PHP" <?php setChecked("platform","PHP");?>/>PHP</br>
<input type="radio" name="platform" value="ANDROID" <?php setChecked("platform","ANDROID");?>/>ANDROID</br>
</fieldset>
<fieldset style="width:200px;">
<legend <?php validateField("city",$missingFields);?>>City Intrested</legend>
<select name="city">
<option value="Aurangabad" <?php setSelected("city","Aurangabad");?>>Aurangabad</option>
<option value="Mumbai" <?php setSelected("city","Mumbai");?>>Mumbai</option>
<option value="Pune" <?php setSelected("city","Pune");?>>Pune</option>
<option value="Nashik" <?php setSelected("city","Nashik");?>>Nashik</option>
<option value="Hydrabad" <?php setSelected("city","Hydrabad");?>>Hydrabad</option>
<option value="Banglore" <?php setSelected("city","Banglore");?>>Banglore</option>
</select>
</fieldset><br>
<input type="submit" name="btnSave" value="Save"/>
<input type="reset" name="btnReset" value="Reset"/>
</form>
<?php }
function displayThanks()
{
echo "<h1>Thank You</h1>";
echo "<p>Thank you, Your Form is submitted successfully</p>";
}
?>
</body>
</html>