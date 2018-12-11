<?php
// created: 2018-12-11 17:55:52
$dictionary["Opportunity"]["fields"]["opportunities_notes_1"] = array (
  'name' => 'opportunities_notes_1',
  'type' => 'link',
  'relationship' => 'opportunities_notes_1',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => 'opportunities_notes_1notes_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_notes_1_name"] = array (
  'name' => 'opportunities_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_NOTES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_notes_1notes_idb',
  'link' => 'opportunities_notes_1',
  'table' => 'notes',
  'module' => 'Notes',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_notes_1notes_idb"] = array (
  'name' => 'opportunities_notes_1notes_idb',
  'type' => 'link',
  'relationship' => 'opportunities_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_NOTES_TITLE',
);
