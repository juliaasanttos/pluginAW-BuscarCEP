<?php
/**
* Plugin Name: Buscar CEP
* Description: Plugin que busca dados do endereço de uma pessoa pelo CEP
* Version: 1.0
* Author: Júlia Araújo Santos Jorge
*/

function busca_cep(){
    return "<h3>Teste cep </h3>"
}

add_shortcode('buscaCep', 'busca_cep');
