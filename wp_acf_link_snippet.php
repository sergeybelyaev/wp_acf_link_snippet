<?php if ( is_array( $link ) && ! empty( $link['url'] ) && ! empty( $link['title'] ) ) : ?>
	<a class="" href="<?php echo esc_url( $link['url'] ); ?>"<?php if ( $link['target'] ) : ?> target="<?php echo $link['target']; ?>"<?php endif; ?>>
		<?php echo $link['title']; ?>
	</a>
<?php endif; ?>
