<?php
    include_once('./inc/header.php');
?>
<div id="login_wrap">
    <div class="login_wrap">
        <div class="space"></div>
        <div class="inner">
            <div class="header">
                <div class="title">뤼튼 시작하기</div>
                <div class="text">뤼튼과 함께 <span>AI의 끝없는 가능성</span>을 탐험해 보세요</div>
            </div>
            <div class="content">
                <div class="form">
                    <dl>
                        <dt>아이디</dt>
                        <dd>
                            <div class="input">
                                <input type="text" name="email" placeholder="이메일 주소를 입력해주세요">
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>비밀번호</dt>
                        <dd>
                            <div class="input">
                                <input type="password" name="password" placeholder="비밀번호를 입력해주세요">
                            </div>
                            <div class="view"><i></i></div>
                        </dd>
                    </dl>
                </div>
                <div class="button">
                    <button type="submit" id="submitBtn" disabled>로그인</button>
                </div>
                <div class="find">
                    <a href="#">아이디 찾기</a>
                    <a href="#">비밀번호 찾기</a>
                </div>
                <div class="start">
                    <a href="#">
                        <span>뤼튼은 처음이에요</span>
                        <strong>가입하기</strong>
                    </a>
                </div>
                <div class="sns">
                    <span>또는 SNS로 시작하기</span>
                    <a href="#"><img src="../assets/images/social_kakao_icon.svg"></a>
                    <a href="#"><img src="../assets/images/social_google_icon.svg"></a>
                    <a href="#"><img src="../assets/images/social_naver_icon.svg"></a>
                    <a href="#"><img src="../assets/images/social_apple_icon.svg"></a>
                </div>
                <script>
                    $("#login_wrap").on("click", ".view", function(){
                        if ($(this).closest("dl").find("input").attr("type") == "password") {
                            $(this).closest("dl").find("input").attr("type", "text");
                            $(this).addClass("active");
                        } else{
                            $(this).closest("dl").find("input").attr("type", "password");
                            $(this).removeClass("active");
                        }
                    })
                    $("#login_wrap .form").on("input", function(){
                        if($("input[name='email']").val() != '' && $("input[name='password']").val() != '') {
                            $("#submitBtn").prop("disabled", false);
                        } else{
                            $("#submitBtn").prop("disabled", true);
                        }
                    })
                </script>
            </div>
        </div>
    </div>
    <div class="bottom_wrap">
        <div class="flex">
            <div class="logo"><svg width="56" height="17" viewBox="0 0 56 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5611 9.99926V17.2624H21.8511V9.99926C21.8511 8.50919 22.7825 7.57839 24.272 7.57839H26.6307V4.53662H24.0854C20.671 4.53662 18.5605 6.64703 18.5605 9.99926H18.5611Z" fill="#61605A"></path><path d="M3.10398 10.9928V4.53662H0V10.8684C0 11.3649 0 13.4137 1.67611 15.1514C3.35109 16.8264 4.8423 17.2618 7.387 17.2618V14.2201C5.71089 14.2201 4.59348 13.8474 3.84873 13.1027C3.10398 12.2957 3.10398 11.1161 3.10398 10.9923V10.9928Z" fill="#61605A"></path><path d="M13.0979 14.1881C11.9423 14.0837 11.0994 13.7224 10.4288 13.1038C9.68406 12.2969 9.68406 11.1172 9.68406 10.9934V4.53719H6.58008V10.869C6.58008 11.3655 6.58008 13.4143 8.25619 15.152C9.77537 16.6712 11.3362 17.2624 13.0979 17.2624H16.3879V4.53662H13.0979V14.1875V14.1881Z" fill="#61605A"></path><path d="M31.5342 0.439697H28.2441V12.2963C28.2441 15.3381 30.2307 17.2625 33.3347 17.2625H36.3765V14.2207H33.5207C32.4033 14.2207 31.5342 13.2893 31.5342 12.2341V7.57845H36.3759V4.53667H31.5342V0.439697Z" fill="#61605A"></path><path d="M43.8886 4.53662H38.1777V17.2624H41.4678V7.57839H43.6404C45.0682 7.57839 46.0612 8.57139 46.0612 9.99926V17.2624H49.3513V9.99926C49.3513 6.64703 47.2409 4.53662 43.8886 4.53662Z" fill="#61605A"></path><path d="M53.5534 17.5604C54.9043 17.5604 55.9994 16.4653 55.9994 15.1144C55.9994 13.7636 54.9043 12.6685 53.5534 12.6685C52.2025 12.6685 51.1074 13.7636 51.1074 15.1144C51.1074 16.4653 52.2025 17.5604 53.5534 17.5604Z" fill="#61605A"></path></svg></div>
            <div class="menu">
                <a href="#">이용약관</a>
                <a href="#">개인정보처리방침</a>
                <a href="#">청소년 보호정책</a>
            </div>
        </div>
    </div>
</div>
<?php
    include_once('./inc/footer.php');
?>

