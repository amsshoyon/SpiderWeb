//Image preview
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

//Delete confirmation

function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   alert ("Record will be deleted....")
}
return del;
}
