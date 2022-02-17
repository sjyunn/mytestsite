<?php
  $conn = mysqli_connect("127.0.0.1","root","111111","sjtest_db");
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)) {
    // <li><a href="index.php?id=19">MySQL</a></li>
    // $list = $list."<li>{$row['title']}</li>";
    $list = $list."<li><a href=\"sqlindex.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title'=>'Welcom',
    'description'=>'Hello, Web'
  );

  if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM topic WHERE id = {$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['title'];
    $article['description'] = $row['description'];
  }

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="sqlindex.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form action="process_create.php" method="post">
      <p><input type="text" name="title" placeholder="title"</p>
      <p><textarea name="description" placeholder="descriptions"></textarea></p>
      <p><input type="submit"></p>
    </form>
</html>
