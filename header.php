<div id='logotipo'>
	<a href='<?php print get_option("home"); ?>' >
		<img src='<?php bloginfo('template_url'); ?>/images/logotipo.png' alt='clinica estética dr. ricardo e. miranda' />
	</a>
</div>

<div id='contatos'>
	<img src='<?php bloginfo('template_url'); ?>/images/botao_facebook.png' alt='facebook' />
	<img src='<?php bloginfo('template_url'); ?>/images/botao_youtube.png' alt='youtube' />
	<br />
	<label>Tel.</label>
	<span class='contato'>3120.2095 CLINÍCA AVITA</span>
	<hr />
	<span class='contato'>3151.2946 CLÍNICA DAITYA</span>
</div>

<div id='menu'>
	<ul>
		<?php wp_list_pages('title_li=');?>
	</ul>
</div>
