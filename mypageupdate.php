<?php
require 'includes/update.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="http://localhost:80/webprog/css/mypageupdate.css">

  <title>CRUD Raw PHP</title>
</head>

<body>
  <center>
    <div id="crud">
      <label>UPDATE INFORMATION</label>
        <form method="post">
          <table align="center">
            <tr><td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $row['first_name']; ?>" required /> </td></tr>
            <tr><td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $row['last_name']; ?>" required />  </td></tr>
            <tr><td><input type="text" name="city_name" placeholder="City" value="<?php echo $row['user_city']; ?>" required /> </td></tr>
            <tr><td><input type="text" name="email_address" placeholder="Email Address" value="<?php echo $row['email_address']; ?>" required />  </td></tr>
            <tr><td><input type="number" name="contact_number" placeholder="Contact Number" value="<?php echo $row['contact_number']; ?>" />  </td></tr>
            <tr><td><input type="url" name="url_website" placeholder="Website" value="<?php echo $row['url_website']; ?>" />  </td></tr>
            <tr><td>
              <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
              <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
            </td></tr>
          </table>
        </form>
    </div>
  </center>
</body>

</html>