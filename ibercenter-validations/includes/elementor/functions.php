<?php
function elementor_form_email_field_validation( $field, $record, $ajax_handler ) {
	// Remove native validation
	$forms_module = \ElementorPro\Plugin::instance()->modules_manager->get_modules( 'forms' );
    if ( isset( $forms_module->field_types ) && is_array( $forms_module->field_types ) ) {
        remove_action( 'elementor_pro/forms/validation/email', [ $forms_module->field_types['email'], 'validation' ] );
    }

	// Run your own validation
	if ( empty( $field['value'] ) ) {
		$ajax_handler->add_error( $field['id'], esc_html__( 'Este campo es obligatorio.', 'textdomain' ) );
		return;
	}

	// Validate email format
	if ( ! filter_var( $field['value'], FILTER_VALIDATE_EMAIL ) ) {
		$ajax_handler->add_error( $field['id'], esc_html__( 'Por favor, introduce una dirección de correo electrónico válida.', 'textdomain' ) );
	}
}
add_action( 'elementor_pro/forms/validation/email', 'elementor_form_email_field_validation', 10, 3 );


function elementor_form_tel_field_validation( $field, $record, $ajax_handler ) {
	// Remove native validation
	$forms_module = \ElementorPro\Plugin::instance()->modules_manager->get_modules( 'forms' );
    if ( isset( $forms_module->field_types ) && is_array( $forms_module->field_types ) ) {
        remove_action( 'elementor_pro/forms/validation/tel', [ $forms_module->field_types['tel'], 'validation' ] );
    }

	// Run your own validation
	if ( empty( $field['value'] ) ) {
		return;
	}

	// Match exactly 9 digits without any spaces or dashes
	if ( preg_match( '/^\d{9}$/', $field['value'] ) !== 1 ) {
		$ajax_handler->add_error( $field['id'], esc_html__( 'Asegúrese de que el número de teléfono contenga 9 dígitos sin espacios ni guiones.', 'textdomain' ) );
	}
}
add_action( 'elementor_pro/forms/validation/tel', 'elementor_form_tel_field_validation', 10, 3 );
