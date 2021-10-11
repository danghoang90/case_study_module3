<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    	<title>Italian Restaurant</title>
    	<link rel="icon" href="images/logo.png">
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
	  	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">
    				<img src="images/logo.png" width="50" height="50" class="d-inline-block" alt=""> Italian Restaurant
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">


                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#Menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#List">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.formLogin')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.formRegister')}}">Register</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::check())
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Welcome">Welcome {{auth()->user()->name}}</a>
			      		</li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.logout')}}">Logout</a>
                        </li>
                        @endif
					    <li class="nav-item">
					    	<a href="#" class="language" rel="it-IT"><img src="images/italy.ico" class="flag" alt="Italiano"></a>
					    	<a href="index.blade.php" class="language" rel="en-En"><img src="images/english.ico" class="flag" alt="English"></a>
					    </li>
				    </ul>
				</div>
			</nav>
			<!--- End Navigation Bar -->
			<!--- Start Carousel -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img class="d-block w-100 img-fluid img-slider" src="https://afamilycdn.com/2019/12/1/photo-1575164080086-1575164080095165449684.png" alt="First slide">
				    	<div class="carousel-caption">
						    <h2>Welcome!</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="https://duyendangvietnam.net.vn/public/uploads/files/3(307).jpg" alt="Second slide">
				      	<div class="carousel-caption">
						    <h2>Traditional Italian Cuisine</h2>
							<p>...</p>
						</div>
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100 img-fluid img-slider" src="https://www.disneycooking.com/wp-content/uploads/2018/12/mon-khai-vi-dai-tiec.jpg" alt="Third slide">
				      	<div class="carousel-caption">
						    <h2>Selected Products</h2>
							<p>...</p>
						</div>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
			<!--- End of Carousel -->
			<!--- Restaurant-->

