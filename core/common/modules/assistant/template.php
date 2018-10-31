<?php

namespace Elementor\Modules\Assistant;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<script type="text/template" id="tmpl-elementor-assistant">
	<div id="elementor-assistant__search">
		<i class="eicon-search"></i>
		<input id="elementor-assistant__search__input" placeholder="<?php echo __( 'Search or create anything in Elementor (pages, posts, integrations, etc.)', 'elementor' ); ?>">
	</div>
	<div id="elementor-assistant__content"></div>
</script>

<script type="text/template" id="tmpl-elementor-assistant-results-container">
	<div id="elementor-assistant__no-results"><?php echo __( 'No Results Found', 'elementor' ); ?></div>
	<div id="elementor-assistant__results"></div>
</script>

<script type="text/template" id="tmpl-elementor-assistant__results__category">
	<div class="elementor-assistant__results__category__title">{{{ title }}}</div>
	<div class="elementor-assistant__results__category__items"></div>
</script>

<script type="text/template" id="tmpl-elementor-assistant__results__item">
	<a href="{{ link }}" target="_blank" class="elementor-assistant__results__item__link">
		<div class="elementor-assistant__results__item__icon">
			<i class="eicon-{{{ icon }}}"></i>
		</div>
		<div class="elementor-assistant__results__item__title">{{{ title }}}</div>
		<# if ( description ) { #>
			<div class="elementor-assistant__results__item__description">- {{{ description }}}</div>
		<# } #>
	</a>
	<# if ( actions.length ) { #>
		<div class="elementor-assistant__results__item__actions">
		<# jQuery.each( actions, function() { #>
			<a class="elementor-assistant__results__item__action elementor-assistant__results__item__action--{{ this.name }}" href="{{ this.link }}" target="_blank">
				<i class="eicon-{{{ this.icon }}}"></i>
			</a>
		<# } ); #>
		</div>
	<# } #>
</script>
