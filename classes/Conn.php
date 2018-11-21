<?php
class Conn{	
    // Instância da classe
    private static $instance = null;
    private $banco;

    // Construtor privado: só a própria classe pode invocá-lo
    private function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pswd = "";
        $db = "sisgev";

        try {
            $this->banco = mysqli_connect($host, $user, $pswd, $db);
            $this->banco->set_charset('utf8');
        } catch (Exception $e) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }

    // método estático
    static function getInstance()
    {
        // Já existe uma instância?
        if (self::$instance == NULL)
            self::$instance = new Conn();   // Não existe, cria a instância 
        return self::$instance;                     // Já existe, simplesmente retorna
    }

    // Previne o uso de clone
    private function __clone() {}

    public function getBanco()
    {
        return $this->banco;
    }
}
