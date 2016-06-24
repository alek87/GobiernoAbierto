<?php

namespace RegistroVehiculosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secretaria
 *
 * @ORM\Table(name="secretaria")
 * @ORM\Entity(repositoryClass="RegistroVehiculosBundle\Repository\SecretariaRepository")
 */
class Secretaria {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="organismo", type="integer")
     */
    private $organismo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=255, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="servicios", type="string", length=255)
     */
    private $servicios;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_baja", type="datetime")
     */
    private $fechaBaja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modif", type="datetime")
     */
    private $fechaModif;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set organismo
     *
     * @param integer $organismo
     *
     * @return Secretaria
     */
    public function setOrganismo($organismo) {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo
     *
     * @return int
     */
    public function getOrganismo() {
        return $this->organismo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Secretaria
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Secretaria
     */
    public function setDireccion($direccion) {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Secretaria
     */
    public function setCelular($celular) {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular() {
        return $this->celular;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Secretaria
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Secretaria
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set servicios
     *
     * @param string $servicios
     *
     * @return Secretaria
     */
    public function setServicios($servicios) {
        $this->servicios = $servicios;

        return $this;
    }

    /**
     * Get servicios
     *
     * @return string
     */
    public function getServicios() {
        return $this->servicios;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Secretaria
     */
    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones() {
        return $this->observaciones;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Secretaria
     */
    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return Secretaria
     */
    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja() {
        return $this->fechaBaja;
    }

    /**
     * Set fechaModif
     *
     * @param \DateTime $fechaModif
     *
     * @return Secretaria
     */
    public function setFechaModif($fechaModif) {
        $this->fechaModif = $fechaModif;

        return $this;
    }

    /**
     * Get fechaModif
     *
     * @return \DateTime
     */
    public function getFechaModif() {
        return $this->fechaModif;
    }

    public function __toString() {
       return $this->nombre;
    }
}
