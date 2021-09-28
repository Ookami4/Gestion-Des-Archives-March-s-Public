<?php


class Communes
{
    static public function getAll(){
        $statment = DB::connect()->prepare("SELECT * FROM communes");
        $statment->excute();
        return $statment->close();
        $statment = null;
    }
}