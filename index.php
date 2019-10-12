<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"></link>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script src="https://rawgit.com/r3plica/Scrollspy/master/scrollspy.js"></script>
		<link rel="stylesheet" href="assets/css/style.css"></link>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top" id="navbars">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-item" aria-expanded="true" aria-controls="navbar-item">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="assets/img/logo-juanda.png" alt="" class="nav-logo">
				</a>
				</div>
				<div id="navbar-item" class="navbar-collapse collapse" aria-expanded="true" style="">
				<ul class="nav navbar-nav navbar-right">
					<li class="w-medium active"><a href="#transsnowworld">Trans Snow World</a></li>
					<li class="w-medium"><a href="#internationalschool">International School</a></li>
					<li class="w-large"><a href="#onestoplivingsuperblock">One Stop Living Superblock</a></li>
					<li class="w-small"><a href="#locations">Locations</a></li>
					<li class="w-medium"><a href="#highclassfacilities">High Class Facilities</a></li>
					<li class="w-small"><a href="#typicalfloor">Typical Floor</a></li>
					<li class="w-small"><a href="#unitprice">Unit Price</a></li>
					<li class="w-small"><a href="#promo">Promo</a></li>
					<li class="w-small"><a href="#contact">Contact</a></li>
				</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
			<div id="home" class="page"> 
				<div class="home-container">
                    <h3>TRANSPARK JUANDA</h3>
                    <h4>THE NEW ICON OF BEKASI CITY</h4>
                    <h5>Supar Block dengan luas lahan 5,5 hectar</h5>
                </div>
			</div>
			<div id="transsnowworld" class="container-fluid page">
                <div class="part-1">
                    <div class="box-img">
                        <img class="img-100" src="assets/img/03 trans snow.jpg">
                    </div>
                    <div class="box-img">
                        <img class="img-100" src="assets/img/04 trans snow.jpg">
                    </div>
                    <div class="box-img">
                        <img class="img-100" src="assets/img/05 trans snow.jpg">
                    </div>
                </div>
                <div class="part-2">
                    <img class="img-100" src="assets/img/02 trans snow.jpg">
                </div>
                <div class="transsnowworld-title">
                    <h4>
                        THE FIRST INDOOR SNOW AREA<br>
                        IN INDONESIA
                    </h4>
                    <p>
                        Wahana Salju terbesar dan pertama di Indonesia<br>
                        yang menggunakan salju asli yang lembut<br>
                        banyak permainan di dalamnya yang bisa anda lakuakan
                    </p>
                </div>
            </div>
            <div id="internationalschool" class="page"> 
				<div class="left-container">
                    <h4>
                        INTERNATIONAL SCHOOL
                    </h4>
                    <h5>
                        OUR MAJOR
                    </h5>
                    <p>- Business Studies</p>
                    <p>- Digital Media Communication and Advertising</p>
                    <p>- Performing Arts Communication</p>
                    <p>- Mass Media Communication</p>
                    <p>- Entrepreneurship and Business Communication</p>
                    <p>- Hospitality Management Communication & MICE</p>
                </div>
				<div class="right-container">
                    <img src="assets/img/06 LSPR.jpg">
                </div>
            </div>
            <div id="home" class="page"> 
				<div class="home-container">
                    <h3>TRANSPARK JUANDA</h3>
                    <h4>THE NEW ICON OF BEKASI CITY</h4>
                    <h5>Supar Block dengan luas lahan 5,5 hectar</h5>
                </div>
            </div>
            <div id="home" class="page"> 
				<div class="home-container">
                    <h3>TRANSPARK JUANDA</h3>
                    <h4>THE NEW ICON OF BEKASI CITY</h4>
                    <h5>Supar Block dengan luas lahan 5,5 hectar</h5>
                </div>
			</div>
		<script>			
			$('#navbars').scrollspy({offset:"-50",animate: true,duration: 750})
			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
			$( ".btn-submit" ).on( "click", function() {
				sendMail();
			});
			function sendMail() {
				var name = document.getElementById('name').value
				var email = document.getElementById('email').value
				var phone = document.getElementById('phone').value
				var message = document.getElementById('message').value
				$.ajax({
					url: "/email.php",
					type: "post",
					data: {
						name: name,
						email: email,
						phone: phone,
						message: message
					},
					success: function() {
						alert('Your messages saved, we will call you later!')
						document.getElementById('name').value = ''
						document.getElementById('email').value = ''
						document.getElementById('phone').value = ''
						document.getElementById('message').value = ''
					}
				});
			}
		</script>
	</body>
</html>