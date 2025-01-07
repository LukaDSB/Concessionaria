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

    public function excluirFilme($id) {
        $sql = "DELETE FROM filmes WHERE filmes_id = ?";
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

    public function cadastrarFilmes($titulo, $descricao, $anoLancamento, $duracaoLocacao, $duracaoFilme, $idioma, $precoLocacao, $classificacao, $idiomaId, $nomeImagem) {
        $sql = "INSERT INTO filmes (titulo, descricao, anoLancamento, duracaoLocacao, duracaoFilme, idioma, precoLocacao, classificacao, idioma_id, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        if ($stmt = $this->conn->prepare($sql)) {
            $stmt->bind_param("ssiiisdsis", $titulo, $descricao, $anoLancamento, $duracaoLocacao, $duracaoFilme, $idioma, $precoLocacao, $classificacao, $idiomaId, $nomeImagem);
            $executou = $stmt->execute();
            $stmt->close();
    
            return $executou;
        } else {
            return false;
        }
    }

    public function atualizarFilmes($id, $titulo, $descricao, $anoLancamento, $duracaoLocacao, $duracaoFilme, $idioma, $precoLocacao, $classificacao) {
        $sql = "UPDATE filmes SET titulo = ?, descricao = ?, anoLancamento = ?, duracaoLocacao = ?, duracaoFilme = ?, idioma = ?, precoLocacao = ?, classificacao = ? WHERE filmes_id = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssiiisdsi", $titulo, $descricao, $anoLancamento, $duracaoLocacao, $duracaoFilme, $idioma, $precoLocacao, $classificacao, $id);
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
