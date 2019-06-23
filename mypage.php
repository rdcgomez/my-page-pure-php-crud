<?php
require 'includes/validation.php';
require 'includes/addingdata.php';
?>

<!DOCTYPE html>
<html> 
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" type="text/css" href="http://localhost:80/webprog/css/home.css">

  <title>CRUD Raw PHP</title>
</head>

<body>
  <p id="Greetings">Welcome To My Page!</p>

  <h1 class="serif">About Me</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
        </tr>
        <tr>
            <td>Renz</td>
            <td>Daryl</td>
            <td>Carullo</td>
            <td>Gomez</td>
        </tr>
    </table>

  <h2 id="my-hobbies">Hobbies</h2>

    <div class="Hobbies">My hobbies are:
      <p id="Sports"></p>
      <img src="https://via.placeholder.com/40" alt = "Steph Curry and Lebron James"> <br>
      <button type="button" onclick="document.getElementById('Sports').innerHTML = '1. Playing Basketball'">SHOW MY FIRST HOBBY!</button> <br>
      <button type="button" onclick="document.getElementById('Sports').style.color = 'red'">Add Color to the Text!</button>
      
      <p id="Instrument"></p>
      <img src="https://via.placeholder.com/40" alt ="Guitar"> <br>
      <button type="button" onclick="document.getElementById('Instrument').innerHTML = '2. Playing Musical Instruments'">SHOW MY SECOND HOBBY!</button><br>
      <button type="button" onclick="document.getElementById('Instrument').style.color = 'blue'">Add Color to the Text!</button>
      
      <p id="VideoGames"></p>
      <img src="https://via.placeholder.com/40" alt ="Consoles"> <br>
      <button type="button" onclick="document.getElementById('VideoGames').innerHTML = '3. Playing Video Games'">SHOW MY THIRD HOBBY!</button><br>
      <button type="button" onclick="document.getElementById('VideoGames').style.color = 'green'">Add Color to the Text!</button>
      
      <p id="Studying"></p>
      <img src="https://via.placeholder.com/40" alt ="Books"> <br>
      <button type="button" onclick="document.getElementById('Studying').innerHTML = '4. Studying'">SHOW MY FOURTH HOBBY!</button><br>
      <button type="button" onclick="document.getElementById('Studying').style.color = 'orange'">Add Color to the Text!</button>
      
      <p id="ReadingAnime"></p>
      <img src="https://via.placeholder.com/40" alt = "Trafalgar Law with Chopper"> <br>
      <button type="button" onclick="document.getElementById('ReadingAnime').innerHTML = '5. Reading Manga'">SHOW MY FIFTH HOBBY!</button><br>
      <button type="button" onclick="document.getElementById('ReadingAnime').style.color = 'yellow'">Add Color to the Text!</button>
      
      <p id="Internet"></p>
      <img src="https://via.placeholder.com/40" alt ="World Wide Web"> <br>
      <button type="button" onclick="document.getElementById('Internet').innerHTML = '6. Surfing the net'">SHOW MY SIXTH HOBBY!</button><br>
      <button type="button" onclick="document.getElementById('Internet').style.color = 'pink'">Add Color to the Text!</button>
      
    </div>
    
  <br>
  <br>
  <!-- <h3 class="guest-information">Enter guest information</h3>

    <div>
      <p><span class="error">* required field.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          <span class="text-white">Name:<span> <input type="text" name="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span>
          <br><br>
          <span class="text-white">E-mail:<span> <input type="text" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span>
          <br><br>
          <span class="text-white">Website:<span> <input type="text" name="website" value="<?php echo $website;?>">
          <span class="error"><?php echo $websiteErr;?></span>
          <br><br>
          <span class="text-white">Comment:<span> 
          <textarea name="comment" rows="10" cols="40"><?php echo $comment;?></textarea>
          <br><br>
          <span class="text-white">Gender:<span>
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>
    </div> -->


  <center>
    <div id="crud">
      <label>Hello There! Pls enter your information so i can store it inside my database before you leave. Thank You! ^_^</label>
          <form method="post">
            <table align="center">
              <tr>
                <th align="center"><a href="http://localhost:80/webprog/mypagedatabase.php">Check Database</a></th>
              </tr>
              <tr><td><input type="text" name="first_name" placeholder="First Name" required /> </td></tr>
              <tr><td><input type="text" name="last_name" placeholder="Last Name" required /> </td></tr>
              <tr><td><input type="email" name="email_address" placeholder="Email Address" required />  </td></tr>
              <tr><td><input type="number" name="contact_number" placeholder="Contact Number" />  </td></tr>
              <tr><td><input type="text" name="city_name" placeholder="City" required />  </td></tr>
              <tr><td><input type="url" name="url_website" placeholder="Website" /> </td></tr>
              <tr><td>
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Male">Male
              </td></tr>
              <tr><td><button type="submit" name="btn-save">Save</button></td></tr>
            </table>
          </form>
    </div>
  </center>


  <h4>Here are some of my favorite websites.</h4>
    <a href="http://9gag.com/" target="_blank">9GAG</a>
    <a href="https://www.facebook.com/" target="_blank">Facebook</a>
    <a href="https://www.youtube.com/" target="_blank">Youtube</a>
</body>

</html>