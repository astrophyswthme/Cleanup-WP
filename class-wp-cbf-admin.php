public function validate($input) {
        // All checkboxes inputs
        $valid = array();

        //Cleanup
        $valid['cleanup'] = (isset($input['cleanup']) && !empty($input['cleanup'])) ? 1 : 0;

        $valid['comments_css_cleanup'] = (isset($input['comments_css_cleanup']) && !empty($input['comments_css_cleanup'])) ? 1: 0;

        $valid['gallery_css_cleanup'] = (isset($input['gallery_css_cleanup']) && !empty($input['gallery_css_cleanup'])) ? 1 : 0;

        $valid['body_class_slug'] = (isset($input['body_class_slug']) && !empty($input['body_class_slug'])) ? 1 : 0;

        $valid['jquery_cdn'] = (isset($input['jquery_cdn']) && !empty($input['jquery_cdn'])) ? 1 : 0;

        $valid['cdn_provider'] = esc_url($input['cdn_provider']);

                // Login Customization
                //First Color Picker
                $valid['login_background_color'] = (isset($input['login_background_color']) && !empty($input['login_background_color'])) ? sanitize_text_field($input['login_background_color']) : '';

                if ( !empty($valid['login_background_color']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['login_background_color']  ) ) { // if user insert a HEX color with #
                    add_settings_error(
                            'login_background_color',                     // Setting title
                            'login_background_color_texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }

                //Second Color Picker
                $valid['login_button_primary_color'] = (isset($input['login_button_primary_color']) && !empty($input['login_button_primary_color'])) ? sanitize_text_field($input['login_button_primary_color']) : '';
                
                if ( !empty($valid['login_button_primary_color']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['login_button_primary_color']  ) ) { // if user insert a HEX color with #
                    add_settings_error(
                            'login_button_primary_color',                     // Setting title
                            'login_button_primary_color_texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }


                //Logo image id
                $valid['login_logo_id'] = (isset($input['login_logo_id']) && !empty($input['login_logo_id'])) ? absint($input['login_logo_id']) : 0;


        return $valid;
    }
