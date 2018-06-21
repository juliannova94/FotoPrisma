<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuestros servicios</title>
	<link rel="stylesheet" href="{{asset('css/normalize1.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap1.min.css')}}'">
	<link rel="stylesheet" href="{{asset('css/font-awesome1.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style1.css')}}">
	<link rel="Shortcut Icon" type="image/x-icon" href="{{asset('assets/icons/shortcut-icon.ico')}}" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min1.js"><\/script>')</script>
	<script src="{{asset('js/modernizr1.js')}}"></script>
	<script src="{{asset('js/main1.js')}}"></script>
	<script src="{{asset('js/bootstrap.min1.js')}}"></script>
</head>
<body>
	<div class="page-container">
		<nav class="full-reset nav-phonestore">
           <div class="logo tittles-pages">
                FotoPrisma
           </div>
            <ul class="list-unstyled full-reset navigation-list">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="product.html">Productos</a></li>
                <li><a href="news.html">Noticias</a></li>
                <li><a href="services.html">Servicios</a></li>
                <li><a href="contact.html">Contactenos</a></li>
            </ul>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
    	</nav>
	    <div class="content-page">
		    <div class="hidden-xs content-carousel">
		    	<div id="carousel-phonestore" class="carousel slide" data-ride="carousel" style="margin-top:0;">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-phonestore" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-phonestore" data-slide-to="1"></li>
				    <li data-target="#carousel-phonestore" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="assets/img/slide 1.jpg" alt="">
				      <div class="carousel-caption">
				        <h2>Windows Phone</h2>
				      </div>
				    </div>
				    <div class="item">
				      <img src="assets/img/slide 2.jpg" alt="">
				      <div class="carousel-caption">
				        <h2>iPhone 5</h2>
				      </div>
				    </div>
				    <div class="item">
				      <img src="assets/img/slide 3.jpg" alt="">
				      <div class="carousel-caption">
				        <h2>Sony Xperia Z</h2>
				      </div>
				    </div>
				  </div>
				  <a class="left carousel-control" href="#carousel-phonestore" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-phonestore" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
		    </div>
		    <div class="visible-xs static-image-carousel">
		    	<img src="assets/img/image-carousel.jpg"  alt="" class="img-responsive">
		    </div>
		    <section id="prod-container section">
		    	<div class="container-fluid">
		    		<div class="row">
		    			<div class="col-xs-12 text-center">
		    				<p class="tittles-pages">Estudios fotograficos y productos</p>
		    			</div>
		    			<div class="col-xs-12">
		    				<div class="container">
			    				<ul class="nav nav-tabs" role="tablist" id="TabProducts">
								  <li class="active"><a href="#all-categories" role="tab" data-toggle="tab"><i class="fa fa-th"></i>&nbsp; Todos los servicios</a></li>
								  <li><a href="#smartphones" role="tab" data-toggle="tab">&nbsp; Estudios fotograficos</a></li>
								  <li><a href="#tablets" role="tab" data-toggle="tab"><i class="fa fa-tablet"></i>&nbsp; Productos</a></li>
								</ul>
								<div class="tab-content">
								  <!-- ===================================== Todas las categorias ============================================= -->
								  <div class="tab-pane active" id="all-categories">
								  	<p class="tittles-pages">Todos los productos</p>
								  	@yield('servicios')								  
								  	<div class="row"><!-- Paginacion productos -->
										<div class="col-xs-12 text-center">
									 		<ul class="pagination">
											  <li><a href="#">&laquo;</a></li>
											  <li class="active"><a href="#">1</a></li>
											  <li><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
								  </div>
								  <!-- ===================================== SmartPhones ============================================= -->
								  <div class="tab-pane" id="smartphones">
								  	<p class="tittles-pages">SmartPhones</p>
								  	<div class="row">
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-smartphone.png" alt="SmartPhone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">SmartPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-smartphone.png" alt="SmartPhone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">SmartPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-smartphone.png" alt="SmartPhone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">SmartPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-smartphone.png" alt="SmartPhone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">SmartPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  	</div>
									<div class="row"><!-- Paginacion smartphone -->
										<div class="col-xs-12 text-center">
									 		<ul class="pagination">
											  <li><a href="#">&laquo;</a></li>
											  <li class="active"><a href="#">1</a></li>
											  <li><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
								  </div>
								  <!-- ===================================== Tablets ============================================= -->
								  <div class="tab-pane" id="tablets">
								  	<p class="tittles-pages">Tablets</p>
								  	<div class="row">
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/tablet.png" alt="Tablet" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Tablet</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/tablet.png" alt="Tablet" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Tablet</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/tablet.png" alt="Tablet" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Tablet</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/tablet.png" alt="Tablet" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Tablet</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  	</div>
								  	<div class="row"><!-- Paginacion tablets -->
										<div class="col-xs-12 text-center">
									 		<ul class="pagination">
											  <li><a href="#">&laquo;</a></li>
											  <li class="active"><a href="#">1</a></li>
											  <li><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
								  </div>
								  <!-- ===================================== Android ============================================= -->
								  <div class="tab-pane" id="android">
								  	<p class="tittles-pages">Android</p>
								  	<div class="row">
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-android.png" alt="Android" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Android</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-android.png" alt="Android" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Android</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-android.png" alt="Android" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Android</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-android.png" alt="Android" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Android</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  	</div>
								  	<div class="row"><!-- Paginacion android -->
										<div class="col-xs-12 text-center">
									 		<ul class="pagination">
											  <li><a href="#">&laquo;</a></li>
											  <li class="active"><a href="#">1</a></li>
											  <li><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
								  </div>
								  <!-- ===================================== iOS ============================================= -->
								  <div class="tab-pane" id="iOS">
								  	<h2 class="tittles-pages">iOS</h2>
								  	<div class="row">
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-iOS.png" alt="iOS" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">iPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-iOS.png" alt="iOS" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">iPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-iOS.png" alt="iOS" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">iPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-iOS.png" alt="iOS" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">iPhone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  	</div>
								  	<div class="row"><!-- Paginacion iOS -->
										<div class="col-xs-12 text-center">
									 		<ul class="pagination">
											  <li><a href="#">&laquo;</a></li>
											  <li class="active"><a href="#">1</a></li>
											  <li><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
								  </div>
								  <!-- ===================================== Windows Phone ============================================= -->
								  <div class="tab-pane" id="windowsPhone">
								  	<p class="tittles-pages">Windows Phone</p>
								  	<div class="row">
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-windows.png" alt="Windows phone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Windows Phone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-windows.png" alt="Windows phone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Windows Phone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-windows.png" alt="Windows phone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Windows Phone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  		<div class="col-xs-12 col-sm-6 col-md-3">
								  			<div class="thumbnail thumbnail-content-phones">
										      <img src="assets/img/phone-windows.png" alt="Windows phone" class="img-responsive">
										      <div class="caption">
										        <h3 class=" text-center">Windows Phone</h3>
										        <p class="text-justify">
										        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione ad consectetur facere, alias deserunt consequatur.
										        </p>
										        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
										      </div>
										    </div>
								  		</div>
								  	</div>
								  	<div class="row"><!-- Paginacion Windows Phone -->
										<div class="col-xs-12 text-center">
									 		<ul class="pagination">
											  <li><a href="#">&laquo;</a></li>
											  <li class="active"><a href="#">1</a></li>
											  <li><a href="#">2</a></li>
											  <li><a href="#">3</a></li>
											  <li><a href="#">4</a></li>
											  <li><a href="#">5</a></li>
											  <li><a href="#">6</a></li>
											  <li><a href="#">7</a></li>
											  <li><a href="#">&raquo;</a></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>
		    				</div>
		    			</div>	
		    		</div>
		    	</div>
		    </section>
	    </div>
		<footer class="footer">
    		<div class="container-fluid">
    			<div class="col-xs-12 text-center">
    				<h3>Siguenos en</h3>
    				<ul class="list-unstyled list-social-icons">
    					<li >
    						<a href="#!">
                               <i class="fa fa-facebook" style="background-color: #3B5998;"></i> 
                            </a>
    					</li>
    					<li>
    						<a href="#!">
                                <i class="fa fa-google-plus" style="background-color: #DD4B39;"></i>
                            </a>
    					</li>
    					<li>
    						<a href="#!">
                                <i class="fa fa-twitter"  style="background-color: #56A3D9;"></i>
                            </a>
    					</li>
    					<li>
    						<a href="#!">
                                <i class="fa fa-youtube" style="background-color: #BF221F;"></i>
                            </a>
    					</li>
    				</ul>
    				<h4>PhoneStore &copy; 2016</h4>
    			</div>
    		</div>
    	</footer>
	</div>
	<script>
	  $(function () {
	    $('#TabProducts a:first').tab('show')
	  });
	  $('#TabProducts a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});
	</script>
</body>
</html>