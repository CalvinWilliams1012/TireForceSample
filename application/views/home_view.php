<?php
/**
 * Home view starting view called by controller, contains drop downs to select vehicle type.
 *@author Calvin Williams <calvin.william1012@gmail.com>
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title?></title>
	</head>
<body>

<div id="main">
	<!-- search function in home controller on post. -->
	<form method="POST" action="index.php/home/search">
	<div id="yearDiv">
		<select name="yearSelect" id="yearSelect">
			<option selected="true" disabled="true">Year</option>
			<?php
				/*=============================================
			            	Inserting a select
							option for each value
							grabbed from the database         
				=============================================*/
				foreach($years as $year)
				{
					echo '<option value="'.$year->year.'">'.$year->year.'</option>';
				}	
				/*=====  End of Section year options  ======*/
			?>
		</select>
	</div>
	<div id="makeDiv">
		<select name="makeSelect" id="makeSelect">
			<option selected="true" disabled="true">Make</option>
			<?php
				/*=============================================
			    	        Inserting a select
							option for each value
							grabbed from the database         
				=============================================*/
				foreach($makes as $make)
				{
					echo '<option value="'.$make->make.'">'.$make->make.'</option>';
				}
				/*=====  End of Section make options  ======*/
			?>
		</select>
	</div>
	<div id="modelDiv">
		<select name="modelSelect" id="modelSelect">
			<option selected="true" disabled="true">Model</option>
			<?php
				/*=============================================
			    	        Inserting a select
							option for each value
							grabbed from the database         
				=============================================*/
				foreach($models as $model)
				{
					echo '<option value="'.$model->model.'">'.$model->model.'</option>';
				}
				/*=====  End of Section model options  ======*/
			?>
		</select>
	</div>
	<div id="bodyDiv">
		<select name="bodySelect" id="bodySelect">
			<option selected="true" disabled="true">Body</option>
			<?php
				/*=============================================
			   	      	   Inserting a select
							option for each value
							grabbed from the database         
				=============================================*/
				foreach($bodys as $body)
				{
					echo '<option value="'.$body->body.'">'.$body->body.'</option>';
				}
				/*=====  End of Section body options  ======*/
			?>
		</select>
	</div>
	<div id="otherDiv">
		<select name="otherSelect" id="otherSelect">
			<option selected="true" disabled="true">Other</option>
			<?php
				/*=============================================
				            Inserting a select
							option for each value
							grabbed from the database         
				=============================================*/
				foreach($others as $other)
				{
					echo '<option value="'.$others->other.'">'.$others->other.'</option>';
				}
				/*=====  End of Section other options  ======*/
			?>
		</select>
	</div>
	<div id="buttonDiv">
		<button type="submit" name="submitButton">Search</button>
	</div>
	</form>
</div>

</body>
</html>