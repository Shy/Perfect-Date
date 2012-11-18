<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Date Night</title>
</head>
<body>
  <div id="container">
    <div id="body">
      <div id="restaurants">
	<h3>Recomended Restaurants</h3>
	<?php foreach($restaurants as $index=>$restaurant): ?>
	<div id="rastaurantid-<?php echo $restaurant['id']; ?>">
	  <span class="entry-name"><?php echo $restaurant['name']; ?></span>
	  <span class="entry-info"><?php echo $restaurant['info']; ?></span>
	</div>
	  <?php endforeach; ?>
      </div>
      <div id="events">
	<h3>Recomended Events</h3>
	  <?php foreach($events as $index=>$event): ?>
	  <div id="eventid-<?php echo $event['id']; ?>">
	    <span class="entry-name"><?php echo $event['name']; ?></span>
	    <span class="entry-info"><?php echo $event['info']; ?></span>
	  </div>
	  <?php endforeach; ?>
      </div>
      <br/>
      <button type="button" onclick="location.href='http://97.107.130.57/~sruparel/thedatenight.co/index.php/thedatenight'">Start Again</button>
    </div>
  </div>
</body>
</html>
