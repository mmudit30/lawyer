<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="ankit_adv";
$services_table_name="services";
$connection=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$connection){
    die('Could not connect: ');
}
// echo 'Successfully Connected<br>';
$quer="select * from $services_table_name";
$res=mysqli_query($connection, $quer);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<title>ASTC</title>
	<!-- icon -->
    <link rel="icon" type="image/ico" href="../img/astc_logo.png" />

	<!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- StyleSheets -->
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chango&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<!-- Google icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Fontawesome icons -->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>

</head>
<body>

<div class="container mt-5 text-center">
</div>

<?php
if( array_key_exists ('deleteid', $_GET)){
    $deleteid= $_GET['deleteid'];
    $del_query= "DELETE from $services_table_name where service_id = $deleteid";
    if(mysqli_query($connection, $del_query)){
        header("Location: /ankit_advocate/admin_ankit/index.php");
    }
    else{
		echo "<h1>sorry</h1>";
	}
}
if(isset($_POST['ins_btn'])){
    $service_head= $_POST["service_head"];
    $service_desc= $_POST["service_desc"];
    $service_id= $_POST["service_id"];
    $ins_query= "INSERT INTO `$services_table_name` (`service_id`,`service_head`,
					`service_desc`) VALUES ( \"$service_id\", \"$service_head\", \"$service_desc\")";

	if(mysqli_query($connection, $ins_query)){
        header("Location: index.php");
    }
    else
       echo "Error";
}
?>

	<!-- Our Services  -->
	<div id="#ourservices" class="services-section container">
		<div class="section-head">
			<h1><span class="primary-color"> Add</span> Services</h1>
		</div>

		<form name="ins_form" action="" method="post">
		  <div class="form-group">
		    <label for="serviceid">Service id</label>
		    <input type="number" name="service_id" class="form-control" id="serviceid">
		  </div>
		  <div class="form-group">
		    <label for="servicename">Service name</label>
		    <input type="text" name="service_head" class="form-control" id="servicename">
		  </div>
		  <div class="form-group">
		    <label for="servicedescription">Service description</label>
		    <textarea class="form-control" name="service_desc" id="servicedescription"></textarea>
		  </div>
		  <button type="submit" name="ins_btn" class="btn btn-primary">Add</button>
		</form>

			<div class="service-row mt-5 row accordion">
				
				<?php
				$i="a";
				while ($row = mysqli_fetch_assoc($res)) {
				?>
				<div class="service-col col-sm-6 col-md-3">
					<div class="text-right col-6 mr-3"> id= <?php echo $row['service_id']; ?>
					<a class="" href='index.php/?deleteid=<?php echo $row['service_id']; ?>'>
						<button class="btn btn-danger">
							<i class='fas fa-trash-alt'></i>
						</button>
					</a>
					</div>
					<div class="service text-center" role="button" data-toggle="collapse" data-target="#<?php echo $i; ?>" aria-expanded="false">
						<?php echo $row['service_head']; ?>
					</div>
						<div id='<?php echo $i; ?>' class='service-desc collapse'>
							<?php echo $row['service_desc']; ?>
						</div>
					</div>
				<?php
				$i++;
				}
				$i="a";
				?>
			</div>
			
	</div>
	<!--END Our Services  -->





    <!-- Bootstrap cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Bootstrap cdn -->
	
	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript" src="js/google-map.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>