<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Nota
 *
 * @author mfernandez
 */
class Nota implements JsonSerializable {

    use ViewData;

    private ?int $id;
    private string $titulo;
    private string $contenido;
    private string $imagen;

    public function __construct(?int $id = null, string $titulo = "", string $contenido = "", ?string $imagen = "Photo1.png") {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->imagen = $imagen;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getContenido(): string {
        return $this->contenido;
    }

    public function getImagen(): string {
        return $this->imagen;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function setContenido(string $contenido): void {
        $this->contenido = $contenido;
    }

    public function setImagen(string $imagen): void {
        $this->imagen = $imagen;
    }

    public function jsonSerialize(): mixed {
        //Especificamos qué propiedades no públicas queremos que pasen a formar parte del objeto JSON
        return array(
            'id' => $this->id,
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'imagen' => $this->imagen
        );
    }

}
