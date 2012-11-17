<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Date Night</title>

  <!-- CSS Stuff -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/option_select_view.css">

  <!-- JavaScript Stuff -->
  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/option_select_view.js"></script>

</head>
<body>
  <div id="container">
    <h1>Welcome to The Date Night</h1>
    <div id="body">
      <p>Select options, and stuff, then hit submit.</p>

      <!-- Print any errors found in the form -->
      <?php echo validation_errors(); ?>

      <?php echo form_open('thedatenight/results'); ?>

      <ul>
	<li id="preferences_restaurant">
	  <span class="preference_labal">Restuarant Preferences</span>
	  <ul id="restaurant_categories">
	    <li class="option_label">What kind of food do you like?</li>
	    <li class="option_input">
	      <input type="checkbox" name="restaurant_categories" value="BREAKFAST">Breakfast<br/>
	      <input type="checkbox" name="restaurant_categories" value="CHINESE">Chinese<br/>
	      <input type="checkbox" name="restaurant_categories" value="ITALIAN">Italian<br/>
	      <input type="checkbox" name="restuarant_categories" value="MEXICAN">Mexican<br/>
	      <input type="checkbox" name="restaurant_categories" value="SOUTHERN">Southern<br/>
	      <input type="checkbox" name="restaurant_categories" value="THAI">Thai
	    </li>
	  </ul>
	  <ul id="restaurant_price">
	    <li class="option_label">What is your restaurant price range? (1-5)</li>
	    <li class="option_input">
	      <input id="restaurant_range_slider" type="range" name="restaurant_price"
		     min="1" max="5" onchange="updateSlider('restaurant_range_slider');">
	      <span id="restaurant_range_slider_display">3</span>
	    </li>
	  </ul>
	</li>
	<li id="preferences_event">
	  <span class="preference_labal">Event Preferences</span>
	  <ul id="event_categories">
	    <li class="option_label">What kind of events do you like?</li>
	    <li class="option_value">
	      <input type="checkbox" name="event_categories" value="OUTDOORS">Outdoors<br/>
	      <input type="checkbox" name="event_categories" value="SPORTS">Sports<br/>
	      <input type="checkbox" name="event_categories" value="TECHNOLOGY">Technology<br/>
	    </li>
	  </ul>
	  <ul id="event_price">
	    <li class="option_label">What is your event price range? (1-5)</li>
	    <li class="option_value">
	      <input id="event_range_slider" type="range" name="event_price"
		     min="1" max="5" onchange="updateSlider('event_range_slider');">
	      <span id="event_range_slider_display">3</span>
	    </li>
	  </ul>
	</li>
	<li id="preferences_shared">
	  <ul id="dress_type">
	    <li class="option_label">What dress code would you like?</li>
	    <li class="option_input">
	      <select name="dress_type">
		<option value="a">Any</option>
		<option value="c">Casual</option>
		<option value="f">Formal</option>
	      </select>
	    </li>
	  </ul>
	</li>
      </ul>

      <div><input type="submit" value="Submit" /></div>
    </div>
  </div>
</body>
</html>
