<?php 
header("content-type:text/html;charset=utf-8");
require_once("request1.php");
$code = $_GET["code"];
echo $code;
echo "<hr>";
$state = $_GET["state"];

echo $state;
echo "<hr>";
$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx659ca3cb38648299&secret=3d381aa53e9971b05186b6276d3771b4&code={$code}&grant_type=authorization_code";
$res = httpGet($url);
//echo $res;
//echo "<hr>";
$obj = json_decode($res);
$token = $obj->access_token;
$openid = $obj->openid;

$url2 = "https://api.weixin.qq.com/sns/userinfo?access_token={$token}&openid={$openid}&lang=zh_CN";



$res2 = httpGet($url2);
$obj2 = json_decode($res2);
function addUser($user){
    $mysqli = new mysqli(SAE_MYSQL_HOST_M . ":" . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "SELECT openid FROM `gameRanking` WHERE openid={$user->openid}";
    //$arrt = array();
    $result = $mysqli->query($sql);
    // while( $row = $result->fetch_assoc() ){
    // array_push($arrt,$row);
    // }
    // //print_r( $arrt );
    // $arr = array();
    // for($i=0;$i<count($arrt);$i++){
        
    //     if($user->openid == '"'.$arrt["$i"].'"'){
    //          echo "添加成功1";   
    //     }else{
            if ($result) {
                echo "已有用户";
            }else{
            $openid = $user->openid;
            $nickname = $user->nickname;
            if ($user->sex == 0) {
                $sex = "无";
            }elseif ($user->sex == 1) {
                $sex = "男";
            }elseif ($user->sex == 2) {
                $sex = "女";
            }
        
            $city = $user->city;
            $provice = $user->provice;
            $country = $user->country;
            $headimgurl = $user->headimgurl;
            $score = mt_rand(0,1000000);
        
        
            $sql="INSERT INTO gameRanking(openid,nickname,sex,city,provice,country,headimgurl,score) VALUES ('{$openid}','{$nickname}','{$sex}','{$city}','{$provice}','{$country}','{$headimgurl}',{$score})";
            $result = $mysqli->query($sql);
            
            if($result){
                echo "添加成功";
            }else{
                echo "添加失败";
            }
        }
        }
    // }
    
   
    $mysqli->close();
}
addUser($obj2);
function getMaxScoreOfOpenid(){
    $mysqli = new mysqli(SAE_MYSQL_HOST_M . ":" . SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "SELECT score FROM gameRanking WHERE openid = '{$openid}'";
    $result = $mysqli->query($sql);
    $score = 0;
    if ($result->number_rows) {
        $row = $result->fetch_assoc();
        $score = $row["score"];
    }
    $mysqli->close();
    return $score;
}
function updateScoreOfOpenid($openid,$newScore){
    $mysqli = new mysqli(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB);
    if($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "UPDATE gameRanking SET score = {$newScore} WHERE openid = '{$openid}'";
    $result = $mysqli->query($sql);
    if ($result) {
        echo "更新成功";
    }else{
        echo "更新失败";
    }
    $mysqli->close();
}

$score = getMaxScoreOfOpenid($openid);
$newScore = mt_rand(0,1000000);
if ($newScore > $score) {
    updateScoreOfOpenid($openid,$newScore);
}
 ?>
