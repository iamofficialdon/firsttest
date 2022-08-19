<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<title>SmartVTU NG | Getting Airtime & Data Is Easy</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg custom">
		<a href="" class="navbar-brand">SmartVTU</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nabvarNav" aria-controls="nabvarNav" aria-expanded="false" aria-lable="Toggle navigation">
			<span class="navbar-toggler-icon"></span>

		</button>
		<div class="collapse navbar-collapse" id="nabvarNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Fund Account
					</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Purchase Card
					</a>
				</li>
			</ul>
		</div>
	</nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        
	        <form action="insert.php" method="POST" >

	        	<h3> <center>Register Here! </center></h3>
	        	<label for="dff"> Username:

	        		<input type="text" name="username" class="form-control"> 

	        	</label>

	        	<label for="dff"> Password:
	        		<input type="password" name="password" class="form-control"> 
	        	</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary">Save changes</button>

<div class="jumbotron">

	<div class="row">
		<div class="col col-md-4">
				<h5> SmartVTU, the best VTU Platform in Nigeria Where Subscription of any type can be made </h5>	

				<!-- <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Login </button> -->
			<a href="" class="btn btn-primary mt-4" data-toggle="modal" data-target="#myModal"> Register </a>

			<a href="" class="btn btn-warning mt-4 " > Login </a>
		</div>

		<div class="col col-md-4" align="right">

			<img src="img/mountain.png" width="100px" height="">


		</div>


	</div>
</div>

<!--login-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        
	        <form action="login.php" method="POST" >

	        	<h3> <center>Welcome Back! </center></h3>
	        	<label for="dff"> Username:

	        		<input type="text" name="username" class="form-control"> 

	        	</label>

	        	<label for="dff"> Password:
	        		<input type="password" name="password" class="form-control"> 
	        	</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary">Save changes</button>

<div class="jumbotron">

	<div class="row">
		<div class="col col-md-4">
				<h5> SmartVTU, the best VTU Platform in Nigeria Where Subscription of any type can be made </h5>	

				<!-- <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Login </button> -->
			<a href="" class="btn btn-primary mt-4" data-toggle="modal" data-target="#myModal"> Register </a>

			<a href="" class="btn btn-warning mt-4 " data-toggle="modal" data-target="#myModal1"> Login </a>
		</div>

		<div class="col col-md-4" align="right">

			<img src="img/mountain.png" width="100px" height="">


		</div>


	</div>
</div>
<!--Login ends-->

<div style="background-image: url('img/carou.jpg'); height: 500px;">
<div class="container">

	<div class="row">

		<div class="col col-md-4">
			

			<img src="img/mountain.png" width="100px" height="100px" class="thumbnail">

			<div class="caption">
        <h3>Airtime Top Up</h3>
        <p>Our Airtime sub is fast and reliable</p>
    </div>
		</div>

		<div class="col col-md-4">
			

			<img src="img/mountain.png" width="100px" height="100px" class="thumbnail">

			<div class="caption">
        <h3>Data Top Up</h3>
        <p>Our Airtime sub is fast and reliable</p>
    </div>
		</div>


		<div class="col col-md-4">
			

			<img src="img/mountain.png" width="100px" height="100px" class="thumbnail">

			<div class="caption">
        <h3>Airtime Top Up</h3>
        <p>Our Airtime sub is fast and reliable</p>
    </div>
		</div>

</div>

</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>