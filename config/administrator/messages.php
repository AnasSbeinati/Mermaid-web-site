<?php
return array (
    'title' => 'messages',

	'single' => 'message',

	'model' => 'App\Message',
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
        ),
        'message' => array(
            'title' => 'Message'
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
        ),
        'message' => array(
            'title' => 'Message'
        )
    ),
);