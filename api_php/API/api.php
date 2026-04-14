<?php
    header("Content-Type: application/json");

    $metodo = $_SERVER["REQUEST_METHOD"];

                                            
     $usuarios = [
     ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
     ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com" ]
     ];

    // echo json_encode($usuarios);

    switch ($metodo) {
        case 'GET':
            echo "Aqui ações do metodo GET";
            break;
         case 'POST':
            //  echo "Aqui ações do metodo POST";
            $dados = json_decode(file_get_contents("php://input"), true);
            print_r($dados);
             break;
        case 'PUT':
            echo "Aqui ações do metodo PUT";
                break;
        case 'DELETE':
             echo "Aqui ações do metodo DELETE";
                break;
        
        default:
        echo "método não encontrado";
            break;
    }

    // $usuarios = [
    //     ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
    //     ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com" ]
    // ];

    // echo json_encode($usuarios);



?>