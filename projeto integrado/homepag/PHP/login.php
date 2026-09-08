<?php 
//configuracao do host
$host = 'localhost';
$banco ='sistema';
$usuario = 'root';
$senha = '';

header('Conten-Type: application/json');

try{
    //CONECÃO PDO
    $pdo = new PDO ("mysql:host$host;dbname=$banco;charset=utf8", $usuario, $senha);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERROMODE_EXCEPTION);

    //RECEBER O FORMULARIO
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';

    if(!empty($nome) && !empty($email)){
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $_SESSION['usuario_nome'] = $nome;

        echo json_encode(['status' => 'sucesso', 'mensagem' => 'Cadastrado com sucesso!']);
    } else{
        echo json_encode(['statu' => 'erro', 'mensagem' => 'Preencha todos os campos' ]);
    }
} catch (PDOException $e){
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro: ' . $e->getMessage()])
}

?>