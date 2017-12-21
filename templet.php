<?php
				$fonts="arial";
				$color="#F92672";

?>
<!Doctype html>
<html>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="css/templet.css"> -->
		<style type="text/css">
				*{
				margin: 0;
				padding: 0;
			}
			body{
				background: #efefef;
				overflow: hidden;
				font-family: <?php echo $fonts; ?>;
			}

			header{
				margin: 0% 10% 0% 10%;
				/*padding: 2% 0% 2% 0%;*/
				background: #272822;
				overflow: hidden;
				text-align: center;
				color: <?php echo $color; ?>;
			}
			.phpcoding{
				margin: 0% 10% 0% 10%;
				padding: 1% 10% 1% 10% ;
				width: 60%;
				border: 1px solid #bdbdbd;
				border-radius:5px;
				min-height: 500px;
				background: #FFFFFF;
				overflow: hidden;
			}
			.tab{
				margin: 2% 10%;
				border: 3px solid #efefef;
				border-radius: 5px;
				width: 50%;
			}
			.tab td{
				padding:5px;

			}
			.form{
				margin:5% 20% 5% 10%; 
				border:2px solid #bdbdbd;
				border-radius:5px;
			}
			.tab2 td{
				padding:5px 0;

			}
			input[type="text"],input[type="password"]{
				border: 1px solid #bdbdbd;
				border-radius:5px;
				width: 100%;
				min-height: 30px;
			}
			input[type="submit"]{
				cursor: pointer;
				width: 60px;
				height: 30px;
				border:1px solid #bdbdbd;
				border-radius:5px;
			}
			select{
				width: 150px;
				font-size: 25px;
			}
			footer{
				margin: 0% 10% 0% 10%;
				/*padding: 2% 0% 2% 0%;*/
				background: #272822;
				overflow: hidden;
				text-align: center;
				color:  <?php echo $color; ?>;
			}
		</style>
		
	</head>
	<body>
		<script >
			function sh(){

				var getName=document.myform.name.value;
				document.getElementById('showName').innerHTML=getName;

 				var getEmail=document.myform.email.value;
				document.getElementById('showEmail').innerHTML=getEmail;

				 var gender=document.myform.gender.value;
				 document.getElementById('showGender').innerHTML=gender;

				  // var dep=document.myform.dept.value;
				  // document.getElementById('showDept').innerHTML=dep;  

				  var deptLength=document.myform.dept.length;
				  for(i=0;i<deptLength;i++)
				  {
				  	var chechDept=document.myform.dept[i].checked;
				  	if(chechDept)
				  	{
				  		document.getElementById('showDept').innerHTML=document.myform.dept[i].value;
				  	}
				  }

				var index=document.myform.coder.selectedIndex;
				var coderValue=document.myform.coder.options[index].value;
				document.getElementById('showCoder').innerHTML=coderValue;

			};

		</script>
		<header>PHP fundemental coding </header>
		<div class="phpcoding">
			<?php
				echo "I love php";

			?>
			<div class="showAll">
				<table class="tab">
					<tr>
						<td colspan="2" align="center"> Output </td>
					</tr>
					<tr>
						<td>Name : </td>
						<td> <p id="showName"></p></td>
					</tr>
					<tr>
						<td>Email : </td>
						<td> <span id="showEmail"></span></td>
					</tr>
					<tr>
						<td>Gender : </td>
						<td> <span id="showGender"></span></td>
					</tr>
					<tr>
						<td>Department : </td>
						<td> <span id="showDept"></span></td>
					</tr>
					<tr>
						<td>Coder : </td>
						<td> <span id="showCoder"></span></td>
					</tr>
				</table>

			</div>
			<div class="form">
				<form method="post" name="myform" id="myform" onsubmit="sh(); return false;">

					<table class="tab2">
						<tbody>
							<tr>
								<td>Name : </td>
								<td><input name="name" type="text" placeholder="Enter your name "></td>
							</tr>
							<tr>
								<td>Email : </td>
								<td><input name="email" type="text" placeholder="Enter your email "></td>
							</tr>
							<tr>
								<td>Gender :   </td>
								<td>
									<input name="gender" type="radio" value="Male" />Male
									<input name="gender" type="radio" value="Female" />Female
								</td>
							</tr>
							<tr>
								<td>Department :   </td>
								<td>
									<input name="dept" type="checkbox" value="CSE" />CSE
									<input name="dept" type="checkbox" value="ETE" />ETE
									<input name="dept" type="checkbox" value="Math" />Math
									<input name="dept" type="checkbox" value="physics" />physics
								</td>
							</tr>
							<tr>
								<td>Coder :   </td>
								<td>
									<select name="coder" required="1">
										<option value="">Select one</option>
										<option value="Java">Java</option>
										<option value="PHP">PHP</option>
										<option value="C++">C++</option>

									</select>
								</td>
							</tr>
							<tr>
								<td>Password : </td>
								<td><input name="pass" type="password" placeholder="Chose a password "></td>
							</tr>
							<tr>
								<td> </td>
								<td><input name="submit" type="submit" value="Submit" ></td>
							</tr>
						</tbody>	
					</table>
				</form>

			</div>
		</div>
		
		<footer>Helal Uddin</footer>
	</body>
</html>