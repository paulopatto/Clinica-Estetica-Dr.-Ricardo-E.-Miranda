<div id='logotipo'>
	<a href='#'><img src='<?php bloginfo("template_url"); ?>/images/logotipo.png' alt='clinica estética dr. ricardo e. miranda' /></a>
</div>

<div id='contatos'>
	<a href='http://facebook.com/'>
		<img src='<?php bloginfo("template_url"); ?>/images/botao_facebook.png' alt='facebook' />
	</a>

	<a href='http://youtube.com/'>
		<img src='<?php bloginfo("template_url"); ?>/images/botao_youtube.png' alt='youtube' />
	</a>

	<br />

	<img src='<?php bloginfo("template_url"); ?>/images/contatos.png' />
</div>

<div id='menu'>
	<ul>
		<?php wp_list_pages('title_li=');?>
	</ul>
</div>
