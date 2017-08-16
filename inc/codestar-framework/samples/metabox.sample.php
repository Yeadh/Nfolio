<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

//
// Metabox Settings
//
$options   = array();


$options[] = array(
  'id'           => '_custom_page_options',
  'title'        => 'Custom Page Options',
  'post_type'    => 'page',
  'context'      => 'normal',
  'priority'     => 'default',
  'show_restore' => true,
  'sections'     => array(

    array(
      'name'   => 'section_1',
      'title'  => 'Section 1',
      'icon'   => 'fa fa-cog',
      'fields' => array(

        array(
          'id'    => 'text_1',
          'type'  => 'text',
          'title' => 'Text',
        ),

        array(
          'id'    => 'textarea_1',
          'type'  => 'textarea',
          'title' => 'Textarea',
          'help'  => 'This option field is useful. You will love it!',
        ),

        array(
          'id'    => 'upload_1',
          'type'  => 'upload',
          'title' => 'Upload',
          'help'  => 'Upload a site logo for your branding.',
        ),

        array(
          'id'    => 'switcher_1',
          'type'  => 'switcher',
          'title' => 'Switcher',
          'label' => 'You want to update for this framework ?',
        ),

        array(
          'id'      => 'color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker',
          'default' => '#3498db',
        ),

        array(
          'id'    => 'checkbox_1',
          'type'  => 'checkbox',
          'title' => 'Checkbox',
          'label' => 'Did you like this framework ?',
        ),

        array(
          'id'      => 'radio_1',
          'type'    => 'radio',
          'title'   => 'Radio',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
          'help'    => 'Are you sure for this choice?',
        ),

        array(
          'id'             => 'select_1',
          'type'           => 'select',
          'title'          => 'Select',
          'options'        => array(
            'bmw'          => 'BMW',
            'mercedes'     => 'Mercedes',
            'volkswagen'   => 'Volkswagen',
            'other'        => 'Other',
          ),
          'default_option' => 'Select your favorite car',
        ),

        array(
          'id'      => 'number_1',
          'type'    => 'number',
          'title'   => 'Number',
          'default' => '10',
          'after'   => ' <i class="csf-text-muted">$ (dollars)</i>',
        ),

        array(
          'id'        => 'image_select_1',
          'type'      => 'image_select',
          'title'     => 'Image Select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
            'value-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
            'value-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
          ),
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'This is info notice field for your highlight sentence.',
        ),

        array(
          'id'    => 'background_1',
          'type'  => 'background',
          'title' => 'Background',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'warning',
          'content' => 'This is info warning field for your highlight sentence.',
        ),

        array(
          'id'    => 'icon_1',
          'type'  => 'icon',
          'title' => 'Icon',
          'desc'  => 'Some description here for this option field.',
        ),

        array(
          'id'    => 'text_2',
          'type'  => 'text',
          'title' => 'Text',
          'desc'  => 'Some description here for this option field.',
        ),

        array(
          'id'        => 'textarea_2',
          'type'      => 'textarea',
          'title'     => 'Textarea',
          'info'      => 'Some information here for this option field.',
          'shortcode' => array(
            'id'      => 'csf_shortcode',
            'title'   => 'Add Shortcode',
          ),
        ),

      ),
    ),

    array(
      'name'  => 'section_2',
      'title' => 'Section 2',
      'icon'  => 'fa fa-tint',
      'fields' => array(
        array(
          'id'      => 'section_2_color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 1',
          'default' => '#2ecc71',
        ),
        array(
          'id'      => 'section_2_color_picker_2',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 2',
          'default' => '#3498db',
        ),
        array(
          'id'      => 'section_2_color_picker_3',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 3',
          'default' => '#9b59b6',
        ),
        array(
          'id'      => 'section_2_color_picker_4',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 4',
          'default' => '#34495e',
        ),
        array(
          'id'      => 'section_2_color_picker_5',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 5',
          'default' => '#e67e22',
        ),
      ),
    ),

  )
);

$options[]       = array(
  'id'           => '_custom_page_side_options',
  'title'        => 'Custom Page Side Options',
  'post_type'    => 'page',
  'context'      => 'side',
  'priority'     => 'default',
  'show_restore' => false,
  'sections'     => array(

    array(
      'name'   => 'section_3',
      'fields' => array(

        array(
          'id'        => 'section_3_image_select',
          'type'      => 'image_select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
          ),
          'default'   => 'value-2',
        ),

        array(
          'id'            => 'section_3_text',
          'type'          => 'text',
          'attributes'    => array(
            'placeholder' => 'do stuff'
          )
        ),

        array(
          'id'      => 'section_3_switcher',
          'type'    => 'switcher',
          'label'   => 'Are you sure ?',
          'default' => true
        ),

      ),
    ),

  )
);

$options[]       = array(
  'id'           => '_custom_post_options',
  'title'        => 'Custom Post Options',
  'post_type'    => 'post',
  'context'      => 'normal',
  'priority'     => 'default',
  'show_restore' => true,
  'sections'     => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

        array(
          'id'    => 'section_4_text',
          'type'  => 'text',
          'title' => 'Text Field',
        ),

        array(
          'id'    => 'section_4_textarea',
          'type'  => 'textarea',
          'title' => 'Textarea Field',
        ),

        array(
          'id'    => 'section_4_upload',
          'type'  => 'upload',
          'title' => 'Upload Field',
        ),

        array(
          'id'    => 'section_4_switcher',
          'type'  => 'switcher',
          'title' => 'Switcher Field',
          'label' => 'Yes, Please do it.',
        ),

      ),
    ),

  ),
);

CSF_Metabox::instance( $options );
