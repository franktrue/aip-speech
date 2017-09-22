<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/9/22
 * Time: 9:07
 */

namespace Fnf1993\AipSpeech\Lib;


class AipImageUtil{

    /**
     * 获取图片信息
     * @param  $content string
     * @return array
     */
    public static function getImageInfo($content){
        $info = getimagesizefromstring($content);

        return array(
            'mime' => $info['mime'],
            'width' => $info[0],
            'height' => $info[1],
        );
    }
}