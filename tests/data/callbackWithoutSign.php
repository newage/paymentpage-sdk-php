<?php

$callback = [
    'project_id' => 123,
    'recurring' => [
        'id' => 321,
        'status' => 'active',
        'type' => 'Y',
        'currency' => 'EUR',
        'exp_year' => '2025',
        'exp_month' => '12',
        'period' => 'D',
        'time' => '11',
    ],
];

return json_encode($callback);