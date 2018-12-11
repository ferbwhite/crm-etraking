<?php
// created: 2018-12-11 16:11:33
$dictionary["Opportunity"]["fields"]["opportunities_projecttask_1"] = array (
  'name' => 'opportunities_projecttask_1',
  'type' => 'link',
  'relationship' => 'opportunities_projecttask_1',
  'source' => 'non-db',
  'module' => 'ProjectTask',
  'bean_name' => 'ProjectTask',
  'vname' => 'LBL_OPPORTUNITIES_PROJECTTASK_1_FROM_PROJECTTASK_TITLE',
  'id_name' => 'opportunities_projecttask_1projecttask_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_projecttask_1_name"] = array (
  'name' => 'opportunities_projecttask_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROJECTTASK_1_FROM_PROJECTTASK_TITLE',
  'save' => true,
  'id_name' => 'opportunities_projecttask_1projecttask_idb',
  'link' => 'opportunities_projecttask_1',
  'table' => 'project_task',
  'module' => 'ProjectTask',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_projecttask_1projecttask_idb"] = array (
  'name' => 'opportunities_projecttask_1projecttask_idb',
  'type' => 'link',
  'relationship' => 'opportunities_projecttask_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_PROJECTTASK_1_FROM_PROJECTTASK_TITLE',
);
