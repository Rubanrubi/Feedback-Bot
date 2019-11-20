<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style type="text/css">
  * {
  outline:none;
  border:none;
  margin:0px;
  padding:0px;
  font-family:Courier, monospace;
}
body {
  background:#333 url(https://static.tumblr.com/maopbtg/a5emgtoju/inflicted.png) repeat;        
}
#paper {
  color:#FFF;
  font-size:20px;
}
#margin {
  margin-left:12px;
  margin-bottom:20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none; 
}
#text {
  width:500px;
  overflow:hidden;
  background-color:#FFF;
  color:#222;
  font-family:Courier, monospace;
  font-weight:normal;
  font-size:24px;
  resize:none;
  line-height:40px;
  padding-left:100px;
  padding-right:100px;
  padding-top:45px;
  padding-bottom:34px;
  background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
  background-repeat:repeat-y, repeat;
  -webkit-border-radius:12px;
  border-radius:12px;
  -webkit-box-shadow: 0px 2px 14px #000;
  box-shadow: 0px 2px 14px #000;
  border-top:1px solid #FFF;
  border-bottom:1px solid #FFF;
}
#title {
  background-color:transparent;
  border-bottom:3px solid #FFF;
  color:#FFF;
  font-size:20px;
  font-family:Courier, monospace;
  height:28px;
  font-weight:bold;
  width:220px;
}
#button {
  cursor:pointer;
  margin-top:20px;
  float:right;
  height:40px;
  padding-left:24px;
  padding-right:24px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  font-size:20px;
  color:#FFF;
  text-shadow: 0px -1px 0px #000000;
  -webkit-border-radius:8px;
  border-radius:8px;
  border-top:1px solid #FFF;
  -webkit-box-shadow: 0px 2px 14px #000;
  box-shadow: 0px 2px 14px #000;
  background-color: #62add6;
  background-image:url(https://static.tumblr.com/maopbtg/ZHLmgtok7/button.png);
  background-repeat:repeat-x;
}
#button:active {
  zoom: 1;
  filter: alpha(opacity=80);
  opacity: 0.8;
}
#button:focus {
  zoom: 1;
  filter: alpha(opacity=80);
  opacity: 0.8;
}
#wrapper {
  width:700px;
  height:auto;
  margin-left:auto;
  margin-right:auto;
  margin-top:24px;
  margin-bottom:100px;
}
</style>
<style>
* {
     box-sizing: border-box;
}
 body {
     height: 100vh;
     background: #eff0f5;
     font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
     font-weight: 100;
     overflow: hidden;
}
 .hidden {
     display: none;
}
 .row {
     display: flex;
     justify-content: center;
}
 .text-center {
     text-align: center;
}
 .slide-out-x {
     transform: translateX(-100%);
}
 .slide-out-x-alt {
     transform: translateX(100%);
}
 .slide-out-y {
     transform: translateY(-100%);
}
 .slide-out-y-alt {
     transform: translateY(100%);
}
 .text-violet {
     color: #7f28ff;
}
 .text-gray {
     color: #4f4f4f;
}
 .feedback-wrapper {
     position: absolute;
     top: 0;
     left: 0;
     bottom: 0;
     right: 0;
     margin: auto;
     background: white;
     max-width: 480px;
     height: 200px;
     border-radius: 10px;
     box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
     transition: 0.55s cubic-bezier(0.1, 1, 0.25, 1.15);
}
 .feedback-wrapper.title-hovered:active {
     transform: translateY(-5%);
}
 .feedback-wrapper.at-bottom {
     top: auto;
     transform: translateY(100%);
     bottom: 68px;
     transition: 0.2s ease-out;
}
 .feedback-wrapper.at-bottom:active {
     transform: translateY(105%);
}
 .feedback-wrapper .feedback-title {
     padding: 20px;
     color: #fff;
     background: #7f28ff;
     border-radius: 10px 10px 0 0;
     height: 68px;
}
 .feedback-wrapper .feedback-title h1 {
     margin: 0;
     font-size: 1.4rem;
}
 .feedback-wrapper .feedback-content {
     max-height: calc(100vh - 68px);
     overflow-y: auto;
}
 .feedback-wrapper .feedback-faces {
     padding: 20px;
     height: 130px;
     overflow: hidden;
}
 .face-wrapper {
     position: relative;
     left: 0;
     right: 0;
     width: 60px;
     height: 60px;
     padding: 10px;
     box-sizing: content-box;
     transition: 0.25s ease-out;
}
 .face-wrapper .face-counter {
     position: absolute;
     right: 0;
     background: #dc230f;
     width: 25%;
     height: 25%;
     text-align: center;
     line-height: 170%;
     font-size: 70%;
     border-radius: 50%;
     font-weight: 800;
     color: #fff;
     z-index: 99;
     box-shadow: inset 0 -1.2px 1.8px #b92413;
     transform: rotate(0deg) scale(1);
     transition: 0.25s ease-out;
}
 .face-wrapper .face-counter.invisible {
     transform: rotate(150deg) scale(0);
     opacity: 0;
}
 .face-wrapper .face {
     display: block;
     position: relative;
     background: #ffcd00;
     border-radius: 50%;
     width: 60px;
     height: 60px;
     box-shadow: 0 0.6px 1.2px #cc9117;
     transition: 0.25s ease-out;
}
 .face-wrapper .face:not([disabled]) {
     cursor: pointer;
}
 .face-wrapper .face:after {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     border-radius: 50%;
     box-shadow: inset 0px -3px 9px #eaa514;
     z-index: 9;
}
 .face-wrapper .face .eye {
     position: absolute;
     width: 15.6px;
     height: 15.6px;
     margin-top: 32%;
     left: 18%;
     border-radius: 50%;
     transition: 0.25s ease-out;
}
 .face-wrapper .face .eye:last-of-type {
     right: 18%;
     left: auto;
}
 .face-wrapper .face .eye .pupil {
     position: absolute;
     background: #000;
     left: 0;
     right: 0;
     top: 0;
     margin: auto;
     width: 85%;
     height: 85%;
     border-radius: 50%;
     background: #794014;
     box-shadow: inset 0 -1.2px 0.6px 0px #ca7432;
     transition: width 0.25s ease-out, height 0.25s ease-out;
}
 .face-wrapper .face .eye .eyelid {
     position: absolute;
     width: 100%;
     height: 0%;
     bottom: -5%;
     border-radius: 50%;
     background: #ffcd27;
     transition: 0.25s ease-out;
}
 .face-wrapper .face .mouth-wrapper {
     position: absolute;
     top: 60%;
     width: 100%;
}
 .face-wrapper .face .mouth-wrapper .mouth {
     width: 40%;
     height: 14.4px;
     background: #784015;
     left: 0;
     right: 0;
     margin: auto;
     position: relative;
     border-radius: 290%;
     box-shadow: inset 0 -1.2px 0.6px 0px #ca7432;
     transition: 0.25s ease-out;
}
 .face-wrapper .face .mouth-wrapper .mouth:before {
     content: '';
     position: absolute;
     width: 120%;
     height: 73%;
     background: #ffcd27;
     border-radius: 0 0 140% 140%;
     top: 0;
     left: -10%;
     transition: 0.25s ease-out;
}
 .face-wrapper .face.grayscale {
     transform: scale(0.9);
     background: #d3d3d3;
     box-shadow: 0 0.6px 1.2px #ccc;
}
 .face-wrapper .face.grayscale:after {
     box-shadow: inset 0px -3px 9px #bbb;
}
 .face-wrapper .face.grayscale .pupil {
     background: #4f4f4f;
     box-shadow: inset 0 -1.2px 0.6px 0px #949494;
}
 .face-wrapper .face.grayscale .eyelid {
     background: #d3d3d3;
}
 .face-wrapper .face.grayscale.face-love .eyelid, .face-wrapper .face.grayscale.face-love .eyelid:before, .face-wrapper .face.grayscale.face-love .eyelid:after {
     background: #707070;
}
 .face-wrapper .face.grayscale .mouth {
     background: #4f4f4f;
     box-shadow: inset 0 -1.2px 0.6px 0px #949494;
}
 .face-wrapper .face.grayscale .mouth:before {
     background: #d3d3d3;
}
 .face-wrapper:hover .face {
     transform: scale(1.1);
}
 .face-wrapper:hover .eyes-wrapper {
     animation: shake infinite 0.15s;
     transform: translate3d(0, 0, 0);
     backface-visibility: hidden;
     perspective: 1000px;
}
 .face-wrapper:hover .eyes-wrapper .eyelid {
     height: 50%;
}
 .face-wrapper:hover .mouth-wrapper .mouth {
     transform: scaleX(1.2);
}
 .face-wrapper:hover .mouth-wrapper .mouth:before {
     transform: translateY(-20%) scaleY(0.75);
}
 .face-wrapper:active .face {
     transform: scale(1.05);
}
 .face-wrapper:active .eyes-wrapper .eye .eyelid {
     height: 75%;
}
 .face-wrapper .face-sad .mouth-wrapper .mouth {
     height: 2.4px;
     top: 8.4px;
     border-radius: 4.2px;
     width: 30%;
}
 .face-wrapper .face-sad .mouth-wrapper .mouth:before {
     display: none;
}
 .face-wrapper:hover .face-sad .eyes-wrapper .eye {
     transform: scale(0.9);
}
 .face-wrapper:hover .face-sad .eyes-wrapper .eyelid {
     height: 0;
}
 .face-wrapper:hover .face-sad .mouth-wrapper .mouth {
     transform: scaleX(0.9) rotateZ(-10deg);
}
 .face-wrapper:active .face-sad .eyes-wrapper .eye .pupil {
     top: 0%;
     height: 70%;
}
 .face-wrapper .face-disappointed .mouth-wrapper {
     transform: rotateZ(-180deg);
}
 .face-wrapper .face-disappointed .mouth-wrapper .mouth {
     top: -6px;
     height: 9px;
}
 .face-wrapper .face-disappointed .mouth-wrapper .mouth:before {
     transform: translateY(-30%);
     width: 120%;
     height: 120%;
}
 .face-wrapper:hover .face-disappointed .eyes-wrapper .eye {
     transform: scale(0.9);
}
 .face-wrapper:hover .face-disappointed .eyes-wrapper .eyelid {
     height: 0;
}
 .face-wrapper:hover .face-disappointed .mouth-wrapper .mouth {
     transform: translateY(-5%) scale3d(0.8, 1, 1);
}
 .face-wrapper:hover .face-disappointed .mouth-wrapper .mouth:before {
     transform: translateY(-30%);
     width: 120%;
     height: 120%;
}
 .face-wrapper:active .face-disappointed .eyes-wrapper .eye .pupil {
     top: 0%;
     height: 70%;
}
 .face-wrapper .face-wtf .mouth-wrapper {
     transform: rotateZ(-180deg);
}
 .face-wrapper .face-wtf .mouth-wrapper .mouth {
     top: -3.6px;
}
 .face-wrapper:hover .face-disappointed .mouth-wrapper .mouth {
     top: -3.6px;
}
 .face-wrapper .face-love .eye .pupil {
     background: none;
     box-shadow: none;
}
 .face-wrapper .face-love .eye .eyelid {
     position: absolute;
     transform: rotate(-45deg);
     width: 12px;
     height: 12px;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     margin: auto;
     background: #dc0e0e;
     border-radius: 0;
     z-index: 999;
     transition: 0.25s ease-out, background 0s;
}
 .face-wrapper .face-love .eye .eyelid:before, .face-wrapper .face-love .eye .eyelid:after {
     content: '';
     position: absolute;
     width: 100%;
     height: 100%;
     background: #dc0e0e;
     top: -50%;
     border-radius: 50% 50% 0 0;
}
 .face-wrapper .face-love .eye .eyelid:after {
     top: auto;
     right: -50%;
     border-radius: 0 50% 50% 0;
}
 .face-wrapper:hover .face-love .eyes-wrapper .eye .eyelid {
     transform: translateY(-5px) rotate(-45deg) scale3d(1.1, 1.1, 1.1);
}
 .face-wrapper:active .face-love .eyes-wrapper .eye .pupil {
     top: 0%;
     height: 85%;
}
 .face-wrapper:active .face-love .eyes-wrapper .eye .eyelid {
     height: 12px;
     transform: translateY(-5px) rotate(-45deg) scale3d(1.3, 1.3, 1.3);
}
 @keyframes shake {
     0%, 100% {
         transform: translate3d(0, 0, 0);
    }
     25% {
         transform: translate3d(1%, 1%, 0);
    }
     75% {
         transform: translate3d(1%, 1%, 0);
    }
}
.faces-hint.text-center.text-gray {
    margin-top: -20px;
}
 
