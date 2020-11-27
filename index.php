<?php
	if(isset($_POST['authors'])){
			$offers = mysqli_query($conn,"SELECT * FROM press");  
      	while($row = mysqli_fetch_array($offers)){
	        $id = $row['id'];
	        $username = $row['name'];
	        $email = $row['email'];

	        echo $id;
	        echo $username;
	        echo $email;
    	}
	  
	}
?>