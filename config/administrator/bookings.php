<?php
return array (
    'title' => 'bookings',

	'single' => 'booking',

	'model' => 'App\Booking',
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
        'first_name' => array(
            'title' => 'First Name'
        ),
        'second_name' => array(
            'title' => 'Second Name'
        ),
        'email' => array(
            'title' => 'E-Mail'
        ),
        'address' => array(
            'title' => 'Address'
        ),
        'phone_number' => array(
            'title' => 'Phone Number'
        ),
        'apartment_number' => array(
            'title' => 'Apartment Number'
        ),
        'booking_date' => array(
            'title' => 'Booking Date'
        ),
        'comments' => array(
            'title' => 'Comments'
        )

    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'first_name' => array(
            'title' => 'First Name'
        ),
        'second_name' => array(
            'title' => 'Second Name'
        ),
        'email' => array(
            'title' => 'E-Mail'
        ),
        'address' => array(
            'title' => 'Address'
        ),
        'phone_number' => array(
            'title' => 'Phone Number'
        ),
        'apartment_number' => array(
            'title' => 'Apartment Number'
        ),
        'booking_date' => array(
            'title' => 'Booking Date'
        ),
        'comments' => array(
            'title' => 'Comments'
        )
    ),
);