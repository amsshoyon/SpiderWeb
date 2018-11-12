<section class="slider" data-section="home">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@php
				$slider_count = 0;
			@endphp
			@foreach($Sliders as $Slider)
				<li data-target="#carousel-example-generic" data-slide-to="{{$slider_count}}"></li>
				@php
					$slider_count = $slider_count + 1;
				@endphp
			@endforeach
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			@php
				$slider_image = 0;
			@endphp
			@foreach($Sliders as $Slider)
				@php
					if ($slider_image == 0){
						$slider_active = 'active';
					}else{
						$slider_active = '';
					}
				@endphp
				<div class="item {{$slider_active}}">
					<img src="/images/slider/{{$Slider->image}}" alt="{{$Slider->title}}" style="max-height: 600px;">
				   <div class="carousel-caption">
						<div class="wow fadeInUp text-center" data-wow-offset="0" data-wow-delay="1.0s">								
							<h2>{{$Slider->title}}</h2>
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
							<p class=" text-center">{{$Slider->description}}</p>
						</div>
					</div>
				</div>
				@php
					$slider_image++;
				@endphp
			@endforeach

		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>