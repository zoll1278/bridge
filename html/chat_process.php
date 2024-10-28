<?php
include_once("../common.php");
header("Content-Type: application/json; charset=utf-8");

// GPT-3 메시지 처리 함수
function send_message_to_gpt($message) {
    $API_KEY = "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";
    $url = "https://api.openai.com/v1/chat/completions";
    
    $messages = array();
    $message_content = array("role" => "user", "content" => $message);
    $messages[] = $message_content;
    
    $data = array(
        "model" => "gpt-3.5-turbo",
        "messages" =>  $messages,
        "temperature" => 0.5,
        "max_tokens" => 100
    );
    
    $headers = array(
        "Content-Type: application/json",
        "Authorization: Bearer $API_KEY"
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($curl);
    curl_close($curl);

    $response = json_decode($response, true);
    $content = $response['choices'][0]['message']['content'];
    
    return nl2br($content); // 줄바꿈 처리
}

function send_message_to_gpt_keyword($message) {
    $API_KEY = "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";
    $url = "https://api.openai.com/v1/chat/completions";
    
    $messages = array();
    $message_content = array("role" => "user", "content" => $message);
    $messages[] = $message_content;
    
    $data = array(
        "model" => "gpt-3.5-turbo",
        "messages" =>  $messages,
        "temperature" => 0.5,
        "max_tokens" => 800
    );
    
    $headers = array(
        "Content-Type: application/json",
        "Authorization: Bearer $API_KEY"
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($curl);
    curl_close($curl);

    $response = json_decode($response, true);
    $content = $response['choices'][0]['message']['content'];
    
    return nl2br($content); // 줄바꿈 처리
}

function send_message_to_gpt_str($message) {
    $API_KEY = "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";
    $url = "https://api.openai.com/v1/chat/completions";
    
    $messages = array();
    $message_content = array("role" => "user", "content" => $message);
    $messages[] = $message_content;
    
    $data = array(
        "model" => "gpt-3.5-turbo",
        "messages" =>  $messages,
        "temperature" => 0.5,
        "max_tokens" => 600 
    );
    
    $headers = array(
        "Content-Type: application/json",
        "Authorization: Bearer $API_KEY"
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($curl);
    curl_close($curl);

    $response = json_decode($response, true);
    $content = $response['choices'][0]['message']['content'];
    
    return nl2br($content); // 줄바꿈 처리
}

$act = $_POST['act'];
$send_mb_id = $_POST['send_mb_id'];
$recv_mb_id = $_POST['recv_mb_id'];
$data = array();

if ($act == 'update') {
    $me_memo = strip_tags($_POST['me_memo'], '<br>');

    // 유저 메시지 DB 저장
    $sql = "INSERT INTO {$g5['memo_table']} (me_recv_mb_id, me_send_mb_id, me_send_datetime, me_memo) VALUES ('$recv_mb_id', '$send_mb_id', NOW(), '$me_memo')";
    sql_query($sql);

    // GPT-3 응답 받기
    $gpt_response = send_message_to_gpt($me_memo);

	$me_memo=$me_memo." 라고 질의햇을때 유사키워드 알려줘";
	//echo $me_memo;
	//echo "<BR>";
	$gpt_response_keyword =send_message_to_gpt_keyword($me_memo); 
	
	//var_dump($gpt_response_keyword); 
	//exit; 
	
	//send_message_to_gpt($me_memo);
	$str=explode("<br />\n",$gpt_response_keyword);

	for($k=0;$k<count($str);$k++){

		$str1=$str1."<li><button type='button'>".$str[$k]."</button></li>";
		if($k<4){
			$str2=$str2."<li><button type='button'>".$str[$k]."</button></li>";
		}
		
	}

	// 유사 키워드 받기 
	$data['keywordList1']=$str2; //4개짜리
	$data['keywordList2']=$str1; 
	
	$me_memo=$me_memo."와 유사한 질의어를 5개 만들어줘";
	//echo $me_memo;
	//echo "<BR>";
	$gpt_response_keyword_str =send_message_to_gpt_str($me_memo);
	$str=explode("<br />\n",$gpt_response_keyword_str);

	for($k=0;$k<count($str);$k++){

		$str3=$str3."<li><button type='button'>".$str[$k]."</button></li>";		
		
	}
	// 유사 질의어 받기
	$data['keywordStr']=$str3;	

    // GPT 메시지 DB 저장
    $sql = "INSERT INTO {$g5['memo_table']} (me_recv_mb_id, me_send_mb_id, me_send_datetime, me_memo) VALUES ('$send_mb_id', '$recv_mb_id', NOW(), '$gpt_response')";
    sql_query($sql);

    $data['gpt_response'] = array(
        'me_memo' => $gpt_response
    );

    die(json_encode($data));  // JSON 형식으로 응답
}

if ($act == 'load_history') {
    $data['history'] = array();
    
    // 기존 대화 기록 불러오기
    $sql = "SELECT * FROM {$g5['memo_table']} WHERE (me_send_mb_id = '$send_mb_id' AND me_recv_mb_id = '$recv_mb_id') OR (me_send_mb_id = '$recv_mb_id' AND me_recv_mb_id = '$send_mb_id') ORDER BY me_send_datetime ASC";
    $result = sql_query($sql);
    
    while ($row = sql_fetch_array($result)) {
        $sender = ($row['me_send_mb_id'] == $send_mb_id) ? '나' : 'BRIDGE';
        $data['history'][] = array(
            'sender' => $sender,
            'message' => $row['me_memo']
        );
    }
    
    die(json_encode($data));  // JSON 형식으로 응답
}
