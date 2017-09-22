# 百度语音识别（[AipSpeech](http://ai.baidu.com/docs/#/ASR-Online-PHP-SDK/top "AipSpeech")）

# 一、简介
### 1. 接口名称	
接口能力简要描述

### 2. 语音识别	
将人类的语音中的词汇内容转换为计算机可读的输入，例如按键、二进制编码或者字符序列
# 二、安装及使用
### 1. 安装
    
    `composer require fnf_1993/aip-speech`
    
### 2.使用
    ```
    $app_id = 'xxx';
    $api_key = 'xxxx';
    $secret_key = 'xxxx';
    
    $aipSpeech = new AipSpeech($app_id, $api_key, $secret_key);
    $path = "0.wav";
    // 识别本地文件
    $result = $aipSpeech->asr(file_get_contents($path), 'wav', 16000,[
        'lan' => 'zh'
    ]);
    
    // 从URL获取文件识别
    $aipSpeech->asr(null, 'pcm', 16000, array(
        'url' => 'http://121.40.195.233/res/16k_test.pcm',
        'callback' => 'http://xxx.com/receive',
    ))；
    
    var_dump($result);
    
    ```