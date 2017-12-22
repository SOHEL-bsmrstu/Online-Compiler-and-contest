<?php 
	if(isset($_POST['upload'])){
		$file_name = $_FILES['pdf']['name'];
		$destination = "upload/".$file_name;
		$size = $_FILES['pdf']['size'];
		$type = $_FILES['pdf']['type'];
		$filename = $_FILES['pdf']['tmp_name'];
		//echo "<pre>";
		//print_r($_FILES);
		$extension = substr(basename($file_name),strrpos(basename($file_name),".")+1);
		$allowedType = array("upload/pdf");
		if($size > $_POST['MAX_FILE_SIZE'])
			echo "File size is bigger than allowed file...";
		else if(move_uploaded_file($filename,$destination)){
			$con = new mysqli("localhost", "root", "", "test") or die("connection failed");
			$sql = "insert into ex_table(qn_no,qn_pdf) values('$_POST[qn_name]','$destination')";
			$query = mysqli_query($con,$sql);
		if($query)
			echo "Data Inserted Successfully";
		else
			echo "Data Insertion Failed";
		}
		else
			echo "Some error in uploading file";
	}
?>
<html>
	<head>
		<title>File Movig</title>
	</head>
	<body>
	<div>
		<form method="post" enctype ="multipart/form-data">
			<input type = "text" name="qn_name">
			<input type = "file" name="pdf">
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "4500000">
			<input type = "submit" name="upload" value = "Upload">
		</form>
	</div>
	</body>
</html>

<?php
	$con = new mysqli("localhost", "root", "", "test") or die("connection failed");
	$sql = "select * from ex_table";
	$result = $con->query($sql);
	while($data = mysqli_fetch_assoc($result)){?>
		<table cellspacing ="10px" cellpadding = "5px">
			<tr>
				<td>
					<a href = "question_veiw.php?ex_id=<?php echo $data['ex_id']; ?>"><?php echo $data['qn_no']; ?></a>
				</td>
				<td><?php echo $data['qn_pdf']; ?></td>
				<td>
					<a href = "compiler.php?ex_id=<?php echo $data['contest_id']; ?>">Submit</a>
				</td>
			</tr>
		</table>
		
	<?php }					
?>

