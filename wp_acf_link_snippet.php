<?php if ( $link ) : ?>
	<a class="" href="<?php echo esc_url( $link['url'] ); ?>"<?php if ( $link['target'] ) : ?> target="<?php echo $link['target']; ?>"<?php endif; ?>>
		<?php echo $link['title']; ?>
	</a>
<?php endif; ?>