</style>
</head>

<body>
  
    <div class="card text-center" style="margin-top: 124px;margin-right: 865px;">
  <div class="card-header">
    Choose Question Type
  </div>
  <div class="card-body">
    <h5 class="card-title">Choose Question Type!!!</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <form>
     
          <div class="row" style="margin-left: 26px;">
           
          <!-- Default inline 1-->
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input checkbox1" id="defaultInline1">
            <label class="custom-control-label" for="defaultInline1">Text Area</label>
          </div>
        </div><br><br>
          <div class="row" style="margin-left: 26px;">
          
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input checkbox2" id="defaultInline2">
            <label class="custom-control-label" for="defaultInline2">Single Choice</label>
          </div>
          </div><br><br>
          <!-- <div class="row" style="margin-left: 26px;">
         
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input checkbox3" id="defaultInline3">
            <label class="custom-control-label" for="defaultInline3">Multiple Choice</label>
          </div>
        </div><br><br> -->
          <div class="row" style="margin-left: 26px;">
          <!-- Default inline 4-->
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input checkbox4" id="defaultInline4">
            <label class="custom-control-label" for="defaultInline4">Rating</label>
          </div>

            </div>
          
    
    <br>
    <!-- <input id="button" type="submit" value="Submit"> -->
    </form>
  </div>
  <div class="card-footer text-muted">
    Thank You!!
  </div>
