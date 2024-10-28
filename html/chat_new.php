<?php
include_once("../common.php");
include_once('./inc/header.php');
?>
<div id="gpt_wrap">
    <div class="aside_wrap">
        <?php include_once('./inc/aside.php'); ?>
    </div>
    <div class="chat_wrap">
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
                    <div class="input">
                        <textarea id="textarea" placeholder="BRIDGE에게 무엇이든 물어보세요." rows="3"></textarea>
                        <button id="send-btn">보내기</button>
                    </div>
                </div>
            </div>

			<div class="resources">
                <div class="title">참고자료</div>
                <div class="list">
                    <ul>
                        <li>
                            <div class="sub">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.58002 14.437C8.52754 13.7908 8.5 13.1219 8.5 12.437C8.5 11.7521 8.52754 11.0832 8.58002 10.437H4.75204C4.58751 11.0763 4.5 11.7464 4.5 12.437C4.5 13.1276 4.58751 13.7978 4.75204 14.437H8.58002ZM8.83284 16.437H5.57026C6.52529 18.088 8.05338 19.366 9.88254 19.999C9.43442 19.0287 9.07343 17.8137 8.83284 16.437ZM10.8667 16.437H14.1333C13.9597 17.3255 13.7329 18.1117 13.4715 18.7653C13.1653 19.5307 12.8508 20.0158 12.6039 20.2769C12.5635 20.3196 12.5289 20.3525 12.5 20.3777C12.4711 20.3525 12.4365 20.3196 12.3961 20.2769C12.1492 20.0158 11.8347 19.5307 11.5285 18.7653C11.2671 18.1117 11.0403 17.3255 10.8667 16.437ZM14.4128 14.437H10.5872C10.5306 13.7997 10.5 13.1306 10.5 12.437C10.5 11.7435 10.5306 11.0743 10.5872 10.437H14.4128C14.4694 11.0743 14.5 11.7435 14.5 12.437C14.5 13.1306 14.4694 13.7997 14.4128 14.437ZM16.1672 16.437C15.9266 17.8137 15.5656 19.0287 15.1175 19.999C16.9466 19.366 18.4747 18.088 19.4297 16.437H16.1672ZM20.248 14.437H16.42C16.4725 13.7908 16.5 13.1219 16.5 12.437C16.5 11.7521 16.4725 11.0832 16.42 10.437H20.248C20.4125 11.0763 20.5 11.7464 20.5 12.437C20.5 13.1276 20.4125 13.7978 20.248 14.437ZM11.5285 6.10873C11.2671 6.76232 11.0403 7.54853 10.8667 8.43701H14.1333C13.9597 7.54853 13.7329 6.76232 13.4715 6.10873C13.1653 5.34335 12.8508 4.85819 12.6039 4.59708C12.5635 4.55442 12.5289 4.52152 12.5 4.4963C12.4711 4.52152 12.4365 4.55442 12.3961 4.59708C12.1492 4.85819 11.8347 5.34335 11.5285 6.10873ZM16.1672 8.43701H19.4297C18.4747 6.78605 16.9466 5.50805 15.1175 4.87502C15.5656 5.84529 15.9266 7.06035 16.1672 8.43701ZM5.57026 8.43701H8.83284C9.07343 7.06035 9.43442 5.84529 9.88254 4.87502C8.05338 5.50805 6.52529 6.78604 5.57026 8.43701ZM12.5 2.43701C18.0228 2.43701 22.5 6.91416 22.5 12.437C22.5 17.9599 18.0228 22.437 12.5 22.437C6.97715 22.437 2.5 17.9599 2.5 12.437C2.5 6.91416 6.97715 2.43701 12.5 2.43701Z" fill="currentColor"></path></svg>
                                <p>네이버 포스트</p>
                            </div>
                            <div class="tit">사회복지서비스란?</div>
                            <div class="txt">사회복지 서비스는 개인이나 집단이 기본적인 생활을 영위하고, 사회적 참여를 증진하며, 삶의 질을 향상시키기 위해 제공되는 다양한 지원과 서비스를 말합니다. 이 서비스는 일반적으로 다음과 같은 영역에서 이루어집니다. 소득 지원: 저소득층이나 실업자에게 경제적 지원을 제공하여 기본적인 생활을 유지할 수 있도록 돕습니다. 주거 지원: 저소득 가구를 위한 주거지 제공, 주택 보조금 등 주거 안정성을 강화하는 서비스입니다. 의료 서비스: 의료 접근성을 높이기 위해 저소득층에게 의료비 지원, 건강 상담 및 예방 프로그램을 제공합니다. 정신건강 서비스: 정신적 어려움을 겪고 있는 개인을 위한 상담, 치료 및 지원 프로그램을 포함합니다. 아동 및 청소년 서비스: 아동의 보호와 발달을 지원하고, 청소년의 건강한 성장과 사회적 참여를 촉진하는 프로그램입니다. 노인 복지: 노인들이 건강하게 생활할 수 있도록 지원하고, 사회적 고립을 예방하기 위한 다양한 프로그램을 제공합니다. 장애인 서비스: 장애인의 자립과 사회 참여를 촉진하기 위한 맞춤형 지원과 서비스입니다. 이러한 서비스는 정부, 비영리 단체, 지역 사회 및 자원봉사자들에 의해 제공되며, 각 개인의 필요에 맞추어 다양한 형태로 이루어집니다. 사회복지 서비스는 사회적 연대와 평등을 강조하며, 모든 사람이 기본적인 권리를 누릴 수 있도록 돕는 중요한 역할을 합니다.</div>
                        </li>
                        <li>
                            <div class="sub">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.58002 14.437C8.52754 13.7908 8.5 13.1219 8.5 12.437C8.5 11.7521 8.52754 11.0832 8.58002 10.437H4.75204C4.58751 11.0763 4.5 11.7464 4.5 12.437C4.5 13.1276 4.58751 13.7978 4.75204 14.437H8.58002ZM8.83284 16.437H5.57026C6.52529 18.088 8.05338 19.366 9.88254 19.999C9.43442 19.0287 9.07343 17.8137 8.83284 16.437ZM10.8667 16.437H14.1333C13.9597 17.3255 13.7329 18.1117 13.4715 18.7653C13.1653 19.5307 12.8508 20.0158 12.6039 20.2769C12.5635 20.3196 12.5289 20.3525 12.5 20.3777C12.4711 20.3525 12.4365 20.3196 12.3961 20.2769C12.1492 20.0158 11.8347 19.5307 11.5285 18.7653C11.2671 18.1117 11.0403 17.3255 10.8667 16.437ZM14.4128 14.437H10.5872C10.5306 13.7997 10.5 13.1306 10.5 12.437C10.5 11.7435 10.5306 11.0743 10.5872 10.437H14.4128C14.4694 11.0743 14.5 11.7435 14.5 12.437C14.5 13.1306 14.4694 13.7997 14.4128 14.437ZM16.1672 16.437C15.9266 17.8137 15.5656 19.0287 15.1175 19.999C16.9466 19.366 18.4747 18.088 19.4297 16.437H16.1672ZM20.248 14.437H16.42C16.4725 13.7908 16.5 13.1219 16.5 12.437C16.5 11.7521 16.4725 11.0832 16.42 10.437H20.248C20.4125 11.0763 20.5 11.7464 20.5 12.437C20.5 13.1276 20.4125 13.7978 20.248 14.437ZM11.5285 6.10873C11.2671 6.76232 11.0403 7.54853 10.8667 8.43701H14.1333C13.9597 7.54853 13.7329 6.76232 13.4715 6.10873C13.1653 5.34335 12.8508 4.85819 12.6039 4.59708C12.5635 4.55442 12.5289 4.52152 12.5 4.4963C12.4711 4.52152 12.4365 4.55442 12.3961 4.59708C12.1492 4.85819 11.8347 5.34335 11.5285 6.10873ZM16.1672 8.43701H19.4297C18.4747 6.78605 16.9466 5.50805 15.1175 4.87502C15.5656 5.84529 15.9266 7.06035 16.1672 8.43701ZM5.57026 8.43701H8.83284C9.07343 7.06035 9.43442 5.84529 9.88254 4.87502C8.05338 5.50805 6.52529 6.78604 5.57026 8.43701ZM12.5 2.43701C18.0228 2.43701 22.5 6.91416 22.5 12.437C22.5 17.9599 18.0228 22.437 12.5 22.437C6.97715 22.437 2.5 17.9599 2.5 12.437C2.5 6.91416 6.97715 2.43701 12.5 2.43701Z" fill="currentColor"></path></svg>
                                <p>네이버 포스트</p>
                            </div>
                            <div class="tit">사회복지서비스란?</div>
                            <div class="txt">사회복지 서비스는 개인이나 집단이 기본적인 생활을 영위하고, 사회적 참여를 증진하며, 삶의 질을 향상시키기 위해 제공되는 다양한 지원과 서비스를 말합니다. 이 서비스는 일반적으로 다음과 같은 영역에서 이루어집니다. 소득 지원: 저소득층이나 실업자에게 경제적 지원을 제공하여 기본적인 생활을 유지할 수 있도록 돕습니다. 주거 지원: 저소득 가구를 위한 주거지 제공, 주택 보조금 등 주거 안정성을 강화하는 서비스입니다. 의료 서비스: 의료 접근성을 높이기 위해 저소득층에게 의료비 지원, 건강 상담 및 예방 프로그램을 제공합니다. 정신건강 서비스: 정신적 어려움을 겪고 있는 개인을 위한 상담, 치료 및 지원 프로그램을 포함합니다. 아동 및 청소년 서비스: 아동의 보호와 발달을 지원하고, 청소년의 건강한 성장과 사회적 참여를 촉진하는 프로그램입니다. 노인 복지: 노인들이 건강하게 생활할 수 있도록 지원하고, 사회적 고립을 예방하기 위한 다양한 프로그램을 제공합니다. 장애인 서비스: 장애인의 자립과 사회 참여를 촉진하기 위한 맞춤형 지원과 서비스입니다. 이러한 서비스는 정부, 비영리 단체, 지역 사회 및 자원봉사자들에 의해 제공되며, 각 개인의 필요에 맞추어 다양한 형태로 이루어집니다. 사회복지 서비스는 사회적 연대와 평등을 강조하며, 모든 사람이 기본적인 권리를 누릴 수 있도록 돕는 중요한 역할을 합니다.</div>
                        </li>
                        <li>
                            <div class="sub">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.58002 14.437C8.52754 13.7908 8.5 13.1219 8.5 12.437C8.5 11.7521 8.52754 11.0832 8.58002 10.437H4.75204C4.58751 11.0763 4.5 11.7464 4.5 12.437C4.5 13.1276 4.58751 13.7978 4.75204 14.437H8.58002ZM8.83284 16.437H5.57026C6.52529 18.088 8.05338 19.366 9.88254 19.999C9.43442 19.0287 9.07343 17.8137 8.83284 16.437ZM10.8667 16.437H14.1333C13.9597 17.3255 13.7329 18.1117 13.4715 18.7653C13.1653 19.5307 12.8508 20.0158 12.6039 20.2769C12.5635 20.3196 12.5289 20.3525 12.5 20.3777C12.4711 20.3525 12.4365 20.3196 12.3961 20.2769C12.1492 20.0158 11.8347 19.5307 11.5285 18.7653C11.2671 18.1117 11.0403 17.3255 10.8667 16.437ZM14.4128 14.437H10.5872C10.5306 13.7997 10.5 13.1306 10.5 12.437C10.5 11.7435 10.5306 11.0743 10.5872 10.437H14.4128C14.4694 11.0743 14.5 11.7435 14.5 12.437C14.5 13.1306 14.4694 13.7997 14.4128 14.437ZM16.1672 16.437C15.9266 17.8137 15.5656 19.0287 15.1175 19.999C16.9466 19.366 18.4747 18.088 19.4297 16.437H16.1672ZM20.248 14.437H16.42C16.4725 13.7908 16.5 13.1219 16.5 12.437C16.5 11.7521 16.4725 11.0832 16.42 10.437H20.248C20.4125 11.0763 20.5 11.7464 20.5 12.437C20.5 13.1276 20.4125 13.7978 20.248 14.437ZM11.5285 6.10873C11.2671 6.76232 11.0403 7.54853 10.8667 8.43701H14.1333C13.9597 7.54853 13.7329 6.76232 13.4715 6.10873C13.1653 5.34335 12.8508 4.85819 12.6039 4.59708C12.5635 4.55442 12.5289 4.52152 12.5 4.4963C12.4711 4.52152 12.4365 4.55442 12.3961 4.59708C12.1492 4.85819 11.8347 5.34335 11.5285 6.10873ZM16.1672 8.43701H19.4297C18.4747 6.78605 16.9466 5.50805 15.1175 4.87502C15.5656 5.84529 15.9266 7.06035 16.1672 8.43701ZM5.57026 8.43701H8.83284C9.07343 7.06035 9.43442 5.84529 9.88254 4.87502C8.05338 5.50805 6.52529 6.78604 5.57026 8.43701ZM12.5 2.43701C18.0228 2.43701 22.5 6.91416 22.5 12.437C22.5 17.9599 18.0228 22.437 12.5 22.437C6.97715 22.437 2.5 17.9599 2.5 12.437C2.5 6.91416 6.97715 2.43701 12.5 2.43701Z" fill="currentColor"></path></svg>
                                <p>네이버 포스트</p>
                            </div>
                            <div class="tit">사회복지서비스란?</div>
                            <div class="txt">사회복지 서비스는 개인이나 집단이 기본적인 생활을 영위하고, 사회적 참여를 증진하며, 삶의 질을 향상시키기 위해 제공되는 다양한 지원과 서비스를 말합니다. 이 서비스는 일반적으로 다음과 같은 영역에서 이루어집니다. 소득 지원: 저소득층이나 실업자에게 경제적 지원을 제공하여 기본적인 생활을 유지할 수 있도록 돕습니다. 주거 지원: 저소득 가구를 위한 주거지 제공, 주택 보조금 등 주거 안정성을 강화하는 서비스입니다. 의료 서비스: 의료 접근성을 높이기 위해 저소득층에게 의료비 지원, 건강 상담 및 예방 프로그램을 제공합니다. 정신건강 서비스: 정신적 어려움을 겪고 있는 개인을 위한 상담, 치료 및 지원 프로그램을 포함합니다. 아동 및 청소년 서비스: 아동의 보호와 발달을 지원하고, 청소년의 건강한 성장과 사회적 참여를 촉진하는 프로그램입니다. 노인 복지: 노인들이 건강하게 생활할 수 있도록 지원하고, 사회적 고립을 예방하기 위한 다양한 프로그램을 제공합니다. 장애인 서비스: 장애인의 자립과 사회 참여를 촉진하기 위한 맞춤형 지원과 서비스입니다. 이러한 서비스는 정부, 비영리 단체, 지역 사회 및 자원봉사자들에 의해 제공되며, 각 개인의 필요에 맞추어 다양한 형태로 이루어집니다. 사회복지 서비스는 사회적 연대와 평등을 강조하며, 모든 사람이 기본적인 권리를 누릴 수 있도록 돕는 중요한 역할을 합니다.</div>
                        </li>
                        <li>
                            <div class="sub">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#1a1918ff"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.58002 14.437C8.52754 13.7908 8.5 13.1219 8.5 12.437C8.5 11.7521 8.52754 11.0832 8.58002 10.437H4.75204C4.58751 11.0763 4.5 11.7464 4.5 12.437C4.5 13.1276 4.58751 13.7978 4.75204 14.437H8.58002ZM8.83284 16.437H5.57026C6.52529 18.088 8.05338 19.366 9.88254 19.999C9.43442 19.0287 9.07343 17.8137 8.83284 16.437ZM10.8667 16.437H14.1333C13.9597 17.3255 13.7329 18.1117 13.4715 18.7653C13.1653 19.5307 12.8508 20.0158 12.6039 20.2769C12.5635 20.3196 12.5289 20.3525 12.5 20.3777C12.4711 20.3525 12.4365 20.3196 12.3961 20.2769C12.1492 20.0158 11.8347 19.5307 11.5285 18.7653C11.2671 18.1117 11.0403 17.3255 10.8667 16.437ZM14.4128 14.437H10.5872C10.5306 13.7997 10.5 13.1306 10.5 12.437C10.5 11.7435 10.5306 11.0743 10.5872 10.437H14.4128C14.4694 11.0743 14.5 11.7435 14.5 12.437C14.5 13.1306 14.4694 13.7997 14.4128 14.437ZM16.1672 16.437C15.9266 17.8137 15.5656 19.0287 15.1175 19.999C16.9466 19.366 18.4747 18.088 19.4297 16.437H16.1672ZM20.248 14.437H16.42C16.4725 13.7908 16.5 13.1219 16.5 12.437C16.5 11.7521 16.4725 11.0832 16.42 10.437H20.248C20.4125 11.0763 20.5 11.7464 20.5 12.437C20.5 13.1276 20.4125 13.7978 20.248 14.437ZM11.5285 6.10873C11.2671 6.76232 11.0403 7.54853 10.8667 8.43701H14.1333C13.9597 7.54853 13.7329 6.76232 13.4715 6.10873C13.1653 5.34335 12.8508 4.85819 12.6039 4.59708C12.5635 4.55442 12.5289 4.52152 12.5 4.4963C12.4711 4.52152 12.4365 4.55442 12.3961 4.59708C12.1492 4.85819 11.8347 5.34335 11.5285 6.10873ZM16.1672 8.43701H19.4297C18.4747 6.78605 16.9466 5.50805 15.1175 4.87502C15.5656 5.84529 15.9266 7.06035 16.1672 8.43701ZM5.57026 8.43701H8.83284C9.07343 7.06035 9.43442 5.84529 9.88254 4.87502C8.05338 5.50805 6.52529 6.78604 5.57026 8.43701ZM12.5 2.43701C18.0228 2.43701 22.5 6.91416 22.5 12.437C22.5 17.9599 18.0228 22.437 12.5 22.437C6.97715 22.437 2.5 17.9599 2.5 12.437C2.5 6.91416 6.97715 2.43701 12.5 2.43701Z" fill="currentColor"></path></svg>
                                <p>네이버 포스트</p>
                            </div>
                            <div class="tit">사회복지서비스란?</div>
                            <div class="txt">사회복지 서비스는 개인이나 집단이 기본적인 생활을 영위하고, 사회적 참여를 증진하며, 삶의 질을 향상시키기 위해 제공되는 다양한 지원과 서비스를 말합니다. 이 서비스는 일반적으로 다음과 같은 영역에서 이루어집니다. 소득 지원: 저소득층이나 실업자에게 경제적 지원을 제공하여 기본적인 생활을 유지할 수 있도록 돕습니다. 주거 지원: 저소득 가구를 위한 주거지 제공, 주택 보조금 등 주거 안정성을 강화하는 서비스입니다. 의료 서비스: 의료 접근성을 높이기 위해 저소득층에게 의료비 지원, 건강 상담 및 예방 프로그램을 제공합니다. 정신건강 서비스: 정신적 어려움을 겪고 있는 개인을 위한 상담, 치료 및 지원 프로그램을 포함합니다. 아동 및 청소년 서비스: 아동의 보호와 발달을 지원하고, 청소년의 건강한 성장과 사회적 참여를 촉진하는 프로그램입니다. 노인 복지: 노인들이 건강하게 생활할 수 있도록 지원하고, 사회적 고립을 예방하기 위한 다양한 프로그램을 제공합니다. 장애인 서비스: 장애인의 자립과 사회 참여를 촉진하기 위한 맞춤형 지원과 서비스입니다. 이러한 서비스는 정부, 비영리 단체, 지역 사회 및 자원봉사자들에 의해 제공되며, 각 개인의 필요에 맞추어 다양한 형태로 이루어집니다. 사회복지 서비스는 사회적 연대와 평등을 강조하며, 모든 사람이 기본적인 권리를 누릴 수 있도록 돕는 중요한 역할을 합니다.</div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
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
		$.ajax({
			url: './chat_process.php',
			type: 'POST',
			data: { act: 'update', me_memo: message, send_mb_id: 'user', recv_mb_id: 'gpt' },
			success: function(data) {

				if (data.gpt_response) {
					// 유저 메시지 추가
					$('#chat-list').append('<li><strong>나:</strong> ' + message + '</li>');
					// GPT 응답 추가
					$('#chat-list').append('<li><strong>GPT:</strong> ' + data.gpt_response.me_memo + '</li>');
					$('#textarea').val('');  // 입력 필드 비우기

					// 채팅 리스트 스크롤을 제일 아래로 이동
					scrollToBottom();
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
		let message = $('#textarea').val().trim();
		if (message !== '') {
			sendMessage(message);
		}
	});

	// 페이지 로드 시 대화 기록 불러오기
	loadChatHistory();

});
</script>

<?php
include_once('./inc/footer.php');
?>