<html>
	<head>
		<title>Laravel</title>


		<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script> <!-- 16 KB -->

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: block;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: block;
				margin: 0 auto;
			}

			.content {

				position: relative;
				top: 50%;
				margin-top: 122.5px;
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				
			}

			.quote {
				font-size: 24px;
			}
			#development{

				

			}
		</style>
	</head>
	<body>
		<main id="main">
		  <div class="container">
			<div class="content">
				<div class="title">Studio D</div>
				<div class="quote">an inspiring portfolio</div>
				<ul>
				  <li><a href="">Emergent Practices</a></li>
				  <li><a href="">Warped Photography</a></li>
				</ul>
				<a href="">GALLERY</a>

				<br>
				<br>
				<button class="btn btn-primary">Visit Portfolio</button>
            </div>
         </div>
		</main>

		<section id="intermediate">
			
		  <div class="container">
		  	<div class="content">
				<div class="title">What I do</div>
				<div class="quote">I'm glad you asked! I study Creative Technologies at AUT city campus in Auckland New 
					Zealand. <br > A degree that teaches a new way of looking at technology. Feel free to check out some of my work below!
                    <br>
                    <br>
                     As a secondary interest, I like to dabble in digital industry by <br> creating minimilistic, carefully crafted content for people. 
                     <br>
                     This includes: websites, online marketing and app ux. I'm a strong believer <br> in making your business reflect your online content.
				<br>
				<br>
				<button class="btn btn-primary">Find out more</button>
            </div>
	
		</section>

		<section id="secondary">
			
		  <div class="container">
		  	<div class="content">
				<div class="title" id="development">The Folio</div>

				<br>
				<br>
            </div>
		  	<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-width="1200"
     data-height="400">
                <img src="{{ asset('/images/img-one.jpg') }}">
                <img src="{{ asset('/images/img-two.jpg') }}">
                <img src="{{ asset('/images/img-three.jpg') }}">
                <img src="{{ asset('/images/img-four.jpg') }}">
                </div>

			
         </div>
		</section>
		<footer>
			<div class="container">
			<ul>
				<li><a href="">Back to Top</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			</div>
		</footer>


	</body>
</html>
