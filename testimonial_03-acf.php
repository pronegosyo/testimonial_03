<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_testimonial-03-additional-content',
		'title' => 'Testimonial 03 : Additional Content',
		'fields' => array (
			array (
				'key' => 'field_5387573a0dcb0',
				'label' => 'Testimonials List',
				'name' => 'testimonials_list',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_538757580dcb1',
						'label' => 'Item Description',
						'name' => 'item_description',
						'type' => 'wysiwyg',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_53883692dcfab',
				'label' => 'Action Content',
				'name' => 'action_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'custom_template',
					'operator' => '==',
					'value' => 'testimonial_03',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
