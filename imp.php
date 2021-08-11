<object class="obj" data="data:application/pdf;base64,<?php echo base64_encode($content) ?> " type="application/pdf"></object>	 
$search=$_POST['search'];
	// echo $search;
	$sql="SELECT * FROM book Where book_name like '%$search%' ";
	// if($sql)echo 'hi';
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);
	$content=mysqli_fetch_array($result)['download'];