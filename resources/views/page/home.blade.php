@extends('layouts.page')

@section('content')

    @include('inc.page.slider')


	<section id="" class="">
	    <div class="container margin-top margin-bottom">
		      <div class="row">
		        <div class="col-md-offset-2 col-md-8">
		          <div class="">
		            <h1 class="text-center font-bold">- About <span class="text-green">Us</span> -</h1>
		            <hr>
		            <p  class="text-center">We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
		          </div>
		        </div>
		      </div>

		      <div class="row wow fadeInUp padding">
		        <div class="col-md-6">
		          <img class="img-responsive" src="/images/about/{{$About->image}}" alt="" style="width: 100%;">
		        </div>

		        <div class="col-md-6">
		          <p>{{$About->about}}</p>
		          
		        </div>
		      </div>
	    </div>
	</section>

	<div class="clearfix"></div>

	  <!-- Parallax 1 -->
	  <section id="" class="parallax padding" style="background-image: url(/images/bg/bg-2.jpg); margin-top: 20px;">
	    <div class="container">
	      <div class="row padding">
	          <div class="padding  text-center">
	            <h1 class="wow bounceInDown font_bold text_white" data-wow-delay="0.5s">Details are the key for perfection</h1>
	            <h3 class="lead wow bounceInUp font_bold text_white" data-wow-delay="1s">We mix all detailed things together</h3>
	          </div>
	      </div>
	    </div>
	  </section>

	  <div class="clearfix"></div>
	  
	@include('inc.page.services')
	@include('inc.page.features')
	@include('inc.page.portfolio')
	@include('inc.page.thought')
	@include('inc.page.team')


	@include('inc.page.contact')

@endsection




