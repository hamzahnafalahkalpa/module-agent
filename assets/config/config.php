<?php

use Hanafalah\ModuleAgent\{
    Models as ModuleAgent,
    Contracts
};

return [
    'app' => [
        'contracts' => [
            'agent'        => Contracts\Agent::class,
            'module_agent' => Contracts\ModuleAgent::class
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts'
    ],
    'database' => [
        'models' => [
            'Agent' => ModuleAgent\Agent::class,
        ]
    ],
];
