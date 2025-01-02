<?php
if (isset($_GET['cep'])) {
    $cep = preg_replace('/[^0-9]/', '', $_GET['cep']); // Remove caracteres não numéricos

    if (strlen($cep) === 8) {
        $url = "https://viacep.com.br/ws/$cep/json/";
        $response = file_get_contents($url);
        if ($response) {
            echo $response;
        } else {
            echo json_encode(['error' => 'Não foi possível consultar o CEP.']);
        }
    } else {
        echo json_encode(['error' => 'CEP inválido.']);
    }
}
?>
