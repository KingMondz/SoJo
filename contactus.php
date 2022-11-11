<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ContactUs</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
		.jumbotron{
        background-image: url("photos/pic1.jpg");
		background-size: cover;
		background-position: center;
		height: 100vh;
		width: 100%;
		display:flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: center;
		padding: 0 20px;
		padding-top: 0;
	    margin-bottom:0;
        border-radius:0;
    	}
		#fomwela{
        background-image: url("img/aladin.jpg");
		background-size: cover;
		background-position: center;
		height: 100vh;
		width: 100%;
		display:flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: center;
		padding: 0 20px;
	    margin-bottom: 0;
        border-radius:0;
    	}
	</style>
</head>
<body>
	<div class="jumbotron text-center">
	<div class="container">
	<h2><b>SOJO PROJECT MANAGEMENT SOFTWARE</b></h2>
	<br>
	<h1>Contact Us now for more information!</h1>
	<p>Plese enter your details and queries in the form below and we shall get back to you as soon as we can!</p>
	</div>
	</div>
		<form>
			<div id="fomwela">
			<div class="form-group">
        	 	<label>Name</label>
         	 <input type="text" class="form-control" placeholder="Add Name">
       		 </div>
       		 <div class="form-group">
          		<label>Email</label>
          		<input type="email" class="form-control" placeholder="Add Email">
        	</div>
       		<div class="form-group">
        		<label>Phone Number</label>
        		<select>
		  				<option>
		  				+254
		  				</option>
		  				<option>
		  				+255
		  				</option>
		  				<option>
		  				+256
		  				</option>
		  				<option>
		  				+257
		  				</option>
		  				<option>
		  				+258
		  				</option>
		  			</select>
        		<input type="phone" placeholder="+254*********">
       		</div>
       		<div>
       			<label>Message</label>
         		<textarea class="form-control" placeholder="Add Message"></textarea>
       		</div>
       		<div>
       			<input type="submit" name="submit">
       		</div>
       		</div>
		</form>
</body>
</html>
