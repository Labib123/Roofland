<?php
include("connectDB.php");


// SELECT * FROM residence;

// $query = $mysqli->query("SELECT * FROM residence");
//
// if ($result = $mysqli->query($query)) {
//
//     /* fetch associative array */
//     while ($row = $result->fetch_assoc()) {
//         $field1name = $row["col1"];
//         $field2name = $row["col2"];
//         $field3name = $row["col3"];
//         $field4name = $row["col4"];
//         $field5name = $row["col5"];
//
//     }
//
//     /* free result set */
//     $result->free();
// }

$query = "SELECT * FROM residence";


echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">Value1</font> </td>
          <td> <font face="Arial">Value2</font> </td>
          <td> <font face="Arial">Value3</font> </td>
          <td> <font face="Arial">Value4</font> </td>
          <td> <font face="Arial">Value5</font> </td>
      </tr>';

      $results = mysqli_query($connection, $query);


      if (mysqli_num_rows($results) >0) {
    while ($row = $results->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
              </tr>';
    }
    $result->free();
}
?>
</body>
</html>


 ?>
