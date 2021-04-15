
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
        $sql = "SELECT * FROM sales_order WHERE mpesacode LIKE :term";
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
echo '<span class="indigo text-bold-500 "> Date:</span> ';

echo '<span class="black text-bold-100 "> ';
 echo $row['date'] ;
echo ' </span>';
echo '<br> ';
echo '<span class="indigo text-bold-500 "> Mpesa Code:</span> ';
echo '<span class="black text-bold-100 "> ';
echo $row['mpesacode'] ;
echo '</span> ';
echo '<br> ';
echo '<span class="indigo text-bold-500 "> Cart Details:</span>';
echo '<span class="black text-bold-100 "> ';
echo $row['cart_details'] ;
echo '</span><br> ';
echo '<span class="indigo text-bold-500 ">Sales Person:</span> ';
echo '<span class="red text-bold-100 "> ';
echo $row['slpn'] ;
echo '</span><br> ';
echo '-------------------------------------------------------------------------------------- <br>';
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