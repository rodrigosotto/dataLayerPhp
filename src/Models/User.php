<?php
namespace src\Model;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"]);
    }

    public function save(): bool
    {
        //verifico email
        // posso polimorfar o elemento para que as regras de negócio aconteça
        parent::save(); // TODO: Change the autogenerated stub
    }
    //este metodo aqui esta buscando somente o endereço do objeto ativo
    public function addresses()
    {
        return(new Address())->find("user_id = :uid","uid={$this->id}")-$this->fetch(true);
    }
}