</div>

    <div class="card text-center" style="margin-top: -520px;margin-left: 865px;">
  <div class="card-header">
    Feedback Form
  </div>
  <div class="card-body">
    <h5 class="card-title">Please Drop your Feedback Here!!!</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <form method="post" action="{{url('/')}}/submit_feedback">
      {{csrf_field()}}
      <div id="autoUpdate1" style="display: none;">
          <textarea placeholder="Enter your Feedback." id="text" name="text_area" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 242px; width: 687px; "></textarea>
          </div> <br>
        <div id="autoUpdate2" style="display: none;">
          <input type="text" name="single_choice" class="form-control">
          </div> <br>

         <!--  <div id="autoUpdate3" style="display: none;">
          <input type="text" name="single_choice" class="form-control">
          </div>  -->
          <!-- <div id="autoUpdate4" style="display: none;">
          <textarea placeholder="Enter your Feedback." id="text" name="feedback" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 242px; width: 687px; "></textarea>
          </div> --> 

          <div id="autoUpdate4" style="display: none;">
          <div class="feedback-content">
        <div class="feedback-faces">
            <div class="row">
                <div class="face-wrapper slide-out-y-alt">
                    <div class="face-counter invisible" data-title-none="No one rated it like this" data-title-one="One person rated it like this" data-title-many="other people rated it like this"></div><input class="rate-input hidden" id="rate-0" type="radio" name="rating" value="0" /><label class="face grayscale face-wtf" for="rate-0" data-hint="Oh God! Why?!">
                        <div class="eyes-wrapper">
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mouth-wrapper">
                            <div class="mouth"></div>
                        </div>
                    </label>
                </div>
                <div class="face-wrapper slide-out-y-alt">
                    <div class="face-counter invisible" data-title-none="No one rated it like this" data-title-one="One person rated it like this" data-title-many="other people rated it like this"></div><input class="rate-input hidden" id="rate-1" type="radio" name="rating" value="1" /><label class="face grayscale face-disappointed" for="rate-1" data-hint="It sucks...">
                        <div class="eyes-wrapper">
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mouth-wrapper">
                            <div class="mouth"></div>
                        </div>
                    </label>
                </div>
                <div class="face-wrapper slide-out-y-alt">
                    <div class="face-counter invisible" data-title-none="No one rated it like this" data-title-one="One person rated it like this" data-title-many="other people rated it like this"></div><input class="rate-input hidden" id="rate-2" type="radio" name="rating" value="2" /><label class="face grayscale face-sad" for="rate-2" data-hint="It's ok. I guess.">
                        <div class="eyes-wrapper">
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mouth-wrapper">
                            <div class="mouth"></div>
                        </div>
                    </label>
                </div>
                <div class="face-wrapper slide-out-y-alt">
                    <div class="face-counter invisible" data-title-none="No one rated it like this" data-title-one="One person rated it like this" data-title-many="other people rated it like this"></div><input class="rate-input hidden" id="rate-3" type="radio" name="rating" value="3" /><label class="face grayscale face-happy" for="rate-3" data-hint="This is great!">
                        <div class="eyes-wrapper">
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mouth-wrapper">
                            <div class="mouth"></div>
                        </div>
                    </label>
                </div>
                <div class="face-wrapper slide-out-y-alt">
                    <div class="face-counter invisible" data-title-none="No one rated it like this" data-title-one="One person rated it like this" data-title-many="other people rated it like this"></div><input class="rate-input hidden" id="rate-4" type="radio" name="rating" value="4" /><label class="face grayscale face-love" for="rate-4" data-hint="OMG! I love it!">
                        <div class="eyes-wrapper">
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                            <div class="eye">
                                <div class="pupil">
                                    <div class="eyelid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mouth-wrapper">
                            <div class="mouth"></div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="faces-hint text-center text-gray" data-default-hint=""></div>
        </div>
    </div>
          </div>
          <div id="autoUpdate4" style="display: none;">
          
          </div>
    
    <br>
    <input id="button" type="submit" value="Submit">
    </form>
  </div>
  <div class="card-footer text-muted">
    Thank You!!
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $('#title').focus();
    $('#text').autosize();
});
</script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
$(document).ready(function () {
    $('.checkbox1').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate1').fadeIn('slow');
        else 
            $('#autoUpdate1').fadeOut('slow');
    });
     $('.checkbox2').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate2').fadeIn('slow');
        else 
            $('#autoUpdate2').fadeOut('slow');
    });
      $('.checkbox3').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate3').fadeIn('slow');
        else 
            $('#autoUpdate3').fadeOut('slow');
    });
       $('.checkbox4').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate4').fadeIn('slow');
        else 
            $('#autoUpdate4').fadeOut('slow');
    });
});
</script>
<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<script type="text/javascript">
    "use strict";

