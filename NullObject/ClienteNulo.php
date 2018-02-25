<?php
namespace NullObject;

use NullObject\ClienteAbstrato;

class ClienteNulo extends ClienteAbstrato{
    function __construct() {
        
    }
    
    function setCpf($cpf){
        $this->cpf = $cpf;
    }
}