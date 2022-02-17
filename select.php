<?php
  $conn = mysqli_connect("127.0.0.1","root","111111","sjtest_db");
  /* check connection*/
  if(mysqli_connect_error()){
    echo "Connect failed.";
  }

  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  // if($result === false){
  //   echo "bad job";
  // }else{
  //   echo "good2 job";
  // }

  while($row = mysqli_fetch_array($result)){
    echo '<h1>'.$row['title'].'</h1>';
    echo $row['description'];
  }


?>
