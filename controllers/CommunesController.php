<?php


class CommunesController
{
    public function getCommunes(){
        $communes = Communes::getAll();
        return $communes;
    }
}