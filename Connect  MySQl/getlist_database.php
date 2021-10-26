<?php 
	try {
		$dsn = 'mysql:host=localhost;dbname=PHP';
		$username = 'root';
		$password = '';
		$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db = new PDO($dsn,$username,$password,$options);
		echo 'Connected to Database';
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "Error connect to Database: ".$error_message;		
	}


	//Step 2: Get data
	// Get all books
	try {
			$query = "SELECT * FROM student";// Câu lệnh sql
			$statement = $db->prepare($query);// Câu lệnh chuẩn bị truy vấn thông qua biến $db làm việc với database
			$statement->execute(); //Thực thi câu lệnh truy vấn
			$books = $statement->fetchAll();// Lấy tất cả dữ liệu đã thực thi quy vấn xong			
				
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "Database error: $error_message";
		exit();
	}
 ?>

 <!DOCTYPE html>
 <html lang="">
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Title Page</title>
 
 		<!-- Bootstrap CSS -->
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
 		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 		<![endif]-->
 	</head>
 	<body>
 		<div class="container">
 		<h1 class="text-center">List of student</h1>
 		<table class="table table-bordered table-hover">
 			<thead>
 				<tr>
 					<th>STT</th>
 					<th>firstname</th>
 					<th>lastname</th>
 					<th>email</th>
 					<th>age</th>			
 				</tr>
 			</thead>
 			<tbody>
 			<?php foreach ($books as $key => $value):?>
 				<tr>
 					<td><?php echo $value[$key+1] ?></td>
 					<td><?php echo $value['firstname'] ?></td>
 					<td><?php echo $value['lastname'] ?></td>
 					<td><?php echo $value['email'] ?></td>
 					<td><?php echo $value['age'] ?></td>
 				</tr>
 			<?php endforeach; ?>
 			</tbody>
 		</table>
 		</div>
 
 		<!-- jQuery -->
 		<script src="//code.jquery.com/jquery.js"></script>
 		<!-- Bootstrap JavaScript -->
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  		<script src="Hello World"></script>
 	</body>
 </html>