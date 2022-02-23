<?php
    class Persona//Clase
    {
        private $id;//Atributos de la clase
        private $nombre;
        private $telefono;
        private $email;
        
       public function __construct($id,$nombre,$telefono,$email)//Sintaxis para constructor de la clase en PHP
       {
           $this->id=$id;//$this indica que a esta clase y a sus atributos le entrego los valores asignados como parametros en el constructor
           $this->nombre=$nombre;
           $this->telefono=$telefono;
           $this->email=$email;
       }
       
       public function setId($id)//Funcion set
       {
            $this->id=$id;//Nuevamente $this para asignar el parametro al atributo de la clase   
       }
       public function getId()//Funcion get
       {
           return $this->id;//Se retorna el $this que contiene el valor almacenado por medio del parametro
       }

       public function setNombre($nombre)
       {
            $this->nombre=$nombre;   
       }
       public function getNombre()
       {
           return $this->nombre;
       }

       public function setTelefono($telefono)
       {
            $this->telefono=$telefono;   
       }
       public function getTelefono()
       {
           return $this->telefono;
       }

       public function setEmail($email)
       {
            $this->email=$email;   
       }
       public function getEmail()
       {
           return $this->email;
       }

       public function guardar()
       {
            $conexion=mysqli_connect('localhost','root','','crud_adsi');
            $query="INSERT INTO contactos (id, nombre, telefono, email) VALUES ('$this->id','$this->nombre','$this->telefono','$this->email')";
            $datos=mysqli_query($conexion,$query);

            if ($datos) {
                echo "Se guardó";
            } else {
                echo mysqli_error($conexion);
            }
       }
    }
?>