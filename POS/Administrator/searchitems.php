
<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=posxdb", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt search query execution
try{
    if(isset($_REQUEST["term"])){
        // create prepared statement
        $sql = "SELECT * FROM products WHERE name LIKE :term";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST["term"] . '%';
        // bind parameters to statement
        $stmt->bindParam(":term", $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
             echo '<p>' ;

echo '-------------------------------------------------------------------------------------- <br>';
echo '<span class="indigo text-bold-500 "> Item Name:</span> ';

echo '<span class="black text-bold-100 "> ';
 echo $row['name'] ;
echo ' </span>';
echo '<br> ';
echo '<span class="indigo text-bold-500 "> Price:</span> ';
echo '<span class="black text-bold-100 "> ';
echo $_SESSION['SESS_CURREMY'];
echo ' ';
echo $row['price'] ;
echo '</span> ';
echo '<br> ';
echo '<span class="indigo text-bold-500 "> Quantity:</span>';
echo '<span class="black text-bold-100 "> ';
echo $row['qty'] ;
echo '</span><br> ';
echo '<span class="indigo text-bold-500 ">Status:</span> ';
echo '<span class="red text-bold-100 "> ';
echo $row['status'] ;
echo '</span><br> ';
echo '-------------------------------------------------------------------------------------- <br>';
 echo '<a href="add_cart.php?id=' ;
 echo $row['id'];
 echo '"> <i class="icon-android-cart"> </i> Add to Cart </a>';
echo ' ';
echo '|';
echo ' ';
 echo '<a href="editproduct.php?id=' ;
 echo $row['id'];
echo '"> <i class="icon-android-create" ></i> Edit </a>';
echo ' ';
echo '| ';
echo ' ';
 echo '<a href="deleteproduct.php?id=' ;
 echo $row['id'];
echo '"> <i class="icon-android-delete" ></i> Delete </a>';
echo ' <br>';

echo '-------------------------------------------------------------------------------------- ';
echo '</p>';

            }
        } else{
            echo "<p>No matches found</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>