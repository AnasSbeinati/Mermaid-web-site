<?php
return array (
    'title' => 'Followers',

	'single' => 'Follower',

	'model' => 'App\Follower',
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
        'email' => array(
            'title' => 'E-Mail'
        )
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'email' => array(
            'title' => 'E-Mail'
        )
    ),
);