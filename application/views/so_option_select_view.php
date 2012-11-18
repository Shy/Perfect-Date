<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Date Night</title>

  <!-- CSS Stuff -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>

<div id="container">
  <h1>Select your Significant Other's preferences:</h1>
  <div id="body">
    <?php echo validation_errors(); ?>

    <?php echo form_open('thedatenight/results', '', $_POST); ?>

    <ul>
      <li id="preferences_restaurant">
	<span class="preference_label">Significant Other Restaurant Preferences</span>
	  <ul id="restaurant_categories">
	    <li class="option_label">What kind of food does your Significant Other like?</li>
	    <li class="option_input">
	      <input type="checkbox" name="so_restaurant_categories[]" value="BREAKFAST">Breakfast<br/>
	      <input type="checkbox" name="so_restaurant_categories[]" value="CHINESE">Chinese<br/>
	      <input type="checkbox" name="so_restaurant_categories[]" value="ITALIAN">Italian<br/>
	      <input type="checkbox" name="so_restaurant_categories[]" value="MEXICAN">Mexican<br/>
	      <input type="checkbox" name="so_restaurant_categories[]" value="SOUTHERN">Southern<br/>
	      <input type="checkbox" name="so_restaurant_categories[]" value="THAI">Thai
	    </li>
	  </ul>
      </li>
      <li id="preferences_event">
	<span class="preference_label">Significant Other Event Preferences</span>
	  <ul id="event_categories">
	    <li class="option_label">What kind of events does your Significant Other like?</li>
	    <li class="option_value">
	      <input type="checkbox" name="so_event_categories[]" value="OUTDOORS">Outdoors<br/>
	      <input type="checkbox" name="so_event_categories[]" value="SPORTS">Sports<br/>
	      <input type="checkbox" name="so_event_categories[]" value="TECHNOLOGY">Technology
	    </li>
	  </ul>
      </li>
    </ul>

    <div><input type="submit" value="Submit" /></div>
  </div>
</div>

</body>
</html>
