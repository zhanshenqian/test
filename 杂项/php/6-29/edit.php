<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <?php

    $id = $_GET['id'];

    if( !$id ){
      exit('id不存在！');
    }

    $mysqli = new mysqli('localhost','root','','SHH160302');
    $mysqli->query('set names utf8');

    $sql = "SELECT * FROM movies WHERE `id`={$id}";

    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();

    // print_r( $row );

    // if($row['type'] == '动作') echo 'select';
    // if($row['type'] == '喜剧') echo 'select';

  ?>

  <form action="add.php" method="get">
          <!-- 隐藏表单的作用:记录下id值,提交到add.php页面中,这样在add.php页面中才能知道需要修改的是那一条影片信息 -->
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    电影名：<input type="text" name="name" value="<?php echo $row['name']; ?>">
    类型： <select name="type">
            <option value="1" <?php if($row['type'] == '动作') echo 'selected'; ?>>动作</option>
            <option value="2" <?php if($row['type'] == '冒险') echo 'selected'; ?>>冒险</option>
            <option value="3" <?php if($row['type'] == '喜剧') echo 'selected'; ?>>喜剧</option>
            <option value="4" <?php if($row['type'] == '爱情') echo 'selected'; ?>>爱情</option>
          </select>
    地区： <select name="area">
            <option value="1" <?php if($row['area'] == '北美') echo 'selected'; ?>>北美</option>
            <option value="2" <?php if($row['area'] == '内地') echo 'selected'; ?>>内地</option>
            <option value="3" <?php if($row['area'] == '欧洲') echo 'selected'; ?>>欧洲</option>
            <option value="4" <?php if($row['area'] == '港台') echo 'selected'; ?>>港台</option>
          </select>
    地区： <select name="year">
            <option value="2016" <?php if($row['year'] == '2016') echo 'selected' ?>>2016</option>
            <option value="2015" <?php if($row['year'] == '2015') echo 'selected' ?>>2015</option>
            <option value="2014" <?php if($row['year'] == '2014') echo 'selected' ?>>2014</option>
          </select>
    <input type="submit" name="submit" value="更新">
  </form>

  <?php

   $mysqli->close();

  ?>

</body>
</html>