var $canvas = $('body');
var $eyes = $('.eye');
var $rateInputs = $('.rate-input');

function vendorize(key, value) {
  var vendors = ['webkit', 'moz', 'ms', 'o', ''];
  var result = {};
  vendors.map(function (vendor) {
    var vKey = vendor ? '-' + vendor + '-' + key : key;
    result[vKey] = value;
  });
  return result;
} //https://github.com/jfmdev/jqEye/blob/master/Source/jqeye.js


function circle_position(x, y, r) {
  // Circle: x^2 + y^2 = r^2
  var res = {
    x: x,
    y: y
  };

  if (x * x + y * y > r * r) {
    if (x !== 0) {
      var m = y / x;
      res.x = Math.sqrt(r * r / (m * m + 1));
      res.x = x > 0 ? res.x : -res.x;
      res.y = Math.abs(m * res.x);
      res.y = y > 0 ? res.y : -res.y;
    } else {
      res.y = y > 0 ? r : -r;
    }
  }

  return res;
}

;

function findCenter(coords, sizeX, sizeY) {
  return {
    x: coords.left + sizeX / 2,
    y: coords.top + sizeY / 2
  };
}

function deltaVal(val, targetVal) {
  var delta = Math.min(100.0, ts - prevTs);
  var P = 0.001 * delta;
  return val + P * (targetVal - val);
}

