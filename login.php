<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo '<script>alert("wrong username or password!")</script>';
			//echo "wrong username or password!";
		}else
		{
			echo '<script>alert("THE FIELDS CANNOT BE EMPTY!")</script>';
		}
	}

?>


<!DOCTYPE html>
<html>
<head><script src='https://cdn.tailwindcss.com/'></script>
	<title>Login</title>
</head>


	<style type="text/css">
	
	#text{

		height: 50px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	input{
        width: 40%;
        height: 10%;
        border: 1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px blue;
    }

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: 2px solid #f44336;
		display: inline-block;
	
	}
    #button:hover {
        background-color: #ff0000;
        color: white;
    }


	#box{
        
		background-color: black;
		margin: auto;
		width: 500px;
		padding: 80px;
	}

	</style>
	<body>
	
	<div class="flex-col justify-center flex gap-4 items-start py-12 bg-gradient-to-b from-gray-800 to-black">
    <div class="w-full mx-auto">
	<div  id="box">
		<center>

		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: white;">Login</div><br>

			<input id="text" type="text" name="user_name" placeholder="User_name"><br><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br><br>

			<input id="button" type="submit" value="Login"><br><br><br>
			

			<a href="signup.php" class="relative inline-block  w-auto px-7 py-2 mt-0 hover:bg-blue-600 rounded-md  font-medium leading-6 text-gray-50 transition duration-150 ease-out hover:text-gray-50 secondary_text link-editable editable">Click to Signup</a><br><br>
		</form></center>
	</div></div></div>
	
	
	<div class="bg-gradient-to-b from-black to-gray-800">
	<div class="max-w-7xl mx-auto relative text-gray-700 body-font">
	<div class="container flex flex-col flex-wrap items-center justify-between py-10 mx-auto md:flex-row">
		<marquee class="text-base text-white mb-2 secondary_text editable uppercase" behavior="scroll" direction="left">All AI TOOLS IN ONE is a website that provides all AI tools in one place so that the user can use all tools in one place instead of looking for different websites!</marquee>
	</div></div></div>
	
</body>
</html>



