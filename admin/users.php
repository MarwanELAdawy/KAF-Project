<?php
function delete_user()
{
  global $conn;
 if (isset($_GET['delete']))
 {
   echo 'here';
   $user_id=mysqli_escape_string($conn,$_GET['delete']);
   $sql = "DELETE FROM user where user_id='$user_id'";
   $result = mysqli_query($conn, $sql);
   if ($result) {
     header("Location:index.php?users");
   } else {
     echo "FAILED";
   }
 }
}
function show_users()
{
  global $conn;
  $sql = 'SELECT * FROM user';
  // make query and get result
  $result = mysqli_query($conn, $sql);
  // fetch the resulting rows as an associative array
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // free from memory as you don't need it 
  mysqli_free_result($result);
  // close the connectoin
  foreach ($users as $user) {
      ?>
      <tr>
        <th scope="row"><?php echo $user['user_id']; ?></th>
        <td><?php echo $user['user_full_name']; ?></td>
        <td><?php echo $user['user_name']; ?></td>
        <td><?php echo $user['user_password']; ?></td>
        <td><?php echo $user['user_email']; ?></td>
        <td><?php echo $user['user_phone']; ?></td>
        <td><a class="btn btn-dark" href="index.php?users&delete=<?php echo $user['user_id'] ?>">
          delete
        </a>
        </td>
       

      </tr>



    <?php
    } 
  }

?>
<?php
delete_user();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">full name</th>
      <th scope="col">name</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">delete</th>

     


    </tr>
  </thead>
  <tbody>
    <?php show_users() ?>

  </tbody>
</table>