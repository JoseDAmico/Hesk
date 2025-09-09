<?php if (!defined('IN_SCRIPT')) {die();} $hesk_settings['custom_fields']=array (
  'custom1' => 
  array (
    'use' => '1',
    'place' => '0',
    'type' => 'select',
    'req' => '2',
    'category' => 
    array (
      0 => '2',
    ),
    'name' => 'Tipo',
    'value' => 
    array (
      'show_select' => 0,
      'is_searchable' => 1,
      'select_options' => 
      array (
        0 => 'Monitoreo',
        1 => 'Incidente',
        2 => 'Ajustes',
        3 => 'Pruebas',
        4 => 'Ejecución asistida',
      ),
    ),
    'order' => '10',
    'title' => 'Tipo',
    'name:' => 'Tipo:',
  ),
);