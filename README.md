# GRAB A BITE
# Gazebo Pickup Website
#### Basic idea and Key objective
* ##### Basic idea
	* To provide web interface for our college's cafeteria **Gazebo** to avoid the commotion during the lunch breaks where student's willing to have their lunch in gazebo must have to wait in a long queue to get their orders done and at times they might endup without having their lunch since they'll have to rush to their classes.
	* So, providing them with a website which allows them to order the food whenever they are inside the campus allows them them to get their order done and also students can have their lunch on time without standing in the queue and waiting for their food to get done.
* ##### Key Objective.
	* ##### Social Problem
		* Considering this pandemic situation, this web interface helps us to avoid contact of students and encourage social distancing.
		* This also introduces the new system to be followed in Gazebo which helps the students to have their lunch and snacks on time.
# Tools and Programming languges used
#### Front end 
* #### *Hyper Text Mark-up Language(HTML)*
	* This front-end client side language has so many attributes that makes a website
	* This describes the structure of a Web page
	* It consists of a series of elements
	* It's elements tell the browser how to display the content
* #### *Cascading Style Sheets and Java Script(CSS AND JS)*
	* HTML supports CSS and Java Script which makes the page look beautiful and colorful.
	* CSS plays a major role in attracting the user of the website.
	* Java Script helps the eveloper in spliting the codes into modules and using the code elsewher in the website.
* #### *Hypertext Preprocessor(PHP)*
	* Php is the best server side language which always runs on the host server.
	* Php is Object oriented language and can be used along with html.
#### Back-end
* *Mysqli*
	* This helps us collect the information of the users their id and password and store them in one place
#### Gist of the possible codes that can be used
### Connecting the sql and Html page
	<?php
	$servername = "localhost";// local host along with port number
	$username = "username";// username of your mysqli
	$password = "password";// password for the user of mysqli

	// Create connection
	$conn = new mysqli($servername, $username, $password);//oject oriented declaration
	
	// Check connection
	if ($conn->connect_error) {// Boolean value
 	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	?>
Saving the above mentioned code in a php file can help us use the code whenever needed
### Main structure of the code for login page(Without any styles)
	<html>
		<body>
		<form>
			ID:<input type="text" name="id"><br>
			Password:<input type="password" name="password"><br>
			<input type="submit" name="login">
		</form>
		</body>
	</html>
### Sample code to store the data in sql
	$sql="insert into table_name values('name','password')
### Database
###### A database (.sql) file is attached with the repository which can be importred in the Xampp server which runs in the localhost enables you to use this project and access all the pages without any problem
# Result 
This project will result in building a webiste which allows all students to get their snack and lunch done in the gazebo on time without any rush and commotion thereby encouraging the social distancing.
		
