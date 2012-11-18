<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Date Night</title>
</head>
<body>
  <div id="container">
    <h1>Your Potential Date Nights</h1>
    <div id="body">
      <div id="restaurants">
	<h2>Potential Restaurants</h2>
	<ul>
	<?php foreach($restaurants as $index=>$restaurant): ?>
	<li id="rastaurantid-<?php echo $restaurant['id']; ?>">
	  <ul>
	    <li class="entry-name"><?php echo $restaurant['name']; ?></li>
	    <li class="entry-info"><?php echo $restaurant['info']; ?></li>
	  </ul>
	</li>
	<?php endforeach; ?>
	</ul>
      </div>
      <div id="events">
	<h2>Potential Events</h2>
	<ul>
	<?php foreach($events as $index=>$event): ?>
	<li id="eventid-<?php echo $event['id']; ?>">
	  <ul>
	    <li class="entry-name"><?php echo $event['name']; ?></li>
	    <li class="entry-info"><?php echo $event['info']; ?></li>
	  </ul>
	</li>
	<?php endforeach; ?>
	</ul>
      </div>
    </div>
  </div>
</body>
</html>
