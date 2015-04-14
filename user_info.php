<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>user info</title>
  
</head>
<body>
	<?php
		$dbc = mysqli_connect('112.126.80.235','root','root','nuohui') or die('Error connecting MySql Server!');
    $dbc -> set_charset('utf-8');
    $query ='select * from user_info';
		$result = mysqli_query($dbc, $query) or die('result');
		echo '<table>';
		  while ($row = mysqli_fetch_array($result)) { 
		    // Display the score data
		    echo '<tr><td><strong>' . $row['username'] . '</strong></td>';
		    echo '<td>' . $row['position'] . '</td>';
		    echo '<td>' . $row['mobile_number'] . '</td>';
		    echo '<td>' . $row['company_name'] . '</td>';
		    echo '<td>' . $row['mail'] . '</td>';
		    echo '</tr>';
	  	    }
	  echo '</table>';
	?>
</body>
</html>