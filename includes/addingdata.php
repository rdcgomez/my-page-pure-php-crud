<?php
require 'mypagedb_config.php';

  if(isset($_POST['btn-save']) ) {
    // variables for input data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email_address'];
    $url_website = $_POST['url_website']; 
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    // variables for input data

    // sql query for inserting data into database 
    $sql_query = "INSERT INTO users(first_name, last_name, 
                                    user_city, email_address, 
                                    contact_number, url_website, 
                                    gender) 
                  VALUES ('$first_name', '$last_name', 
                          '$city_name', '$email', 
                          '$contact_number', '$url_website', 
                          '$gender')";	
    // sql query for inserting data into database
    
    // sql query execution function
    $query = $con->prepare($sql_query);
    
    if($query->execute() ) {
?>
      <script type="text/javascript">
        alert('Data Are Inserted Successfully ');
        window.location.href='mypagedatabase.php';
      </script>
    <?php
    } else {
    ?>
      <script type="text/javascript">
        alert('error occured while inserting your data');
      </script>
  <?php
    }

  }
  ?>