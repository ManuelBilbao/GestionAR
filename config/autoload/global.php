<?php
return [
	'module_layouts' => [
		'Portada' 	 => 'layout/portada.phtml',
		'Deportivo'  => 'layout/deportivo.phtml',
		'Rock'  	 => 'layout/rock.phtml',
		'Admin'   	 => 'layout/admin.phtml',
	],
    'service_manager' 	=> [
		'factories'		=> [
        	'Zend\Log\Logger' => function($sm){
            	$logger = new Zend\Log\Logger;
                $writer = new Zend\Log\Writer\Stream('./'.date('Y-m-d').'-error.log');
                return $logger->addWriter($writer);
			},
		],
	],
];