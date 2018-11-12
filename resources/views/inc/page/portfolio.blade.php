

<section class="portfolio_section" id="portfolio">

    <div class="text-center container">
        <h1 class="section_title"><span class="section_title_begain font_green">A</span>ll Of My <span class="section_title_begain font_green">W</span>orks</h1>
        <hr class="colorgraph">
    </div>

     <div class="container text-center py-3 hidden_small">
        <button class="btn btn-outline-primary filter-button btn-primary" data-filter="all">All</button>
        @foreach($CatagoryList as $Catagory)
            <button class="btn btn-outline-primary filter-button" data-filter="{{$Catagory->name}}">{{$Catagory->name}}</button>
        @endforeach
    </div>

    <div class="container">
      <div class="row">
        @foreach($Portfolios as $Portfolio)
        <div class="portfolio pb-2 col-md-4 col-sm-6 col-xs-12 filter {{$Portfolio->catagory->name}}">
            <div class="box21" style="overflow: hidden;">
                <img src="/images/portfolio/cover/{{$Portfolio->cover}}" alt="">
                <div class="box-content">
                    <h4 class="title">{{$Portfolio->title}}</h4>
                    <p class="description text-center">{{$Portfolio->description}}</p>
                    @if($Portfolio->link)
                    <a class="read-more" href="{{$Portfolio->link}}" target="_blank">Live Preview</a>
                    @else
                    {{link_to_route('Portfolio.show',"Screenshoots",[$Portfolio->id],['class'=>'read-more'])}}
                    @endif
                </div>
            </div>
        </div>
        @endforeach



        
    </div>
    </div>

</section>