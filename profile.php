<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>VIllO</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="w/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="w/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="w/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="w/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="w/css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="services" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="w/images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">

                <a class="navbar-brand" href="main.php"><img src="w/img/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                         <li><a class="nav-link active" href="main.php">Главная</a></li>
                        <li><a class="nav-link" href="about.php">О нас </a></li>
                        <li><a class="nav-link" href="profile.php">Профиль</a></li>
                       <li> <a href="vendor/logout.php" class="nav-link">Выход</a></li>
                    </ul>

                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="w/images/search_icon.png" alt="#" />
                    </a>

                </div>
            </div>
              
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
	  <div class="section inner_page_header">
 
	     <div class="container">
		    <div class="row">
              <div class="col-lg-12">
			     <div class="full">

				    <h3 >Профиль </br>

 <form>

                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
                                           <div class="full team_member_img text_align_center"> 
                                              <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
                                             <div class="social_icon_team">

                                             </div>                                          
                                           </div>
                                        </div>
                                    </div>
      
           <table width="100%" cellpadding="5" >
   <tr> 

    <td  width="5%" >ФИО:</td>
    <td  width="25%" > <h2><span class="theme_color"><?= $_SESSION['user']['fullname'] ?></span></h2></td>
   </tr>
    <tr> 

    <td  width="5%" >Номер группы:</td>
    <td  width="25%" >  <h2><span class="theme_color"><?= $_SESSION['user']['number_groupe'] ?></span></h2></td>
   </tr>
    <tr> 

    <td  width="5%" >Курс:</td>
    <td  width="25%" >       <h2><span class="theme_color"><?= $_SESSION['user']['grade'] ?></span></h2></td>
   </tr>
  </table>     
    </form></h3>
                
				 </div>
			  </div>
			</div>
		 </div>
	  </div>
    <!-- end Banner -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						
						   </div>
						   <div class="right">
						    <p class="small_tag"></p>
                            <h2><span class="theme_color">Вы можете </span>здесь найти все необходимые материалы </h2>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
		  <div class="row margin-top_30">
            
               <div class="col-sm-6 col-md-4" >
                 <div class="service_blog">
                    <div class="service_icons">
                       <img width="200" height="200" src="w/img/1.png" alt="#" >

                    </div>
                    <div class="full">
                       <h4><a class="theme_color" href="main.php">Расписание</a></h4>
                    </div>
                
                 </div>
               </div>
               
               <div class="col-sm-6 col-md-4">
                 <div class="service_blog">
                    <div class="service_icons">
                       <img width="200" height="200" src="w/img/2.png" alt="#">
                    </div>
                    <div class="full">
                        <h4><a class="theme_color" href="profile.php">Новости</a></h4>
                    </div>
                    
                 </div>
               </div>
                 <div class="col-sm-6 col-md-4">
                 <div class="service_blog">
                    <div class="service_icons">
                       <img width="200" height="200"  src="w/img/7.png" alt="#">
                    </div>
                    <div class="full">
                       <h4><a class="theme_color" href="profile.php">Дневник</a></h4>
                    </div>
                
                 </div>
               </div>
               
               <div class="col-sm-6 col-md-4">
                 <div class="service_blog">
                    <div class="service_icons">
                       <img width="200" height="200"  src="w/img/3.png" alt="#">
                    </div>
                    <div class="full">
                       <h4><a class="theme_color" href="profile.php">Друзья</a></h4>
                    </div>
                
                 </div>
               </div>
               
         
               <div class="col-sm-6 col-md-4">
                 <div class="service_blog">
                    <div class="service_icons">
                       <img width="200" height="200" src="w/img/5.png" alt="#">
                    </div>
                    <div class="full">
                       <h4><a class="theme_color" href="profile.php">Расписание Звонков</a></h4>
                    </div>
                    
                 </div>
               </div>
               
               <div class="col-sm-6 col-md-4">
                 <div class="service_blog">
                    <div class="service_icons">
                       <img width="200" height="200" src="w/img/6.png" alt="#">
                    </div>
                    <div class="full">
                       <h4><a class="theme_color" href="profile.php">Домашние задания</a></h4>
                    </div>
                    
                 </div>
               </div>
               			   
			   
			</div>
        </div>
    </div>
	<!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left white_fonts">
						   <div class="left">
						
						   </div>
						   <div class="right">
						    <h2>Текущий <span class="theme_color">Рейтинг в классе</h2>
							<p class="large">Успеваемость</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
		
			<div class="row margin-top_30 counter_section">
                           <div class="col-sm-12 col-md-4">
            <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="4" data-speed="1500"></h2>
       <p class="count-text">Средный Балл</p>
    </div>
            </div>
                       <div class="col-sm-12 col-md-4">
            <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="3" data-speed="1500"></h2>
       <p class="count-text">Количество 2</p>
    </div>
            </div>
			   <div class="col-sm-12 col-md-4">
	        <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="2" data-speed="1500"></h2>
       <p class="count-text">Количество 3</p>
    </div>
	        </div>
              <div class="col-sm-12 col-md-4">
               <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="15" data-speed="1500"></h2>
      <p class="count-text">Количество 4</p>
    </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="counter margin-top_30">
     
      <h2 class="timer count-title count-number" data-to="31" data-speed="1500"></h2>
      <p class="count-text">Количество 5</p>
    </div>
