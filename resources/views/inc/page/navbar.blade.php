
 <header class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
			<div class="top-nav">
				<div class="container-fluid">
					<ul class="nav navbar-nav nav_social">

					    <li><a> Rajshahi University, Habibur Rahman Hall</a></li>
					    <li><a><span class=""><span class="fa fa-phone"></span> +880-1722-937278</a></li>
					    <li><a><span class=""><span class="fa fa-envelope"></span> amsshoyon@gmail.com</a></li>

					</ul>

					<ul class="nav navbar-nav pull-right">
						<li class="search">
							<input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
							<button type="submit" class="btn btn-primary btn-sm">Search</button>
						</li>
						<li><a href="" class="">About Us</a></li>
						<li><a href="">Contact Us</a></li> 

					</ul>


				</div>


			</div>
		</nav>
  <!-- down nav -->
 <nav class="navbar navbar-default navbar-static-top navbar-bottom" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="/">
      	<img class="img-responsive" src="images/logo/SpiderWeb_logo.png" alt="">
      </a>
    </div>
    <div class=" collapse navbar-collapse" id="navbar-collapse-1">

		<ul class="nav navbar-nav">

			<li class="{{Request::is('/') ? 'nav-active' : ''}}"><a href="/">Home</a></li>

			<li class="{{Request::is('About') ? 'nav-active' : ''}}"><a href="/About">About Us</a> </li>

			<li class="{{Request::is('Services') ? 'nav-active' : ''}}"><a href="/Services">Services</a></li>	

			<li class="{{Request::is('Works') ? 'nav-active' : ''}}"><a href="/Works">Works</a></li>

			<li class="order_now {{Request::is('OrderNow') ? 'nav-active' : ''}}"><a href="/OrderNow">Order Now</a></li>

			<li class="{{Request::is('ClientArea') ? 'nav-active' : ''}}"><a href="/ClientArea">Client Area</a></li>

			<li class="{{Request::is('Contact') ? 'nav-active' : ''}}"><a href="/Contact">Contact Us</a></li>
		</ul>

		<ul class="nav navbar-nav hidden-md pull-right cart-menu">
			
			
			@include('inc.page.nav_login')

		</ul>

    </div>


    </div>


  </nav>


</header> 


<script type="text/javascript">
	// toggle class scroll 
$(window).scroll(function() {
    if($(this).scrollTop() > 50)
    {
        $('.navbar-trans').addClass('afterscroll');
    } else
    {
        $('.navbar-trans').removeClass('afterscroll');
    }  

});
</script>

