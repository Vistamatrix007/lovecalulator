@extends('website.home')
@section('contents')
  <!-- ======= Hero Section ======= -->
  <section class="caluctarsec">

  <div id="love-calculator" class="calculator">

    <form id="loveForm" id="loveform">
      <div id="Welcometext">
      <div class="container-cal-head">
      <h1 class="animated-text-cal-head"><i class="fas fa-heartbeat"></i></h1>
      </div>
      <h2 id="lovefinal" style="color: white;">Calculate your love score</h2>
      </div>
      <div id="Successtext">
      
      </div>
      <p>Please enter names below</p>
      <h2>Your Name</h2>
      <input id="name1" class="yourname name-box" type="text" placeholder="Your Name"></input>
      <h2>Lover's Name</h2>
      <input id="name2" class="lovername name-box" type="text" placeholder="Lover's Name"></input>
    </form>
    <button id="love-button" onclick="loveCalculator()" class="buttons" type="button"><i class="fas fa-heart"></i> Submit</button>
    <button class="buttons" type="submit" onclick="resetFunction()"><i class="fas fa-heart-broken"></i> Reset</button>
  </div>

  </section>


@endsection


@section('footer-scripts')
<script type="text/javascript">
  


 var loveCalculator=function () {

  var name1 = $("#name1").val();
  var name2 = $("#name2").val();


  if (name1 === "") {
    alert("please enter your name");
    return;
  } 
  if (name2 === "") {
    alert("Please enter your lovers name");
    return;
  }

  $("#preloader").show();

  const settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://love-calculator.p.rapidapi.com/getPercentage?fname="+name1+"&sname="+name2,
  "method": "GET",
  "headers": {
    "x-rapidapi-key": "7a3410d8e7mshce6c0a5f0326331p11c4e2jsn909bf13d644a",
    "x-rapidapi-host": "love-calculator.p.rapidapi.com"
  }
};

$.ajax(settings).done(function (response) {
    console.log(response);
    var Percentage = response.percentage;
    var Result = response.result;
 $("#Successtext").html("<h4>Percentage of love between</h4><h3 id='lovefinal'>You & Your <i class='fas fa-heartbeat'></i> Partner is</h3>"+Percentage+"%"+"<br>"+Result);
 $("#Welcometext").hide();
}); 

};

function resetFunction() {
  location.reload();
}




</script>

@endsection