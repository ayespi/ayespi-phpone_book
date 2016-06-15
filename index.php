<!DOCTYPE html>
<html>
  <head>
    <title>Phpone Book</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1><?php echo("My Phpone Book:");?></h1>
    <!-- - Add a "New Entry" form
      - It should have a field for the name and a field for the phone number
      - It should POST to `index.php`
      - Verify the data is being POSTed correctly using `$_POST` -->
      <h2>New Entry</h2>
      <form id="form-entries" method="POST" action="index.php">
        <label for="input-name">Name:</label>
        <input id="input-name" type="text" name="name" placeholder="enter full name">
        <label for="input-phone">Phone:</label>
        <input id="input-phone" type="text" name="phone" placeholder="enter phone number">
        <input id="form-button_submit" type="submit" name="submit" value="Add New Entry">
      </form>
    <?php
      $jsonData = file_get_contents("family.json");
      $json = json_decode($jsonData, true);
      $output ="<ul>";
      foreach($json['family'] as $familyMember){
        $output .= "<li class=\"li-name\">" . $familyMember['name'] . "</li>";
        $output .= "<li class=\"li-phone\">" . $familyMember['phone'] . "</li>";
      }
      $output .="</ul>";
      echo($output);
    ?>
    <h2>Jenny Jennyson</h2>
    <p>(123)867-5309</p>
    <button>Delete</button>
  </body>
</html>
