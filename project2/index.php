<html>
<head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<title>Кофейный сайт</title>
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
	<body>
		<div id="preloader"></div>
		<header id="header">
			<a href="#" class="logotype">Daty's<i class='bx bx-coffee-togo'></i></a>

			<nav id="navbar">
				<a href="#home" class="nav-a">Главная</a>
				<a href="#about" class="nav-a">О нас</a>
				<a href="#menu" class="nav-a">Меню</a>
				<a href="#review" class="nav-a">отзывы</a>
			</nav>
			<a href="#book" class="btn">Резерв столика</a>
		</header>
		<!-- форма -->
		<div id="order-form">
			<form action="#home" method="POST">
				<div class="close-order-form"><a onclick="show('order-form');" style="color: #432; text-decoration: none;">&#10006;</a></div>
				<a href="#" class="logotype">Daty's<i class='bx bx-coffee-togo'></i></a>
				<h2>Начните прекрасный день с нами</h2>
				<input type="text" name="name" placeholder="Ваше ФИО" class="book-input" required>
				<input type="text"  name="num" placeholder='Ваш номер' class="book-input" required>
				<input type="text"  name="location" placeholder='Ваше местоположение' class="book-input" required>
				<input type="submit" id="button" class="book-input"  name="butt-order" value="Отправить">
				<div class="allert2">
					<?php require 'order.php';?>
				</div>
			</form>
		</div>
		<section id="home">
			<div id="box">
				<div id="content">
					<h3>Утро начинается <br/> с кофье!</h3>
					<p>Мы специализируемся на создании вкуснуго,<br/> свежего, насыщенного кофе.</p>
					<a onclick="show('order-form');" class="btn-1" style="cursor:pointer;">Заказать</a>
				</div>
				<div class="coffee-anim">
					<div id="cup-top"></div>
					<div id="cup-body"></div>
					<div id="cup-body-cover"><p>Daty's</p></div>
				</div>
			</div>
		</section>
		<section id="about">
			<div id="container" style="align-items: center;">
				<div id="cont-image" style="float: left;">
					<div id="img-ab"></div>
				</div>
				<div id="cont-text">
					<span>Почему именно мы?</span>
					<h4 id="title">Лучшее кофе в нашем городе</h4>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore,<br/> unde tenetur. In unde, officiis minus reprehenderit ullam explicabo. Quas<br/> harum aliquid corporis ipsam ipsum vel ea quo voluptates quibusdam porro!</p>
					<div id="icons-container">
						<div class="icons">
							<i class='bx bxs-coffee'></i>
							<h4>Лучшее кофе</h4>
						</div>
						<div class="icons">
							<i class='bx bxs-truck' ></i>
							<h4>бесплатная доставка</h4>
						</div>
						<div class="icons">
							<i class='bx bxs-briefcase' ></i>
							<h4>Работаем 24/7</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="menu">
			<div id="menu-cont">
				<div class="menu-title">
					<img src="img/heading-img.png">
					<h2>Популярное меню</h2>
				</div>
				<div id="menu-correct">
					<div class="menu-show">
						<div class="menu-img">
							<img src="img/menu-1.png"/>
						</div>
						<h2>Американо</h2>
					</div>
					<div class="menu-show">
						<div class="menu-img">
							<img src="img/menu-2.png"/>
						</div>
						<h2>Капучино</h2>
					</div>
					<div class="menu-show">
						<div class="menu-img">
							<img src="img/menu-3.png"/>
						</div>
						<h2>Латте</h2>
					</div>
					<div class="menu-show">
						<div class="menu-img">
							<img src="img/menu-4.png"/>
						</div>
						<h2>Моккачино</h2>
					</div>
					<div class="menu-show">
						<div class="menu-img">
							<img src="img/menu-5.png"/>
						</div>
						<h2>Черное коффе</h2>
					</div>
					<div class="menu-show">
						<div class="menu-img">
							<img src="img/menu-6.png"/>
						</div>
						<h2>Эспрессо</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="review">
			<div id="review-corr">
				<div id="rev-title">
					<h2>Отзывы клиентов</h2>
				</div>
				<div id="card-corrector">
					<div class="card">
						<div class="img-corr">
							<img src="img/pic-1.jpg">
							<div class="additional-message"><img src="img/message.png"></div>
						</div>
						<div class="content">
							<h2>Антон Птушкин</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
						</div>
					</div>
					<div class="card">
						<div class="img-corr">
							<img src="img/pic-2.jpg">
							<div class="additional-message"><img src="img/message.png"></div>
						</div>
						<div class="content">
							<h2>Ольга Бузова</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
						</div>
					</div>
					<div class="card">
						<div class="img-corr">
							<img src="img/pic-3.jpg">
							<div class="additional-message"><img src="img/message.png"></div>
						</div>
						<div class="content">
							<h2>Максим Галкин</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
						</div>
					</div>
					<div class="card">
						<div class="img-corr">
							<img src="img/pic-4.jpg">
							<div class="additional-message"><img src="img/message.png"></div>
						</div>
						<div class="content">
							<h2>Вера Брежнева</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="book" style="padding:100px 9%;">
			<div class="menu-title" style="font-size:26px;">
				<h2>Забронировать столик</h2>
			</div>
			<div id="book-container">
				<form action="#book" method="POST">
					<input type="text" name="name" placeholder="Ваше ФИО" class="book-input" required>
					<input type="text" name="email" placeholder="Ваш email" class="book-input" required>
					<input type="text"  name="num" placeholder='Ваш номер' class="book-input" required>
					<input type="datetime-local"  id="todaydate" class="book-input" required>
					<textarea placeholder="Дополнительная информация (необязательно)" id="add-text" style="max-width:500px; min-width:500px; min-height:100px; " name="text"  class="book-input" cols="30" rows="10"></textarea>
					<input type="submit" id="button" class="book-input"  name="butt" value="Отправить">
					<div class="allert">
						<?php require 'reservation.php';?>
					</div>
				</form>
			</div>
		</section>
		<section id="footer">
			<div id="social-media">
				<a href="#"><i class='bx bxl-instagram foot-corr' ></i></a>
				<a href="#"><i class='bx bxl-twitter foot-corr' ></i></a>
				<a href="#"><i class='bx bxl-facebook foot-corr' ></i></a>
				<a href="#"><i class='bx bxl-vk foot-corr' ></i></a>
			</div>
			<ul>
				<li><a href="#home" class="nav-a">Главная</a></li>
				<li><a href="#about" class="nav-a">О нас</a></li>
				<li><a href="#menu" class="nav-a">Меню</a></li>
				<li><a href="#review" class="nav-a">Отзывы</a></li>
			</ul>
			<p id="location">​Все права защищены <i class='bx bx-copyright' ></i></p>
		</section>
		<div id="hide">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5qap5aO4i9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5qap5aO4i9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5qap5aO4i9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5qap5aO4i9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<script>
			function show(elemId){
				var elem = document.getElementById(elemId);
				if(elem.style.display === "none"){
					elem.style.display = "block";
				}else{
					elem.style.display = "none";
				}
			}

			var loader = document.getElementById("preloader");
			window.addEventListener("load", function(){
				loader.style.display = "none";
			})
		</script>
</html>