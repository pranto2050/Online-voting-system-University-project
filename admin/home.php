<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
</head>
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a>
		   <li><a data-toggle="modal" href="#about"><i class="icon-exclamation-sign icon-large"></i>About</a></li>
		   <div class="modal hide fade" id="about">
	<div class="modal-header"> 
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <?php include('about.php') ?>
	  <div class="modal-footer_about">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
		<?php $result=mysqli_query($conn,"select * from users where User_id='$id_session'");
	$row=mysqli_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	<div id="element" class="hero-body">
	  <div class="thumbnail_team">
                <h2>Our Team Members</h2>
				<div class="team-container">
					<div class="team-member" data-toggle="modal" href="#member1">
						<img src="upload/default.jpg" alt="Team Member 1" class="team-photo" />
						<div class="team-info">
							<p><strong>Student ID:</strong> ST12345</p>
							<p><strong>Name:</strong> John Doe</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567890</p>
						</div>
					</div>
					<div class="team-member" data-toggle="modal" href="#member2">
						<img src="upload/default.jpg" alt="Team Member 2" class="team-photo" />
						<div class="team-info">
							<p><strong>Student ID:</strong> ST12346</p>
							<p><strong>Name:</strong> Jane Smith</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567891</p>
						</div>
					</div>
					<div class="team-member" data-toggle="modal" href="#member3">
						<img src="upload/default.jpg" alt="Team Member 3" class="team-photo" />
						<div class="team-info">
							<p><strong>Student ID:</strong> ST12347</p>
							<p><strong>Name:</strong> David Johnson</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567892</p>
						</div>
					</div>
					<div class="team-member" data-toggle="modal" href="#member4">
						<img src="upload/default.jpg" alt="Team Member 4" class="team-photo" />
						<div class="team-info">
							<p><strong>Student ID:</strong> ST12348</p>
							<p><strong>Name:</strong> Sarah Williams</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567893</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Team Member 1 Modal -->
			<div class="modal hide fade" id="member1">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>John Doe - Team Member Profile</h3>
				</div>
				<div class="modal-body">
					<div class="row-fluid">
						<div class="span4">
							<img src="upload/default.jpg" alt="John Doe" style="width: 100%; max-width: 200px; border-radius: 5px;">
						</div>
						<div class="span8">
							<h4>Personal Information</h4>
							<p><strong>Student ID:</strong> ST12345</p>
							<p><strong>Name:</strong> John Doe</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567890</p>
							<p><strong>Email:</strong> john.doe@example.com</p>
							<h4>Project Contribution</h4>
							<p>John was responsible for the backend development of the voting system. He implemented the database design, user authentication, and vote counting algorithms. His expertise in PHP and MySQL was crucial for the project's success.</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
				</div>
			</div>

			<!-- Team Member 2 Modal -->
			<div class="modal hide fade" id="member2">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>Jane Smith - Team Member Profile</h3>
				</div>
				<div class="modal-body">
					<div class="row-fluid">
						<div class="span4">
							<img src="upload/default.jpg" alt="Jane Smith" style="width: 100%; max-width: 200px; border-radius: 5px;">
						</div>
						<div class="span8">
							<h4>Personal Information</h4>
							<p><strong>Student ID:</strong> ST12346</p>
							<p><strong>Name:</strong> Jane Smith</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567891</p>
							<p><strong>Email:</strong> jane.smith@example.com</p>
							<h4>Project Contribution</h4>
							<p>Jane led the frontend development team, creating the user interface and ensuring a smooth user experience. She implemented responsive design principles and worked on the CSS styling. Her attention to detail made the application visually appealing and easy to use.</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
				</div>
			</div>

			<!-- Team Member 3 Modal -->
			<div class="modal hide fade" id="member3">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>David Johnson - Team Member Profile</h3>
				</div>
				<div class="modal-body">
					<div class="row-fluid">
						<div class="span4">
							<img src="upload/default.jpg" alt="David Johnson" style="width: 100%; max-width: 200px; border-radius: 5px;">
						</div>
						<div class="span8">
							<h4>Personal Information</h4>
							<p><strong>Student ID:</strong> ST12347</p>
							<p><strong>Name:</strong> David Johnson</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567892</p>
							<p><strong>Email:</strong> david.johnson@example.com</p>
							<h4>Project Contribution</h4>
							<p>David was the database administrator and security specialist for the project. He designed the database schema, implemented security measures, and ensured data integrity. His work on preventing SQL injection and securing user data was essential for the system's reliability.</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
				</div>
			</div>

			<!-- Team Member 4 Modal -->
			<div class="modal hide fade" id="member4">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>Sarah Williams - Team Member Profile</h3>
				</div>
				<div class="modal-body">
					<div class="row-fluid">
						<div class="span4">
							<img src="upload/default.jpg" alt="Sarah Williams" style="width: 100%; max-width: 200px; border-radius: 5px;">
						</div>
						<div class="span8">
							<h4>Personal Information</h4>
							<p><strong>Student ID:</strong> ST12348</p>
							<p><strong>Name:</strong> Sarah Williams</p>
							<p><strong>Department:</strong> Computer Science</p>
							<p><strong>Mobile:</strong> +1234567893</p>
							<p><strong>Email:</strong> sarah.williams@example.com</p>
							<h4>Project Contribution</h4>
							<p>Sarah was the project manager and quality assurance specialist. She coordinated the team's efforts, created the project timeline, and conducted thorough testing. Her organizational skills and attention to detail ensured the project was completed on time and met all requirements.</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
				</div>
			</div>
			
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</body>
</html>