<!--		<div class="container">-->
<!--		 	<div class="row" id="Restaurant">-->
<!--	    		<div class="col navMenu">-->
<!--	     		 	<h2 class="text-center" >~ Restaurant ~</h2>-->
<!--	    		</div>-->
<!--  			</div>-->
<!--  			<div class="row bg-light" >-->
<!--  				<div class="col-md-6">-->
<!--  					<h3>Location</h3>-->
<!--  					<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>-->
<!--  					<h5>A Unique Experience</h5>-->
<!--  					<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>-->
<!--  				</div>-->
<!--  				<div class="col-md-6" data-aos="fade-up">-->
<!--  					<img class="img-fluid" src="images/location.jpg">-->
<!--  				</div>-->
<!--  			</div>-->
<!--  			<div class="row bg-light"><br></div>-->
<!--  			<div class="row bg-light">-->
<!--  				<div class="col-md-6 order-md-1 order-2" data-aos="fade-up">-->
<!--  					<img class="img-fluid " src="images/cuisine.jpg">-->
<!--  				</div>-->
<!--  				<div class="col-md-6 order-md-12 order-1">-->
<!--  					<h3>Cuisine</h3>-->
<!--  					<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>-->
<!--  					<h5>A Unique Experience</h5>-->
<!--  					<p>Thanks for stopping by. We are the last authentic Italian restaurant in Milan, serving delicious Italian cuisine cooked by the best chefs. It only takes a few minutes to browse through our website and check out our menu. We hope you'll soon join us for a superb Italian culinary experience.</p>-->
<!--  				</div>-->
<!--  			</div>-->
  			<!--- End of Restaurant -->
  			<!--- Start of Menu-->
			<div class="row" id="Menu">
				<div class="col navMenu">
	     		 	<h2 class="text-center" >~ Menu ~</h2>
				</div>
			</div>
        <div class="row bg-light">
            <div class="col-md-3" data-aos="slide-up">
                <div class="card view zoom">
                    <a href="#">
                        <img class="card-img-top img-fluid " src="https://vevietnamairline.com/Img.ashx?635784015234697176.jpg">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">~ Best Sell ~</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bocconcini di carne in nido di sfoglia</li>
                            <li class="list-group-item">Bruschette con maiale al curry</li>
                            <li class="list-group-item">Uova al prosciutto</li>
                            <li class="list-group-item">Vitello tonnato</li>
                            <li class="list-group-item">Fesa di tacchino marinata con olive</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="slide-up">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid " src="http://file.hstatic.net/200000301004/article/mon-ngon-tu-tom-bnafoods_d7dbda5764c84a58906b79769a0d5c30_1024x1024.jpg">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">~ Top View ~</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Carpaccio di polpo</li>
                            <li class="list-group-item">Cozze al verde</li>
                            <li class="list-group-item">Cocktail di gamberi</li>
                            <li class="list-group-item">Risotto alla crema di scampi</li>
                            <li class="list-group-item">Ravioli di pesce con crema di scampi</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="slide-up">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid" src="https://tapchinhabep.net/wp-content/uploads/2019/04/32416935-moscow-russia-october-6-2014-mcdonald-s-food-mcdonald-s-corporation-is-the-world-s-largest-chain-of--e1555923510899.jpg">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">~ Fast Food ~</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Parmigiana di melanzane</li>
                            <li class="list-group-item">Strudel con ricotta e spinaci</li>
                            <li class="list-group-item">Polpette di spinaci e ricotta</li>
                            <li class="list-group-item">Frittata di patate al forno</li>
                            <li class="list-group-item">Spaghetti con le polpettine vegetariane</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="slide-up">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid" src="data:image/jpeg;base64,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">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">~ discount ~</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Parmigiana di melanzane</li>
                            <li class="list-group-item">Strudel con ricotta e spinaci</li>
                            <li class="list-group-item">Polpette di spinaci e ricotta</li>
                            <li class="list-group-item">Frittata di patate al forno</li>
                            <li class="list-group-item">Spaghetti con le polpettine vegetariane</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
			<!--- End of Menu -->
        <!--- Start List -->
        <div class="row" id="List">
            <div class="col navMenu">
                <h2 class="text-center" >~ List ~</h2>
            </div>
        </div>
        <div class="search" >
            <form class="form-inline my-2 my-lg-0" >
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm đồ ăn">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="row bg-light">
            <div class="col-md-3" data-aos="slide-up">
                <div class="card">
                    <div class="card-header btn"  data-toggle="collapse" data-target="#noidungcard1" aria-expanded="true"
                         data-parent="#myaccordion">
                        Header của Card 1
                    </div>
                    <div class="card-body collapse show"  data-toggle="collapse"  aria-expanded="false" id="noidungcard1">
                        <img width="100%" src="https://camnang.bibomart.com.vn//wp-content/media/2019/11/fast_food.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
