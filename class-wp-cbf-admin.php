public function enqueue_styles() {

          /**
           * This function is provided for demonstration purposes only.
           *
           * An instance of this class should be passed to the run() function
           * defined in Wp_Cbf_Loader as all of the hooks are defined
           * in that particular class.
           *
           * The Wp_Cbf_Loader will then create the relationship
           * between the defined hooks and the functions defined in this
           * class.
         */ 
            
         if ( 'settings_page_wp-cbf' == get_current_screen() -> id ) {
             // CSS stylesheet for Color Picker
             wp_enqueue_style( 'wp-color-picker' );            
             wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-cbf-admin.css', array( 'wp-color-picker' ), $this->version, 'all' );
         }


    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Wp_Cbf_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Wp_Cbf_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if ( 'settings_page_wp-cbf' == get_current_screen() -> id ) {
            wp_enqueue_media();   
            wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-cbf-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );         
        }

    }
