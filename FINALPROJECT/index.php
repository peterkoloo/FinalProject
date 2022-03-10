<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
  <div class="row">
		<div class="col-7">
			<h4>eTender</h4>
			<p>With over 2,000 Tenders listed, get access to all the latest tenders in Kenya 
				and easily filter by Category and Location. Simplify your tender acquisition
				 process and grow your business today</p>
				 <img src="img/tender3.jpeg" alt="tender image">
		</div>
		<div class="col-5">
		<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
		</div>
	</div>
  </div>
  <div class="container">
	  <div class="row">
		  <div class="col-4">
			  <p>Tenders Archives</p>
			  <a href="#1"><img src="img/tender.jpeg" alt="tender image"></a>
		  </div>
		  <div class="col-4">
			  <p>Tenders Status</p>
			  <a href="#2"><img src="img/tender1.jpeg" alt="tender image"></a>
		  </div>
		  <div class="col-4">
			  <p>Cancelled Tenders</p>
			  <a href="#3"><img src="img/tender2.jpeg" alt="tender image"></a>
		  </div>
	  </div>
	  <footer>
		  <div>
			  <p>Table of working hours</p>
		  </div>
	  </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>