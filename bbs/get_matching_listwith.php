<?php
	include_once('./_common.php');

	$sql="select * from `jung-ang2` ";
	$sql.="where 1=1 ";

	if($_POST['que']!="all"){

		if($_POST['que']=="국가장학금 관련 정보를 알려줘"){
			$search.=" and ";
			$search.=" (지원내용 like '%장학%' ) or ";
			$search.=" (지원내용 like '%우수학생%' ) or ";
			$search.=" (지원내용 like '%이공계%' ) or ";
			$search.=" (지원내용 like '%인문%' ) or ";
			$search.=" (지원내용 like '%저소득층%' ) ";

			$arr = array('장학', '우수학생', '이공계','인문','저소득');

		}else if($_POST['que']=="학자금대출 관련 정보를 알려줘"){

			$search.=" and ";
			$search.=" (지원내용 like '%대출%' ) or ";
			$search.=" (지원내용 like '%등록금%' ) or ";
			$search.=" (지원내용 like '%대학%' ) or ";
			$search.=" (지원내용 like '%저소득층%' ) ";

			$arr = array('대출', '등록금', '대학','저소득층');

		}else if($_POST['que']=="취업연계장려금 관련 정보를 알려줘"){

			$search.=" and ";
			$search.=" (지원내용 like '%학자금%' ) or ";
			$search.=" (지원내용 like '%대학%' ) or ";
			$search.=" (지원내용 like '%취업촉진%' ) or ";
			$search.=" (지원내용 like '%저소득층%' ) or ";
			$search.=" (지원내용 like '%취업%' ) ";

			$arr = array('학자금', '대학', '취업','저소득','촉진');

		}else if($_POST['que']=="생활비지원 관련 정보를 알려줘"){

			$search.=" and ";
			$search.=" (지원내용 like '%등록금%' ) or ";
			$search.=" (지원내용 like '%대학%' ) or ";
			$search.=" (지원내용 like '%우수학생%' ) or ";
			$search.=" (지원내용 like '%생활%' ) or ";
			$search.=" (지원내용 like '%저소득층%' ) or ";
			$search.=" (지원내용 like '%취업%' ) ";

			$arr = array('등록금', '대학', '우수','생활','저소득','취업');


		}else if($_POST['que']=="기숙사비지원 관련 정보를 알려줘"){

		}else if($_POST['que']=="청년월세지원 관련 정보를 알려줘"){

		}else if($_POST['que']=="인턴쉽지원 관련 정보를 알려줘"){

		}else if($_POST['que']=="교환학생 관련 정보를 알려줘"){

		}else{
			$search.=" and 지원내용 like '%".$_POST['que']."%'";
		}
	}
		//$sql.="      exam_id     ='".$view['wr_2']."' and "; 
		//$sql.="      class_time  ='".$view['wr_3']."' and "; 
		//$sql.="      question_no ='".$view['wr_4']."' "; 
		//echo $sql;				
	//echo $sql;

	//카테고리 
	$sql2="select 서비스분야 from `jung-ang2` ";
	$sql2.="where 1=1 ";
	$sql2.=$search;
	$sql2.=" group by 서비스분야  ";

	//echo $sql." order by rand() limit 0,10"; 

	$result1=sql_query($sql." order by rand() limit 0,5");  
	
	
	for($i=0;$result=sql_fetch_array($result1);$i++){ 
?>
	<li style="display:none">
			<div class="box" style="display:flex">
				<div class="lt">
					<div class="problem" data-question="1399">
						<?php echo str_replace( $_POST['que'] ,"<span style='color:#08A8CD;font-weight:bold;'>".$_POST['que']."</span>",$result['서비스명']);?>

					</div>
					<div class="answer">
					<ul>
						<li>
							<label class="checkbox" style="display:flex">
								<input type="radio" name="answer" value="1">
								<p> <?php echo $result['소관기관코드'];?></p>
							</label>
						</li>
						<li>
							<label class="checkbox" style="display:flex">
								<input type="radio" name="answer" value="2">
								<p> <?php echo $result['서비스목적요약'];?></p>
							</label>
						</li>
						<li>
							<label class="checkbox" style="display:flex">
								<input type="radio" name="answer" value="3">
								<p> <?php echo $result['지원내용'];?></p>
							</label>
						</li>		
						</ul>
					</div>
					<div class="button">
                        <a href="<?php echo $result['servDtlLink'];?>">바로가기<?php //echo $result['servDtlLink'];?></a>
                    </div>
				</div>
				<div class="rt">
                    <div class="image"><img src="../resources/img/logo.png"></div>
                    <div class="text"><?php echo $result['jurMnofNm'];?> / <?php echo $result['jurOrgNm'];?></div>
				</div>
			</div>
	</li>   

	<li>
		<a href="<?php echo $result['상세조회URL'];?>" target="_blank">
			<div class="sub">				
				<p><img src="/html/img/logo.png" style="width:20px;height:20px">&nbsp;<?php echo $result['서비스분야'];?></p>
			</div>
<!-- 			<div class="tit"></div> -->
			<div class="txt"><?php echo $result['서비스목적요약'];?></div>
		</a>
	</li>

	<?php }?>

	<!-- naver blog 들어갈 부분 -->
