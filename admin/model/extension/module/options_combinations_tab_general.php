<?php
    class ModelExtensionModuleOptionsCombinationsTabGeneral extends ModelExtensionModuleOptionsCombinations
    {
        public function __construct($registry) {
            parent::__construct($registry);
            $this->load->language($this->real_extension_type.'/'.$this->extension_name.'_tab_general');
        }

        public function get_options_array(){
            $options_array = array();
            $this->load->model('catalog/option');
            $options = $this->model_catalog_option->getOptions();
            foreach ($options as $option) {
                if ($option['type'] == 'checkbox' || $option['type'] == 'select' || $option['type'] == 'radio')
                    $options_array[$option['option_id']] = $option['name'];
            }
            return $options_array;
        }

        public function get_fields() {
            $fields = array(
                array(
                    'text' => '<i class="fa fa-cog"></i>'.$this->language->get('status_legend'),
                    'type' => 'legend',
                ),
                array(
                    'label' => $this->language->get('status'),
                    'help' => $this->language->get('status_help'),
                    'type' => 'boolean',
                    'name' => 'status'
                ),

                array(
                    'text' => '<i class="fa fa-flask"></i>'.$this->language->get('theme_compatibility_legend'),
                    'type' => 'legend',
                ),
                array(
                    'label' => $this->language->get('theme_compatibility_generic_functionality'),
                    'help_bottom' => $this->language->get('theme_compatibility_generic_functionality_help'),
                    'type' => 'boolean',
                    'name' => 'theme_generic',
                    'class_container' => 'toogle_main_field',
                ),

                array(
                    'label' => $this->language->get('theme_generic_button_text'),
                    'help' => $this->language->get('theme_generic_button_text_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_theme_generic',
                    'name' => 'theme_generic_button_text',
                    'default' => 'Choose option and add to cart',
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_generic_modal_add'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_theme_generic',
                    'name' => 'text_generic_modal_add',
                    'default' => $this->language->get('text_generic_modal_add_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_generic_modal_close'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_theme_generic',
                    'name' => 'text_generic_modal_close',
                    'default' => $this->language->get('text_generic_modal_close_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_generic_modal_choose'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_theme_generic',
                    'name' => 'text_generic_modal_choose',
                    'default' => $this->language->get('text_generic_modal_choose_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('add_to_cart_button_selector'),
                    'help' => $this->language->get('add_to_cart_button_selector_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_theme_generic',
                    'name' => 'add_to_cart_button_selector',
                    'default' => '#button-cart'
                ),

                array(
                    'label' => $this->language->get('generic_mode_custom_code'),
                    'help_bottom' => $this->language->get('generic_mode_custom_code_help'),
                    'type' => 'textarea',
                    'style' => 'height:200px;',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_theme_generic',
                    'name' => 'generic_mode_custom_code',
                ),

                array(
                    'text' => '<i class="fa fa-cog"></i>'.$this->language->get('options_combination_fields_legend'),
                    'type' => 'legend',
                ),
                array(
                    'label' => $this->language->get('image'),
                    'help' => $this->language->get('image_help'),
                    'type' => 'boolean',
                    'name' => 'image',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('sku'),
                    'help' => $this->language->get('sku_help'),
                    'type' => 'boolean',
                    'name' => 'sku',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('upc'),
                    'help' => $this->language->get('upc_help'),
                    'type' => 'boolean',
                    'name' => 'upc',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('price'),
                    'help' => $this->language->get('price_help'),
                    'type' => 'boolean',
                    'name' => 'price',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('price_customer_groups'),
                    'help' => $this->language->get('price_customer_groups_help'),
                    'type' => 'boolean',
                    'default' => true,
                    'name' => 'price_customer_groups'
                ),
                array(
                    'label' => $this->language->get('special'),
                    'help' => $this->language->get('special_help'),
                    'type' => 'boolean',
                    'name' => 'special',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('discount'),
                    'help' => $this->language->get('discount_help'),
                    'type' => 'boolean',
                    'name' => 'discount',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('points'),
                    'help' => $this->language->get('points_help'),
                    'type' => 'boolean',
                    'name' => 'points',
                    'default' => false
                ),
                array(
                    'label' => $this->language->get('points_customer_groups'),
                    'help' => $this->language->get('points_customer_groups_help'),
                    'type' => 'boolean',
                    'name' => 'points_customer_groups',
                    'default' => false
                ),
                array(
                    'label' => $this->language->get('reward_points'),
                    'help' => $this->language->get('reward_points_help'),
                    'type' => 'boolean',
                    'name' => 'reward_points',
                    'default' => false
                ),
                array(
                    'label' => $this->language->get('reward_points_customer_groups'),
                    'help' => $this->language->get('reward_points_customer_groups_help'),
                    'type' => 'boolean',
                    'name' => 'reward_points_customer_groups',
                    'default' => false
                ),
                array(
                    'label' => $this->language->get('model'),
                    'help' => $this->language->get('model_help'),
                    'type' => 'boolean',
                    'name' => 'model',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('weight'),
                    'help' => $this->language->get('weight_help'),
                    'type' => 'boolean',
                    'name' => 'weight',
                    'default' => true
                ),
                array(
                    'label' => $this->language->get('dimensions'),
                    'help' => $this->language->get('dimensions_help'),
                    'type' => 'boolean',
                    'name' => 'dimensions',
                    'default' => false
                ),
                array(
                    'label' => $this->language->get('extra'),
                    'help' => $this->language->get('extra_help'),
                    'type' => 'boolean',
                    'name' => 'extra',
                    'default' => true
                ),
                version_compare(VERSION, '3.0.0.0', '>=') ?
                    array(
                        'label' => $this->language->get('seo_url'),
                        'help' => $this->language->get('seo_url_help'),
                        'type' => 'boolean',
                        'name' => 'seo_url',
                        'default' => true
                    ) : false,
                array(
                    'text' => '<i class="fa fa-cog"></i>'.$this->language->get('product_inner_view'),
                    'type' => 'legend',
                ),

                array(
                    'label' => $this->language->get('stock'),
                    'help' => $this->language->get('stock_help'),
                    'type' => 'boolean',
                    'name' => 'stock',
                    'default' => true
                ),

                array(
                    'label' => $this->language->get('button_reset_options'),
                    'help' => $this->language->get('button_reset_options_help'),
                    'type' => 'boolean',
                    'name' => 'button_reset_options',
                    'class_container' => 'toogle_main_field',
                    'default' => false
                ),

                array(
                    'label' => $this->language->get('button_reset_options_text'),
                    'type' => 'text',
                    'name' => 'button_reset_options_text',
                    'default' => $this->language->get('button_reset_options_text_default'),
                    'multilanguage' => true,
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_button_reset_options',
                ),

                array(
                    'label' => $this->language->get('options_like_images'),
                    'help' => $this->language->get('options_like_images_help'),
                    'type' => 'boolean',
                    'name' => 'options_like_images',
                    'class_container' => 'toogle_main_field',
                ),

                array(
                    'label' => $this->language->get('options_like_images_hide_not_available'),
                    'type' => 'boolean',
                    'name' => 'options_like_images_hide_not_available',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                ),

                array(
                    'label' => $this->language->get('options_like_images_image'),
                    'help' => $this->language->get('options_like_images_image_help'),
                    'type' => 'select',
                    'options' => array(
                        0 => $this->language->get('options_like_images_image_option_0'),
                        1 => $this->language->get('options_like_images_image_option_1'),
                    ),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_image'
                ),

                array(
                    'label' => $this->language->get('options_like_images_option_fields'),
                    'help' => $this->language->get('options_like_images_option_fields_help'),
                    'type' => 'select',
                    'multiple' => true,
                    'all_options' => true,
                    'options' => $this->get_options_array(),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_option_fields'
                ),

                array(
                    'label' => $this->language->get('options_like_images_width'),
                    'help' => $this->language->get('options_like_images_width_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_width',
                    'default' => 24
                ),

                array(
                    'label' => $this->language->get('options_like_images_height'),
                    'help' => $this->language->get('options_like_images_height_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_height',
                    'default' => 24
                ),

                array(
                    'label' => $this->language->get('options_like_images_radius'),
                    'help' => $this->language->get('options_like_images_radius_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_radius',
                    'default' => 0
                ),

                array(
                    'label' => $this->language->get('options_like_images_selected_border_color'),
                    'type' => 'colpick',
                    'name' => 'options_like_images_selected_border_color',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'default' => '08C'
                ),

                array(
                    'label' => $this->language->get('options_like_images_hover_border_color'),
                    'type' => 'colpick',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_hover_border_color',
                    'default' => 'DDDDDD'
                ),

                array(
                    'label' => $this->language->get('options_like_images_tooltip_position'),
                    'type' => 'select',
                    'options' => array(
                        'top' => 'top',
                        'bottom' => 'bottom',
                        'left' => 'left',
                        'right' => 'right',
                        'auto' => 'auto'
                    ),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_tooltip_position',
                ),

                array(
                    'label' => $this->language->get('options_like_images_tooltip_background_color'),
                    'type' => 'colpick',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_tooltip_background_color',
                    'default' => '000'
                ),

                array(
                    'label' => $this->language->get('options_like_images_tooltip_font_color'),
                    'type' => 'colpick',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_images',
                    'name' => 'options_like_images_tooltip_font_color',
                    'default' => 'fff'
                ),

                array(
                    'label' => $this->language->get('options_like_list'),
                    'help' => $this->language->get('options_like_list_help'),
                    'type' => 'boolean',
                    'name' => 'options_like_list',
                    'class_container' => 'toogle_main_field',
                ),

                array(
                    'label' => $this->language->get('options_like_list_hide_not_available'),
                    'type' => 'boolean',
                    'name' => 'options_like_list_hide_not_available',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                ),

                array(
                    'label' => $this->language->get('options_like_list_option_fields'),
                    'help' => $this->language->get('options_like_list_option_fields_help'),
                    'type' => 'select',
                    'multiple' => true,
                    'all_options' => true,
                    'options' => $this->get_options_array(),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_option_fields'
                ),

                array(
                    'label' => $this->language->get('options_like_list_width'),
                    'help' => $this->language->get('options_like_list_width_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_width',
                    'default' => 24
                ),

                array(
                    'label' => $this->language->get('options_like_list_height'),
                    'help' => $this->language->get('options_like_list_height_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_height',
                    'default' => 24
                ),

                array(
                    'label' => $this->language->get('options_like_list_radius'),
                    'help' => $this->language->get('options_like_list_radius_help'),
                    'type' => 'text',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_radius',
                    'default' => 0
                ),

                array(
                    'label' => $this->language->get('options_like_list_selected_border_color'),
                    'type' => 'colpick',
                    'name' => 'options_like_list_selected_border_color',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'default' => '08C'
                ),

                array(
                    'label' => $this->language->get('options_like_list_hover_border_color'),
                    'type' => 'colpick',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_hover_border_color',
                    'default' => 'DDDDDD'
                ),

                array(
                    'label' => $this->language->get('options_like_list_tooltip_position'),
                    'type' => 'select',
                    'options' => array(
                        'top' => 'top',
                        'bottom' => 'bottom',
                        'left' => 'left',
                        'right' => 'right',
                        'auto' => 'auto'
                    ),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_tooltip_position',
                ),

                array(
                    'label' => $this->language->get('options_like_list_tooltip_background_color'),
                    'type' => 'colpick',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_tooltip_background_color',
                    'default' => '000'
                ),

                array(
                    'label' => $this->language->get('options_like_list_tooltip_font_color'),
                    'type' => 'colpick',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_options_like_list',
                    'name' => 'options_like_list_tooltip_font_color',
                    'default' => 'fff'
                ),

                array(
                    'text' => '<i class="fa fa-cog"></i>'.$this->language->get('product_list_view'),
                    'type' => 'legend',
                ),

                array(
                    'label' => $this->language->get('bullet'),
                    'help_bottom' => $this->language->get('bullet_help'),
                    'type' => 'boolean',
                    'class_container' => 'toogle_main_field',
                    'name' => 'bullet'
                ),

                array(
                    'label' => $this->language->get('bullet_option'),
                    'help' => $this->language->get('bullet_option_help'),
                    'type' => 'select',
                    'options' => $this->get_options_array(),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_bullet',
                    'name' => 'bullet_option',
                    'multiple' => true,
                    'all_options' => true,
                ),

                array(
                    'label' => $this->language->get('bullet_image'),
                    'help' => $this->language->get('bullet_image_help'),
                    'type' => 'select',
                    'options' => array(
                        1 => $this->language->get('bullet_image_option_1'),
                        2 => $this->language->get('bullet_image_option_2'),
                        3 => $this->language->get('bullet_image_option_3'),
                    ),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_bullet',
                    'name' => 'bullet_image'
                ),

                array(
                    'label' => $this->language->get('bullet_width'),
                    'help' => $this->language->get('bullet_width_help'),
                    'type' => 'text',
                    'name' => 'bullet_width',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_bullet',
                    'default' => 24
                ),

                array(
                    'label' => $this->language->get('bullet_height'),
                    'help' => $this->language->get('bullet_height_help'),
                    'type' => 'text',
                    'name' => 'bullet_height',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_bullet',
                    'default' => 24
                ),

                array(
                    'label' => $this->language->get('bullet_radius'),
                    'help' => $this->language->get('bullet_radius_help'),
                    'type' => 'text',
                    'name' => 'bullet_radius',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_bullet',
                    'default' => 0
                ),

                array(
                    'label' => $this->language->get('bullet_selected_color'),
                    'type' => 'colpick',
                    'name' => 'bullet_selected_color',
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_bullet',
                    'default' => '08C'
                ),

                array(
                    'label' => $this->language->get('combinations_as_products'),
                    'help_bottom' => $this->language->get('combinations_as_products_help'),
                    'type' => 'boolean',
                    'class_container' => 'toogle_main_field',
                    'name' => 'combinations_as_products'
                ),

                array(
                    'label' => $this->language->get('options_to_group_combinations'),
                    'help_bottom' => $this->language->get('options_to_group_combinations_help'),
                    'type' => 'select',
                    'multiple' => true,
                    'all_options' => true,
                    'options' => $this->get_options_array(),
                    'class_container' => 'toogle_seconday_field '.$this->extension_group_config.'_combinations_as_products',
                    'name' => 'options_to_group_combinations'
                ),

                array(
                    'text' => '<i class="fa fa-cog"></i>'.$this->language->get('text_extra'),
                    'type' => 'legend',
                ),

                array(
                    'label' => $this->language->get('text_keep_stock_at_zero'),
                    'help_bottom' => $this->language->get('help_keep_stock_at_zero'),
                    'type' => 'boolean',
                    'name' => 'keep_stock_at_zero',
                    'class_container' => 'toogle_main_field',
                ),

                array(
                    'text' => '<i class="fa fa-cog"></i>'.$this->language->get('general_texts_translations'),
                    'type' => 'legend',
                ),

                array(
                    'label' => $this->language->get('text_starting_from'),
                    'type' => 'text',
                    'name' => 'text_starting_from',
                    'default' => $this->language->get('text_starting_from_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_unavailable_quantity'),
                    'type' => 'text',
                    'name' => 'text_unavailable_quantity',
                    'default' => $this->language->get('text_unavailable_quantity_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_dimensions'),
                    'type' => 'text',
                    'name' => 'text_dimensions',
                    'default' => $this->language->get('text_dimensions_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_dimensions_length'),
                    'type' => 'text',
                    'name' => 'text_dimensions_length',
                    'default' => $this->language->get('text_dimensions_length_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_dimensions_width'),
                    'type' => 'text',
                    'name' => 'text_dimensions_width',
                    'default' => $this->language->get('text_dimensions_width_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_dimensions_height'),
                    'type' => 'text',
                    'name' => 'text_dimensions_height',
                    'default' => $this->language->get('text_dimensions_height_default'),
                    'multilanguage' => true
                ),

                array(
                    'label' => $this->language->get('text_select_combination_message'),
                    'type' => 'text',
                    'name' => 'text_select_combination_message',
                    'default' => $this->language->get('text_select_combination_message_default'),
                    'multilanguage' => true
                ),
            );

            return array_filter($fields);
        }

        public function _send_custom_variables_to_view($variables) {
            return $variables;
        }

        public function _check_ajax_function($function_name) {
            return false;
        }
    }
?>