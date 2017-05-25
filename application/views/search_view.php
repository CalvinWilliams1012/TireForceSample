<?php
/**
 * Page that is shown after a search.
 *@author Calvin Williams <calvin.william1012@gmail.com>
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- "Dynamic" title which can be changed in the controller. -->
		<title><?php echo $title?></title>
	</head>
<body>
	<table name="tireTable">
		<tr>
			<th>Name</th>
			<th>Size</th>
			<th>Part Number</th>
			<th>Description</th>
			<th>Price</th>
		</tr>
		<?php
			/*==========================================================================
			=            Adds a table row for each row in the tires object.            =
			============================================================================*/
			
			foreach ($tires as $row) {
				echo '<tr><td>' . $row->tireName . '</td><td>' . $row->size . '</td><td>' . $row->partNum . '</td><td>' . $row->description . '</td><td>$' . $row->price . '</td></tr>';
			}
			
			/*=====  End of Section adding rows to table  ======*/
		?>
	</table>
</body>
</html>