$(window).bind('ready load scroll',function(){
	var wt = $(this).scrollTop();
	$('#wrap .init').each(function () {
		var st = $(this).offset().top - window.innerHeight + (window.innerHeight / 5);
		if (wt > st) {
			$(this).addClass('animate');
		} else {
			$(this).removeClass('animate');
		}
	});
});
$(function() {
	$(window).scroll( function() {
		if ($(document).scrollTop() > 0 ) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		};
	});
	$(".dropdown").on('click', '.dropdown-toggle', function(e){
		if($(this).closest('.dropdown').hasClass("show")){
			$(this).closest('.dropdown').removeClass("show");
		} else {
			$(this).closest('.dropdown').addClass("show");
		}
	});
	$(".dropdown").on('click', '.dropdown-menu a', function(e){
		var text = $(this).text();
		$(this).closest('.dropdown').find(".dropdown-toggle span").text(text);
		$(this).closest('.dropdown').removeClass("show");
	});
	$(document).mouseup(function (e){
		var LayerPopup = $(".dropdown-menu");
		if(LayerPopup.has(e.target).length === 0){
			LayerPopup.closest('.dropdown').removeClass("show");
		}
	});
	$('.tab-area').on('click', '.tab-btn li', function(e){
		var idx =  $(this).index();
		$(this).closest('.tab-area').find('.tab-btn').find('li').removeClass('active');
		$(this).addClass('active');
		$(this).closest('.tab-area').find('.tab-box').removeClass('active').eq(idx).addClass('active');
		return false;
	});
	$('.datepicker').datepicker({
		dateFormat: "yy-mm-dd"
	}).datepicker("setDate", "0");
});
$(document).ready(function(){
	$('.modalOpen').on('click', modalOpen);
	$('.modalClose').on('click', modalClose);
	$('.modal-container').on('click', function(e){
		if(!$('.modal-wrapper').has(e.target).length){
			$('html').removeClass('modalOn');
			$(this).fadeOut(0);
			$(this).delay(50).fadeOut(0);
			$(this).removeClass('show');
			$('html').css('overflow-y','auto');
		}
	});
});
function modalOpen(modalID){
	$('html').css('overflow-y','hidden');
	$('.modal-container').fadeOut(0);
	$('.modal-container').removeClass('show');
	$(this).data('modal') ? modalID = $(this).data('modal') : '';
	$('.modal-container.show').length > 0 ? $('#' + modalID).css({
		'z-index': $('.modal-container.show').css('z-index') + 1,
		'background': 'transparent'
	}) : '';
	$('#' + modalID).css('display', 'flex').focus();
	$('#' + modalID + ' .modal-wrapper').delay(100).fadeIn(100).focus();
	$('#' + modalID).addClass('show').focus();

	return false;
}
function modalClose(){
	$('html').css('overflow-y','auto');
	$(this).closest('.modal-container').fadeOut(0);
	$(this).closest('.modal-container').removeClass('show');
}
$(function() {
	$('.dl1').bind('mouseenter keyup', function() {
		$(this).addClass('on').siblings().removeClass('on');
	}).bind("mouseleave focusout",function(){
		$(this).removeClass('on');
	});
	$('#header .gnb .depth1 .dl1').bind('mouseenter keyup', function() {
		$('#header').addClass('on');
		$('.gnb_bg').addClass('on');
	});
	$('#header').on("mouseleave",function(){
		$('#header').removeClass('on');
		$('.gnb_bg').removeClass('on');

	});
	$('#container, #index').on('focusin',function(){
		$('#header').removeClass('on');
		$('.gnb_bg').removeClass('on');
	});
});
function scroll_to(selector, correction, target) {
	if (!target) target = 'html, body';
	if (!correction) correction = 0;
	const scrollTop = Number($(selector).offset().top) + correction;
	$(target).animate({scrollTop}, 500);
}