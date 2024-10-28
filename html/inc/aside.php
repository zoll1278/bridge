        <div class="logo">
			<a href="/" style="font-weight:bold;font-size:24px;">
				BRIDGE
			</a>
		</div>
        <div class="menu">
            <a href="/html/index.php" class="selected">
                <svg width="16" height="16" viewBox="0 0 24 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.3357 11.2852L20 10.9868V12.5378V13.5378V19.5378C20 20.6423 19.1046 21.5378 18 21.5378H6.00003C4.89546 21.5378 4.00003 20.6423 4.00003 19.5378V13.5378V12.5378V10.9868L3.66439 11.2852L2.91699 11.9495L1.58826 10.4547L2.33567 9.79035L10.0069 2.97144C11.1436 1.96108 12.8565 1.96108 13.9931 2.97144L21.6644 9.79035L22.4118 10.4547L21.0831 11.9495L20.3357 11.2852ZM14.5 14.5379C15.3285 14.5379 16 13.8663 16 13.0379C16 12.2095 15.3285 11.5379 14.5 11.5379C13.6716 11.5379 13 12.2095 13 13.0379C13 13.8663 13.6716 14.5379 14.5 14.5379Z" fill="currentColor"></path></svg>
                <p>채팅봇</p>
                <svg width="20" height="20" viewBox="0 0 24 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#a8a69dff"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 19.238L14.9498 14.2882L15.3034 13.9347C15.8891 13.3489 15.8891 12.3991 15.3034 11.8134L14.9498 11.4598L10.0001 6.51006L8.58584 7.92428L13.5356 12.874L8.58584 17.8238L10.0001 19.238Z" fill="currentColor"></path></svg>
            </a>
<!--             <a href="#" class=""> -->
<!--                 <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 11C5 7.13401 8.13401 4 12 4C15.866 4 19 7.13401 19 11C19 14.866 15.866 18 12 18C11.293 18 10.6122 17.8955 9.97129 17.7018L9.59053 17.5867L6.58603 19.089L7.38446 16.2945L6.98082 15.8793C5.75393 14.6175 5 12.8978 5 11ZM12 2C7.02944 2 3 6.02944 3 11C3 13.2268 3.80983 15.2662 5.14939 16.8371L4.03848 20.7253C3.79944 21.5619 4.66897 22.2835 5.44721 21.8944L9.78551 19.7253C10.4949 19.9048 11.237 20 12 20C16.9706 20 21 15.9706 21 11C21 6.02944 16.9706 2 12 2ZM11 9C11 9.55228 10.5523 10 10 10C9.44772 10 9 9.55228 9 9C9 8.44772 9.44772 8 10 8C10.5523 8 11 8.44772 11 9ZM14 10C14.5523 10 15 9.55228 15 9C15 8.44772 14.5523 8 14 8C13.4477 8 13 8.44772 13 9C13 9.55228 13.4477 10 14 10ZM9.00013 11.9713L9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12L14.9999 11.9713H13.4997L13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12L10.5003 11.9713H9.00013Z" fill="currentColor"></path></svg> -->
<!--                 <p>AI 캐릭터 홈</p> -->
<!--                 <svg width="20" height="20" viewBox="0 0 24 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#a8a69dff"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 19.238L14.9498 14.2882L15.3034 13.9347C15.8891 13.3489 15.8891 12.3991 15.3034 11.8134L14.9498 11.4598L10.0001 6.51006L8.58584 7.92428L13.5356 12.874L8.58584 17.8238L10.0001 19.238Z" fill="currentColor"></path></svg> -->
<!--             </a> -->
        </div>
        <div class="list">
            <div class="tit">대화 내역</div>
            <div class="con">
                <ul>
                    <li>
                        <a href="./chat.php" class="inner">
                            <div class="head">
                                <div class="name">GPT-4</div>
                                <div class="time">방금 전</div>
                            </div>
                            <div class="text">새 채팅방</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="button">
            <?php if ($is_member) { ?>
                <div class="mypage dropdown">
                    <a href="#" class="mypageBtn dropdown-toggle">
                        <div class="ico"><?php echo get_member_profile_img($member['mb_id']); ?></div>
                        <div class="name"><?php echo $member['mb_name']; ?></div>
                        <div class="arr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" color="#f72f08ff" style="width: 16px; height: 16px; transform: rotate(270deg); transition: transform 0.3s ease 0s; transform-origin: center center;"><path fill="#61605A" fill-rule="evenodd" d="m12.243 6.667-3.3 3.3-.236.235a1 1 0 0 1-1.414 0l-.236-.236-3.3-3.3.943-.942 3.3 3.3 3.3-3.3z" clip-rule="evenodd"></path></svg></div>
                    </a>
                    <div class="mypageBox dropdown-menu">
                        <a href="#">설정</a>
                        <a href="#">계정 정보</a>
                        <a href="/bbs/logout.php">로그아웃</a>
                    </div>
                </div>
            <?php } else { ?>
                <a href="/bbs/login.php" class="login">로그인</a>
            <?php } ?>
        </div>
        <div class="push"><svg width="20" height="20" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#a8a69dff"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 3.43701H3.5V21.437H5.5V3.43701ZM14.2443 8.90149L12.8301 7.48727L9.29454 11.0228L8.94099 11.3764C8.3552 11.9621 8.3552 12.9119 8.94099 13.4977L9.29454 13.8512L12.8301 17.3868L14.2443 15.9726L11.7088 13.437L21.5 13.437V11.437L11.7088 11.437L14.2443 8.90149Z" fill="currentColor"></path></svg></div>
        <script>
            $(".push").on("click", function(){
                $(this).toggleClass("fullscreen");
                $("#gpt_wrap").toggleClass("fullscreen");
            })
        </script>