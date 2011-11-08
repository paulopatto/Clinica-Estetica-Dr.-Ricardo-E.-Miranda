/**
 *	Handler de inicio do jQuery, isto é um aliás para:
 * <code>
 * 	$(document).ready(function(){
 *		/// Foo
 * 	});
 * </code>
 *
 * @require "jQuery"
 * @author Paulo Patto<paulopatto@gmail.com>
 *
 * @Issue "jQuery Conflict":
 *	Aparentemente o jQuery do Wordpress já vem com o noConflict() por padrão. Como o jQuery passa ele para o contexto do aplicativo, foi usado o function($){...} assim não se perder o $ dentro do contexto. (01/11/2011) @paulopatto.
 */
jQuery(function($){
	/**
	 *	Menu com cantos arredondados.
	 * @require "jQuery"
	 * @require "jquery.Corner.js" :url => http://github.com/malsup/corner/blob/master/jquery.corner.js
	 */
	 $("div#header div#menu ul").corner("30px");
	 
	 /**
	  * Banner rotativo (slider) do Nivo Slider
	  * @require 'jQuery'
	  * @require 'jquery.nivo.slider' :url => http://nivo.dev7studios.com/pricing/
	  */
	 var $nivoOption = {
	 	effect: 'random',
	 	animSpeed: 500,
	 };
	 $("#slider").nivoSlider($nivoOption);
	 
	 /**
	  * Geração dos labels de destaques
	  */
	 $("ul#destaques li").each(function(index){
	 	console.log(this);
	 	console.log($(this).children("img").attr("title"));
	 	$(this).append("<span class='image-detaque-label'>"+$(this).children("img").attr("title")+"</span>"); 
	 });
});

