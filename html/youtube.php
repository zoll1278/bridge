<?php
$api_key    = 'AIzaSyCFASlEHU29q0I_gNb1ekEmZSTCEShWdeo'; //my API key
$channel_id = 'UCo3a-OoSjrcRtWsYsfsceoQ'; //my channel ID
$max_result = 10;

$url = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channel_id.'&maxResults='.$max_result.'&key='.$api_key;
$video_list = json_decode(file_get_contents($url),TRUE);

foreach ($video_list['items'] as $item) {
if (isset($item['id']['videoId'])) {
echo '<div class="">
    <iframe width="750" height="422" src="https://www.youtube.com/embed/'.$item['id']['videoId'].'" frameborder="0" allowfullscreen></iframe>
    <h2>'. $item['snippet']['title'] .'</h2>
</div>';
}
}