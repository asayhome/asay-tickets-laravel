<?php

use App\Models\User;

return [
    'userModel' => User::class,
    "userSelectedFileds" => [
        'id', 'first_name', 'last_name'
    ],
    'permissions' => [
        'ticket_section' => 'Ticket section',
        'ticket_section_add' => 'Add new ticket section',
        'ticket_section_edit' =>  'Edit ticket section',
        'ticket_section_show' => 'Show ticket section',
        'ticket_section_show_all' =>  'Show all tickets sections',
        'ticket_section_delete' =>  'Delete ticket section',
        'ticket' =>  'Ticket',
        'ticket_add' =>  'Add new ticket',
        'ticket_edit' => 'Edit ticket',
        'ticket_show' => 'Show ticket',
        'ticket_show' => 'Show all tickets',
        'ticket_delete' => 'Delete ticket',
    ]
];
