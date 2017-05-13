<html>
	<head>
		<title>PerpusGue (MVC)</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1><a href="/PerpusGue">Perpus Gue (MVC)</a></h1>
		<div>
			<?
			include("db_conf.php");
			include("controller/c_book.php");
			
			$mode = $_GET['mode']; 	// mode: '', add, update, delete
			$id = $_GET['id'];		// get record id for update and delete mode


			if(isset($_POST['id'])){
				c_book::cDML();
			}

			c_book::cViewBook($id,$mode);
			
			c_book::cViewAllBooks();

			?>
		</div>
	</body>
</html>