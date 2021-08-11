<?php
$conn= mysqli_connect('localhost','root','','library');
if(mysqli_connect_errno()){
	echo "failed to connect";
	exit();
}
else
{
	$search=$_POST['search'];
	// echo $search;
	$sql="SELECT * FROM book Where book_name like '%$search%' ";
	// if($sql)echo 'hi';
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);


}
?>
<!DOCTYPE html>
<html lang="en"> 
 
<head>
	<meta charset="UTF-8"> 
	<title>Search Results</title>
	<style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1{

            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
 
        }
        h2 { 
            text-align: center; 
            color: green; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 

        } 
       body{
        background: linear-gradient(to left, skyblue,white);
        /*background-repeat: no-repeat;*/
        background-size: cover;
       }
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head>
<body bgcolor="white"><h2> Your Search results :</h2>
	<table border="2">
		<tr>
			<th>Book_id</th>
			<th>Book_name</th>
			<th>Author_name</th>
			<th>Pdf Version</th>
		</tr>
<?php
		while($row=mysqli_fetch_assoc($result))
		{
	?>
			<tr> 
            	<td><?php echo $row['book_id'];?></td> 
                <td><?php echo $row['book_name'];?></td> 
                <td><?php echo $row['Author_name'];?></td>
                <?php $linkvar= $row['download'];?>
                <td><?php echo '<a href='.$linkvar.' style="text-decoration:none;" >link</a>';?></td>
                
            </tr> 
            <?php 
                } 
?> 
    </table>
 
</body>
</html>
 