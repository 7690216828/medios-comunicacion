<?php

namespace Model;

class Evento extends ActiveRecord{
    protected static $tabla = 'amc_topico'; //nombre de la tablaX
    protected static $columnasDB = ['ID','FECHA','LUGAR', 'DEPARTAMENTO','MUNICIPIO','TIPO','LATITUD','LONGITUD','ACTIVIDAD','SITUACION'];

    public $id;
    public $fecha;
    public $lugar;
    public $departamento;
    public $municipio;
    public $tipo;
    public $latitud;
    public $longitud;
    public $actividad;
    public $situacion;


    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->lugar = $args['lugar'] ?? '';
        $this->departamento = $args['departamento'] ?? '';
        $this->municipio = $args['municipio'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->latitud = $args['latitud'] ?? '';
        $this->longitud = $args['longitud'] ?? '';
        $this->actividad = $args['actividad'] ?? '';
        $this->situacion = $args['situacion'] ?? '1';
    }
}