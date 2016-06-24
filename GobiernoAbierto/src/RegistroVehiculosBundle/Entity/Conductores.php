<?php

namespace RegistroVehiculosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="conductores")
 * @ORM\Entity(repositoryClass="RegistroVehiculosBundle\Repository\ConductoresRepository")
 */
class Conductores
{
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Vehiculos", inversedBy="conductores", cascade={"persist"})
     * @ORM\JoinTable(name="conductores_vehiculos",
     * joinColumns={@ORM\JoinColumn(name="conductor_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="vehiculo_id", referencedColumnName="id")}
     * )
     */
    public $vehiculos;

    /**
     * Add vehiculos
     *
     * @param \RegistroVehiculosBundle\Entity\Vehiculos $vehiculos
     */
    public function addVehiculos(\RegistroVehiculosBundle\Entity\Vehiculos $vehiculos)
    {
        $this->vehiculos[] = $vehiculos;
    }

    /**
     * Get Vehiculos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getVehiculos()
    {
        return $this->vehiculos;
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
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=255, unique=true)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="organismo", type="string", length=255)
     */
    private $organismo;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255)
     */
    private $categoria;


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
     * Set dni
     *
     * @param string $dni
     *
     * @return Usuario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set organismo
     *
     * @param string $organismo
     *
     * @return Usuario
     */
    public function setOrganismo($organismo)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo
     *
     * @return string
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Usuario
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}

