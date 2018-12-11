<?php
// created: 2018-12-11 16:11:33
$dictionary["ProjectTask"]["fields"]["opportunities_projecttask_1"] = array (
  'name' => 'opportunities_projecttask_1',
  'type' => 'link',
  'relationship' => 'opportunities_projecttask_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_PROJECTTASK_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_projecttask_1opportunities_ida',
);
$dictionary["ProjectTask"]["fields"]["opportunities_projecttask_1_name"] = array (
  'name' => 'opportunities_projecttask_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROJECTTASK_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_projecttask_1opportunities_ida',
  'link' => 'opportunities_projecttask_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["ProjectTask"]["fields"]["opportunities_projecttask_1opportunities_ida"] = array (
  'name' => 'opportunities_projecttask_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_projecttask_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_PROJECTTASK_1_FROM_OPPORTUNITIES_TITLE',
);
