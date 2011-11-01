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
});