<?php
//$ms=$_POST['que'];
//$encText = urlencode($ms); 
//$url = "https://openapi.naver.com/v1/search/blog.json?display=5&query=".$encText; // json 결과
//echo $url;
//echo "<BR>"; 
//
//$is_post = false;
//
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, $is_post);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//$headers = array();
//$headers[] = "X-Naver-Client-Id: "."UXn37QkUQ2mJth46DQV_"; 
//$headers[] = "X-Naver-Client-Secret: "."QSay4XYlEf"; 
//
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//
//$response = curl_exec ($ch);    //응답 값
//$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //응답 코드
//
//curl_close ($ch);
//
////echo "1111111111111111==>".$status_code;
//
//if($status_code == 200) {
//
//	//echo "22222222222222222";
//
//	//응답이 정상이라면 응답내용을 출력하는 부분
//	//var_dump($response);
//	//$res=	$response[0]['items'];
//
//
//	//echo $res; 
//	$k=0;
//	$response1=""; 
//	foreach ($data as $key => $value){
//		
//		if($k<5){
//
////			echo $data['items'][$k]['title'];
////			echo "<BR>";
////			echo mb_substr($data['items'][$k]['description'],0,30);
////			echo "<BR>";
////			echo $data['items'][$k]['link'];
////			echo "<BR>";
////			echo $data['items'][$k]['bloggername'];
////			echo "<BR>";
//
//			echo  '<li>';
//			echo  '	<a href="'.$data['items'][$k]['link'].' target="_blank">';
//			echo  '		<div class="sub">				';
//			echo  '			<p>'.$data['items'][$k]['bloggername'].">".$data['items'][$k]['title'].'</p>';
//			echo  '		</div>';
//			echo  '		<div class="txt">'.mb_substr($data['items'][$k]['description'],0,30).'</div>';
//			echo  '	</a>';
//			echo  '</li>';
//
//		}
//		$k=$k+1;
//	}
//
//	//echo "1111111111111111";
//	//$data = json_decode($response.$response1,true);
//
//	
//}
?>
    
	<script>
	<?php	
	$result2=sql_query($sql2); 
	//echo $sql2; 
	//for($i=0;$result=sql_fetch_array($result2);$i++){ 
	?>
		//$(".cr1").eq(<?php echo $i;?>).html("<?php echo $result['서비스분야'];?>");
	<?php //} ?>

	<?php	
		//for($j=0;$j<count($arr);$j++){ 
	?>
		//$(".cr2").eq(<?php echo $j;?>).html("<?php echo $arr[$j];?>");
	<?php //} ?>

	$("#query").html("<?php echo $_POST['que'];?>");
	</script>