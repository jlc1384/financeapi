<?php
return array(
    'router' => array(
        'routes' => array(
            'antevenioapi.rest.expense' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/expense[/:expense_id]',
                    'defaults' => array(
                        'controller' => 'antevenioapi\\V1\\Rest\\Expense\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'antevenioapi.rest.expense',
        ),
    ),
    'zf-rest' => array(
        'antevenioapi\\V1\\Rest\\Expense\\Controller' => array(
            'listener' => 'antevenioapi\\V1\\Rest\\Expense\\ExpenseResource',
            'route_name' => 'antevenioapi.rest.expense',
            'route_identifier_name' => 'expense_id',
            'collection_name' => 'expense',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'antevenioapi\\V1\\Rest\\Expense\\ExpenseEntity',
            'collection_class' => 'antevenioapi\\V1\\Rest\\Expense\\ExpenseCollection',
            'service_name' => 'expense',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'antevenioapi\\V1\\Rest\\Expense\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'antevenioapi\\V1\\Rest\\Expense\\Controller' => array(
                0 => 'application/vnd.antevenioapi.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'antevenioapi\\V1\\Rest\\Expense\\Controller' => array(
                0 => 'application/vnd.antevenioapi.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'antevenioapi\\V1\\Rest\\Expense\\ExpenseEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'antevenioapi.rest.expense',
                'route_identifier_name' => 'expense_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'antevenioapi\\V1\\Rest\\Expense\\ExpenseCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'antevenioapi.rest.expense',
                'route_identifier_name' => 'expense_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'antevenioapi\\V1\\Rest\\Expense\\ExpenseResource' => array(
                'adapter_name' => 'antadaptddbb',
                'table_name' => 'expense',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'antevenioapi\\V1\\Rest\\Expense\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'antevenioapi\\V1\\Rest\\Expense\\ExpenseResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'antevenioapi\\V1\\Rest\\Expense\\Controller' => array(
            'input_filter' => 'antevenioapi\\V1\\Rest\\Expense\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'antevenioapi\\V1\\Rest\\Expense\\Validator' => array(
            0 => array(
                'name' => 'quantity',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'expdescription',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '2500',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
