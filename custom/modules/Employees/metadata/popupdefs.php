<?php
$popupMeta = array (
    'moduleMain' => 'Employees',
    'varName' => 'Employee',
    'orderBy' => 'employees.first_name, employees.last_name',
    'whereClauses' => array (
  'first_name' => 'employees.first_name',
  'last_name' => 'employees.last_name',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'last_name',
      1 => 'first_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
    'name' => 'name',
  ),
  'SUGAR_LOGIN' => 
  array (
    'type' => 'bool',
    'default' => true,
    'studio' => 
    array (
      'listview' => false,
      'searchview' => false,
      'formula' => false,
    ),
    'label' => 'LBL_SUGAR_LOGIN',
    'width' => '10%',
  ),
  'DEPARTMENT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DEPARTMENT',
    'link' => true,
    'default' => true,
    'name' => 'department',
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'link' => true,
    'default' => true,
    'name' => 'title',
  ),
  'REPORTS_TO_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_REPORTS_TO_NAME',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'name' => 'reports_to_name',
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
    'sortable' => false,
    'name' => 'email1',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
    'name' => 'phone_work',
  ),
  'EMPLOYEE_STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EMPLOYEE_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'employee_status',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
