<?php
return array (
    'title' => 'requests',

	'single' => 'request',

	'model' => 'App\Request',
    'rules' => array(
        //'lang' => 'required',
    ),

    'messages' => array(
        //'lang.required' => 'ادخل اللغة اولا',
    ),
    /**
     * The display columns
     */
    'columns' => array(
        'id' => array (
            'title' => 'number'
        ),
        'name' => array(
            'title' => 'Name'
        ),
        'email' => array(
            'title' => 'E-Mail'
        ),
        'phone_number' => array(
            'title' => 'Phone Number'
        )
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name'
        ),
        'email' => array(
            'title' => 'E-Mail'
        ),
        'phone_number' => array(
            'title' => 'Phone Number'
        )
    ),
);