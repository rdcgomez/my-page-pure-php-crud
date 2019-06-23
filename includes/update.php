<?php
require 'mypagedb_config.php';

  if(isset($_GET['edit_id']) ) {
    $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
    $query = $con->prepare($sql_query);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch();
  }

  if(isset($_POST['btn-update']) ) {
   // variables for input data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email_address'];
    $contact_number = $_POST['contact_number'];
    $url_website = $_POST['url_website']; 
    
    // sql query for update data into database
    $sql_query = "UPDATE users 
                  SET first_name='$first_name',
                      last_name='$last_name',
                      user_city='$city_name',
                      email_address='$email',
                      contact_number='$contact_number',
                      url_website='$url_website'
                  WHERE user_id= ".$_GET['edit_id'];

    $query = $con->prepare($sql_query);
    
     // sql query execution function
      if($query->execute() )  {
?>
        <script type="text/javascript">
          alert('Data Are Updated Successfully');
          window.location.href='mypagedatabase.php';
        </script>
      <?php
      } else {
      ?>
        <script type="text/javascript">
          alert('error occured while updating data');
        </script>
  <?php
      }

  }

  if(isset($_POST['btn-cancel']) ) {
    header("Location: mypagedatabase.php");
  }
  ?>