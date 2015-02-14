<!DOCTYPE html>
<html>
   
<style>
p {
     position: relative;
    -webkit-animation: myfirst 5s; /* Chrome, Safari, Opera */
    animation: myfirst 5s;
    padding-left: 80px;	
}
 

img {
position: relative;
    -webkit-animation: myfirst 5s; /* Chrome, Safari, Opera */
    animation: myfirst 5s;
    padding-left: 80px;
}
@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}
.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
}

div {
  transition: background-color 0.9s ease;
  background-color: lightgray;
  padding-left: 80px;
}
div:hover {
  background-color: lightblue;
}
</style>
 
<body>
 
<p class="rubberBand" style="font-size: 2em; font-family: Ariel; color: darkblue;">Hello, this is a rubberband animation example.</p>

 
<img class="rubberBand" src="http://www.mountainprofessor.com/images/Mountain-Ranges-Colorado-2.jpg" style="width: 60%" >
 
<div style="font-size: 2em; font-family: Ariel; color: darkblue;">Example of a CSS3 transition.</div>

<div></div>
 
</body>
</html>