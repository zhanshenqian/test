<?php
//连接数据库
$mysqli = new mysqli('localhost','root','','SHH160302');

//设置编码格式
$mysqli->query('set names utf8');

//编写查询语句  查询数据库中的所有影片信息
$sql = "SELECT * FROM movies";


$results = $mysqli->query($sql);

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
    <h2>热门电影排行榜</h2>
    <div class="header">
      <span>序号</span>
      <span class="name">片名</span>
      <span>类型</span>
      <span>地区</span>
      <span>年份</span>
    </div>
    <ul>

    <?php

    //循环取出所有影片数据  并且转换成关联数据
    while( $row = $results->fetch_assoc() ){
    //

      $html =<<<END
        <li>
          <span>{$row['id']}</span>
          <span class="name">{$row['name']}</span>
          <span>{$row['type']}</span>
          <span>{$row['area']}</span>
          <span>{$row['year']}</span>        
          <span class="menu">
            <a href="edit.php?id={$row['id']}" target="_blank">编辑</a>
            <a href="del.php?id={$row['id']}">删除</a>
          </span>        
        </li>
END;
      echo $html;
    }

    ?>

    </ul>
    <div class="add">
      <h3>添加影片</h3>
      <form action="add.php" method="get">
        电影名：<input type="text" name="name">
        类型： <select name="type" value="2">
                <option value="1">动作</option>
                <option value="2">冒险</option>
                <option value="3">喜剧</option>
                <option value="4">爱情</option>
              </select>
        地区： <select name="area">
                <option value="1">北美</option>
                <option value="2">内地</option>
                <option value="3">欧洲</option>
                <option value="4">港台</option>
              </select>
        年份： <select name="year">
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
              </select>
        <input type="submit" name="submit" value="添加">
      </form>
    </div>
  </div>

<?php

//当所有操作都完成之后,关闭数据库连接
$mysqli->close();

?>
  
</body>
</html>