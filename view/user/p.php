<?php 

$url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados";
$url_estado = curl_init($url);
curl_setopt($url_estado, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url_estado, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($url_estado));
var_dump($resultado);
/*foreach ($resultado as $linha) {
    echo "Estado:"  .$linha->nome. "Sigla:".$linha->sigla."<br>";
}*/
?>