<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
					<h4 > <!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
			color: #333;
      font: normal;
		}
    h2 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
			color: #333;
      font: normal;
		}
		form {
			background-color: #fff;
			border-radius: 5px;
			padding: 20px;
			width: 500px;
			margin: 0 auto;
			box-shadow: 3px 3px 3px #999;
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #555;
		}
		input[type=text], textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 16px;
			color: #555;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-bottom: 20px;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		input[type=submit]:active {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="#" method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder="Your name.." required>

		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Your email.." required>

		<label for="message">Message</label>
		<textarea id="message" name="message" placeholder="Write your message here.." style="height:200px" required></textarea>

		<input type="submit" value="Submit">
	</form>
</body>
<!DOCTYPE html>
<html>
<head>
	<title>Person Contact Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
      
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin-top: 50px;
		}
		.card {
			background-color: #fff;
			box-shadow: 3px 3px 3px #999;
			border-radius: 10px;
			padding: 20px;
			width: 300px;
			margin: 20px;
			text-align: center;
			transition: transform .2s;
		}
		.card:hover {
			transform: scale(1.05);
		}
		.card img {
			border-radius: 50%;
			margin-bottom: 20px;
			width: 150px;
			height: 150px;
			object-fit: cover;
		}
		.card h2 {
			margin-bottom: 10px;
			color: #333;
		}
		.card p {
			color: #666;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<img src="C:\Users\bigba\OneDrive\Desktop\311714573_2032433503812790_5591688904882132966_n.png" alt="Person 1">
			<h2>Sandeep Adhikari</h2>
			<p>sandeep@gmail.com<br>9856012444</p>
		</div>
		<div class="card">
			<img src="C:\Users\bigba\OneDrive\Desktop\Untitled-1.png" alt="Person 2">
			<h2>Sushil Poudel</h2>
			<p>sushilpaudel799@gmail.com<br>9840391969</p>
		</div>
		<div class="card">
			<img src="C:\Users\bigba\Downloads\priyank.png" alt="Person 3">
			<h2>Priyank Chaudhary</h2>
			<p>priyank@gmail.com<br>555-555-5555</p>
		</div>
	</div>
</body>
</html>

</html>
</h4>
	        		<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner1.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner2.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner3.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div> -->
		           <!--  <h2>Monthly Top Sellers</h2> -->
		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>