<?php
$viewdefs ['Opportunities'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'aos_products_opportunities_1_name',
            'label' => 'LBL_AOS_PRODUCTS_OPPORTUNITIES_1_FROM_AOS_PRODUCTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'operador_de_telecomunicacion_c',
            'studio' => 'visible',
            'label' => 'LBL_OPERADOR_DE_TELECOMUNICACION',
          ),
          1 => 'account_name',
        ),
        2 => 
        array (
          0 => 'sales_stage',
          1 => 
          array (
            'name' => 'sub_estado_oportunidad_c',
            'studio' => 'visible',
            'label' => 'LBL_SUB_ESTADO_OPORTUNIDAD',
          ),
        ),
        3 => 
        array (
          0 => 'probability',
          1 => 
          array (
            'name' => 'opportunities_notes_1_name',
            'label' => 'LBL_OPPORTUNITIES_NOTES_1_FROM_NOTES_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
