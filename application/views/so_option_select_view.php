<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Date Night</title>
</head>
<body>

<div id="container">
  <div id="body">
    <?php echo validation_errors(); ?>

    <?php echo form_open('thedatenight/results', '', $_POST); ?>

    <div id="preferences_restaurant">
      <div id="restaurant_categories">
	<span><h3>Significant Other Restaurant Preferences</h3></span>
	<span class="option_input">
	  <input type="checkbox" name="so_restaurant_categories[]" value="BREAKFAST">Breakfast<br/>
	  <input type="checkbox" name="so_restaurant_categories[]" value="CHINESE">Chinese<br/>
	  <input type="checkbox" name="so_restaurant_categories[]" value="ITALIAN">Italian<br/>
	  <input type="checkbox" name="so_restaurant_categories[]" value="MEXICAN">Mexican<br/>
	  <input type="checkbox" name="so_restaurant_categories[]" value="SOUTHERN">Southern<br/>
	  <input type="checkbox" name="so_restaurant_categories[]" value="THAI">Thai
	</span>
      </div>
    </div>
    <div id="preferences_event">
      <div id="event_categories">
	<span class="option_label"><h3>Significant Other Event Preferences</h3></span>
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
    </div>
    <br/>
    <div><input type="submit" value="Submit" /></div>
  </div>
</div>

</body>
</html>
