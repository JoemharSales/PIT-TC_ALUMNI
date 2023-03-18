<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIT-TC ALUMNI</title>
	<link rel="icon" href="pictures/logo.png" type="image/x-icon">
</head>
<body>
<?php include "header.php" ?>
<div class="containerr">
<?php include "sidebar.php" ?>
<div class="contentt">
		<div class="eventtable">
			<div class="card-header">
							<b>List of Programs</b>
							<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="index.php?page=manage_event" id="new_event">
						<i class="fa fa-plus"></i> New Entry
					</a></span>
			</div>
		 </div>		
	</div>
</div>
</body>
</html>
<style>
*{
	margin: 0;
	padding: 0;
}
body{
	background-repeat: no-repeat;
    background-size: cover;
	background-color:lightgray;
	position: relative;
}
.containerr{
	width: 100%;
	padding: 90px 0;
	background-color: transparent;
	display: flex;

}
.contentt{
	width: 98%;
	border-radius: 5px;
	margin: 5px .5% 120px 295px;
	background-color:#833471;
	box-shadow: 5px 5px 10px 0 rgba(0,0,0.3),0 7px 21px 0 rgba(0,0,0,0.20);
	padding: 20px;
	display: flex;
	text-align: center;
	justify-content: center;

}
.eventtable{
	height: 700px;
	width: 90%;
	background-color: #ffffff;
}
#programs{
  transition: 0.5s;
  background: lightgray;
  color: black;
}
@media screen and (max-width: 1600px) {
            .contentt{
            	margin-left: 255px;
            	padding: 15px;
            }
        }
</style>