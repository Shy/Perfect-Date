<!DOCTYPE html>
<html lang="en">
<head>
  <!-- JavaScript Stuff -->
  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/option_select_view.js"></script>

</head>
<body>
  <div id="container">
    <div id="body">
      <?php echo validation_errors(); ?>

      <?php echo form_open('thedatenight/so_option_select'); ?>

      <div id="preferences_restaurant">
	<div id="restaurant_categories">
	  <span class="option_label"><h3>Restuarant Preferences</h3></span>
	  <span class="option_input">
	    <input type="checkbox" name="restaurant_categories[]" value="AMERICAN"><span>American</span><br/>
	    <input type="checkbox" name="restaurant_categories[]" value="BREAKFAST"><span>Breakfast</span><br/>
	    <input type="checkbox" name="restaurant_categories[]" value="CHINESE"><span>Chinese</span><br/>
	    <input type="checkbox" name="restaurant_categories[]" value="ITALIAN"><span>Italian<span><br/>
	    <input type="checkbox" name="restaurant_categories[]" value="MEXICAN"><span>Mexican<span><br/>
	    <input type="checkbox" name="restaurant_categories[]" value="SOUTHERN"><span>Southern<span><br/>
	    <input type="checkbox" name="restaurant_categories[]" value="THAI"><span>Thai</span>
	  </span>
	</div>
	<div id="restaurant_price">
	  <span class="option_label"><h3>Restaurant Price Range</h3></span>
	  <span class="option_input">
	    <input id="restaurant_range_slider" type="range" name="restaurant_price" min="1" max="5" onchange="updateSlider('restaurant_range_slider');">
	    <span id="restaurant_range_slider_display">3</span>
	  </span>
	</div>
      </div>
      <div id="preferences_event">
	<div id="event_categories">
	  <span class="option_label"><h3>Event Preferences</h3></span>
	  <span class="option_value">
	    <input type="checkbox" name="event_categories[]" value="ACTIVE">Active<br/>
	    <input type="checkbox" name="event_categories[]" value="ART">Art<br/>
	    <input type="checkbox" name="event_categories[]" value="BOWLING">Bowling<br/>
	    <input type="checkbox" name="event_categories[]" value="COLLEGE">College<br/>
	    <input type="checkbox" name="event_categories[]" value="Equestrian">Equestrian<br/>
	    <input type="checkbox" name="event_categories[]" value="GAME">Game<br/>
	    <input type="checkbox" name="event_categories[]" value="MUSIC">Music<br/>
	    <input type="checkbox" name="event_categories[]" value="OUTDOORS">Outdoors<br/>
	    <input type="checkbox" name="event_categories[]" value="PASSIVE">Passive<br/>
	    <input type="checkbox" name="event_categories[]" value="PHYSICAL">Physical<br/>
	    <input type="checkbox" name="event_categories[]" value="SPORTS">Sports<br/>
	    <input type="checkbox" name="event_categories[]" value="TECHNOLOGY">Technology
	  </span>
	</div>
	<div id="event_price">
	  <span class="option_label"><h3>Event Price Range</h3></span>
	  <span class="option_value">
	    <input id="event_range_slider" type="range" name="event_price" min="1" max="5" onchange="updateSlider('event_range_slider');">
	    <span id="event_range_slider_display">3</span>
	  </span>
	</div>
      </div>
      <div id="preferences_shared">
	<div id="dress_type">
	  <span class="option_label"><h3>Dress Code</h3></span>
	  <span class="option_input">
	    <select name="dress_type">
	      <option value="ANY">Any</option>
	      <option value="CASUAL">Casual</option>
	      <option value="FORMAL">Formal</option>
	    </select>
	  </span>
	</div>
      </div>
      <br/>
      <div class="submit_button"><input type="submit" value="Submit" /></div>
    </div>
  </div>
</body>
</html>
