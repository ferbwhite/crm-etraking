<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products',
    'varName' => 'AOS_Products',
    'orderBy' => 'aos_products.name',
    'whereClauses' => array (
  'name' => 'aos_products.name',
  'operador_c' => 'aos_products_cstm.operador_c',
  'categoria_de_producto_c' => 'aos_products_cstm.categoria_de_producto_c',
),
    'searchInputs' => array (
  1 => 'name',
  8 => 'operador_c',
  12 => 'categoria_de_producto_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'operador_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_OPERADOR',
    'width' => '10%',
    'name' => 'operador_c',
  ),
  'categoria_de_producto_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA_DE_PRODUCTO',
    'width' => '10%',
    'name' => 'categoria_de_producto_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'OPERADOR_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_OPERADOR',
    'width' => '10%',
    'name' => 'operador_c',
  ),
  'CATEGORIA_DE_PRODUCTO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA_DE_PRODUCTO',
    'width' => '10%',
    'name' => 'categoria_de_producto_c',
  ),
),
);
