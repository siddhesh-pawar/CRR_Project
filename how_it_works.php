<!DOCTYPE html>
<html lang="en-GB" class="no-js">

<head>
	<!-- CSS to include bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- css to include style.css -->
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<!-- required meta tags essential for seo and link sharing -->

	<!-- Enter a proper description for the page in the meta description tag -->
	<meta name="description" content="ENTER_PAGE_DESCRIPTION">

	<!-- Enter a keywords for the page in tag -->
	<meta name="Keywords" content="ENTER_KEYWORDS_HERE">

	<!-- Enter Page title -->
	<meta property="og:title" content="ENTER_PAGE_TITLE" />

	<!-- Enter Page URL -->
	<meta property="og:url" content="ENTER_PAGE_URL" />

	<!-- Enter page description -->
	<meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

	<!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
	<meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
	<meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta property="og:type" content="website" />

	<!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
	<link rel="icon" href="assets/images/f_logo_temp_mob.png">




	<title>Kriyata</title>


	<style>
		body {
			background-color: rgb(25, 29, 38);
			color: white;
		}

		html {
			scroll-behavior: smooth;
		}



		@font-face {
			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-display: swap;
		}

		#content {
			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-display: swap;
			margin-top: 100px;
			padding: 0px;
			text-align: center;
		}

		.banner {
			position: absolute;
			width: 100%;
			height: 105vh;
			overflow: hidden;
		}

		.banner video {
			position: absolute;

			left: 0;
			width: 100%;
			height: 90vh;
			object-fit: cover;
		}




		.banner h2 {
			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-display: swap;
			position: absolute;
			top: -6%;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			text-transform: uppercase;
			font-size: 15vw;
			text-align: center;
			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-weight: 800;
			line-height: 1em;
			color: #ffffff;
			background: rgba(0, 0, 0, 0.9);
			mix-blend-mode: multiply;
			margin: 0;


		}







		.bigimage {
			min-height: 90vh;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;

			background-position: relative;
			background-size: cover;
			background-repeat: no-repeat;
		}

		.header {
			padding: 0;
		}

		.header .row {
			padding-top: 20px;
		}

		.footer-top {
			padding: 12px 34px !important;
		}

		footer .row {
			padding-bottom: 0 !important;
		}

		.copyright {
			margin-bottom: 30px;
		}

		#section-how {
			background-image: url(assets/images/bg.jpg);
			padding: 0;
			background-size: cover;
			font-family: Oxanium-Regular;
			src: url(../fonts/Oxanium-Regular.ttf);
			font-display: swap;


		}

		#section-how h1 {
			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-display: swap;
		}

		#section-how h4,
		#section-how p {
			font-family: Oxanium-Regular;
			src: url(../fonts/Oxanium-Regular.ttf);
			font-display: swap;
		}

		#section-how img {

			padding: -1%;



		}

		#section-sites h1 {
			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-display: swap;
		}

		#section-sites h4,
		#section-sites p {
			font-family: Oxanium-Regular;
			src: url(../fonts/Oxanium-Regular.ttf);
			font-display: swap;
		}

		#section-sites {
			background-image: url(assets/images/bg1.jpg);
			padding: 0;
			background-size: cover;
			font-family: Oxanium-Regular;
			src: url(../fonts/Oxanium-Regular.ttf);
			font-display: swap;
		}

		#section-sites img {
			padding: -1%;
		}

		#section-gammes {
			background-image: url(assets/images/dark3.jpg);
			background-size: cover;
			background-attachment: fixed;
		}

		#container1 {
			position: absolute;
			margin: auto;
			width: 100vw;
			height: 50vh;
			top: 0;
			bottom: 0;

			filter: url(#threshold) blur(0.6px);
		}

		#text1,
		#text2 {
			color: #e7e7e7;
			position: absolute;
			width: 100%;
			display: inline-block;

			font-family: grind;
			src: url(../fonts/grind_demolished-webfont.woff2);
			font-display: swap;
			font-size: 180pt;

			text-align: center;

			user-select: none;
		}

		@media only screen and (max-width:1000px) {

			#text1,
			#text2 {
				top: 25%;
				color: #e7e7e7;
				position: absolute;
				width: 100%;
				display: inline-block;

				font-family: grind;
				src: url(../fonts/grind_demolished-webfont.woff2);
				font-display: swap;
				font-size: 100pt;

				text-align: center;

				user-select: none;

			}
		}

		@media only screen and (max-width:400px) {

			#text1,
			#text2 {
				top: 25%;
				color: #e7e7e7;
				position: absolute;
				width: 100%;
				display: inline-block;

				font-family: grind;
				src: url(../fonts/grind_demolished-webfont.woff2);
				font-display: swap;
				font-size: 50pt;

				text-align: center;

				user-select: none;

			}
		}

		@media only screen and (max-width:5000px) {
			.works {
				display: none;

			}
		}

		@media only screen and (max-width:1000px) {
			.works {
				display: block;
				font-size: 90vw;
				font-family: grind;
				src: url(../fonts/grind_demolished-webfont.woff2);
				font-display: swap;
			}
		}
	</style>

	<link rel='stylesheet' id='crustac-style-css' href='https://crustac.fr/wp-content/themes/crustac/style.css?ver=5.9.2' type='text/css' media='all' />

