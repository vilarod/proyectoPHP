<?php
class Pedido
{
    private $idPedido;
    private $nombre;
    private $apellido;
    private $usuario;
    private $mail;
    private $lugarentrega;
    private $localidad;
    private $provincia;
    private $codpostal;
    private $formadepago;
    private $tarjtitular;
    private $tarjnumero;
    private $tarjvto;
    private $tarjclave;

    function __construct($nombre, $apellido, $usuario, $mail, $lugarentrega, $localidad, $provincia, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
        $this->mail = $mail;
        $this->lugarentrega = $lugarentrega;
        $this->localidad = $localidad;
        $this->provincia = $provincia;
        $this->codpostal = $codpostal;
        $this->formadepago = $formadepago;
        $this->tarjtitular = $tarjtitular;
        $this->tarjnumero = $tarjnumero;
        $this->tarjvto = $tarjvto;
        $this->tarjclave = $tarjclave;
    }



    /**
     * Get the value of idPedido
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return self
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of lugarEntrega
     */
    public function getLugarentrega()
    {
        return $this->lugarentrega;
    }

    /**
     * Set the value of lugarEntrega
     *
     * @return self
     */
    public function setLugarentrega($lugarEntrega)
    {
        $this->lugarentrega = $lugarentrega;

        return $this;
    }

    /**
     * Get the value of localidad
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of localidad
     *
     * @return self
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get the value of provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @return self
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of codPostal
     */
    public function getCodpostal()
    {
        return $this->codpostal;
    }

    /**
     * Set the value of codPostal
     *
     * @return self
     */
    public function setCodpostal($codpostal)
    {
        $this->codpostal = $codpostal;

        return $this;
    }

    /**
     * Get the value of formadepago
     */
    public function getFormaDePago()
    {
        return $this->formadepago;
    }

    /**
     * Set the value of formadepago
     *
     * @return self
     */
    public function setFormaDePago($formadepago)
    {
        $this->formadePago = $formadepago;

        return $this;
    }

    /**
     * Get the value of tarjtitular
     */
    public function getTarjtitular()
    {
        return $this->tarjtitular;
    }

    /**
     * Set the value of tarjtitular
     * @return self
     */
    public function setTarjtitular($tarjtitular)
    {
        $this->tarjtitular = $tarjtitular;
        return $this;
    }

    /**
     * Get the value of tarjnumero
     */
    public function getTarjNumero()
    {
        return $this->tarjnumero;
    }

    /**
     * Set the value of tarjnumero
     *
     * @return self
     */
    public function setTarjNumero($tarjnumero)
    {
        $this->tarjnumero = $tarjnumero;

        return $this;
    }

    /**
     * Get the value of tarjvto
     */
    public function getTarjVto()
    {
        return $this->tarjvto;
    }

    /**
     * Set the value of tarjvto
     *
     * @return self
     */
    public function setTarjVto($tarjvto)
    {
        $this->tarjvto = $tarjvto;

        return $this;
    }

    /**
     * Get the value of tarjclave
     */
    public function gettarjclave()
    {
        return $this->tarjclave;
    }

    /**
     * Set the value of tarjclave
     *
     * @return self
     */
    public function settarjclave($tarjclave)
    {
        $this->tarjclave = $tarjclave;

        return $this;
    }
}
