<?php

if (isset($_POST['submit'])) {
     try {
    require "common.php";
    require_once '../src/DBconnect.php';

    $sql = "SELECT *
    FROM users";


    $statement = $connection->prepare($sql);

    $statement->execute();
    $result = $statement->fetchAll();
 } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
 }
}


require "templates/header.php";

if (isset($_POST['submit'])) {
 if ($result && $statement->rowCount() > 0) {
?>
 <h2>Results</h2>
 <table>
    <thead>
<tr>
 <th>#</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Email Address</th>
 <th>Age</th>
 <th>Password</th>
 <th>Date</th>
</tr>
 </thead>
 <tbody>
 <?php foreach ($result as $row) {  ?>
 <tr>
<td><?php echo escape($row["id"]); ?></td>
<td><?php echo escape($row["firstname"]); ?></td>
<td><?php echo escape($row["lastname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td> 
<td><?php echo escape($row["age"]); ?></td>
<td><?php echo escape($row["password"]); ?></td>
<td><?php echo escape($row["date"]); ?> </td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 <?php } else { ?>
 > No results found for <?php echo escape($_POST['password']); ?>.
 <?php }
 } ?>
<h2>Click "Reveal" to see results.</h2>
<form method="post">

 <input type="submit" name="submit" value="Reveal">
</form>
<a href="../Products.php">Back to home</a>
<?php require "templates/footer.php"; ?>