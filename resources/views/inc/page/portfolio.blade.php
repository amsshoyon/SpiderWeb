<section class="portfolio_section" id="portfolio">

    <div class="text-center container">
        <h1 class="section_title"><span class="section_title_begain font_green">A</span>ll Of My <span class="section_title_begain font_green">W</span>orks</h1>
        <hr class="colorgraph">
    </div>

    <div class="text-center" id="myBtnContainer">
      <button class="btn portfolio_btn active" onclick="filterSelection('all')"> Show all</button>
        @foreach($CatagoryList as $Catagory)
            <button class="btn portfolio_btn" onclick="filterSelection('{{$Catagory->name}}')"> {{$Catagory->name}}</button>
        @endforeach
      
    </div>
    <br>
    <br>

    <!-- Portfolio Gallery Grid -->
    <div class="container">

    @foreach($Portfolios as $Portfolio)
        <div class="column {{$Portfolio->catagory->name}}">
            <div class="portfolio pb-2 col-md-4 col-sm-6 col-xs-12">
                <div class="box21 box_shadow" style="overflow: hidden; max-height: 250px;margin-bottom: 20px;">
                    <img src="/images/portfolio/cover/{{$Portfolio->cover}}" alt="" style="width: 100%;">
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
        </div>
    @endforeach

    <!-- END GRID -->
    </div>
</section>

<script>
filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("portfolio_btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>