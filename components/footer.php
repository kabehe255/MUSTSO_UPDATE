<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">

    <style>
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #000 !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
#back-to-top-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999; 
}
    </style>
</head>
<body>
   
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="components/information.php"><i class="fa fa-angle-double-right"></i>President's Office</a></li>
						<li><a href="components/information.php"><i class="fa fa-angle-double-right"></i>Minister's office</a></li>
						<li><a href="components/information.php"><i class="fa fa-angle-double-right"></i>USRC Office</a></li>
						<li><a href="components/information.php"><i class="fa fa-angle-double-right"></i>Judiciary Office</a></li>
					
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#home" ><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#about"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="components/platform.php"><i class="fa fa-angle-double-right"></i>Platform</a></li>
						<li><a href="#team"><i class="fa fa-angle-double-right"></i>Team</a></li>
						<li><a href="#contact"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Why Platform</h5>
					<p class="  text-white-50">this is the best and the required improved technology
                         for the reporting the problems associated with the 
                    student at Mbeya University of Science and Technology</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a >MustsoUpdate.com</a></u> </p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2"  target="_blank">Group 5</a></p>
                    <button id="back-to-top-btn" class="btn  rounded-circle" style="background:orange"><i class="fas fa-arrow-up"></i></button>
				</div>
				</hr>
			</div>	
		</div>
	</section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Smooth scroll to top
    $('#back-to-top-btn').click(function(){
        $('html, body').animate({scrollTop : 0},200);
        return false;
    });
});
</script>
</body>
</html>