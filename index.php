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
    <center>
        <h2>June 17-18th</h2>
        <br>
        <img src="images/jogLong.png" alt="group of runners">
        <br>
        <br>
        <h3>Ace in the Hole MulitSports Weekend 2017</h3>
    </center>
      <div class="middle">
          <div class="mainColumn">
            <center>
            <table>
             <tr>
               <th>Race</th>
               <th>Date</th>
               <th>Start Time</th>
               <th>Cost</th>
             </tr>
             <tr>
               <td>Long Course</td>
               <td>Saturday</td>
               <td>7:00 AM</td>
               <td>$240</td>
             </tr>
             <tr>
               <td>Olympic</td>
               <td>Saturday</td>
                <td>7:30 AM</td>
               <td>$110</td>
             </tr>
             <tr>
               <td>10K</td>
               <td>Saturday</td>
                <td>7:15 AM</td>
               <td>$50</td>
             </tr>
             <tr>
               <td>Half Marathon</td>
               <td>Saturday</td>
                <td>7:15 AM</td>
               <td>$75</td>
             </tr>
             <tr>
               <td>Sprint</td>
               <td>Sunday</td>
                <td>8:00 AM</td>
               <td>$90</td>
             </tr>
             <tr>
               <td>Try-a-Tri</td>
               <td>Sunday</td>
                <td>8:20 AM</td>
               <td>$65</td>
             </tr>
             <tr>
               <td>Splash n Dash</td>
               <td>Sunday</td>
                <td>12:00 PM</td>
               <td></td>
             </tr>
          </table>
    </center>
    </div>
    <div class="sidebar">
   Weather for <span id="city"></span>, <span id="state"></span>
       <br>
    <img src="" id="weatherLogo" alt="weather logo">
    <p> Forecast:  <span id="weatherForcast"></span>
      <br>
    Currently: <span id="currentTemp"></span> </p>
    </div>
  </div>
  </main>

  <footer>
    <span class="copyRight">
      copyright &copy 2017 Built by Snowden Media
    </span>
  </footer>

  <script>
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "http://api.wunderground.com/api/ac560606f5212883/forecast/geolookup/conditions/q/OR/Portland.json", false);
  xhr.send();
  console.log(xhr.status); // if this returns 200, then you are in like Flynn
  var weather = JSON.parse(xhr.responseText);
  console.log(weather);


  var xhr = new XMLHttpRequest();
  xhr.open("GET", "http://api.wunderground.com/api/ac560606f5212883/forecast/geolookup/conditions/q/OR/Portland.json", false);
  xhr.send();
  console.log(xhr.status); // if this returns 200, then you are in like Flynn
  var weather = JSON.parse(xhr.responseText);
  console.log(weather);
    $("#currentTemp").text(weather.current_observation.feelslike_f);
    $('#city').text(weather.location.city);
    $('#state').text(weather.location.state);
    $('#weatherTime').text(weather.current_observation.heat_index_string);
    $('#weatherForcast').text(weather.forecast.txt_forecast.forecastday[0].fcttext);
    $('#weatherLogo').attr("src", weather.current_observation.icon_url);
  </script>

  </body>
</html>
