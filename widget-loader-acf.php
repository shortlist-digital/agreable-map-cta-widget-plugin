<?php

$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => 'widget_map_cta',
  'name' => 'map-cta',
  'label' => 'Map CTA',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => 'map_cta_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'widget_map_cta_title',
      'label' => 'Title',
      'name' => 'title',
      'type' => 'text',
      'required' => 1,
    ),
    array (
      'key' => 'widget_map_cta_sell',
      'label' => 'Sell',
      'name' => 'sell',
      'type' => 'text',
    ),
    array (
      'key' => 'widget_map_cta_link',
      'label' => 'Link',
      'name' => 'link',
      'type' => 'url',
      'required' => 1,
      'instructions' => 'Where does the button link to? (e.g. /map/venue)'
    ),
    array (
      'key' => 'widget_map_cta_link_text',
      'label' => 'Link text',
      'name' => 'link_text',
      'type' => 'text',
      'required' => 1,
      'instructions' => 'The text within the button'
    ),
    array (
      'key' => 'widget_map_cta_image',
      'label' => 'Image',
      'name' => 'image',
      'type' => 'image',
      'required' => 1,
      'instructions' => 'The map image'
    ),
    array (
      'key' => 'map_cta_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    )
  )
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main');
