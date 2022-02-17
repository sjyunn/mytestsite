<?php
  $conn = mysqli_connect("127.0.0.1","root","111111","sjtest_db");
  /* check connection*/
  if(mysqli_connect_error()){
    echo "Connect failed."
  }
  $sql = "
    INSERT INTO topic
      (title, description, created)
      VALUE (
        'MySQL2',
        'MySQL2 is ..',
        NOW()
        )";
  $result = mysqli_query($conn, $sql);
  if($result === false){
    echo mysqli_error($conn);
  }else{
    echo "good job";
  }

?>
