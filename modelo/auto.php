<?php

class Auto
{
    public $Id;
    public $Marca;

    public static function BuscarTodos()
    {
        $con  = Database::getInstance();
        $sql = "select * from autos";
        $queryAutos = $con->db->prepare($sql);
        $queryAutos->execute();
        $queryAutos->setFetchMode(PDO::FETCH_CLASS, 'Auto');

        $listAutoADevolver = array();

        foreach ($queryAutos as $a) {
            $listAutoADevolver[] = $a;
        }

        return $listAutoADevolver;
    }
}
