<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "db_latihan"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM tbl_latihan3";


echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">X</font> </td> 
          <td> <font face="Arial">Y</font> </td> 
          <td> <font face="Arial">KATEGORI</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $X = $row["X"];
        $Y = $row["Y"];
        $KATEGORI = $row["KATEGORI"];

        echo '<tr> 
                  <td>'.$X.'</td> 
                  <td>'.$Y.'</td> 
                  <td>'.$KATEGORI.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>