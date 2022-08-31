<?php
    return
    [
        'driver' => 'argon',
        'bcrypt' =>
        [
            'rounds' => env('BCRYPT_ROUNDS', 10),
        ],
        'argon' =>
        [
            'memory'  => 65536,
            'threads' => 2,
            'time'    => 8,
        ],
    ];
?>