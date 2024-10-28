2024-10-27<?php
    include_once("../common.php");
    include_once('./inc/header.php');
?>

<style>
.resources {
    font-family: Arial, sans-serif;
    /*margin: 20px;*/
}

.title {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.item-count {
    font-size: 14px;
    color: #555;
}

.tabs {
    margin: 10px 0;
}

.tab-list {
    display: flex;
    list-style: none;
    padding: 0;
}

.tab {
    padding: 10px 20px;
    cursor: pointer;
    background: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 20px; /* Rounded corners */
    margin-right: 10px;
    transition: background 0.3s, color 0.3s;
}

.tab.active {
    background: #007bff; /* Active tab color */
    color: white; /* Text color for active tab */
    font-weight: bold;
}

.tab:hover {
    background: #e0e0e0; /* Hover effect */
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
    padding: 5px;    
    border-radius: 10px; /* Rounded corners for content */
    background: #fff;
}

</style>
<div id="gpt_wrap">
    <div class="aside_wrap">
        <?php include_once('./inc/aside.php'); ?>
    </div>    

	<!--인트로 서비스-->
	<div class="intro_wrap" id="main">
        <div class="intro" style="">
            <div class="header">
                <div class="title">BRIDGE 챗봇</div>
                <div class="text">LLM gpt-3.5-turbo</div>
            </div>
		
            <div class="content" id="request" >

	            <div class="search">

                    <div class="input">
                        <div class="text"><textarea id="keyword" placeholder="찾고싶은 정보는 설명해주고 찾야달라고 요청해 보세요."></textarea></div>
                        <div class="tool">
                            <div class="lt flex" style="display:block">
                                <div class="attach" style="display:none">
                                    <label>
                                        <input type="file">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#61605aff"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 5C18.5523 5 19 5.44772 19 6V14.3385L17.6328 12.776C17.0311 12.0884 15.9596 12.0938 15.365 12.7875L13.5049 14.9577L9.54843 10.2818C8.73508 9.32059 7.2465 9.34107 6.45991 10.3243L5 12.1492L5 6C5 5.44772 5.44772 5 6 5H18ZM5 15.3508L5 18C5 18.0002 5 18.0003 5 18.0005C5.00027 18.5509 5.44516 18.9973 5.99497 19H18.005C18.555 18.9973 19 18.5506 19 18L19 17.3757L16.5078 14.5275L14.6413 16.705C14.0402 17.4064 12.9541 17.4029 12.3574 16.6977L8.02165 11.5737L5 15.3508ZM3 14.6492V6C3 4.34315 4.34315 3 6 3H18C19.6569 3 21 4.34315 21 6V16.6243V18C21 19.6569 19.6569 21 18 21H6C5.98706 21 5.97413 20.9999 5.96123 20.9998C5.76765 20.9973 5.57848 20.9765 5.3954 20.9391C4.02835 20.6593 3 19.4497 3 18V18V14.6492Z" fill="currentColor"></path></svg>
                                    </label>
                                </div>
                            </div>
                            <div class="rt flex">
                                <div class="submit"><a href="javascript:getResult(0);"><img src='/html/img/send_img.png'></a></div>
                            </div>
                            <script>
                                const DEFAULT_HEIGHT = 26;
                                const $textarea = document.querySelector('#msg');
                                $textarea.oninput = (event) => {
                                    const $target = event.target;
                                    $target.style.height = 0;
                                    $target.style.height = DEFAULT_HEIGHT + $target.scrollHeight + 'px';
                                };
                            </script>
                        </div>
                    </div>

                </div>
                <div class="quick">
                    <div class="slider quick-slider swiper-first">

                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="javascript:getResult(1);">
                                    <div class="ico"><img src="/html/img/s01.png" style="width:30px;height:30px"></div>
                                    <div class="tit">국가장학금 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li> 
							<li class="swiper-slide">
                                <a href="javascript:getResult(2);">
                                    <div class="ico"><img src="/html/img/s02.png" style="width:30px;height:30px"></div>
                                    <div class="tit">학자금대출 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>                              
							<li class="swiper-slide">
                                <a href="javascript:getResult(3);">
                                    <div class="ico"><img src="/html/img/s03.png" style="width:30px;height:30px"></div>
                                    <div class="tit">취업연계장려금 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>
							<li class="swiper-slide">
                                <a href="javascript:getResult(4);">
                                    <div class="ico"><img src="/html/img/s04.png" style="width:30px;height:30px"></div>
                                    <div class="tit">생활비지원 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>
							<li class="swiper-slide">
                                <a href="javascript:getResult(5);">
                                    <div class="ico"><img src="/html/img/s05.png" style="width:30px;height:30px"></div>
                                    <div class="tit">기숙사비지원 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>
							<li class="swiper-slide">
                                <a href="javascript:getResult(6);">
                                    <div class="ico"><img src="/html/img/s06.png" style="width:30px;height:30px"></div>
                                    <div class="tit">청년월세 지원 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>
							<li class="swiper-slide">
                                <a href="javascript:getResult(7);">
                                    <div class="ico"><img src="/html/img/s07.png" style="width:30px;height:30px"></div>
                                    <div class="tit">인턴쉽 지원 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>
							<li class="swiper-slide">
                                <a href="javascript:getResult(8);">
                                    <div class="ico"><img src="/html/img/s08.png" style="width:30px;height:30px"></div>
                                    <div class="tit">교환학생 장학금 관련 정보알아보기</div>
                                    <div class="act"><svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg></div>
                                </a>
                            </li>

                        </ul>


                    </div>
                    <button type="button" class="swiper-button-prev"><svg width="24" height="24" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#61605aff"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 18.801L9.55026 13.8512L9.19671 13.4977C8.61092 12.9119 8.61092 11.9621 9.19671 11.3764L9.55026 11.0228L14.5 6.07305L15.9142 7.48726L10.9645 12.437L15.9142 17.3868L14.5 18.801Z" fill="currentColor"></path></svg></button>
                    <button type="button" class="swiper-button-next"><svg width="24" height="24" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#61605aff"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 18.801L15.4498 13.8512L15.8033 13.4977C16.3891 12.9119 16.3891 11.9621 15.8033 11.3764L15.4498 11.0228L10.5 6.07305L9.08581 7.48726L14.0356 12.437L9.08581 17.3868L10.5 18.801Z" fill="currentColor"></path></svg></button>
                    <script>
                        var $swiper = document.querySelector('.quick-slider');
                        var swiper = new Swiper($swiper, {
                            slidesPerView: "auto",
                            spaceBetween: 20,
                            navigation : {
                                nextEl : '.swiper-button-next',
                                prevEl : '.swiper-button-prev',
                            },
                            on: {
                                activeIndexChange : function() {
                                    if (this.realIndex == 0) {
                                        $swiper.classList.add('swiper-first');
                                        startNum = false;
                                    } else {
                                        $swiper.classList.remove('swiper-first');
                                    }
                                },
                            },
                            breakpoints:{
                                300:{
                                    slidesPerView: "auto",
                                    spaceBetween: 10,
                                },
                                1280:{
                                    slidesPerView: "auto",
                                    spaceBetween: 20,
                                }
                            }
                        });
                    </script>
                </div><!--quick-->

            </div><!--content-->
        </div> <!-- intro -->
	
        <div class="bottom">
<!--             <ul> -->
<!--                 <li><a href="#">스토어</a></li> -->
<!--                 <li><a href="#">스튜디오</a></li> -->
<!--                 <li><a href="#">스튜디오 프로</a></li> -->
<!--                 <li><a href="#">프롬프트 공유</a></li> -->
<!--             </ul> -->
<!--             <ul> -->
<!--                 <li><a href="#">고객센터</a></li> -->
<!--                 <li><a href="#">이용약관</a></li> -->
<!--                 <li><a href="#">개인정보처리방침</a></li> -->
<!--                 <li><a href="#">청소년 보호정책</a></li> -->
<!--             </ul> -->
        </div>		
	</div> <!-- intro_wrap-->

	<!--검색결과 서비스-->
	<div class="chat_wrap" id="result" style="display:none">
        <div class="header">
            <h2 class="tit">새 대화</h2>
        </div>
        <div class="container">

            <div class="chat">
                <div class="list">
                    <ul id="chat-list">
                        <!-- 대화 내용이 여기에 추가됩니다. -->
                    </ul>
                </div>
                <div class="bottom">

                    <div class="keywordBox">
                        <ul class="ul" id="keyworkdBoxList2">
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드2</button></li> -->
<!--                             <li><button type="button">유사키워드3</button></li> -->
<!--                             <li><button type="button">유사키워드4</button></li> -->
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드2</button></li> -->
<!--                             <li><button type="button">유사키워드3</button></li> -->
<!--                             <li><button type="button">유사키워드4</button></li> -->
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드2</button></li> -->
<!--                             <li><button type="button">유사키워드3</button></li> -->
<!--                             <li><button type="button">유사키워드4</button></li> -->
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드2</button></li> -->
<!--                             <li><button type="button">유사키워드3</button></li> -->
<!--                             <li><button type="button">유사키워드4</button></li> -->
                        </ul>
                        <div class="close">X</div>
                    </div>
                    <div class="questionBox">
                        <ul class="ul" id="keyworkdBoxStr">
<!--                             <li><button type="button">국가장학금 신청 방법은?</button></li> -->
<!--                             <li><button type="button">국가장학금 신청 방법은?</button></li> -->
<!--                             <li><button type="button">국가장학금 신청 방법은?</button></li> -->
<!--                             <li><button type="button">국가장학금 신청 방법은?</button></li> -->
<!--                             <li><button type="button">국가장학금 신청 방법은?</button></li> -->
<!--                             <li><button type="button">국가장학금 신청 방법은?</button></li> -->
                        </ul>
                        <div class="close">X</div>
                    </div>

                    <div class="keyword" id="keywordBoxBottom" style="display:none">
                        <ul class="ul" id="keyworkdBoxList1">
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드1</button></li> -->
<!--                             <li><button type="button">유사키워드1</button></li> -->
                        </ul>
                        <div class="btn">
                            <button type="button" class="plusBtn">+</button>
                            <button type="button" class="qmBtn">?</button>
                        </div>
                    </div>
                    <script>
                        $(".plusBtn").on("click", function(){
                            $(".qmBtn").removeClass("on");
                            $(".questionBox").removeClass("on");
                            $(".keywordBox").addClass("on");
                            $(this).addClass("on");
                        })
                        $(".qmBtn").on("click", function(){
                            $(".plusBtn").removeClass("on");
                            $(".keywordBox").removeClass("on");
                            $(".questionBox").addClass("on");
                            $(this).addClass("on");
                        })
                        $(".keywordBox .close").on("click", function(){
                            $(".plusBtn").removeClass("on");
                            $(".qmBtn").removeClass("on");
                            $(this).closest(".keywordBox").removeClass("on");
                        })
                        $(".questionBox .close").on("click", function(){
                            $(".plusBtn").removeClass("on");
                            $(".qmBtn").removeClass("on");
                            $(this).closest(".questionBox").removeClass("on");
                        })
                    </script>
                    <div class="input">
                        <div class="text">
                            <textarea id="msg" placeholder="BRIDGE에게 무엇이든 물어보세요." rows="3"></textarea>
                        </div>
                        <div class="tool">
                            <div class="lt flex"></div>
                            <div class="rt flex">
                                <div class="submit">
                                    <button id="send-btn"><svg width="20" height="20" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#f7f7f5ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3423 7.48727L14.7565 6.07306L19.7063 11.0228L20.0598 11.3764C20.6456 11.9621 20.6456 12.9119 20.0598 13.4977L19.7063 13.8512L14.7565 18.801L13.3423 17.3868L17.2921 13.437L4.50082 13.437V11.437L17.2921 11.437L13.3423 7.48727Z" fill="currentColor"></path></svg><!--보내기--></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
			
<!-- 			<div class="resources"> -->
<!--                 <div class="title"> -->
<!-- 					<span class="cr1">결과화면</span> > <span class="cr2">클릭하시면 이동됩니다.</span>   -->
<!--                 </div> -->
<!--                 <div class="list"> -->
<!--                     <ul id="matchingList">						 -->
<!--                         <li> -->
<!--                             <div class="sub">                                 -->
<!--                                 <p>네이버 포스트</p> -->
<!--                             </div> -->
<!--                             <div class="tit">사회복지서비스란?</div> -->
<!--                             <div class="txt">사회복지 서비스는 개인이나 집단이 기본적인 생활을 영위하고, 사회적 참여를 증진하며, 삶의 질을 향상시키기 위해 제공되는 다양한 지원과 서비스를 말합니다. 이 서비스는 일반적으로 다음과 같은 영역에서 이루어집니다. 소득 지원: 저소득층이나 실업자에게 경제적 지원을 제공하여 기본적인 생활을 유지할 수 있도록 돕습니다. 주거 지원: 저소득 가구를 위한 주거지 제공, 주택 보조금 등 주거 안정성을 강화하는 서비스입니다. 의료 서비스: 의료 접근성을 높이기 위해 저소득층에게 의료비 지원, 건강 상담 및 예방 프로그램을 제공합니다. 정신건강 서비스: 정신적 어려움을 겪고 있는 개인을 위한 상담, 치료 및 지원 프로그램을 포함합니다. 아동 및 청소년 서비스: 아동의 보호와 발달을 지원하고, 청소년의 건강한 성장과 사회적 참여를 촉진하는 프로그램입니다. 노인 복지: 노인들이 건강하게 생활할 수 있도록 지원하고, 사회적 고립을 예방하기 위한 다양한 프로그램을 제공합니다. 장애인 서비스: 장애인의 자립과 사회 참여를 촉진하기 위한 맞춤형 지원과 서비스입니다. 이러한 서비스는 정부, 비영리 단체, 지역 사회 및 자원봉사자들에 의해 제공되며, 각 개인의 필요에 맞추어 다양한 형태로 이루어집니다. 사회복지 서비스는 사회적 연대와 평등을 강조하며, 모든 사람이 기본적인 권리를 누릴 수 있도록 돕는 중요한 역할을 합니다.</div> -->
<!--                         </li> -->
<!--                     </ul> -->
<!--                 </div> -->
<!--             </div> -->


			<div class="resources">
				<div class="title">
					<span class="cr1">결과화면</span> > <span class="cr2">클릭하시면 이동됩니다.</span>
<!-- 					<span class="item-count">(1개)</span> -->
				</div>
				<div class="tabs" style="display:none">
					<ul class="tab-list">
						<li class="tab active" onclick="showTab(0)">Data.go.kr</li>
						<li class="tab" onclick="showTab(1)">SOCIAL</li>
						<!-- Add more tabs as needed -->
					</ul>
				</div>
				<div class="list">
					<div class="tab-content active">
						<ul id="matchingList">
							<li>
								<div class="sub">
									<p>네이버 포스트</p>
								</div>
								<div class="tit">사회복지서비스란?</div>
								<div class="txt">사회복지 서비스는 개인이나 집단이 기본적인 생활을 영위하고...</div>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<ul id="matchingList2">
							<li>
								<a href="https://www.kosaf.go.kr/ko/main.do" target=_blank>
								<div class="sub">
									<p><img src="https://www.google.com/s2/favicons?domain=https://www.kosaf.go.kr/&amp;sz=64" alt="favicon" style="width: 16px; height: 16px; border-radius: 16px;">한국장학재단</p>
								</div>
								<div class="tit">한국장학재단</div>
								<div class="txt">국가장학금 운영, 학자금 대출, 우수인재, 학생 주거시설 지원등 종합장학지원 준정부기관.</div>
								</a>
							</li>
							<li>
								<a href="https://m.blog.naver.com/moeblog/222578737672" target=_blank>
								<div class="sub">
									<p><img src="https://www.google.com/s2/favicons?domain=https://m.blog.naver.com/moeblog/222578737672&amp;sz=64" alt="favicon" style="width: 16px; height: 16px; border-radius: 16px;">네이버블로그</p>
								</div>
								<div class="tit">국가장학금 신청했어? 알짜배기 정보 보고 바로 신청하자!</div>
								<div class="txt">학자금 지원구간은 사회보장정보시스템을 통해 확인한 가구원의 소득, 재산, 금융자산, 부채 등을 반영해 소득인정액을 산정하여 장학금 지급 기준을 결정 ...</div>
								</a>
							</li>
							<li>
								<a href="https://www.gov.kr/portal/service/serviceInfo/SD0000004508" target=_blank>
								<div class="sub">
									<p><img src="https://www.google.com/s2/favicons?domain=https://www.gov.kr/portal/service/serviceInfo/SD0000004508&amp;sz=64" alt="favicon" style="width: 16px; height: 16px; border-radius: 16px;">정부24</p>
								</div>
								<div class="tit">국가장학금 Ⅰ유형 (학생 직접지원형) | 민원 안내 및 신청</div>
								<div class="txt">나이스 대국민서비스 앱으로 자녀의 학교생활정보(학사일정, 급식 식단 표, 반별 시간표 등을 제공하고, 방과후학교, 돌봄교실, 교외체험학습을 신청할 수 있습니다.</div>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/watch?v=D-Y7Q3fi5B4" target=_blank>
								<div class="sub">
									<p><img src="/html/img/youtube.png" style="width:20px;height:20px"> YOUTUBE</p>
								</div>
								<div class="tit">국가장학금 통합신청 따라하기(한국장학재단 학자금 지원 제도 교육)</div>
								<div class="txt">대학생이라면 꼭 알아야 할 💙정부 학자금 지원 제도💙❕</div>
								</a>
							</li>
						</ul>
					</div>
					<!-- Add more tab contents as needed -->
				</div>
			</div>


        </div>
    </div>

</div><!-- gpt_wrap-->
<?php
    include_once('./inc/footer.php');
?>
<script>

	

</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
//$(document).ready(function() {

function getResult(seq)
	{
		$("#main").attr("style","display:none");
		$("#result").attr("style","display:block");
		
		if(seq==0){		
			$("#msg").val( $("#keyword").val() );
			let message = $('#msg').val().trim();
			if (message !== '') {
				sendMessage(message);
			}else{
				alert("메세지를 입력해주세요"); 
			}
		}else{

			if(seq=="1"){
				var msg="국가장학금 관련 정보를 알려줘";
			}else if(seq=="2"){
				var msg="학자금대출 관련 정보를 알려줘";
			}else if(seq=="3"){
				var msg="취업연계장려금 관련 정보를 알려줘";
			}else if(seq=="4"){
				var msg="생활비지원 관련 정보를 알려줘";
			}else if(seq=="5"){
				var msg="기숙사비지원 관련 정보를 알려줘";
			}else if(seq=="6"){
				var msg="청년월세지원 관련 정보를 알려줘";
			}else if(seq=="7"){
				var msg="인턴쉽지원 관련 정보를 알려줘";
			}else if(seq=="8"){
				var msg="교환학생 관련 정보를 알려줘";
			}

			$("#msg").val( msg );
			sendMessage(msg);

		}
		
	}

    // 기존 대화 기록 불러오기
    function loadChatHistory() {
		
        $.ajax({
            url: './chat_process.php',
            type: 'POST',
            data: { act: 'load_history', send_mb_id: 'user', recv_mb_id: 'gpt' },
            success: function(data) {
                if (data.history) {
                    data.history.forEach(function(chat) {
                        $('#chat-list').append('<li><strong>' + chat.sender + ':</strong> ' + chat.message + '</li>');
                    });
					scrollToBottom()					
                }
				
            },
            error: function(xhr, status, error) {
                console.log("채팅 기록 로드 오류: ", error);
            }
        });
    }

	 // 메시지 전송 함수
	function sendMessage(message) { 

		$("#keyworkdBoxStr").html("");
		$("#keyworkdBoxList1").html("");
		$("#keyworkdBoxList2").html("");

		$.ajax({
			url: './chat_process.php',
			type: 'POST',
			data: { act: 'update', me_memo: message, send_mb_id: 'user', recv_mb_id: 'gpt' },
			success: function(data) {

				if (data.gpt_response) {
					// 유저 메시지 추가
					$('#chat-list').append('<li><strong>나:</strong> ' + message + '</li>');
					// GPT 응답 추가
					$('#chat-list').append('<li><strong style="color:#e53e53">BRIDGE:</strong> ' + data.gpt_response.me_memo + '</li>');
					$('#textarea').val('');  // 입력 필드 비우기

					// 채팅 리스트 스크롤을 제일 아래로 이동
					scrollToBottom();
					$("#keywordBoxBottom").attr("style","display:flex"); 
					
					var keywordList = data.keywordList1;
					$("#keyworkdBoxList1").html(keywordList);

					var keywordList2 = data.keywordList2;
					$("#keyworkdBoxList2").html(keywordList2);

					var keyworkdBoxStr = data.keywordStr;
					$("#keyworkdBoxStr").html(keyworkdBoxStr);					

					// 오른쪽데이터 가져오기
					$.post("/bbs/get_matching_listwith.php",{
						que: $("#msg").val() 
					},function(data,status){
						
						$.post("/html/search.php",{
							que: $("#msg").val() 
						},function(data2,status){
							$("#matchingList").html( data+data2 );
						});

					});
				
				}
			},
			error: function(xhr, status, error) {
				console.log("메시지 전송 오류: ", error);
			}
		});
	}

	// 스크롤을 제일 아래로 내리는 함수
	function scrollToBottom() {
		var chatList = $('.chat_wrap .chat .list');
		var scrollHeight = chatList.prop("scrollHeight");
		chatList.animate({ scrollTop: scrollHeight }, 500); // 500ms 동안 부드럽게 스크롤
	}

	// 엔터키로 메시지 전송
	$('#textarea').on('keydown', function(event) {
		if (event.key === 'Enter' && !event.shiftKey) {
			event.preventDefault();
			let message = $('#textarea').val().trim();
			if (message !== '') {
				sendMessage(message);
			}
		}
	});

	// 버튼 클릭으로 메시지 전송
	$('#send-btn').click(function() {
		let message = $('#msg').val().trim();
		if (message !== '') {
			sendMessage(message);
		}
	});

	// 페이지 로드 시 대화 기록 불러오기
	loadChatHistory();

	


//});

function showTab(index) {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach((tab, i) => {
        tab.classList.toggle('active', i === index);
        contents[i].classList.toggle('active', i === index);
    });
}


</script>


