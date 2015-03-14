<html>
	<head>
		<title>Studio D</title>


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
				<ul id="nav">
				  <li><a href="">About</a></li>
				  <li><a href="">Work</a></li>
				  <li><a href="">Process</a></li>
				  <li><a href="">Blog</a></li>
				  <li><a href="">Contact</a></li>
				</ul>
            </div>
         </div>
		</main>

		<section id="intermediate">
			<div id="overlay"></div>
			
		  <div class="container">
		  	<div class="content">
				<h1>Feathers</h1>

			<button class="btn btn-primary">Learn more</button>
	
		</section>

		<section id="secondary">
			
		  <div class="container">
		  	<div class="content">
				<h1>Work</h1>

				<ul>

					<li>

				       <article>

				       	<h3>The Blue</h3>
    
				       </article>

				    </li>

				    <li>

				       <article>

				       	<h3>The Red</h3>
    
				       </article>

				    </li>

				    <li>

				       <article>
                        <div id="overlay"></div>
				       	<h3>Writings</h3>
     
				       </article>

				    </li>
				</ul>

				
            </div>
		 <!--  	<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-width="1200"
     data-height="400">
                <img src="{{ asset('/images/img-one.jpg') }}">
                <img src="{{ asset('/images/img-two.jpg') }}">
                <img src="{{ asset('/images/img-three.jpg') }}">
                <img src="{{ asset('/images/img-four.jpg') }}">
                </div>
 -->
			
         </div>
		</section>

		<section id="tertiary">

		  <div class="container">
		  	<div class="content">

             <h1>The Nutshell</h1>

             <h4>"Knowledge is experience"</h4>
             <br>
             <br>
             <h3>The digital insdustry is my forte. Form design, to extensive development work, I try to dabble in all
             	<br>
             	aspects accross the digital spectrum. Simply because I enjoy looking at the potential something has and
             	<br> 
             	how we can experiment with it using new and creative technologies. Just check out some of my work!
             </h3>
             <div id="mugshot">



<!--              	<div id="overlay"> -->
             		<div id="DP">
             			
             		<div id="profile-picture"></div>
                 	
                 	<div class="paragraph">
             		<h3>Dylan Peti</h3>

             		<p>
           
             			Dylan has created outstanding photography installations,
             			developed and implemented branding  strategies for Remix 
             			magazine.
             			</p>
             		</div>



             		
             		</div>
             		<div id="skills">
             		<h1>Skills</h1>
             		<ul>
             		<li>Market Analysis</li>
                    <li>Marketing Strategy</li>
                    <li>Brand Development</li>
                    <li>Branding Structure/Guidelines</li>
                    <li>Brand Artwork Creation</li>
                    <li>Website Design and Development</li>
                    <li>Website Search Engine Optimisation</li>
                    <li>Web Analytics Setup</li>
                    <li>Sales Funnel Iterations/Testing</li>
             			
             		</ul>
             	</div>
             </div>


             </div>

		  	</div>
		  </div>


		</section>

		<section id="contact">
			<div class="container">
		  	<div class="content">
			<h1>Get in touch</h1>

			<form>
  <div class="form-group first">
   <input type="text" class="form-control" id="exampleInputName2" placeholder="First exampleInputName2">
  </div>
  <div class="form-group last">
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Last Name">
  </div>
  <textarea class="form-control" rows="3" placeholder="Message"></textarea>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
			


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
