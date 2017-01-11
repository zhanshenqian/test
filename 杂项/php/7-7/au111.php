<?php
require_once("oauth.php");
function getAllScore(){
  $mysqli = new mysqli(SAE_MYSQL_HOST_M . ":" . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
  
    
    $sql = "SELECT * FROM `gameRanking` WHERE 1";
    
    $result = $mysqli->query($sql);
    //$arr = array();
    while($row=$result->row){
        //  $row = $result->fetch_assoc();
    $str = json_encode($row);
    
    echo $str;
    }
    $mysqli->close();
}
//getAllScore();
// function sequence(){
  $mysqli = new mysqli(SAE_MYSQL_HOST_M . ":" . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "SELECT * FROM `gameRanking` order by score desc";
    $result = $mysqli->query($sql);
    // while( $row = $result->fetch_assoc() ){
    // print_r( $row );
    // }

    // echo $str;
    // if($result){
    // echo "排序成功";
    // }else{
    //  echo "排序失败";
    // }
    // $mysqli->close();
// }

// sequence();
// <?php
// //连接数据库
// $mysqli = new mysqli('localhost','root','','SHH160302');

// //设置编码格式
// $mysqli->query('set names utf8');

// //编写查询语句  查询数据库中的所有影片信息
// $sql = "SELECT * FROM movies";


// $results = $mysqli->query($sql);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    .wrapper {
      width: 800px; /*height: 500px;*/
      border: 1px solid #ccc;
      margin: 50px auto 0;
      padding: 10px 0 30px;
    }
    h2 { text-align: center; font-size: 30px; letter-spacing: 20px;}
    ul { margin: 0; padding: 0; }
    li { list-style: none;}
    span {
      display: inline-block;
      width: 80px; text-align: center;
      font-size: 20px;
    }
    .name { width: 260px; }
    .menu { width: 200px; }
    .menu a { margin-right: 20px; }
    .header span {
      font-weight: bold;
      line-height: 50px;
      font-size: 24px;
    }
    li span {
      line-height: 40px;
    }
    .add {
      padding: 50px 20px 0;
    }
    .add input,.add select {
      font-size: 20px;
    }
  </style>
</head>
<body>
  
  <div class="wrapper">
    <h2>排行榜</h2>
    <div class="header">
      <span>序号</span>
      <span class="name">openid</span>
      <span>昵称</span>
      <span>性别</span>
      <span>城市</span>
      <span>省会</span>
      <span>国家</span>
      <span>头像</span>
      <span>分数</span>
      <img src="" alt="">
    </div>
    <ul>

    <?php

    //循环取出所有影片数据  并且转换成关联数据
    while( $row = $results->fetch_assoc() ){
    //

      $html =<<<END
        <li>
          //<span>{$row['id']}</span>
          <span>$</span>

          <span class="name">{$row['openid']}</span>
          <span>{$row['nickname']}</span>
          <span>{$row['sex']}</span>
          <span>{$row['city']}</span> 
          <span>{$row['provice']}</span>
          <span>{$row['country']}</span>   
          <span class="menu">
            <img src="{$row['headimgurl']}" alt="">
          </span> 
          <span>{$row['score']}</span>        
        </li>
END;
      echo $html;
    }

    ?>

    </ul>
  </div>

<?php

//当所有操作都完成之后,关闭数据库连接
$mysqli->close();

?>
  
</body>
<script>
  var wrapper = Document.getElementByClassName('wrapper')[0];
  var lis = wrapper.getElementsByTagName('li');
  for (var i =0;i < lis.length;i++) {
    lis[i].innerHTML = i+1;
  }
</script>
</html>




?>