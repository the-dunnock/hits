<?php
$xpdo_meta_map['Hit']= array (
  'package' => 'hits',
  'version' => NULL,
  'table' => 'hits',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'hit_key' => NULL,
    'hit_count' => 0,
  ),
  'fieldMeta' => 
  array (
    'hit_key' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'hit_count' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
