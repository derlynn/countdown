<hmtl>
<head>
<!--Count down-->
<style>
.clock-container {
  background-color: #080808;
  border-radius: 5px;
  padding: 45px 20px;
  /*box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.15), 0 15px 90px 30px rgba(0, 0, 0, 0.25);*/
  display: -webkit-box;

  right:10px;
  bottom:10px;
  font-family: Arial, Helvetica, sans-serif;
}

.clock-col {
  text-align: center;
  margin-right: 30px;
  margin-left: 30px;
  min-width: 90px;
  position: relative;
}
.clock-col:not(:last-child):before, .clock-col:not(:last-child):after {
  content: "";
  background-color: rgba(255, 255, 255, 0.3);
  height: 5px;
  width: 5px;
  border-radius: 50%;
  /*display: block;*/
  position: absolute;
  right: -42px;
}
.clock-col:not(:last-child):before {
  top: 35%;
}
.clock-col:not(:last-child):after {
  top: 50%;
}
.clock-timer:before {
  color: #fff;
  font-size:2rem;
  text-transform: uppercase;
}

.clock-timer {
  color: #fff;
  font-size: 2rem;
  text-transform: uppercase;
}
.clock-label {
  color: rgba(255, 255, 255, 0.35);
  text-transform: uppercase;
  font-size: 0.6rem;
    margin-top: 10px;
    letter-spacing: 0.8px;
  
}

p{
  margin:10px;
}

@media (max-width: 200px) {
  .clock-col:not(:last-child):before, .clock-col:not(:last-child):after {
  content: none;
}
  .clock-col-day{
	display:none !important;
  }
  .clock-container {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .clock-col + .clock-col {
    margin-top: 20px;
  }


  clock-col-mob{
	margin-top:0px;	
  }  


  .clock-timer {
  	font-size: 2rem;	
  }

}


</style>	
</head>

<body>
<div id='clock-container_' class="clock-container" style='position:absolute'>
  <div class="clock-col clock-col-day">

	<p id='days' class="clock-day clock-timer">
		00
    </p>
    <p  class="clock-label">
     
	  Day
    </p>
  </div>
  
  <div  class="clock-col clock-col-day">
    <p id='hours' class="clock-hours clock-timer">
		00 
    </p>
    <p class="clock-label">
      Hours
    </p>
  </div>

  <div class="clock-col clock-col-mob">
    <p  id='minutes' class="clock-minutes clock-timer">
	09
   </p>
    <p class="clock-label">
      Minutes
    </p>
  </div>
  <div class="clock-col">
    <p  id='seconds' class="clock-seconds clock-timer">
		00
    </p>
    <p class="clock-label">
      Seconds
    </p>
  </div>
</div>


<!-- Display the countdown timer in an element -->


<script>

var numberofMinutes = 10;

// Set the date we're counting down to
//var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
var d1 = new Date ();
var countDownDate = new Date ( d1 );
countDownDate.setMinutes ( d1.getMinutes() + numberofMinutes );

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date

//alert ( d2 );
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

 //
 var extraCerodays = '';
 var extraCerohours = '';
 var extraCerominutes = '';
 var extraCeroseconds = '';

 if(days<10){
	extraCerodays ='0';
 }
 if(hours<10){
	extraCerohours ='0';
 }
 if(minutes<10){
	extraCerominutes ='0';
 }
 if(seconds<10){
	extraCeroseconds ='0';
 }
 

 document.getElementById("days").innerHTML = extraCerodays+days;
 document.getElementById("hours").innerHTML = extraCerohours+ hours;
 document.getElementById("minutes").innerHTML = extraCerominutes+minutes;
 document.getElementById("seconds").innerHTML = extraCeroseconds+seconds;

  // Display the result in the element with id="demo"

  // If the count down is finished, write some text
  console.log(distance);
  if (distance < 0) {
    clearInterval(x);
	document.getElementById("days").innerHTML = '00';
 document.getElementById("hours").innerHTML = '00';
 document.getElementById("minutes").innerHTML = '00';
 document.getElementById("seconds").innerHTML = '00';

    //document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>