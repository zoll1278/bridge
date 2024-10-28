<?php
$encText = urlencode($_POST['que']);
$url = "https://openapi.naver.com/v1/search/blog.json?display=10&query=".$encText; // json 결과
//echo $url;

$is_post = false;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, $is_post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array();
$headers[] = "X-Naver-Client-Id: "."UXn37QkUQ2mJth46DQV_";
$headers[] = "X-Naver-Client-Secret: "."QSay4XYlEf";

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec ($ch);    //응답 값
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //응답 코드

curl_close ($ch);

if($status_code == 200) {

	//응답이 정상이라면 응답내용을 출력하는 부분
	//var_dump($response);
	//$res=	$response[0]['items'];

	$data = json_decode($response,true);

	//echo $res; 
	$k=0;
	foreach ($data as $key => $value){
		//var_dump($data['items'][0]);
		
		if($k<5){
//			echo $data['items'][$k]['title'];
//			echo "<BR>";
//			echo mb_substr($data['items'][$k]['description'],0,30);
//			echo "<BR>";
//			echo $data['items'][$k]['link'];
//			echo "<BR>";
//			echo $data['items'][$k]['bloggername'];
//			echo "<BR>";

			echo  '<li>';
			echo  '	<a href="'.$data['items'][$k]['link'].'" target="_blank">';
			echo  '		<div class="sub"><img src="/html/img/blog.png" style="width:20px;height:20px">				';
			echo  '			<p>'.$data['items'][$k]['bloggername'].">".$data['items'][$k]['title'].'</p>';
			echo  '		</div>';
			echo  '		<div class="txt">'.mb_substr($data['items'][$k]['description'],0,30).'</div>';
			echo  '	</a>';
			echo  '</li>';

		}
		$k=$k+1;
	}
	
} else {
//응답이 실패했을경우
echo "Error 내용:".$response;
}
