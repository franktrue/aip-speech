<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/9/22
 * Time: 9:38
 */

require_once '../vendor/autoload.php';

use Fnf1993\AipSpeech\AipSpeech;

$app_id = 'xxxx';
$api_key = 'XXXX';
$secret_key = 'xxxx';

$aipSpeech = new AipSpeech($app_id, $api_key, $secret_key);
$path = "E:/WorkSpace/Laravel/silk-v3-decoder/0.wav";
$result = $aipSpeech->asr(file_get_contents($path), 'wav', 16000,[
    'lan' => 'zh'
]);

// 识别本地文件
//$aipSpeech->asr(file_get_contents('audio.pcm'), 'pcm', 16000, array(
//    'lan' => 'zh',
//));

// 从URL获取文件识别
//$aipSpeech->asr(null, 'pcm', 16000, array(
//    'url' => 'http://121.40.195.233/res/16k_test.pcm',
//    'callback' => 'http://xxx.com/receive',
//))；

var_dump($result);