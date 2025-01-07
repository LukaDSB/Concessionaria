<?php
class CarrosModel {
    public $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "concessionaria";
    public $conn;


    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getCarros() {
        $sql = "SELECT * FROM veiculo";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getCarroPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM veiculo WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function excluirCarro($id) {
        $sql = "DELETE FROM veiculo WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }

    public function cadastrarVeiculo($nome, $foto, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao, $idCategoria, $idMarca, $idContato) {
        $sql = "INSERT INTO veiculo (nome, foto, valor, anoFabricacao, anoModelo, cor, combustivel, quilometragem, cambio, placa, descricao, idCategoria, idMarca, idContato) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        if ($stmt = $this->conn->prepare($sql)) {
            $stmt->bind_param("ssissssisssiii", $nome, $foto, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao, $idCategoria, $idMarca, $idContato);
            $executou = $stmt->execute();
            $stmt->close();
    
            return $executou;
        } else {
            return false;
        }
    }

    public function atualizarCarros($nome, $nomeImagemBanco, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao, $idCategoria, $idMarca, $idContato) {
        $sql = "UPDATE veiculo SET nome = ?,foto = ?, valor = ?, anoFabricacao = ?, anoModelo = ?, cor = ?, combustivel = ?, quilometragem = ?, cambio = ?, placa = ?, descricao = ?, idCategoria = ?, idMarca = ?, idContato = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssissssisssiiii", $nome, $foto, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao, $idCategoria, $idMarca, $idContato, $id);
            $executou = $stmt->execute();
            $stmt->close();
    
            return $executou;
        } else {
            return false;
        }
    }    

    public function closeConnection() {
        $this->conn->close();
    }
}
