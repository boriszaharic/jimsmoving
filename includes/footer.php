<div class="flex flex-direciton-row justify-content mainContainer sstm align-items">
  <div class="slideshowwr" id="slideshow">
    <button onclick="nextSlide();" style="position:absolute;left:0;top:50%;z-index:10"><</button>
    <button onclick="previousSlide();" style="position:absolute;right:0;top:50%;z-index:10">></button>
    <div class="slideshow" id="image1">
      <img src="http://www.000it.com.au/test/images\img.jpg">
        <div class="text-center" style="background:rgba(0, 0, 0, 0.4);position:absolute;bottom:0;font-size:20px;color:white">
         Terrific Job
         <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <div style="text-align:center;padding:5px 10px">
          I called Jims for a quote on some clearing/landscaping. Our local Jim “Geoff” was prompt with the quote, completed ...
          <div><button onclick="">View Testimonial</button></div>
          </div>
      </div>
    </div>
    <div class="slideshow" id="image2"><img src="http://www.000it.com.au/test/images\img1.jpg"></div>
      <div class="slideshow" id="image3"><img src="http://www.000it.com.au/test/images\img2.jpg"></div>
      <div class="slideshow" id="image4"><img src="http://www.000it.com.au/test/images\img3.jpg"></div>
      <div class="slideshow" id="image5"><img src="http://www.000it.com.au/test/images\img4.jpg"></div>
      <div class="slideshow" id="image6"><img src="http://www.000it.com.au/test/images\img1.jpg"></div>
      <div class="slideshow" id="image7"><img src="http://www.000it.com.au/test/images\img1.jpg"></div>
  </div>
  <div class="flex justify-content align-items flex-direction-column sst">
    <h2>Some header</h2>
    <p>Some text that describe something Some text that describe something Some text that describe something Some text that describe something Some text that describe something Some text that describe something</p>
  </div>
</div>

<footer>
  <div class="text-center">
    <div class="flex footer">
      <div>
        <div style="font-size:30px; padding-bottom:12px;">HEAD OFFICE</div>
        <a href="https://www.google.com.au/maps/place/48+Edinburgh+Rd,+Mooroolbark+VIC+3138,+%D0%90%D1%83%D1%81%D1%82%D1%80%D0%B0%D0%BB%D0%B8%D1%98%D0%B0/@-37.7868092,145.3484574,17z/data=!3m1!4b1!4m5!3m4!1s0x6ad62fa4ee34d993:0xdee21373d503a80f!8m2!3d-37.7866911!4d145.3529434">
          <div>123 Fake Street</div>
        <div>0000 VIC, Australia </div></a>
      </div>
      <div>
        <div style="font-size:30px; padding-bottom:12px;">OPERATING HOURS</div>
        <div>Monday - Friday - 12AM - 12PM</div>
        <div>Saturday & Sunday - 12AM - 12PM</div>
      </div>
    </div>
    <div style="padding-top:50px;">Call <a href="tel:123456789">**** *** ***</a></div>
    </div>
  </footer>
  <div class="footer-bottom">
    <div class="text-center">
      <p><a href="#"></a></p>
    </div>

    <div class="text-center">
    Copyright © 2017 Jimshandyman.com.au. All Rights Reserved. Jim’s Est.1989
    </div>

    <div class="text-center">
      <p><a href="#">Service Location Quick Links</a></p>
    </div>

  </div>

<script>
function openMenu(){
  var menu = document.getElementById("menu");
  if(menu.classList.contains("menu-open")){
    menu.classList.remove("menu-open");
  }else{
    menu.classList.add("menu-open");
  }
}
</script>

<script>
var image = 1;
var next, previous,time,newTime,prev;
function nextSlide() {
image = next;

  newTime = new Date();
  if(time.getTime() < newTime.getTime()) {
    slideshow();
  }
}
function previousSlide() {
image = previous;
  newTime = new Date();
  if(time.getTime() < newTime.getTime()) {
  prev = 1;
    slideshow();
  }
}
document.getElementById("image1").style.left = "0px";
document.getElementById("image1").style.opacity = "1";
function slideshow() {
time = new Date();
  time.setSeconds(time.getSeconds() + 2);
switch (image) {
  case 1:
    previous = 7;
      next = image + 1;
    break;
  case 2:
    previous = image - 1;
      next = image + 1;
      break;
  case 3:
    previous = image - 1;
      next = image + 1;
      break;
  case 4:
    previous = image - 1;
      next = image + 1;
      break;
  case 5:
    previous = image - 1;
      next = image + 1;
      break;
  case 6:
    previous = image - 1;
      next = image + 1;
      break;
  case 7:
    previous = image - 1;
      next = 1;
  }
  for(var i = 1; i < 8; i++) {
    document.getElementById("image"+i).style.opacity = "0";
      document.getElementById("image"+i).style.zIndex = "-1";
  }
  if(prev == 1) {
  document.getElementById("image"+image).style.zIndex = "1";
  document.getElementById("image"+image).style.left = "0px";
  document.getElementById("image"+previous).style.left = "-100%";
  document.getElementById("image"+previous).style.opacity = "0";
  document.getElementById("image"+image).style.opacity = "1";
  document.getElementById("image"+next).style.left = "100%";
  document.getElementById("image"+next).style.opacity = "1";
  setTimeout(function(){
  document.getElementById("image"+next).style.opacity = "0";
  },1000);
  image = next;
  prev = 0;
} else {
  document.getElementById("image"+image).style.zIndex = "1";
  document.getElementById("image"+image).style.left = "0px";
  document.getElementById("image"+previous).style.left = "-100%";
  document.getElementById("image"+previous).style.opacity = "1";
  setTimeout(function(){
  document.getElementById("image"+previous).style.opacity = "0";
  },1000);
  document.getElementById("image"+image).style.opacity = "1";
  document.getElementById("image"+next).style.left = "100%";
  document.getElementById("image"+next).style.opacity = "0";
  image = next;
  }
}
var interval = setInterval(function(){
  slideshow();
},3000);
document.getElementById("slideshow").addEventListener("mouseover",function() {
clearInterval(interval);
});
document.getElementById("slideshow").addEventListener("mouseout",function() {
interval = setInterval(function(){
  slideshow();
},3000);
});
</script>
</body>
</html>
