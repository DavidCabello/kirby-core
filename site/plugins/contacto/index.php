<?php

Kirby::plugin('kirby3-core/contacto', [
    'hooks' => [
        'kirbytags:after' => function ($text, $data, $options) {
            $session = kirby()->session();

            return Str::template($text, [
                'name'  => $session->get('name') ?? ''
            ]);
        }
    ],
]);