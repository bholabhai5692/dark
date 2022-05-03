<?php
//streamer config
require_once '../videos/configuration.php';

if (!isCommandLineInterface()) {
    return die('Command Line only');
}
ob_end_flush();
$global['limitForUnlimitedVideos'] = -1;
$videos = video::getAllVideosLight("", false, true);
$count = 0;
foreach ($videos as $value) {
    $count++;
    $newDescription = str_replace('\n', PHP_EOL, $value['description']);
    if($newDescription !== $value['description']){
        echo "Change ($count) [{$value['id']}]{$value['title']} ******\n";
        $video = new Video('','',$value['id']);
        $video->setDescription($newDescription);
        $video->save();
    }else{
        echo "\n skip ($count) [{$value['id']}]{$value['title']} ******\n";
    }
    echo "\nFinish: ";
    echo "\n******\n";
}
