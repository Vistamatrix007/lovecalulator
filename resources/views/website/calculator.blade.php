@extends('website.home')
@section('contents')

<style>
  

.calc-card {
  top:40px;
  position:relative;
  width: 350px;
  padding: 15px 0;
  padding-top:20px;
  margin: 0 auto;
  background: #444;
  border-radius:20px;
  -moz-box-shadow:inset 0 0 12px #FFF,
  inset 0px 1px #E6E6E6, 0 1px 1px #323643,
  inset 0px 1px #7b839b, 0 2px 5px rgba(0,0,0,.5);
  -webkit-box-shadow:inset 0 0 12px #FFF,
  inset 0px 1px #E6E6E6, 0 1px 1px #323643,
  inset 0px 1px #7b839b, 0 2px 5px rgba(0,0,0,.5);
  box-shadow:inset 0 0 12px #FFF,
  inset 0px 1px #E6E6E6, 0 1px 1px #323643,
  inset 0px 1px #7b839b, 0 2px 5px rgba(0,0,0,.5);
 margin-bottom: 60px;
}

.screen{
  width:58%;
  height:54px;
  margin:10px;
  line-height:54px;
  margin: 0 auto;
  left: 44px;
  position: relative;
  padding-right:9px;
  background:#cad69a;
  text-align:right;
  text-shadow:none;
  border-radius:6px;
  border:1px solid #6B6B6B;
  font-size:26px;
  color:#111;
  -moz-box-shadow:inset 0 0 10px #333,
  inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  -webkit-box-shadow:inset 0 0 10px #333,
  inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  box-shadow:inset 0 0 10px #333,
  inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
}
.screen:focus{
  outline:none;
}
.buttons-all{
  width:340px;
  margin:12px;
  margin:0 auto;
  margin-top:20px;
}
.buttons-all button{
  width:65px;
  height:45px;
  padding:0;
  outline:none;
  margin:0px 0px 10px 5px;
  border:1px solid #333;
  border-radius:6px;
  color:#fefefe;
  font:24px "Lato", Arial, Helvetica, sans-serif;
  line-height: 45px;
  -moz-box-shadow:inset 0 0 10px #666,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
  -webkit-box-shadow:inset 0 0 10px #666,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
  box-shadow:inset 0 0 10px #555,
  inset 0px 1px #BCD6FF, 0 1px 1px #222;
  background:#222;
  transition: all 1s ease;
}
.buttons-all button:active {
  color:#FFF;
  outline:none;
  border:1px solid #333;
  -moz-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  -webkit-box-shadow:inset 0 1px 1px #000, 0px 1px #E6E6E6;
  box-shadow:inset 0 1px 1px #000, 0px 1px #E6E6E6;
}
#clear{
  width:65px;
  height:45px;
  float:left;
  position: relative;
  left: 28px;
  top: 6px;
  background-color:#d02200;
  border:1px solid #d02200;
  border-radius:6px;
  -moz-box-shadow:inset 0 0 10px #F63,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
  -webkit-box-shadow:inset 0 0 10px #F63,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
  box-shadow:inset 0 0 10px #F63,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;

}
#clear:active{
  border:1px solid #444;
  -moz-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  -webkit-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
}
#equal{
  width:65px;
  background-color: #036;
  border:1px solid #036;
  -moz-box-shadow:inset 0 0 10px #069,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
  -webkit-box-shadow:inset 0 0 10px #069,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
  box-shadow:inset 0 0 10px #069,
  inset 0px 1px #BCD6FF, 0 1px 1px #323643;
}
#equal:active{
  border:1px solid #039;
  -moz-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  -webkit-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
}
#minus, #plus, #divide, #multiply{
  background-color: #777;
  border:1px solid #666;
  -moz-box-shadow:inset 0 0 10px #aaa,
  inset 0px 1px #999, 0 1px 1px #aaa;
  -webkit-box-shadow:inset 0 0 10px #aaa,
  inset 0px 1px #999, 0 1px 1px #aaa;
  box-shadow:inset 0 0 10px #aaa,
  inset 0px 1px #999, 0 1px 1px #aaa;
}
#minus:active, #plus:active, #divide:active, #multiply:active{
  border:1px solid #555;
  -moz-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  -webkit-box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
  box-shadow:inset 0 1px 1px #0A0B0D, 0px 1px #E6E6E6;
}
.math-cal{
  background-image: -webkit-linear-gradient(
65deg
, #007bff80 70%, #212121 30%);
    background-color: #c7004c;
}

</style>
<section class="math-cal">


   <div class="">
      <div class="container-cal-head">
      <h1 class="animated-text-cal-head">Calculator</h1>
      </div>

      <div class="calc-card">
        <button id="clear" value="">C</button><div id="screen" class="screen">0</div>
    <div class="buttons-all">




      <button class="digit" value="7">7</button>
      <button class="digit" value="8">8</button>
      <button class="digit" value="9">9</button>
      <button class="operator" id="divide" value="/">&#247;</button>
      <button class="digit" value="4">4</button>
      <button class="digit" value="5">5</button>
      <button class="digit" value="6">6</button>
      <button class="operator" id="minus" value="-">-</button>
      <button class="digit" value="1">1</button>
      <button class="digit" value="2">2</button>
      <button class="digit" value="3">3</button>
      <button class="operator " id="plus" value="+">+</button>
      <button class="digit" value="0">0</button>
      <button class="digit" value=".">.</button>
      <button id="equal">=</button>
        <button class="operator" id="multiply" value="*">x</button>
    </div>

      </div>

   </div>

 </section>
@endsection


@section('footer-scripts')

<script type="text/javascript">
  $(document).ready(function(){

  function calculator(){
    var sum = "";
    var len;
    var operators = ["+", "-", "*", "/"];
    var inputVal = document.getElementById("screen");
    $(".buttons-all .digit").on('click', function() {
      var num = $(this).attr('value');
      sum += num;
      $("#screen").html(sum);
    len = inputVal.innerHTML.split("");
    console.log(len);

    });
    $(".buttons-all .operator").on('click', function(e) {
      e.preventDefault();
      var ops = $(this).attr('value');
      sum += ops;
      $("#screen").html(sum);
       len = inputVal.innerHTML;
      if(/(?=(\D{2}))/g.test(sum)) {
        sum = len.substring(0, len.length - 1);
        $("#screen").html(sum);
      }

    });


    $("#equal").on('click', function() {
      var total =  eval(sum);
      $("#screen").html(total % 1 != 0 ? total.toFixed(2) : total);
    });

    $("#clear").on('click', function() {
       sum = "";
       arr = [];
        $("#screen").html(0);
    });

    };
          calculator();
});

</script>
@endsection