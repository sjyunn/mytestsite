<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Patch List</title>
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
    <div class="ex-layout">
      <div class="menu">
        <h1><a href="index.php">고도몰 5 스탠다드 패치 리스트</a></h1>
      </div>
      <div class="main">
        <div class="left-menu">
          <ol>
            <?php
              $list = scandir('data');
              $i = 0;
              while($i<count($list)){
                if($list[$i] != '.'){
                  if($list[$i] != '..'){
                    ?>
                    <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                    <?php
                  }
                }
                $i = $i +1;
              }
            ?>
          </ol>
        </div>
        <div class="content">
          <div class="article">
            <div class="title2">
              <h2>
                  <?php
                    if(isset($_GET['id'])){
                      // $string_result = file_get_contents("data/".$_GET['id']);
                      // $string_title = fgets($string_result);
                      // echo $string_title;
                      echo $_GET['id'];
                    }else{
                      echo "Welcome";
                    }
                  ?>
              </h2>
            </div>
            <p class="cont">
              <?php
                if(isset($_GET['id'])){
                  echo nl2br(file_get_contents("data/".$_GET['id']));
                  // echo nl2br($string_result);
                }else{
                  echo "Hello, PHP";
                }
              ?>
            </p>
          </div>
          <div class="comment">
            <h2>
              <?php
                echo date('Y-m-d H:i:s');
              ?>
            </h2>
          </div>
        </div<>
      </div>
    </div>
  </body>
</html>
