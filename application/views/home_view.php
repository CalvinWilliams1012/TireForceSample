<?php
/**
 * Home view starting view called by controller, contains drop downs to select vehicle type.
 *
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
	<select name="yearSelect">
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

</body>
</html>