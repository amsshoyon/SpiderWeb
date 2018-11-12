<style type="text/css">

.preloader {
  width: 80px;
  height: 50px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.preloader:after {
  position: absolute;
  content: "Loading...";
  bottom: -40px;
  left: -2px;
  text-transform: uppercase;
  font-family: "Arial";
  font-weight: bold;
  font-size: 12px;
}

.preloader > .line {
  background-color: #333;
  width: 9px;
  height: 100%;
  text-align: center;
  display: inline-block;
  
  animation: stretch 1.2s infinite ease-in-out;
}

.line.one {
  background-color: #2ecc71; 
}

.line.two {
  animation-delay:  -1.1s;
  background-color:#3498db;
}
.line.three {
  animation-delay:  -1.0s;
  background-color:#9b59b6;
}
.line.four {
  animation-delay:  -0.9s;
   background-color: #e67e22;
}
.line.five {
  animation-delay:  -0.8s;
  background-color: #e74c3c;
}

@keyframes stretch {
  0%, 40%, 100% { transform: scaleY(0.4); }
  20% {transform: scaleY(1.0);}
}
</style>

<div class="preloader" id="preloader">
  <div class="line one"></div>
  <div class="line two"></div>
  <div class="line three"></div>
  <div class="line four"></div>
  <div class="line five"></div>
</div>