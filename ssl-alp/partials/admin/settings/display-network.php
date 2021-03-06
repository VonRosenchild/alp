<?php

/**
 * Main network admin settings.
 */
?>
<div class="wrap">
	<h2><?php _e( 'Academic Labbook Network Settings', 'ssl-alp' ); ?></h2>
	<?php if ( isset( $_GET[ 'updated' ] ) && $_GET[ 'updated' ] ): ?>
	<div class="updated notice notice-success is-dismissible">
		<p><?php _e( 'Network settings changed.', 'ssl-alp' ); ?></p>
	</div>
	<?php endif; ?>
	<div>
		<form method="post" action="edit.php?action=<?php echo SSL_ALP_NETWORK_SETTINGS_PAGE; ?>">
			<?php settings_fields( 'ssl-alp-network-admin' ); ?>
			<?php do_settings_sections( SSL_ALP_NETWORK_SETTINGS_PAGE ); ?>
		    <?php submit_button( __( 'Save Changes' ) ); ?>
		</form>
	</div>
</div>
