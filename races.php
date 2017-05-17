<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <title>Ace in the Hole</title>
  </head>
  <body>
    <header>

      <div class="headerText">
          <h4>Ace In the Hole</h4>
      </div>
      </header>
    <nav>
      <center>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="races.php">Races</a></li>
          <li><a href="faq.php">Faq</a></li>
          <li><a href="about.php">About</a></li>
          <li>Contact</li>
        </ul>
      <span class="mediaWrapper">
        <img src="images/facebook.png" alt="facebook link">
        <img src="images/twitter.png" alt="facebook link">
      </span>
    </center>
    </nav>
    <div class="extraBox"></div>
  <main>

    <!-- #region Jssor Slider Begin -->
    <!-- Source: https://www.jssor.com/pdsnowden/aceinthehole.slider -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-23.1.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        });
    </script>
    <style>
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        .jssora03l.jssora03ldn      (disabled)
        .jssora03r.jssora03rdn      (disabled)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
        .jssora03l.jssora03lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora03r.jssora03rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/tutu.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/stars.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/stick.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/above.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/tunnel.jpg" />
            </div>
            <a data-u="any" href="https://www.jssor.com/pdsnowden/aceinthehole.slider" style="display:none">Ace in the Hole Weekend</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;" data-autocenter="1">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->
    <div class="raceText">
      <center>
      <div class="courseName"><h1>Long Course SWIM $240</h1></div>
      <div class="courseLength"><h3>1.2mi</h3></div>
      <p>Participants will make two counter-clockwise
        loops. Large buoys will mark the turn points. Kayakers will be positioned on
         the water to support the swimmers. Medical support will be present on the beach.</p>

      <div class="courseName"><h1>Long Course BIKE $240</h1>
      <div class="courseLength"><h3>58 Miles</h3></div>
        <p>A scenic point-to-point course that travels over gently
         rolling hills prior to three hard climbs. The bike course will be marked
         with large directional signage and there will be course marshals at key
          intersections to help direct you.</p>


      <div class="courseName"><h1>Long Course Run $240</h1>
      <div class="courseLength"><h3>13 Miles</h3></div>
      <p> A mostly flat loop course on widely paved bike
        paths that traverse through and around this beautiful and scenic destination
         resort (two hills total with a minimal elevation gain).</p>

       <div class="courseName"><h1>OLYMPIC SWIM $110</h1>
      <div class="courseLength"><h3>1,500 meters </h3></div>
      <p> Participants will make two counter-clockwise
          loops. Large buoys will mark the turn points. Kayakers will be positioned
         on the water to support the swimmers. Medical support will be present on the beach.</p>

         <div class="courseName"><h1>OLYMPIC BIKE $110</h1>
        <div class="courseLength"><h3>28mi</h3></div>
      <p>A scenic point-to-point course that travels over
         gently rolling hills. The bike course will be marked with large directional
          signage and course marshals will be present at key intersections.</p>

          <div class="courseName"><h1>OLYMPIC RUN $110 </h1>
          <div class="courseLength"><h3>10K</h3></div>
          <p>A mostly flat loop course on widely paved bike paths
         that traverse through and around this beautiful and scenic destination resort
         (one hill total with a minimal elevation gain).</p>

         <div class="courseName"><h1>Sprint $90</h1>
         <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile
         Bike Course as the Olympic distance and a 5km run.</p>

         <div class="courseName"><h1>Try-A-Tri $65</h1>
         <p>This novice race is designed for the first time triathlete,
        those new to the sport, our Junior Triathletes. The swim is a shorter, more
        manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint
        distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course
        making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

        <div class="courseName"><h1>Half Marathon $75</h1>
        <div class="courseLength"><h3>13.1-miles</h3></div>
        <p>Half-Marathon event
          starts and finishes in the Athletes Village to the cheers of the
          enthusiastic crowd. Once finished, runners can enjoy the finish line
          festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified

          <div class="courseName"><h1>10k $50</h1>
          <div class="courseLength"><h3>10k</h3></div>
        <p> The 10K event starts and finishes in the Athletes Village.
           The paths are approximately 6 ft wide, perfectly paved and wind around
           through the forest. Each course has only two small hills with a minimal
            elevation gain to navigate and a fast downhill to flat finish to the
            roaring cheers of the crowd.</p>
        </center>
    </div>
  </main>
  <footer>
    <span class="copyRight">
      copyright &copy 2017 Built by Snowden Media
    </span>
    </footer>



  </body>
</html>
