<?php
/**
  * wechat php test
  */

//define your token

//use sinacloud\sae\Storage as Storage;
//$s = new Storage();
define("TOKEN", "wei");
$wechatObj = new wechatCallbackapiTest();

$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

//$s->putObject($postStr, "wechatbucket", "string.txt", array(), array('Content-Type' => 'text/plain;charset=utf-8'));

if(!empty($postStr)){
    
    $wechatObj->responseMsg();
    
}else{
    
    
    $wechatObj->valid();
    
}


$wechatObj->valid();

class wechatCallbackapiTest
{
    public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    public function responseMsg()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr)){
                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                   the best way is to check the validity of xml by yourself */
                libxml_disable_entity_loader(true);
                $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $MsgType = trim($postObj->MsgType);
                if($MsgType == 'text'){  //用户给我发了文本信息
                    
                    $content = $postObj->Content;
                    $sendcontent = '收到了"'.$content.'"';
                    
                    $time = time();
                    $msgType = "text";
                    $textTpl = "<xml>
                                    <ToUserName><![CDATA[%s]]></ToUserName>
                                    <FromUserName><![CDATA[%s]]></FromUserName>
                                    <CreateTime>%s</CreateTime>
                                    <MsgType><![CDATA[%s]]></MsgType>
                                    <Content><![CDATA[%s]]></Content>
                                </xml>";
                    
                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $sendcontent);
                    
                    echo $resultStr;
                
                }
                
                             
        }else {
            echo "";
            exit;
        }
    }
        
    private function checkSignature()
    {
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
                
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }
}

?>