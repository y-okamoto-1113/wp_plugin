<?php
/*
Plugin Name: paka3 AddText
Plugin URI: https://github.com/y-okamoto-1113
Description: さむねいる画像とは別に、OGP画像を生成するプラグイン
Author: Yuki Okamoto
Version: 0.1
Author URI:https://github.com/y-okamoto-1113
*/

function paka3_addtext($contentData) {
    $str = $contentData."<h3>【１日１プラグインはじめました！！】</h3>";
    return $str;
}
add_filter('the_content','paka3_addtext');
?>