<?php
/*
base: u363082082_riel
user: u363082082_admin
pass: 9RkUzEjZEStvsIYeEF

pass ftp: BJ58dCuftKjJLwAUu0

info : i7fviUNr
marcelo : iU2XuRT4
siemprealdiez : rexubY8fvWSNI2bpn5
oyentes : CuB9nPkZ0gfkS2AZmQ
enviasderock : O898ZEjci9ehMbfPO2
bassoled :                                                                                              


vSyl6C0jSNLXnWLvUJ
*/
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => '',
                    'dbname'   => 'rielfm_2016',
                    'driverOptions' => array(
                        1002 => 'SET NAMES utf8'
                    )
                )
            ),
        ),
        'entitymanager' => array(
            'orm_default' => array(
                'connection'    => 'orm_default',
                'configuration' => 'orm_default'
            ),        
        ),
  )
);