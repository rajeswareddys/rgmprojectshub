	<?php 
	 require 'db.php';
				$sql=mysqli_query($link,"SELECT * FROM `files`");
				while($ex=mysqli_fetch_array($sql))
				{
							$filename[]=$ex['file'];
				
		
header ("Content-Type:application/octet-stream");
 
header ("Accept-Ranges: bytes");
 
header ("Content-Length: ".filesize($file));
 
header ("Content-Disposition: attachment; filename=".$file);
}?> 