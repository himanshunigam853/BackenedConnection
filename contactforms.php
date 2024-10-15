<html>
<head>
<title>Apply Your Job</title>
<style>
	.main{
		height:690px;
		width:400px;
		border:2px solid black;
		background-color: #21AAED;
		margin:auto;
		margin-top:20px;
	}
	
	#formfill{
		margin:15px;
	}
	
	label{
		color:white;
	}
	
	input{
		margin-top:5px;
		height:30px;
		width:180px;
		border:1px solid black none;
		border-radius:7px;
		padding-left:10px;
	}
	
	select{
		margin-top:5px;
		width:190px;
		height:30px;
	}
	textarea{
		margin-top:5px;
	}
	
	sup{
		color:red;
	}
	
	button{
		height:35px;
		width:80px;
		border:2px solid none;
		border-radius:5px;
	}
	
	.btn1{
		background-color:green;
		color:white;
		font-size:bold;
	}
	
</style>

</head>
<body bgcolor="#DF9A2C">
	<div class="main">
		<!-- <p align="center">Fill the Jobform</p> -->
		<form id=formfill action="registration1.php" method="post">
			<label>Name<sup>*</sup></label><br>
			<input type="text" id="fname" name="fname" placeholder="First" required >	<input type="text" id="lname" name="lname" placeholder="Last" required><br><br>
			
			<label>Enter your Email<sup>*</sup></label><br>
			<input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
			
			<label>Password<sup>*</sup></label><br>
			<input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
			
			<label>Technology<sup>*</sup></label><br>
			<select id="technology" name="technology" placeholder="choose your technology" readonly>
				<option>--Select--</option>
				<option value="web developer">Web Developer</option>
				<option value="mern">MERN</option>
				<option value="software developer">Software Developer</option>
				<option value="android development">Android Development</option>
			</select><br><br>
			
			<label>Mobile Number</label><br>
			<input type="number" id="mobile" name=mobile placeholder="Enter your mobile"><br><br>
			
			<label>Experience</label><br>
			<select id="experience" name="experience">
				<option>--Select--</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select><br><br>
			
			<label>Upload your resume<sup>*</sup></label><br>
			<input type="file" id="resume" name="resume" required><br><br>
			
			<label>Message</label><br>
			<textarea id="message" name="message" rows="4" cols="30" placeholder="tell me your query"></textarea><br><br>
		
			<button type="submit" id="submit" class="btn1" >Submit</button>
			<button type="reset" id="reset" class="btn2">Reset</button>
		</form>
	</div>
</body>
</html>