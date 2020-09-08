<?php
/**
 * Created by PhpStorm.
 * User: yanwen
 * Date: 2020-07-16
 * Time: 11:23
 */
function getToken()
{
    $appid = 'app_id';
    $appsecret = 'app_secret';
    $token_file = './token.txt';
    if(!file_exists($token_file) || ((time() - filemtime($token_file)) > 7000)){
        $TOKEN_URL="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;

        $json=file_get_contents($TOKEN_URL);
        $result=json_decode($json);

        $ACC_TOKEN=$result->access_token;
        file_put_contents($token_file,$ACC_TOKEN);
    }else{
        $ACC_TOKEN = file_get_contents($token_file);
    }
    return $ACC_TOKEN;
}

//调用发送方法
function sendmsg($content,$openid)
{
    $token = getToken();
    $url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$token;
    $content = '感谢你的关注\n biubiub \n例如<a href=\"http://www.baidu.com\">回复123456</a>';
    $data = '{
        "touser":"'.$openid.'",
        "msgtype":"text",
        "text":
        {
             "content":"'.$content.'"
        }
    }';
    https_request($url,$data);
    return true;
}

/**
 * request 请求
 */
function https_request($url, $data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}


sendmsg('yanwen nihao','ooBCb1PunS4xCuZrsmXaivz6vl8M');