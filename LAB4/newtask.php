<html>
	<head></head>
	<body>
	
		<?php
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$Gender="";
			$err_Gender="";
			$Hobbies="";
			$err_Hobbies="";
			$Bio="";
			$err_Bio="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["uname"])){
					$err_uname="Username is  Required";
				}
				else if(strlen($_POST["uname"])<8){
					$err_uname="*Username should be at least 6 characters";
				}
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["password"])){
					$err_password="*Password  is Required in this field";
				}
				else{
					$password=$_POST["password"];
				}
				if (!isset($_POST["Gender"])){
                    $err_gender=   "Select a gender  ";
                }
				else{
					if (isset($Gender) && $Gender=="Male"){
						$gender=$_POST["Gender"];
					}
					else{
						if (isset($Gender) && $Gender=="Female"){
							$Gender=$_POST["Gender"];
						}
				    }
				}
				if(empty($_POST["Hobbies"])){
                    $err_Hobbies="this field is required";
                        
                    }
                }
				else {
                    $Hobbies=$_POST["Hobbies"];
                }
				if(empty($_POST["Bio"])){
					$err_Bio="Enter a text ";
				}
				
				else{
					$bio=$_POST["Bio"];
				}
		?>
	
		<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
					<span><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
					<span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="<?php echo $Gender;?>" name="Gender">Male<input type="radio" value="<?php echo $Gender;?>" name="Gender">Female
					<span><?php echo $err_Gender;?></span></td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="<?php echo $hobbies;?>" name="Hobbies[]">Movies 
					     <input type="checkbox" value="<?php echo $Hobbies;?>" name="Hobbies[]">Music 
						 <input type="checkbox" value="<?php echo $Hobbies;?>" name="Hobbies[]">Games
						 <span><?php echo $err_Hobbies;?></span></td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea value="<?php echo $Bio;?>" name="Bio"></textarea>
					<span><?php echo $err_Bio;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
	</body>
</html>