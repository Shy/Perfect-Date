<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Date Night</title>
</head>
<body>
  <div id="container">
    <h1>Welcome to The Date Night</h1>
    <div id="body">
      <p>Select options, and stuff, then hit submit.</p>

      <!-- Print any errors found in the form -->
      <?php echo validation_errors(); ?>

      <?php echo form_open('thedatenight/results'); ?>

      <h5>Email Address</h5>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
      <br/>

      <!-- TODO: add form option stuff -->

      <div><input type="submit" value="Submit" /></div>
    </div>
  </div>
</body>
</html>
