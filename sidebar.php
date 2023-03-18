<div class="menus" id="menu">
			<ul>
		        <li>
		          <a href="dashboard.php" id="dashboard">
		          	<img src="pictures/add.png" class="pic">
					<span>Dashboard</span>
		          </a>
		        </li>
		        <li>
		          <a href="alumni_list.php" id="alumni">
		          	<img src="pictures/operational.png" class="pic">
					<span>Alumni</span>
		          </a>
		        </li>
		        <li>
		          <a href="programs.php" id="programs">
		          	<img src="pictures/drop.png" class="pic">
					<span>Programs</span>
		          </a>
		        </li>
		        <li>
		          <a href="gallery.php" id="gallery">
		          	<img src="pictures/disposed.png" class="pic">
					<span>Gallery</span>
		          </a>
		        </li>
		        <li>
		          <a href="events.php" id="events">
		          	<img src="pictures/fixed.png" class="pic">
					<span>Events</span>
		          </a>
		        </li>
		        <li>
		          <a href="jobs.php" id="jobs">
		          	<img src="pictures/fixed.png" class="pic">
					<span>Job Offers</span>
		          </a>
		        </li>
		        <li>
		          <a href="manage.php" id="manage">
		          	<img src="pictures/manage.png" class="pic">
					<span>Manage Account</span>
		          </a>
		        </li>        

		      </ul>
		</div>
<style type="text/css">
.menus{
	width: 290px;
	height: 100%;
	position: fixed;
	padding-top: 40px;
	background-image: linear-gradient(to bottom, black ,#2c2c54);

}

li{

	width: 100%;
}
.menus a{
	text-decoration: none;
	width:290px;
	padding: 7px 0 7px 0;
	color: white;
	font-size: 20px; 
	font-weight: bold;
	font-family:century gothic;
	align-items: center;
	display: flex;
}
.menus a:hover{
	background-color: lightgray;
	color: black;
	opacity: .5;
	transition: 0.8s ease;
}
.pic{
	width: 38px;
	height: 38px;
	margin-left: 20px;
}
@media screen and (max-width: 1600px) {
  
            .menus{
                width:250px;
            }
            .menus a, .sub li a{
            	width: 250px;
            	font-size: 15px;
            }
            .content{
            	margin-left: 255px;
            	padding: 15px;
            }
        }
</style>
	