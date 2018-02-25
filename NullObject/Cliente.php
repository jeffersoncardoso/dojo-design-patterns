<?php
namespace NullObject;

use NullObject\ClienteAbstrato;

class Cliente extends ClienteAbstrato{

    public function __construct($id,$nome,$cpf){
        parent::__construct($id,$nome,$cpf);
    }	
	
}