</div>
    <div class="full">
                        <a href="about.html" class="contact_bt">Подробнее ></a>
                    </div>
			</div>
		
        </div>
       
    </div>
	<!-- end section -->
    
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						  
						   </div>
						   <div class="right">
						    <p class="small_tag">ТУТ</p>
                            <h2><span class="theme_color">Вы можете </span>выбрать  другие направления</h2>
							<p class="large">и прочитать об этом по подробнее</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="w/images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <p>ВЕБ разработки, работа с нейроними сетями, роботатехника и т.д.  </p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <a href="about.html" class="hvr-radial-out button-theme">Подробнее ></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<!-- end section -->
	

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
               
               <div class="col-xl-6 white_fonts">
                    <div class="row">
                    <div class="col-md-12 white_fonts margin-bottom_30">
                       <h3>В можете связатся с нами </h3>
                    </div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="w/images/social1.png">
                            </div>
                            <div class="full white_fonts">
                                <p>г.Новосибирск
                                    <br>ул. Русская, 35</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="full icon">
                                <img src="w/images/social2.png">
                            </div>
                            <div class="full white_fonts">
                                <p>gen@ci.nsu.ru
                                   </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="full icon">
                                <img src="w/images/social3.png">
                            </div>
                            <div class="full white_fonts">
                                <p>+7(383)373-11-61</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                           <ul class="full social_icon margin-top_20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                 <div class="col-xl-6 white_fonts">
                    <div class="row">
                       <div class="col-md-6">
                         <div class="footer_blog footer_menu">
                            <h3>Меню</h3>
                            <ul> 
                              <li><a href="main.php">Главная</a></li>
                              <li><a href="about.php">О нас </a></li>
                              <li><a href="profile">Профиль</a></li>
                            
                            </ul>
                         </div>
                        
                       </div>
                       <div class="col-md-6">
                         <div class="footer_blog full">
                             <h3>Новостная рассылка</h3>
                             <div class="newsletter_form">
                                <form action="index.html">
                                   <input type="email" placeholder="Адрес эл.почты" name="#" required />
                                   <button>Отправить</button>
                                </form>
                             </div>
                         </div>
                       </div>
                    </div>
                 </div>

            </div>
            
        </div>
    </footer>
    <!-- End Footer -->



    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="w/js/jquery.min.js"></script>
	<script src="w/js/popper.min.js"></script>
    <script src="w/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="w/js/jquery.magnific-popup.min.js"></script>
    <script src="w/js/jquery.pogo-slider.min.js"></script>
    <script src="w/js/slider-index.js"></script>
    <script src="w/js/smoothscroll.js"></script>
    <script src="w/js/form-validator.min.js"></script>
    <script src="w/js/contact-form-script.js"></script>
    <script src="w/js/isotope.min.js"></script>
    <script src="w/js/w/images-loded.min.js"></script>
    <script src="w/js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>