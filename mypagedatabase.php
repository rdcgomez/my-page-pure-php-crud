
<!--DELETE PHP CODE-->
<?php
require 'includes/delete.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" type="text/css" href="http://localhost:80/webprog/css/mypagedatabase.css">

  <title>CRUD Raw PHP</title>
  
</head>
<body>
  <center>
    <div id="crud">
      <label>VISITOR'S DATABASE</label>
        <table align="center">
          <tr>
            <th colspan="10"><a href="mypage.php">Homepage</a></th>
          </tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email Address</th>
          <th>City</th>
          <th>Contact</th>
          <th>Website</th>
          <th>Gender</th>
          <th colspan="3">Operations</th>
        
          
          <?php
          //  MySQLi Select Data (Procedural)
          // $sql_query="SELECT * FROM users";
          // $result_set=mysqli_query($con,$sql_query);
          // while($row=mysqli_fetch_row($result_set))  {

          //  MYSQLi Select Data (PDO)
          $sql_query= "SELECT * FROM users";
          $query = $con->prepare($sql_query);
          $query->execute();
          // set the resulting array to associative
          $query->setFetchMode(PDO::FETCH_ASSOC);
          while ($row = $query->fetch() ): 
          ?>
          
          <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email_address']; ?></td>
            <td><?php echo $row['user_city']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['url_website']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td align="center"><a href="javascript:edt_id('<?php echo $row['user_id']; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $row['user_id']; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
          </tr>

          <?php
          endwhile;
          // }
          ?>
        </table>
    </div>
  </center>


<script src="http://localhost:80/webprog/js/editdelete.js"></script>
</body>
</html>