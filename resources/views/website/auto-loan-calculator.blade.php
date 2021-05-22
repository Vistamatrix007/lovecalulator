@extends('website.home')
@section('contents')

<style type="text/css">

#emi-calculation{
  width: 500px;
  height: 300px;
  border: 2px solid steelblue;
  box-shadow: 2px 5px 5px gray;
  border-radius: 5px;
   background-color: #f6f6f6;
}
#title{
  font-size: 30px;
  font-family: verdana;
  color: steelblue;
  text-align: center;
  text-decoration: underline;
}

#emi-output{
  width: 500px;
  height: 300px;
  border: 2px solid steelblue;
  box-shadow: 2px 5px 5px gray;
  border-radius: 5px;
   background-color: #f6f6f6;
}


.result{
  margin-top: 20px;
  margin-left: 10px;
  font-size: 20px;
  padding: 5px;
  font-family: verdana;
}

.input-loan{
  float: right;
  height: 20px;
  margin-right: 10px;
  border: 1px solid steelblue;
  padding: 10px 5px;
}

 #calc,#reset{
  width: 200px;
  height: 30px;
  font-size: 20px;
  background-color: #496e8d;
  color: #fff;
  box-shadow: 2px 5px 5px gray; 
}
.submit-btn-loan{
  text-align: center;
  margin-top: 20px;
}
#reset{
  background-color: #615c51;
}

@media screen and (max-width: 500px){

  
}

.section-loan {
    padding: 11px 17px;
}
.loancal{
	padding-top: 100px;
	padding-bottom: 100px;
}
</style>

<div class="container loancal">
  <div class="row">
    <div class="col">
     <div id="emi-calculation"> 
          
          <p id="title"><strong>EMI Calculator<strong></p> 
            
            <div class="section-loan"> 
              <label id="loanamount" class="label">Loan Amount:(₹)</label>
              <input type="number" class="input-loan" id="value1" placeholder="Enter Loan amount.." value="10000"></input>
            </div>                      
            
            <div class="section-loan">  
               <label id="interestrate" class="label">Interest Rate:(%)</label>
              <input type="number" class="input-loan" id="value2" placeholder="Enter IR per year.." value="1"></input>
            </div>            
            
            <div class="section-loan"> 
               <label id="loanduration" class="label">Loan Duration(Months):</label>
              <input type="number" class="input-loan" id="value3" placeholder="Enter loan duration.." value="24"></input>
            </div>   
        
       
     
      <div class="submit-btn-loan">          
     <button type="submit" id="calc" onclick="calculation()">Calculate</button>
      </div>                         
      
        </div>
    </div>
    <div class="col">
     <div id="emi-output">
          <div class="result">Monthly Interest: <span id="monthly-interest"></span>
          </div>
          <div class="result">Monthly Payment: <span id="monthly-payment"></span>
          </div>
          <div class="result">Total Repayment: <span id="total-repayment"></span>
          </div>
          <div class="result">Total Interest Cost: <span id="total-interest"></span>
          </div>
          
        <div class="submit-btn-loan">         
     <button type="submit" id="reset" onclick="reset()">Reset</button>
        </div> 
     </div>
    </div>
  </div>
</div>

      
  


@endsection


@section('footer-scripts')

<script type="text/javascript">
	function reset(){
  document.getElementById("value1").value = 0;
  document.getElementById("value2").value = 0;
  document.getElementById("value3").value = 0;
  
  document.getElementById("monthly-interest").innerHTML =" ₹ " +0;
  document.getElementById("monthly-payment").innerHTML =" ₹ " +0;
  document.getElementById("total-repayment").innerHTML =" ₹ " +0;
  document.getElementById("total-interest").innerHTML =" ₹ " +0;
}

function calculation(){
  
  var loanAmount = document.getElementById("value1").value;
  var interestRate = document.getElementById("value2").value;
  var loanDuration = document.getElementById("value3").value;
   
  
 var interestPerYear = (loanAmount * interestRate)/100; 
 var monthlyInterest = interestPerYear/12;
  
  
  var monthlyPayment = monthlyInterest + (loanAmount/loanDuration);
  var totalInterestCost = monthlyInterest * loanDuration;
  var totalRepayment = monthlyPayment * loanDuration;
  

  
 document.getElementById("monthly-interest").innerHTML = " ₹ " +monthlyInterest.toFixed(2);
 
  
   document.getElementById("monthly-payment").innerHTML = " ₹ " +monthlyPayment.toFixed(2); 
  
  
  document.getElementById("total-repayment").innerHTML =" ₹ " +totalRepayment.toFixed(2);

  
  document.getElementById("total-interest").innerHTML =" ₹ " +totalInterestCost.toFixed(2);
  
}
</script>
@endsection