function changeEyesPosition(px, py) {
  function changePosition() {
    var $t = $(this);
    var $pupil = $t.find('.pupil');
    var t_w = $t.width();
    var t_h = $t.height();
    var t_o = $t.offset();
    var t_p = $t.position();
    var abs_center = findCenter(t_o, t_w, t_h);
    var pos_x = px - abs_center.x + $(window).scrollLeft();
    var pos_y = py - abs_center.y + $(window).scrollTop();
    var cir = circle_position(pos_x, pos_y, t_w / 20);
    var styles = vendorize('transform', 'translateX(' + cir.x + 'px) translateY(' + cir.y + 'px)');
    $pupil.css(styles);
  }

  $eyes.each(changePosition);
}

function handleMouseMove(e) {
  var px = e.pageX,
      py = e.pageY;
  changeEyesPosition(px, py);
}

$canvas.on('mousemove', handleMouseMove);

function getFace($element) {
  return $element.parent('.face-wrapper').find('.face');
}

function handleFaceHover($face) {
  var $hint = $('.faces-hint');
  var hintText = $face.attr('data-hint') || $hint.attr('data-default-hint');
  $hint.text(hintText);
}

function handleFacesHover(e) {
  var $face = getFace($(e.target));
  handleFaceHover($face);
}

$('.feedback-faces').on('mousemove', handleFacesHover);

