<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-12-11 18:07:01
$dictionary["Note"]["fields"]["accounts_notes_1"] = array (
  'name' => 'accounts_notes_1',
  'type' => 'link',
  'relationship' => 'accounts_notes_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_NOTES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_notes_1accounts_ida',
);
$dictionary["Note"]["fields"]["accounts_notes_1_name"] = array (
  'name' => 'accounts_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_NOTES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_notes_1accounts_ida',
  'link' => 'accounts_notes_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["accounts_notes_1accounts_ida"] = array (
  'name' => 'accounts_notes_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_NOTES_1_FROM_NOTES_TITLE',
);


// created: 2018-12-11 17:55:52
$dictionary["Note"]["fields"]["opportunities_notes_1"] = array (
  'name' => 'opportunities_notes_1',
  'type' => 'link',
  'relationship' => 'opportunities_notes_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_notes_1opportunities_ida',
);
$dictionary["Note"]["fields"]["opportunities_notes_1_name"] = array (
  'name' => 'opportunities_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_notes_1opportunities_ida',
  'link' => 'opportunities_notes_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["opportunities_notes_1opportunities_ida"] = array (
  'name' => 'opportunities_notes_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_OPPORTUNITIES_TITLE',
);

?>