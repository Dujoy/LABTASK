<html
	<head></head> 
	<body>
		<?php
		    $name="";
			$err_name="";
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$phone="";
			$err_phone="";
			$email="";
			$err_email="";
			$hasError=false;
			
			$num = "My name is Tanvir";
			$s= strpos($num,"i");
			$t = strpos($num,"i",$s+1);
			
			$s= strpos($_POST["email"],"@");
			$t = strpos($_POST["email"],".",$s+1);
			
			$x= strpos($_POST["pass"],"#");
            $y= strpos($_POST["pass"],"?");

			
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
			//if(isset($_POST["submit"])){
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"]) < 6){
					$err_uname="*Username should be at least 6 characters";
					$hasError=true;
				}
				else if(strpos($_POST["uname"]," ")){
					$err_uname="*Space is not allowed";
                    $hasError=true;

				}
				else{
					$uname=htmlspecialchars($_POST["uname"]);
				}
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["pass"])){
					$err_password = "*Password Required";
					$hasError=true;
				}
				else if(strlen($_POST["pass"]) < 8){
					$err_password="*Password should be at least 8 characters";
					$hasError=true;
				}
				else if(ctype_upper($_POST["pass"])==true || ctype_lower($_POST["pass"])==true ){ 
					$err_password="*Characters should contain combination of uppercase and lowercase";
					$hasError=true;
				}
				else if($x==null && $y==null){ 
					$err_password="*Characters should contain 1 special character eg.# or ?";
					$hasError=true;
				}
				else{
					$password=$_POST["pass"];
				}
				if(!$hasError){
					echo "Username: $uname";
				}
				if(empty($_POST["phone"])){
					$err_phone="*Phone number required";
					$hasError=true;
				}
				else if(!is_numeric($_POST["phone"])){
					$err_phone="*Only numerical value is accepted";
					$hasError=true;
				}
				else{
					$phone=htmlspecialchars($_POST["phone"]);
				}
				if(empty($_POST["email"])){
					$err_email="*Email address required";
					$hasError=true;
				}
				else if(!strpos($_POST["email"],"@")){
					$err_email="*Characters must contain @";
                    $hasError=true;

				}
				else if(!strpos($_POST["email"],".",$s+1)){
					$err_email="*Characters must contain atleast 1 dot after @";
                    $hasError=true;

				}
				else{
					$email=htmlspecialchars($_POST["email"]);
				}
					
				
			//
				/*echo "Name: ". $_POST["uname"]."<br>";
				echo "Password: ". $_POST["pass"]."<br>";
				echo "Gender: ".$_POST["gender"]."<br>";
				echo "Profession: ".$_POST["profession"]."<br>";
				echo "Bio: ".$_POST["bio"]."<br>";
				$var = $_POST["hobbies"];
				for($i=0;$i<count($var);$i++){
					echo $var[$i]."<br>";
				}*/
			}
			
		?>
	<!-- <table border="1" >
		   <tr>
				 <th>Name</th>
				 <th>Id</th>
				 <th>Cgpa</th>
		   </tr>
		   <tr>
				 <td>Tanvir</td>
				 <td>123</td>
				 <td>2.4</td>
		   </tr>
			<tr>
				 <td>Sabbir</td>
				 <td>125</td>
				 <td>3.5</td>
		   </tr>	
		</table>
	-->
		<fieldset>
			<legend><h1>Club Member Registration</h1></legend>
			<form action="" method="post">
				<table>
					<!--<tr>
						<td rowspan="2"><span>User access </span></td>
						<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
					</tr>-->
					
					<!--<tr>
						<td><span>Name  </span></td>             
						<td>: <input type="text"></td>
					</tr> -->
					
					<tr>
						<td><span> Name</span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					<tr>
						<td><span> Username</span></td> 
						<td>: <input type="text" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					
					
					
				
					<tr>
						<!--<td ><span>Password </span></td>-->
						<td>Password</td>
						<td>: <input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
					</tr>
					
					<tr>
						<td> Confirm Password </td>
						<td>: <input type="password" name=""></td>
						
					</tr>
					
					<tr>
						<td> Email</td>
						<td>: <input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
						
					</tr>
					
					<tr>
						<td> Phone</td>
						<td>: <input type="text" placeholder="code" value="<?php echo $phone;?>" name="phone">
						<span><?php echo $err_phone;?></span></td>
						<td>- <input type="text" placeholder="Number" value="<?php echo $phone;?>" name="phone" > <span><?php echo $err_phone;?></span></td>
					</tr>
					
					<tr>
						<td> Address</td>
						<td>: <input type="text" placeholder="Street Address"></td>
						
					</tr>
					
					<tr>
					<td> </td>
					<td> <input type="text" placeholder="City"></td> 
											<td>- <input type="text" placeholder="State"></td>
                     </tr>
					 
					 <tr>
					<td> </td>
					<td> <input type="text" placeholder="Postal/Zip Code"></td> 
                     </tr>
					 
					 
					 <tr>
						<td>Birth Date</td>
						<td>:
							<select>
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select>
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select>
								<option>Year</option>
								
								<?php
									for($i=1950;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							
						</td>
					</tr>
					
					<tr>
						<td><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					</tr>
					<tr>
						<td><span>Where did you hear <br> about us?</span></td>
						<td>
						<input type="checkbox" value="A Friend or Colleague" name="hobbies[]">A Friend or Colleague <br>
						<input type="checkbox" value="Google" name="hobbies[]">Google <br>
						<input type="checkbox" value="Blog Post" name="hobbies[]">Blog Post<br>
						<input type="checkbox" value="News Article" name="hobbies[]">News Article
							 
						</td>

					</tr>
					<!--<tr>
						<td><span>Profession </span></td>
						<td>:
							<select name="profession">
								<option>Teaching</option>
								<option>Business</option>
								<option>Service</option>
							</select> 
						</td>
					</tr>-->
					
					<tr>
						<td><span>Bio </span></td>
						<td>  :<textarea name="bio"></textarea></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="register"></td>
					</tr>
					
				</table> 
				
			</form>
		</fieldset>
	</body>
</html>