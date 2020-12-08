<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Blog</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href="{{url('/front/images/favicon.ico')}}" />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="{{url('/front/css/entypo.css')}}" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="{{url('/front/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- CSS3 Animate It Plugin Stylesheet -->
<link href="{{url('/front/css/plugins/css3-animate-it-plugin/animations.css')}}" rel="stylesheet">
<!-- /css3 animate it plugin stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="{{url('/front/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="{{url('/front/css/mouldifi-core.css')}}" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<!-- Bootstrap RTL stylesheet min version -->
<link href="{{url('/front/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
<!-- /bootstrap rtl stylesheet min version -->

<!-- Mouldifi RTL core stylesheet -->
<link href="{{url('/front/css/mouldifi-rtl-core.css')}}" rel="stylesheet">
<!-- /mouldifi rtl core stylesheet -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="{{url('/front/js/html5shiv.min.js')}}"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="{{url('/front/js/plugins/flot/excanvas.min.js')}}"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container sidebar-collapsed">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="{{url('/front/images/logo.png')}}" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="has-sub"><a href="index.html"><i class="icon-gauge"></i><span class="title"> داشبورد</span></a>
				<ul class="nav">
					<li><a href="index.html"><span class="title"> گوناگون</span></a></li>
					<li><a href="ecommerce-dashboard.html"><span class="title"> تجاری</span></a></li>
					<li><a href="news-dashboard.html"><span class="title"> پرتال خبر</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title"> طرح بندی</span></a>
				<ul class="nav collapse">
					<li><a href="collapsed-sidebar.html"><span class="title"> سایدبار جمع شده</span></a></li>
					<li><a href="fixed-sidebar.html"><span class="title"> سایدبار ثابت</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="panels.html"><i class="icon-newspaper"></i><span class="title"> عناصر رابط کاربری</span></a>
				<ul class="nav collapse">
					<li><a href="panels.html"><span class="title"> پنل ها</span></a></li>
					<li><a href="buttons.html"><span class="title"> دکمه ها</span></a></li>
					<li><a href="typography.html"><span class="title"> تایپوگرافی</span></a></li>
					<li><a href="tabs-accordions.html"><span class="title"> تب های  و آکاردئون</span></a></li>
					<li><a href="tooltips-popovers.html"><span class="title">تولتیپ</span></a></li>
					<li><a href="navbars.html"><span class="title"> ناوبری</span></a></li>
					<li><a href="breadcrumbs.html"><span class="title">Breadcrumbs</span></a></li>
					<li><a href="badges-label.html"><span class="title">بجت و برچسب</span></a></li>
					<li><a href="progress-bars.html"><span class="title">پروگرس بار</span></a></li>
					<li><a href="modals.html"><span class="title"> مدال ها</span></a></li>
					<li><a href="alerts.html"><span class="title"> هشدارها</span></a></li>
					<li><a href="pagination.html"><span class="title"> صفحه بندی</span></a></li>
					<li><a href="video.html"><span class="title"> ویدیو</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title"> جداول</span></a>
				<ul class="nav collapse">
					<li><a href="basic-tables.html"><span class="title"> جداول ساده</span></a></li>
					<li><a href="data-tables.html"><span class="title">Data Tables</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="form-basic.html"><i class="icon-doc-text"></i><span class="title"> فرم ها</span></a>
				<ul class="nav collapse">
					<li><a href="form-basic.html"><span class="title"> فرم ساده</span></a></li>
					<li><a href="form-advanced.html"><span class="title"> پلاگین های پیشرفته</span></a></li>
					<li><a href="form-wizard.html"><span class="title">Form Wizard</span></a></li>
					<li><a href="file-upload.html"><span class="title">File upload</span></a></li>
					<li><a href="editors.html"><span class="title"> ویرایشگر متن</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="graph-flot.html"><i class="icon-chart-bar"></i><span class="title">نمودارها</span></a>
				<ul class="nav collapse">
					<li><a href="graph-flot.html"><span class="title">نمودارهای فلوت</span></a></li>
					<li><a href="graph-morris.html"><span class="title">نمودارهای موریس</span></a></li>
					<li><a href="graph-peity.html"><span class="title">Peity Charts</span></a></li>
					<li><a href="graph-sparkline.html"><span class="title">نمودارهای Sparkline</span></a></li>
					<li><a href="graph-chartjs.html"><span class="title">ChartsJs</span></a></li>
					<li><a href="graph-chartist.html"><span class="title">Chartist</span></a></li>
					<li><a href="graph-c3.html"><span class="title">C3 Charts</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="mail-inbox.html"><i class="icon-mail"></i><span class="title">Mailbox</span></a>
				<ul class="nav collapse">
					<li><a href="mail-inbox.html"><span class="title"> اینباکس</span></a></li>
					<li><a href="mail-compose.html"><span class="title"> ارسال ایمیل</span></a></li>
					<li><a href="mail-read.html"><span class="title"> مشاهده همه</span></a></li>
				</ul>
			</li>
			<li><a href="maps-vector.html"><i class="icon-location"></i><span class="title">Vector Map</span> <span class="label label-secondary pull-right"> جدید</span></a></li>
			<li class="has-sub"><a href="login.html"><i class="icon-google-circles"></i><span class="title">صفحات مختلف</span></a>
				<ul class="nav collapse">
					<li><a href="login.html"><span class="title"> ورود</span></a></li>
					<li><a href="register.html"><span class="title"> ثبت نام</span></a></li>
					<li><a href="forgot-password.html"><span class="title"> فراموشی رمز عبور</span></a></li>
					<li><a href="lockscreen.html"><span class="title">Lockscreen</span></a></li>
					<li><a href="error-404.html"><span class="title"> خطای 404</span></a></li>
					<li><a href="blank-page.html"><span class="title"> صفحه خالی</span></a></li>
					<li><a href="comments.html"><span class="title"> نظرات</span></a></li>
				</ul>
			</li>
			<li class="has-sub active"><a href="blog.html"><i class="icon-docs"></i><span class="title"> صفحات بیشتر</span></a>
				<ul class="nav">
					<li class="active"><a href="blog.html"><span class="title"> وبلاگ</span></a></li>
					<li><a href="blog-detail.html"><span class="title">  صفحه داخلی بلاگ</span></a></li>
					<li><a href="timeline.html"><span class="title"> تایم لاین</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="icons-entypo.html"><i class="icon-thumbs-up"></i><span class="title"> آیکن ها</span></a>
				<ul class="nav collapse">
					<li><a href="icons-entypo.html"><span class="title">Entypo</span></a></li>
					<li><a href="icons-fontawesome.html"><span class="title">Font Awesome</span></a></li>
					<li><a href="icons-glyphicons.html"><span class="title">Glyph Icons</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="simple-view.html"><i class="icon-list"></i><span class="title">لیست ویو</span></a>
				<ul class="nav collapse">
					<li><a href="simple-view.html"><span class="title">Simple View</span></a></li>
					<li><a href="cards-view.html"><span class="title">Cards View</span></a></li>
					<li><a href="strip-view.html"><span class="title">Strip View</span></a></li>
					<li><a href="table-view.html"><span class="title">Table View</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="short-view.html"><i class="icon-popup"></i><span class="title">گرید ویو</span></a>
				<ul class="nav collapse">
					<li><a href="short-view.html"><span class="title">Short View</span></a></li>
					<li><a href="detailed-view.html"><span class="title">Detailed View</span></a></li>
					<li><a href="detailed-view-2.html"><span class="title">Detailed Action View</span></a></li>
				</ul>
			</li>
			<li class="has-sub"> 
				<a href="#/"><i class="icon-flow-tree"></i><span class="title"> منو چند سطحی</span></a> 
				<ul class="nav collapse"> 
					<li><a href="#/"><span class="title">سطح منو 1.1</span></a></li> 
					<li><a href="#/"><span class="title">سطح منو 1.2</span></a></li> 
					<li class="has-sub">
						<a href="#/"><span class="title">سطح منو 1.3</span></a> 
						<ul class="nav collapse"> 
							<li><a href="#/"><span class="title">سطح منو 2.1</span></a></li> 
							<li class="has-sub">
								<a href="#/"><span class="title">سطح منو 2.2</span></a>
								<ul class="nav collapse"> 
									<li class="has-sub"> 
										<a href="#/"><span class="title">سطح منو 3.1</span></a> 
										<ul class="nav collapse"> 
											<li><a href="#/"><span class="title">سطح منو 4.1</span></a></li> 
										</ul> 
									</li> 
									<li><a href="#/"><span class="title">سطح منو 3.2</span></a></li> 
								</ul>
							</li> 
							<li><a href="#/"><span class="title">سطح منو 2.3</span></a></li> 
						</ul> 
					</li> 
				</ul> 
			</li>
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
			<ul class="user-info pull-left">          
			  <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="{{url('/front/images/man-3.jpg')}}">علی احمدی <span class="caret"></span></a>
			  
				<!-- User action menu -->
				<ul class="dropdown-menu">
				  
				  <li><a href="#/"><i class="icon-user"></i>پروفایل من</a></li>
				  <li><a href="#/"><i class="icon-mail"></i> پیام ها</a></li>
				  <li><a href="#"><i class="icon-clipboard"></i> وظایف</a></li>
				  <li class="divider"></li>
				  <li><a href="#"><i class="icon-cog"></i> تنظیمات اکانت</a></li>
				  <li><a href="#"><i class="icon-logout"></i> خروج</a></li>
				</ul>
				<!-- /user action menu -->
				
			  </li>
			</ul>
			<!-- /user info -->
			
		  </div>
		  
		  <div class="col-sm-6 col-xs-5">
			<div class="pull-right">
				<!-- User alerts -->
				<ul class="user-info pull-left">
				
				  <!-- Notifications -->
				  <li class="notifications dropdown">
					<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
					<ul class="dropdown-menu pull-right">
						<li class="first">
							<div class="small"><a class="pull-right danger" href="#">علامت به عنوان خوانده شده</a> شما <strong>3</strong> اطلاعیه های جدید دارید.</div>
						</li>
						<li>
							<ul class="dropdown-list">
								<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong"> ثبت نام کاربر جدید</span><span class="block-line small">30 ثانیه قبل</span></a></li>
								<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">یک نفر این مطلب را پسندید</span><span class="block-line small">60 ثانیه قبل</span></a></li>
								<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">تنظیمات تغییر کرد</span><span class="block-line small">2 ساعت قبل</span></a></li>
								<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">یک نفر این مطلب را پسندید</span><span class="block-line small">60 ثانیه قبل</span></a></li>
								<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">یک نفر این مطلب را پسندید</span><span class="block-line small">60 ثانیه قبل</span></a></li>
								<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">یک نفر این مطلب را پسندید</span><span class="block-line small">60 ثانیه قبل</span></a></li>
							</ul>
						</li>
						<li class="external-last"> <a href="#" class="danger">مشاهده تمام اطلاعیه ها</a> </li>
					</ul>
				  </li>
				  <!-- /notifications -->
				  
				  <!--پیام ها -->
				  <li class="notifications dropdown">
					<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
					<ul class="dropdown-menu pull-right">
						<li class="first">
							<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i>پیام ها</div>
						</li>
						<li>
							<ul class="media-list">
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="{{url('/front/images/domnic-brown.png')}}"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">علی احمدی</span>
											<span class="media-annotation pull-right">Tue</span>
										</a>
										<span class="text-muted">پروژه شما برای تلفن های موبایل جالب است من دوست دارم این را بررسی کنم...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="{{url('/front/images/john-smith.png')}}"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">رضا حسینی</span>
											<span class="media-annotation pull-right">12:30</span>
										</a>
										<span class="text-muted">با تشکر از شما برای ارسال چنین محتوایی فوق العاده. نوشتن برجسته بود...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="{{url('/front/images/stella-johnson.png')}}"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">محمد محمدی</span>
											<span class="media-annotation pull-right">2 روز قبل</span>
										</a>
										<span class="text-muted">از شما متشکریم که به ما اعتماد کردید که منبع شما برای محصولات ورزشی با کیفیت بالا باشد...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="{{url('/front/images/alex-dolgove.png')}}"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">محمد نوری</span>
											<span class="media-annotation pull-right">10:45</span>
										</a>
										<span class="text-muted">پس از جلسه جمعه ما در مورد رابطه کسب و کار ما و چقدر خوش شانس بود...</span>
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="{{url('/front/images/domnic-brown.png')}}"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">علی احمدی</span>
											<span class="media-annotation pull-right">4:00</span>
										</a>
										<span class="text-muted">من می خواهم از این فرصت برای تشکر از شما برای همکاری شما در اخطار کامل استفاده کنید...</span>
									</div>
								</li>
							</ul>
						</li>
						<li class="external-last"> <a class="danger" href="#">تمام پیام ها</a> </li>
					</ul>
				  </li>
				  <!-- /messages -->
				  
				</ul>
				<!-- /user alerts -->
				
			</div>
		  </div>
		</div>
		<!-- /main header -->
		
		<!-- Main content -->
		<div class="main-content">
			<h1 class="page-title">صفحه وبلاگ</h1>
			
			<ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i> خانه</a></li> 
				<li><a href="login.html"> صفحات بیشتر</a></li> 
				<li class="active"><strong>صفحه وبلاگ</strong></li> 
			</ol>
			
			
			<div class="row">
				  <div class="col-md-8">
					  <div class="cards-box-view">
					  	<div class="animatedParent animateOnce z-index-50">
						   <div class="card animated fadeInUp">
		
								<!-- Card header -->
								<div class="card-header">
									 <div class="card-image">
										  <img class="img-responsive" src="{{url('/front/images/blog-3.jpg')}}" alt="post">
									 </div>
								</div>
								<!-- /card header -->
		
								<!-- Card content -->
								<div class="card-content">
									 <h3>بیایید دریابیم طبیعت کار می کند ...</h3>
									 <div class="meta-wrapper">
										  <span class="meta-date"><i class="icon-calendar"></i>25 بهمن 96</span>
										  <span class="meta-comment"><i class="icon-comment"></i>23نظر</span>
									 </div>
									 <p>این راز نیست که صنعت دیجیتال پررونق است. از ابتدای هیجان انگیز به مارک های جهانی، به سازمان های دیجیتال، پاسخ به فرصت های جدید در دسترس است. با این حال، این صنعت بیش از حد پر بود، با آژانس هایی که خدمات مشابهی را ارائه می دادند - حداقل در سطح. پروژه ها کلید استقرار است. پروژه های منحصر به فرد بهترین مکان برای نوآوری هستند، اما کار خلاقانه سودآور روی حیله و تزویر است. بنابراین، این مقاله به بررسی ...</p>
								</div>
								<!-- /card content -->
		
								<!-- Card footer -->
								<div class="card-footer">
									 <a class="right-arrow" href="#/">Continue Reading</a>
								</div>
								<!-- /card footer -->
		
						   </div>
						</div>
						<div class="animatedParent animateOnce z-index-49">
						   <div class="card animated fadeInUp">
		
								<!-- Card header -->
								<div class="card-header">
									 <div class="card-image">
										  <img class="img-responsive" src="{{url('/front/images/carpanter.jpg')}}" alt="post">
									 </div>
								</div>
								<!-- /card header -->
		
								<!-- Card content -->
								<div class="card-content">
									 <h3>5 DIYs برای شما در خانه امتحان کنید</h3>
									 <div class="meta-wrapper">
										  <span class="meta-date"><i class="icon-calendar"></i>25 بهمن 96</span>
										  <span class="meta-comment"><i class="icon-comment"></i>23نظر</span>
									 </div>
									 <p>این راز نیست که صنعت دیجیتال پررونق است. از ابتدای هیجان انگیز به مارک های جهانی، به سازمان های دیجیتال، پاسخ به فرصت های جدید در دسترس است. با این حال، این صنعت بیش از حد پر بود، با آژانس هایی که خدمات مشابهی را ارائه می دادند - حداقل در سطح. پروژه ها کلید استقرار است. پروژه های منحصر به فرد بهترین مکان برای نوآوری هستند، اما کار خلاقانه سودآور روی حیله و تزویر است. بنابراین، این مقاله به بررسی ...</p>
								</div>
								<!-- /card content -->
		
								<!-- Card footer -->
								<div class="card-footer">
									 <a class="right-arrow" href="#/">Continue Reading</a>
								</div>
								<!-- /card footer -->
		
						   </div>
						</div>
						<div class="animatedParent animateOnce z-index-48">
						   <div class="card animated fadeInUp">
		
								<!-- Card header -->
								<div class="card-header">
									 <div class="card-image">
										  <img class="img-responsive" src="{{url('/front/images/blog-6.jpg')}}" alt="post">
									 </div>
								</div>
								<!-- /card header -->
		
								<!-- Card content -->
								<div class="card-content">
									 <h3>طبیعت باعث می شود شما زنده بمانید</h3>
									 <div class="meta-wrapper">
										  <span class="meta-date"><i class="icon-calendar"></i>25 بهمن 96</span>
										  <span class="meta-comment"><i class="icon-comment"></i>23نظر</span>
									 </div>
									 <p>این راز نیست که صنعت دیجیتال پررونق است. از ابتدای هیجان انگیز به مارک های جهانی، به سازمان های دیجیتال، پاسخ به فرصت های جدید در دسترس است. با این حال، این صنعت بیش از حد پر بود، با آژانس هایی که خدمات مشابهی را ارائه می دادند - حداقل در سطح. پروژه ها کلید استقرار است. پروژه های منحصر به فرد بهترین مکان برای نوآوری هستند، اما کار خلاقانه سودآور روی حیله و تزویر است. بنابراین، این مقاله به بررسی ...</p>
								</div>
								<!-- /card content -->
		
								<!-- Card footer -->
								<div class="card-footer">
									 <a class="right-arrow" href="#/">Continue Reading</a>
								</div>
								<!-- /card footer -->
		
						   </div>
						</div>
						
					   <div class="pagination-block animatedParent animateOnce z-index-47">
							<ul class="pagination animated fadeInUp"> 
								<li><a href="#"><i class="icon-left-open-mini"></i></a></li>
								<li><a href="#">1</a></li> 
								<li class="active"><a href="#">2</a></li> 
								<li><a href="#">3</a></li> 
								<li class="disabled"><a href="#">4</a></li> 
								<li><a href="#">5</a></li> 
								<li><a href="#">6</a></li> 
								<li><a href="#"><i class="icon-right-open-mini"></i></a></li> 
							</ul> 
					   </div>
					   </div>
				  </div>
	
				  <div class="col-md-4">
					   <div class="cards-box-view sidebar">
					   	  <div class="animatedParent animateOnce z-index-46">
							<div class="card profile-intro text-center hoverable animated fadeInUp">
	
								 <!-- Card header -->
								 <div class="card-header">
									  <div class="card-image">
										   <img class="avatar-130 img-circle" src="{{url('/front/images/man-3.jpg')}}" alt="Team Member">
									  </div>
								 </div>
								 <!-- /card header -->
	
								 <!-- Card content -->
								 <div class="card-content">
									  <h3>محمد رضایی</h3>
									  <p>شما می توانید این متن را اینجا جایگزین کنید تا خود را به جهان معرفی کنید وای، این عالی نیست</p>
								 </div>
								 <!-- /card-content  -->
	
								 <!-- Card Footer  -->
								 <div class="card-footer">
									  <ul class="social-link">
									  	<li>
										   <a class="icon" href="#/" target="_blank">
												<i class="fa fa-facebook"></i>
										   </a>
										</li>
										<li>
										   <a class="icon" href="#/" target="_blank">
												<i class="fa fa-twitter"></i>
										   </a>
										</li>
										<li>
										   <a class="icon" href="#/" target="_blank">
												<i class="fa fa-linkedin"></i>
										   </a>
										</li>
									  </ul>
								 </div>
								 <!-- .card footer  -->
							</div>
						  </div>
						  <div class="animatedParent animateOnce z-index-45">
							<div class="card card-search hoverable animated fadeInUp">
								 <form class="search-form" role="search">
									   <div class="form-group">
											<input type="search" class="form-control input-lg no-border" placeholder="Search...">
											<button class="search-btn">
												 <i class="fa fa-search"></i>
											</button>
									   </div>
								 </form>
							</div>
						</div>
						<div class="animatedParent animateOnce z-index-44">
							<div class="card animated fadeInUp">
								<div class="card-content">
									 <h3 class="text-uppercase"> دسته بندی</h3>
		
									 <ul class="categories-list list-unstyled">
										  <li><a href="#/"> فناوری</a></li>
										  <li><a href="#/"> برند سازی</a></li>
										  <li><a href="#/"> ورزش</a></li>
										  <li class="active"><a href="#/"> داستان</a></li>
										  <li><a href="#/"> طراحی</a></li>
										  <li><a href="#/"> برنامه نویسی</a></li>
									 </ul>
								</div>
							</div>
						</div>
						<div class="animatedParent animateOnce z-index-43">
							<div class="card animated fadeInUp">
								<div class="card-content">
									 <h3 class="text-uppercase">مقالات پربازدید</h3>
		
									 <ul class="articles-list list-unstyled">
										  <li>
										  	<div class="thumb">
											   <a href="#/">
													<img class="img-responsive" src="{{url('/front/images/desserts.jpg')}}" alt="Articales Post">
											   </a>
											</div>
											   
											<p><a href="#/">دو بچه هوشمند که از طریق رایانه لوحی را می خوانند</a></p>
											<div class="meta-wrapper">
												 <span class="meta-date"><i class="zmdi zmdi-calendar-note zmdi-hc-lg"></i>25 بهمن 96</span>
											</div>
										  </li>
		
										  <li>
										  	<div class="thumb">
											   <a href="#/">
													<img class="img-responsive" src="{{url('/front/images/article-post.jpg')}}" alt="Articales Post">
											   </a>
											</div>
											<p><a href="#/">دو بچه هوشمند که از طریق رایانه لوحی را می خوانند</a></p>
											<div class="meta-wrapper">
												 <span class="meta-date"><i class="zmdi zmdi-calendar-note zmdi-hc-lg"></i>25 بهمن 96</span>
											</div>
										  </li>
		
										  <li>
										  	  <div class="thumb">
												   <a href="#/">
														<img class="img-responsive" src="{{url('/front/images/article-post-1.jpg')}}" alt="Articales Post">
												   </a>
												</div>
											   
												<p><a href="#/">دو بچه هوشمند که از طریق رایانه لوحی را می خوانند</a></p>
												<div class="meta-wrapper">
													 <span class="meta-date"><i class="zmdi zmdi-calendar-note zmdi-hc-lg"></i>25 بهمن 96</span>
												</div>
										  </li>
									 </ul>
								 </div>
							</div>
						  </div>
							
					   </div>
				  </div>
			 </div>
			 
			
			<!-- Footer -->
			<footer class="animatedParent animateOnce z-index-10"> 
				<div class="footer-main animated fadeInUp slow">&copy; 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> </div>
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="{{url('/front/js/jquery.min.js')}}"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="{{url('/front/js/plugins/css3-animate-it-plugin/css3-animate-it.js')}}"></script>
<script src="{{url('/front/js/bootstrap.min.js')}}"></script>
<script src="{{url('/front/js/plugins/metismenu/jquery.metisMenu.js')}}"></script>
<script src="{{url('/front/js/functions.js')}}"></script>
</body>
</html>