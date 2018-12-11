<?php
// created: 2018-12-11 16:11:33
$dictionary["opportunities_projecttask_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_projecttask_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTask',
      'rhs_table' => 'project_task',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_projecttask_1_c',
      'join_key_lhs' => 'opportunities_projecttask_1opportunities_ida',
      'join_key_rhs' => 'opportunities_projecttask_1projecttask_idb',
    ),
  ),
  'table' => 'opportunities_projecttask_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'opportunities_projecttask_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_projecttask_1projecttask_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_projecttask_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_projecttask_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_projecttask_1opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_projecttask_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_projecttask_1projecttask_idb',
      ),
    ),
  ),
);