function handleFeedbackTitleHover(e) {
  var isHover = e.type === 'mouseenter';
  $(this).parent().toggleClass('title-hovered', isHover);
}

$('.feedback-title').on('mouseenter mouseleave', handleFeedbackTitleHover);

function handleFeedbackToggle() {
  var $this = $(this),
      $parent = $this.parent();
  $parent.toggleClass('at-bottom');
  $parent.find('.face-wrapper').each(function (index) {
    setTimeout(function (face) {
      face.toggleClass('slide-out-y-alt', $parent.hasClass('at-bottom'));
    }, (index - 1) * 40, $(this));
  });
}

$('.feedback-title').on('click', handleFeedbackToggle);

function handleRateInputChange() {
  var rating = parseInt($(this).val());
  getFace($rateInputs).addClass('grayscale');
  getFace($(this)).removeClass('grayscale');
  postRating(rating);
}

$rateInputs.on('change', handleRateInputChange); //Firebase stuff

function setCounter(stats) {
  var $counters = $('.face-counter');

  function setTitle($counter, size) {
    var titleType = '',
        titlePrefix = '';

    if (size === 0) {
      titleType = 'none';
    } else if (size === 1) {
      titleType = 'one';
    } else {
      titleType = 'many';
      titlePrefix = "".concat(size, " ");
    }

    $counter.attr({
      'title': titlePrefix + $counter.attr("data-title-".concat(titleType))
    });
  }

  $counters.each(function (index) {
    var $counter = $counters.eq(index),
        size = stats[index] || 0;
    $counter.text(size);
    setTitle($counter, size);
    $counter.removeClass('invisible');
  });
}

function getTotalRating() {
  var stats = {};
  firebase.database().ref('votes').limitToLast(1000).once('value', function (snapshot) {
    snapshot.forEach(function (snap) {
      var val = snap.val();
      var voteStat = stats[val.vote];
      voteStat = voteStat ? voteStat + 1 : 1;
      stats[val.vote] = voteStat;
    });
    setCounter(stats);
  });
}

function postRating(rating) {
  var currentUser = firebase.auth().currentUser;

  if (currentUser) {
    var uid = currentUser.uid;
    var data = {
      vote: rating,
      time: new Date().getTime()
    };
    firebase.database().ref("votes/".concat(uid)).set(data).then(getTotalRating);
  }
}

function loginFB() {
  console.log('login');
  firebase.auth().signInAnonymously().then(function (user) {
    console.log(firebase.auth().currentUser.uid);
  }).catch(function (error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    if (errorCode === 'auth/operation-not-allowed') {
      alert('You must enable Anonymous auth in the Firebase Console.');
    } else {
      console.error(error);
    }
  });
}

function initFB() {
  var config = {
    apiKey: "AIzaSyA7-zbUFMXGItgDwVyfS0IVlqjCytQxQ8k",
    authDomain: "greatest-ever.firebaseapp.com",
    databaseURL: "https://greatest-ever.firebaseio.com",
    projectId: "greatest-ever",
    storageBucket: "greatest-ever.appspot.com",
    messagingSenderId: "784422044422"
  };
  firebase.initializeApp(config);

  if (!firebase.auth().currentUser) {
    loginFB();
  }
}

initFB();
</script>
</body>
</html>