<!--			&lt;!&ndash;- Start of Reservation&ndash;&gt;-->
<!--			<div class="row" id="Reservation">-->
<!--				<div class="col navMenu">-->
<!--	     		 	<h2 class="text-center">~ Reservation ~</h2>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="row">-->
<!--				<div class=" col-lg-12 reserve-container" data-aos="fade-up">-->
<!--					<img class="img-fluid image-reserve" src="images/reserve.jpg">-->
<!--					<div class="reserve-text col-lg-12 ">-->
<!--						<h1 class="text-center">Timetables</h1>-->
<!--						<div class="row">-->
<!--							<div class="col-6">-->
<!--							   	<h2 class="text-center">Lunch</h2>-->
<!--							    <h5 class="text-center">12:00 - 15:00</h5>-->
<!--							</div>-->
<!--							<div class="col-6">-->
<!--							    <h2 class="text-center">Dinner</h2>-->
<!--							    <h5 class="text-center">19:30 - 23:30</h5>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<br>-->
<!--			<div class="row bg-light">-->
<!--				<div class="col">-->
<!--					<form>-->
<!--						<div class="form-row">-->
<!--						  	<div class="form-group col-6">-->
<!--						  		<h3>Reserve</h3>-->
<!--						  		<label for="inputDate"> Date</label>-->
<!--						  		<input type="date" class="form-control" id="inputDate" placeholder="Data gg/mm/aaaa">-->
<!--						  	</div>-->
<!--						  	<div class="form-group col-6">-->
<!--						  		<h3>Details</h3>-->
<!--						  		<label for="inputName"> Name</label>-->
<!--						  		<input type="text" class="form-control" id="inputName" placeholder="Name">-->
<!--						  	</div>-->
<!--						  	<div class="form-group col-6">-->
<!--						  		<label for="inputTime"> Timetables</label>-->
<!--						  		<input type="time" class="form-control" id="inputTime" placeholder="Timetables">-->
<!--						  	</div>-->
<!--						  	<div class="form-group col-6">-->
<!--						  		<label for="inputEmail"> Email</label>-->
<!--						  		<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
<!--						  	</div>-->
<!--						  	<div class="form-group col-6">-->
<!--						  		<label for="inputNumber"> Number of Guests</label>-->
<!--						  		<input type="number" class="form-control" id="inputNumber" placeholder="Number of Guests">-->
<!--						  	</div>-->
<!--						  	<div class="form-group col-6">-->
<!--						  		<label for="inputCel"> Phone</label>-->
<!--						  		<input type="tel" class="form-control" id="inputCel" placeholder="Phone">-->
<!--						  	</div>-->
<!--  							<div class="form-group col-12">-->
<!--  								<label for="inputComment"> Further requests</label>-->
<!--								<textarea class="form-control" rows="4" id="inputComment" placeholder="Further requests"></textarea>-->
<!--							</div>-->
<!--					 	</div>-->
<!--						<div class="row">-->
<!--					  		<div class="col-md-4 col-md-offset-4">-->
<!--					  			<button type="submit" class="btn btn-secondary btn-block">Reserve</button>-->
<!--					  		</div>-->
<!--					  	</div>-->
<!--					</form>-->
<!--				</div>-->
<!--			</div>-->
			<!--- End of Reserve -->
			<!--- Start of Our Location -->
<!--			<div class="row" id="OurLocation">-->
<!--				<div class="col navMenu">-->
<!--					<h2 class="text-center">~ Our Location ~</h2>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="row">-->
<!--				<div id="map" class="col-md-9 map"></div>-->
<!--				<div class="col-md-3">-->
<!--					<h3>Address:</h3>-->
<!--					<p>Viale Enrico Fermi, 20159 Milan, Mailand (Lombardia) </p>-->
<!--					<h3>Email:</h3>-->
<!--					<p>mail@example.com</p>-->
<!--				</div>-->
<!--			</div>-->
			<!--- End of Our Location -->
			<div class="row footer bg-light">
				<div class="col">
					<p class="text-center">Follow us: <a class="social-icon" href="https://www.facebook.com/rubiktechnologiesShpk/"><i class="fab fa-facebook"></i></a> <a class="social-icon" href="https://www.instagram.com/rubiktechnologies/"><i class="fab fa-instagram"></i></a></p>
				</div>
				<div class="col">
					<p class="text-center">Copyright &copy; 2021</p>
				</div>
				<div class="col">
					<p class="text-center">Powered by: <a href="https://rubik-technologies.com/">Hoang Long Quan</a></p>
				</div>
			</div>
		</div>
		<footer class="container">
			<div class= "row only-mobile">
				<div class="col-6">
					<a class="btn btn-primary btn-block text-center" href="tel:++390000000"><i class="fa fa-phone" aria-hidden="true"></i> Call</a>
				</div>
				<div class="col-6">
					<a class="btn btn-success btn-block text-center" href="https://api.whatsapp.com/send?phone=+390000000"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
				</div>
			</div>
		</footer>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/smooth-scroll.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script type="text/javascript" src="js/image-effect.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZjOV0KA68G2YAh-rn7I3qKqCQEh_Ja0&callback=myMap">
	    </script>
  	</body>
</html>
