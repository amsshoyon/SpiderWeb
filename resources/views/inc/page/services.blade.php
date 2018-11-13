
<section id="" class="well overflow">
<div class="container">
      <div class="row">
        <div class="margin-top">
          <div class="col-md-offset-2 col-md-8 text-center">
            <h1 class="font-bold">- We <span class="text-green">Serve</span> -</h1>
            <hr>
          </div>
        </div>
      </div>

      <div class="row padding margin-bottom">
        <div class="col-md-8 col-md-offset-2">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              @php
                $Service_item = 0;
              @endphp
              @foreach($Services as $Service)
              @php
                if ($Service_item == 0) {
                  $ServiceItem_active = 'active';
                }else{
                  $ServiceItem_active = '';
                }
              @endphp
                <div class="item {{$ServiceItem_active}}">
                  <div class="row">
                    <div class="col-sm-12 col-md-offset-1 col-md-6">
                      <div class="wow bounceInLeft">
                        <h3 class="font-bold">{{$Service->title}}</h3>
                        <p>{{$Service->description}}</p>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                      <div class="screenshot wow bounceInRight">
                        <img src="/images/services/{{$Service->image}}" class="img-responsive" alt="" style="width: 100%; max-height: 200px;" />
                      </div>
                    </div>
                  </div>
                </div>
                @php
                  $Service_item++;
                @endphp
              @endforeach

              

            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators ">
              @php
                $Service_count = 0;
              @endphp
              @foreach($Services as $Service)
              @php
                if ($Service_count == 0) {
                  $Service_active = 'active';
                }else{
                  $Service_active = '';
                }
              @endphp
                <li data-target="#carousel-service" data-slide-to="{{$Service_count}}" class="{{$Service_active}}"></li>
                @php
                  $Service_count++;
                @endphp
              @endforeach
            </ol>

          </div>
        </div>
      </div>

</div>
<div class="clearfix"></div>
</section>
<div class="clearfix"></div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#carousel-service").carousel();
    
});
</script>