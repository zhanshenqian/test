<?php 
function httpGet($url){
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($cURL);
curl_close($cURL);

return $response;
}
$token = "Ssq2O_LgDXcuOMyhAKo9-5pNZ9x7GzzUkcz9Te1bPzcz6kSaoTNjdD-7NlchN0sI-YTQHqBgj9ksjoAPKCF5qk5m0o0r0GKZZrf71SC67PBCd0FXNdtz6fFyD9yLLeWAGBOdAJATOB";
$url =  "https://api.weixin.qq.com/cgi-bin/user/get?access_token={$token}&next_openid="; 
// echo httpGet($url);


function httpPost($url,$postdata){
	$cURL = curl_init();
	curl_setopt($cURL, CURLOPT_URL, $url);
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cURL, CURLOPT_POST, true);
	curl_setopt($cURL, CURLOPT_POSTFIELDS, $postdata);
	$response = curl_exec($cURL);

	curl_close($cURL);
	return $response;

}
$url1 = "https://api.weixin.qq.com/cgi-bin/user/info/updateremark?access_token={$token}";
$postdata = '{
"openid":"oEOkqw9vOjgiS58sx7B5iyhItF_E",
"remark":"gas","nickname":"5"
}';
// echo httpPost($url1,$postdata);
$url3 =  "https://api.weixin.qq.com/cgi-bin/user/info?access_token={$token}&openid=oEOkqw9vOjgiS58sx7B5iyhItF_E&lang=zh_CN "; 
// echo httpGet($url3);


$url4 = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$token}";
$postdata = '{
     "button":[
     {	
          "type":"click",
          "name":"今日歌曲",
          "key":"V1001_TODAY_MUSIC"
      },
      {
           "name":"菜单",
           "sub_button":[
           {	
               "type":"view",
               "name":"搜索",
               "url":"http://www.soso.com/"
            },
            {
               "type":"view",
               "name":"视频",
               "url":"http://v.qq.com/"
            },
            {
               "type":"click",
               "name":"赞一下我们",
               "key":"V1001_GOOD"
            }]
       }]
 }

其他新增按钮类型的请求示例

{
    "button": [
        {
            "name": "扫码", 
            "sub_button": [
                {
                    "type": "scancode_waitmsg", 
                    "name": "扫码带提示", 
                    "key": "rselfmenu_0_0", 
                    "sub_button": [ ]
                }, 
                {
                    "type": "scancode_push", 
                    "name": "扫码推事件", 
                    "key": "rselfmenu_0_1", 
                    "sub_button": [ ]
                }
            ]
        }, 
        {
            "name": "发图", 
            "sub_button": [
                {
                    "type": "pic_sysphoto", 
                    "name": "系统拍照发图", 
                    "key": "rselfmenu_1_0", 
                   "sub_button": [ ]
                 }, 
                {
                    "type": "pic_photo_or_album", 
                    "name": "拍照或者相册发图", 
                    "key": "rselfmenu_1_1", 
                    "sub_button": [ ]
                }, 
                {
                    "type": "pic_weixin", 
                    "name": "微信相册发图", 
                    "key": "rselfmenu_1_2", 
                    "sub_button": [ ]
                }
            ]
        }, 
        {
            "name": "发送位置", 
            "type": "location_select", 
            "key": "rselfmenu_2_0"
        },
        {
           "type": "media_id", 
           "name": "图片", 
           "media_id": "MEDIA_ID1"
        }, 
        {
           "type": "view_limited", 
           "name": "图文消息", 
           "media_id": "MEDIA_ID2"
        }
    ]
}';
echo httpPost($url4,$postdata);
$url5 = "https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$token}";
echo httpGet($url5);

 ?>