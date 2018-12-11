<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-12-05 21:04:46
$dictionary["Opportunity"]["fields"]["aos_products_opportunities_1"] = array (
  'name' => 'aos_products_opportunities_1',
  'type' => 'link',
  'relationship' => 'aos_products_opportunities_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_OPPORTUNITIES_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_opportunities_1aos_products_ida',
);
$dictionary["Opportunity"]["fields"]["aos_products_opportunities_1_name"] = array (
  'name' => 'aos_products_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_OPPORTUNITIES_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_opportunities_1aos_products_ida',
  'link' => 'aos_products_opportunities_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["aos_products_opportunities_1aos_products_ida"] = array (
  'name' => 'aos_products_opportunities_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


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


 // created: 2018-12-07 17:35:08
$dictionary['Opportunity']['fields']['amount']['required']=false;
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';

 

 // created: 2018-11-20 22:13:33
$dictionary['Opportunity']['fields']['contratado_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['contratado_c']['labelValue']='Sub Estado Oportunidad';

 

 // created: 2018-12-07 17:33:53
$dictionary['Opportunity']['fields']['date_closed']['required']=false;
$dictionary['Opportunity']['fields']['date_closed']['inline_edit']=true;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';

 

 // created: 2018-10-31 19:19:59
$dictionary['Opportunity']['fields']['description']['audited']=true;
$dictionary['Opportunity']['fields']['description']['inline_edit']=true;
$dictionary['Opportunity']['fields']['description']['comments']='Full text of the note';
$dictionary['Opportunity']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-12-11 15:57:12
$dictionary['Opportunity']['fields']['etapa_de_ventas_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['etapa_de_ventas_c']['labelValue']='etapa de ventas';

 

 // created: 2018-10-23 17:55:02
$dictionary['Opportunity']['fields']['gestionados_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['gestionados_c']['labelValue']='GESTIONADOS';

 

 // created: 2018-10-16 19:45:24
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-10-16 19:45:23
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2018-10-16 19:45:22
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2018-10-16 19:45:22
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-10-30 22:56:11
$dictionary['Opportunity']['fields']['name']['inline_edit']=true;
$dictionary['Opportunity']['fields']['name']['comments']='Name of the opportunity';
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['full_text_search']=array (
);

 

 // created: 2018-10-31 19:18:56
$dictionary['Opportunity']['fields']['notas_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['notas_c']['labelValue']='Notas';

 

 // created: 2018-10-31 18:26:20
$dictionary['Opportunity']['fields']['note_id_c']['inline_edit']=1;

 

 // created: 2018-10-30 22:58:27
$dictionary['Opportunity']['fields']['operador_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['operador_c']['labelValue']='operador';

 

 // created: 2018-12-11 16:01:30
$dictionary['Opportunity']['fields']['operador_de_telecomunicacion_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['operador_de_telecomunicacion_c']['labelValue']='Operador de Telecomunicaciones';

 

 // created: 2018-12-11 16:06:27
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['inline_edit']=true;
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']='1';
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';

 

 // created: 2018-12-11 16:06:45
$dictionary['Opportunity']['fields']['sub_estado_oportunidad_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['sub_estado_oportunidad_c']['labelValue']='Sub estado oportunidad';

 
?>