</head>

<body class="home page-template page-template-page-accueil page-template-page-accueil-php page page-id-1174 page-home page-accueil">
	<div class="main">
		<div class="d-none d-lg-block">
			<div class="container-fluid pl-0 pr-0 header fixed-top">
			</div>

		</div>

	</div>
	</div>

	</div>
	<div class="d-lg-none position-relative">
		<div class="mobile-header"></div>

	</div>

	<div class="d-none d-lg-block">
		<div class="header fixed-top"></div>
		<div id="content" class="container-fluid">
			<div class="banner">
				<video id="videobg" src="assets/images/foot2.mp4" muted loop autoplay></video>
				<h2>HOW <span>IT <span>WORKS</span></h2>
			</div>
			<div id="About_us">
				<!-- heading -->
				<div id="heading" class="bigimage">
					<div class="overlay">

					</div>


				</div>
			</div>
		</div>




		<div class="btn-menu ">
			<div class="handler only-mobile"><svg viewBox="0 0 39 262" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
					<path fill="#ffffff" d="M40,262V234.38c0-16.06-5.35-31.81-15.47-45.54l-9.06-12.3c-20.65-28-20.62-63.16.06-91.16l8.94-12.09C34.63,59.54,40,43.76,40,27.66V0" />
				</svg></div>

			</svg>
		</div>
	</div>


	<main>
		<!-- INTRO -->



		<!-- SAVOIR FAIRE -->
		<section id="section-how" class="onscroll fitscreen">
			<div class="layer back">

				<div class="rope sketch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.353896 285.75079" preserveAspectRatio="xMidYMid meet" version="1.1" id="svg-line3">
						<g id="layer-line3" transform="translate(-59.570075,-11.250221)">
							<path d="m 67.704466,11.250221 c 0,7.802563 -0.0677,41.833602 -0.0709,112.334479 0,3.13002 -1.45838,6.08541 -3.9452,7.99041 -5.04746,3.86557 -5.05037,10.19705 -0.007,14.0679 l 2.84506,2.18281 2.83845,2.17752 c 5.04243,3.87086 5.04243,10.19969 0,14.07054 l -2.83845,2.17753 -2.83924,2.18016 c -5.04137,3.86821 -5.04137,10.19969 0,14.0679 l 2.83924,2.18016 2.83845,2.18017 c 5.04243,3.86821 5.04243,10.19969 0,14.0679 -1.04934,0.80698 -1.66661,2.05581 -1.66661,3.37873 -0.0097,142.98409 0.04506,31.50701 0.04881,92.69455" id="path-line3" style="fill:none;stroke:#e20953;stroke-width:0.66145831" />
						</g>

					</svg>
				</div>
			</div>



			<div class="layer fore">
				<div class="centered-thin clear-after">
					<div class="half fitheight right left-pad-10">
						<div class="middle-holder">
							<div class="middle">
								<div class="title">
									<h4 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">KRIYATA</h4>
									<h1 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">USER
										REGISTRATION
										<br>
										</h2>
								</div>
								<p class="t-regular" style="color:rgb(255,255,255);font-size:20px;" , font-family="Oxanium-Regular">
									Create your account by filling the appropriate credentials.</span></a>
							</div>
						</div>
					</div>
				</div>


		</section>

		<!-- SITES DE PRODUCTION -->
		<section id="section-sites" class="onscroll fitscreen">
			<div class="layer back">
				<!-- <div class="half image fitheight-nextscreen right"></div> -->
				<div class="rope sketch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.353896 285.75079" preserveAspectRatio="xMidYMid meet" version="1.1" id="svg-line4">
						<g id="layer-line4" transform="translate(-59.570075,-11.250221)">
							<path d="m 67.704466,11.250221 c 0,7.802563 -0.0677,41.833602 -0.0709,112.334479 0,3.13002 -1.45838,6.08541 -3.9452,7.99041 -5.04746,3.86557 -5.05037,10.19705 -0.007,14.0679 l 2.84506,2.18281 2.83845,2.17752 c 5.04243,3.87086 5.04243,10.19969 0,14.07054 l -2.83845,2.17753 -2.83924,2.18016 c -5.04137,3.86821 -5.04137,10.19969 0,14.0679 l 2.83924,2.18016 2.83845,2.18017 c 5.04243,3.86821 5.04243,10.19969 0,14.0679 -1.04934,0.80698 -1.66661,2.05581 -1.66661,3.37873 -0.0097,142.98409 0.04506,31.50701 0.04881,92.69455 " id="path-line4" style="fill:none;stroke:#e20953;stroke-width:0.66145831" />

						</g>

					</svg>
				</div>



			</div>
			<div class="layer fore">
				<div class="centered-thin clear-after">
					<div class="half fitheight right-pad-10">
						<div class="middle-holder">
							<div class="middle">
								<div class="title">
									<h4 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">KRIYATA</h4>
									<h1 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">USER SIGN
										IN<br>
										</h2>
								</div>
								<p class="t-regular" style="color:rgb(255,255,255);font-size:20px;" , font-family="Oxanium-Regular">
									Sign in with the email-id and password used for registration.<br>
								</p> <a href="#" class="btn-outline blue blue-back-hover white-hover from-left"><span class="in">Find
										out more</span></a>
							</div>
						</div>
					</div>
				</div>


		</section>

		<section id="section-how" class="onscroll fitscreen">
			<div class="layer back">
				<!-- <div class="half image fitheight-nextscreen"></div> -->
				<div class="rope sketch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.353896 285.75079" preserveAspectRatio="xMidYMid meet" version="1.1" id="svg-line3">
						<g id="layer-line3" transform="translate(-59.570075,-11.250221)">
							<path d="m 67.704466,11.250221 c 0,7.802563 -0.0677,41.833602 -0.0709,112.334479 0,3.13002 -1.45838,6.08541 -3.9452,7.99041 -5.04746,3.86557 -5.05037,10.19705 -0.007,14.0679 l 2.84506,2.18281 2.83845,2.17752 c 5.04243,3.87086 5.04243,10.19969 0,14.07054 l -2.83845,2.17753 -2.83924,2.18016 c -5.04137,3.86821 -5.04137,10.19969 0,14.0679 l 2.83924,2.18016 2.83845,2.18017 c 5.04243,3.86821 5.04243,10.19969 0,14.0679 -1.04934,0.80698 -1.66661,2.05581 -1.66661,3.37873 -0.0097,142.98409 0.04506,31.50701 0.04881,92.69455" id="path-line3" style="fill:none;stroke:#e20953;stroke-width:0.66145831" />
						</g>

					</svg>
				</div>


			</div>




			<div class="layer fore">
				<div class="centered-thin clear-after">
					<div class="half fitheight right left-pad-10">
						<div class="middle-holder">
							<div class="middle">
								<div class="title">
									<h4 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">KRIYATA</h4>
									<h1 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">CREATE / JOIN
										EVENT <br></h2>
								</div>
								<p class="t-regular" style="color:rgb(255,255,255);font-size:20px;" , font-family="Oxanium-Regular">
									Create events or join tournaments in the live event</span></a>
							</div>
						</div>
					</div>
				</div>


		</section>

		<section id="section-sites" class="onscroll fitscreen">
			<div class="layer back">
				<!-- <div class="half image fitheight-nextscreen right"></div> -->
				<div class="rope sketch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.353896 285.75079" preserveAspectRatio="xMidYMid meet" version="1.1" id="svg-line4">
						<g id="layer-line4" transform="translate(-59.570075,-11.250221)">
							<path d="m 67.704466,11.250221 c 0,7.802563 -0.0677,41.833602 -0.0709,112.334479 0,3.13002 -1.45838,6.08541 -3.9452,7.99041 -5.04746,3.86557 -5.05037,10.19705 -0.007,14.0679 l 2.84506,2.18281 2.83845,2.17752 c 5.04243,3.87086 5.04243,10.19969 0,14.07054 l -2.83845,2.17753 -2.83924,2.18016 c -5.04137,3.86821 -5.04137,10.19969 0,14.0679 l 2.83924,2.18016 2.83845,2.18017 c 5.04243,3.86821 5.04243,10.19969 0,14.0679 -1.04934,0.80698 -1.66661,2.05581 -1.66661,3.37873 -0.0097,142.98409 0.04506,31.50701 0.04881,92.69455 " id="path-line4" style="fill:none;stroke:#e20953;stroke-width:0.66145831" />

						</g>

					</svg>
				</div>



			</div>
			<div class="layer fore">
				<div class="centered-thin clear-after">
					<div class="half fitheight right-pad-10">
						<div class="middle-holder">
							<div class="middle">
								<div class="title">
									<h4 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">KRIYATA</h4>
									<h1 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular">FIXTURES<br>
										</h2>
								</div>
								<p class="t-regular" style="color:rgb(255,255,255);font-size:20px;" , font-family="Oxanium-Regular">
									Automize fixtures for the tournaments with random creation of fixtures from dashboard<br>
								</p> <a href="#" class="btn-outline blue blue-back-hover white-hover from-left"><span class="in">Find
										out more</span></a>
							</div>
						</div>
					</div>
				</div>



		</section>
		<section id="section-how" class="onscroll fitscreen">

			<div class="layer back">

				<div class="rope sketch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.353896 285.75079" preserveAspectRatio="xMidYMid meet" version="1.1" id="svg-line3">
						<g id="layer-line3" transform="translate(-59.570075,-11.250221)">
							<path d="m 67.704466,11.250221 c 0,7.802563 -0.0677,41.833602 -0.0709,112.334479 0,3.13002 -1.45838,6.08541 -3.9452,7.99041 -5.04746,3.86557 -5.05037,10.19705 -0.007,14.0679 l 2.84506,2.18281 2.83845,2.17752 c 5.04243,3.87086 5.04243,10.19969 0,14.07054 l -2.83845,2.17753 -2.83924,2.18016 c -5.04137,3.86821 -5.04137,10.19969 0,14.0679 l 2.83924,2.18016 2.83845,2.18017 c 5.04243,3.86821 5.04243,10.19969 0,14.0679 -1.04934,0.80698 -1.66661,2.05581 -1.66661,3.37873 -0.0097,142.98409 0.04506,31.50701 0.04881,92.69455" id="path-line3" style="fill:none;stroke:#e20953;stroke-width:0.66145831" />
						</g>

					</svg>
				</div>


			</div>




			<div class="layer fore">
				<div class="centered-thin clear-after">
					<div class="half fitheight right left-pad-10">
						<div class="middle-holder">
							<div class="middle">
								<div class="title">
									<h4 style="color:rgb(255,255,255)" , font-family="Oxanium-Regular" , src="url(../fonts/Oxanium-Regular.ttf)">KRIYATA</h4>
									<h1 font face="Arial" style="color:rgb(255,255,255);" , font-family="Oxanium-Regular">PLAY<br></h2>
								</div>
								<p class="t-regular" style="color:rgb(255,255,255);font-size:20px;" , font-family="Oxanium-Regular">
									Play in your registered tournament</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>


		</section>


		<!-- GAMMES -->
		<section id="section-gammes" class="onscroll fitscreen dark dark-bg">

			<div class="layer mid">
				<div class="rope sketch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448.48401 1080.0042" preserveAspectRatio="xMidYMid meet" version="1.1" id="svg-line5" style="fill:none">
						<path d="m 225.5808,1.25 h -1.24501 v 17.77 c 0,41.1 10.656,110.44 46.135,141.29 22.456,19.52 54.439,35.23 99.531,35.23 73.696,0 81.169,-26.86 75.912,-47.67 -4.101,-16.22 -16.175,-29.11 -31.516,-35.8 -25.451,-11.12 -74.599,-19.87 -142.516,25.71 C 169.33279,206.6 53.825787,194.84 53.825787,194.84 3.4357875,189.44 -1.9752125,166.25 2.4907875,148.1 c 3.996,-16.22 15.9169995,-29.18 31.2049995,-35.93 1.121,-0.5 2.287,-0.99 3.506,-1.47 12.609,-5.01 26.249,-6.93 39.798,-6.13 l 0.482,0.03 c 27.615003,1.69 62.544003,15.11 86.456003,29.02 26.26,15.26 59.537,35.36 78.433,50.86 28.77,23.6 66.397,44.98 112.14,39.82 19.438,-2.2 32.871,-13.04 33.936,-24.34 1.873,-19.93 -19.837,-37.16 -39.644,-40.15 -19.709,-2.98 -50.323,-1.28 -90.203,20.24 -49.834,26.9 -93.891,38.83 -117.235,43.74 -14.829,3.11 -30.184,3.34 -44.923003,-0.2 -11.596,-2.77 -23.923,-7.9 -30.395,-17.36 -7.194,-10.5 -5.076,-19.63 -1.155,-26.13 3.985,-6.6 10.569,-11.18 17.877,-13.65 15.111,-5.1 49.171003,-12.58 86.828003,5.87 49.332,24.19 54.739,39.69 54.739,170.95002 l -0.094,736.73398" id="path-line5" style="stroke:#e20953;stroke-width:2.5" />
					</svg>
				</div>
				<div id="container1">
					<span id="text1"></span>
					<span id="text2"></span>
				</div>

				<svg id="filters">
					<defs>
						<filter id="threshold">
							<feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
													0 1 0 0 0
													0 0 1 0 0
													0 0 0 255 -140" />
						</filter>
					</defs>
				</svg>



			</div>


		</section>
		<div class="footer-top footer-bg third-footer-bg">

		</div>

		<!-- NEWS -->

		<!-- CONTACT -->

	</main>

	<script>
		const elts = {
			text1: document.getElementById("text1"),
			text2: document.getElementById("text2")
		};

		const texts = [
			"CREATE",
			"MANAGE",
			"PLAY",

		];

		const morphTime = 1;
		const cooldownTime = 0.5;

		let textIndex = texts.length - 1;
		let time = new Date();
		let morph = 0;
		let cooldown = cooldownTime;

		elts.text1.textContent = texts[textIndex % texts.length];
		elts.text2.textContent = texts[(textIndex + 1) % texts.length];

		function doMorph() {
			morph -= cooldown;
			cooldown = 0;

			let fraction = morph / morphTime;

			if (fraction > 1) {
				cooldown = cooldownTime;
				fraction = 1;
			}

			setMorph(fraction);
		}

		function setMorph(fraction) {
			elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
			elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

			fraction = 1 - fraction;
			elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
			elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

			elts.text1.textContent = texts[textIndex % texts.length];
			elts.text2.textContent = texts[(textIndex + 1) % texts.length];
		}

		function doCooldown() {
			morph = 0;

			elts.text2.style.filter = "";
			elts.text2.style.opacity = "100%";

			elts.text1.style.filter = "";
			elts.text1.style.opacity = "0%";
		}

		function animate() {
			requestAnimationFrame(animate);

			let newTime = new Date();
			let shouldIncrementIndex = cooldown > 0;
			let dt = (newTime - time) / 1000;
			time = newTime;

			cooldown -= dt;

			if (cooldown <= 0) {
				if (shouldIncrementIndex) {
					textIndex++;
				}

				doMorph();
			} else {
				doCooldown();
			}
		}

		animate();
	</script>




	</script>

	<script type='text/javascript' src='https://crustac.fr/wp-includes/js/jquery/jquery.js?ver=5.9.2' id='jquery-js'>
	</script>

	<script type='text/javascript' src='https://crustac.fr/wp-content/themes/crustac/js/slick.min.js?ver=5.9.2' id='slick-js'></script>
	<script type='text/javascript' src='https://crustac.fr/wp-content/themes/crustac/js/ms/ms_preload.js?ver=5.9.2' id='ms_preload-js'></script>
	<script type='text/javascript' src='https://crustac.fr/wp-content/themes/crustac/js/ms/ms_onscroll.js?ver=5.9.2' id='ms_onscroll-js'></script>
	<script type='text/javascript' src='https://crustac.fr/wp-content/themes/crustac/js/ms/ms_rollstring.js?ver=5.9.2' id='ms_rollstring-js'>
	</script>

	<script type='text/javascript' src='https://crustac.fr/wp-content/themes/crustac/js/functions.js?ver=5.9.2' id='functions-js'></script>
	<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=6Ld9VeMZAAAAAHixWPOlwCiWnb0u-6Oypf7BsptC&#038;ver=3.0' id='google-recaptcha-js'></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>



	<script>
		$(document).ready(function() {
			$(".header").load('template/header.php');
			$(".footer-top").load('template/footer.html');
			$(".mobile-header").load('template/mobile-header.html');

			$(window).on('scroll', function() {
				var scroll = $(window).scrollTop();
				if (scroll < 245) {


					$(".social-parent").fadeIn(1000)
					$(".header").fadeIn(500);

				} else {

					$(".social-parent").fadeOut(500)



				}
			});
		});
	</script>



</body>