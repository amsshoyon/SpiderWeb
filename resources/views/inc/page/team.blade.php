
<section id="" class="container">

      <div class="row">
        <div class="margin-top">
          <div class="col-md-offset-2 col-md-8">
            <h1 class="font-bold text-center">- Our <span class="text-green">Team</span> -</h1>
            <hr class="container">
          </div>
        </div>
      </div>


    <div class="row col-md-12 margin-bottom padding">

        @foreach ($Teams as $Team)
        <div class="col-md-3 col-sm-6">
            <div class="our-team box_shadow">
                <div class="pic">
                    <img src="/images/team/{{$Team->image}}" style="width: 100%; height:100%; ">
                </div>
                <div class="team-content">
                    <h3>{{$Team->name}}</h3>
                    <span class="post">{{$Team->designation}}</span>
                </div>
                <ul class="social">
                    <li><a href="{{$Team->fb_link}}" class="fa fa-facebook"></a></li>
                    <li><a href="{{$Team->twitter_link}}" class="fa fa-twitter"></a></li>
                    <li><a href="{{$Team->google_link}}" class="fa fa-google-plus"></a></li>
                    <li><a href="{{$Team->linkedin_link}}" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        @endforeach




        
    </div>


</section>



