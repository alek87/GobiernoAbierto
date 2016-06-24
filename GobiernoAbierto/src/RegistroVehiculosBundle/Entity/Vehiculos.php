<?php

namespace RegistroVehiculosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos")
 * @ORM\Entity(repositoryClass="RegistroVehiculosBundle\Repository\VehiculosRepository")
 */
class Vehiculos
{
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Conductores", mappedBy="vehiculos", cascade={"persist"})
     */
    public $conductores;

    /**
     * Add conductores
     *
     * @param \RegistroVehiculosBundle\Entity\Conductores $conductores
     */
    public function addConductores(\RegistroVehiculosBundle\Entity\Conductores $conductores)
    {
        $this->conductores[] = $conductores;
    }

    /**
     * Get conductores
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConductores()
    {
        return $this->conductores;
    }
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Secretaria")
     * @ORM\JoinColumn(name="secretaria_id", referencedColumnName="id")
     * @return integer
     */
    private $secretaria;
    public function setSecretaria(\RegistroVehiculosBundle\Entity\Secretaria $secretaria)
    {
        $this->secretaria = $secretaria;
    }

    public function getSecretaria()
    {
        return $this->secretaria;
    }
    
    
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
     * @ORM\Column(name="nro_vehiculo", type="bigint", unique=true)
     */
    private $nroVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=255, unique=true)
     */
    private $patente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_vehiculo", type="string", length=255, nullable=true)
     */
    private $tipoVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255, nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var int
     *
     * @ORM\Column(name="capacidad", type="integer", nullable=true)
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="motor", type="string", length=255, nullable=true)
     */
    private $motor;

    /**
     * @var string
     *
     * @ORM\Column(name="puertas", type="string", length=255, nullable=true)
     */
    private $puertas;

    /**
     * @var string
     *
     * @ORM\Column(name="serie_motor", type="string", length=255, unique=true)
     */
    private $serieMotor;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime", nullable=true)
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_baja", type="datetime", nullable=true)
     */
    private $fechaBaja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modif", type="datetime", nullable=true)
     */
    private $fechaModif;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario", type="integer", unique=true)
     */
    private $usuario;

    /**
     * @var int
     *
     * @ORM\Column(name="localidad", type="integer")
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_inicio_activ", type="datetime", nullable=false)
     */
    private $horarioInicioActiv;    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_fin_activ", type="datetime", nullable=false)
     */
    private $horarioFinActiv;
    
    
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nroVehiculo
     *
     * @param integer $nroVehiculo
     *
     * @return Vehiculos
     */
    public function setNroVehiculo($nroVehiculo)
    {
        $this->nroVehiculo = $nroVehiculo;

        return $this;
    }

    /**
     * Get nroVehiculo
     *
     * @return int
     */
    public function getNroVehiculo()
    {
        return $this->nroVehiculo;
    }

    /**
     * Set patente
     *
     * @param string $patente
     *
     * @return Vehiculos
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set tipoVehiculo
     *
     * @param string $tipoVehiculo
     *
     * @return Vehiculos
     */
    public function setTipoVehiculo($tipoVehiculo)
    {
        $this->tipoVehiculo = $tipoVehiculo;

        return $this;
    }

    /**
     * Get tipoVehiculo
     *
     * @return string
     */
    public function getTipoVehiculo()
    {
        return $this->tipoVehiculo;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Vehiculos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Vehiculos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Vehiculos
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set capacidad
     *
     * @param integer $capacidad
     *
     * @return Vehiculos
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return int
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set motor
     *
     * @param string $motor
     *
     * @return Vehiculos
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get motor
     *
     * @return string
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set puertas
     *
     * @param string $puertas
     *
     * @return Vehiculos
     */
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;

        return $this;
    }

    /**
     * Get puertas
     *
     * @return string
     */
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * Set serieMotor
     *
     * @param string $serieMotor
     *
     * @return Vehiculos
     */
    public function setSerieMotor($serieMotor)
    {
        $this->serieMotor = $serieMotor;

        return $this;
    }

    /**
     * Get serieMotor
     *
     * @return string
     */
    public function getSerieMotor()
    {
        return $this->serieMotor;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Vehiculos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Vehiculos
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return Vehiculos
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set fechaModif
     *
     * @param \DateTime $fechaModif
     *
     * @return Vehiculos
     */
    public function setFechaModif($fechaModif)
    {
        $this->fechaModif = $fechaModif;

        return $this;
    }

    /**
     * Get fechaModif
     *
     * @return \DateTime
     */
    public function getFechaModif()
    {
        return $this->fechaModif;
    }

    /**
     * Set usuario
     *
     * @param integer $usuario
     *
     * @return Vehiculos
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return int
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set localidad
     *
     * @param integer $localidad
     *
     * @return Vehiculos
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return int
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Vehiculos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }
    
    /**
     * Set horarioInicioActiv
     *
     * @param \DateTime $horarioInicioActiv
     *
     * @return horarioInicioActiv
     */
    public function setHorarioInicioActiv($horarioInicioActiv)
    {
        $this->horarioInicioActiv = $horarioInicioActiv;

        return $this;
    }

    /**
     * Get horarioInicioActiv
     *
     * @return \DateTime
     */
    public function getHorarioInicioActiv()
    {
        return $this->horarioInicioActiv;
    }
    
    /**
     * Set horarioFinActiv
     *
     * @param \DateTime horarioFinActiv
     *
     * @return HorarioFinActiv
     */
    public function setHorarioFinActiv($horarioFinActiv)
    {
        $this->horarioFinActiv = $horarioFinActiv;

        return $this;
    }

    /**
     * Get HorarioFinActiv
     *
     * @return \DateTime
     */
    public function getHorarioFinActiv()
    {
        return $this->horarioFinActiv;
    }
    
    public function __toString() {
       return $this->patente;
    }
}

