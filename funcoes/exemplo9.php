<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            #Inicio diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    #Inicio diretor comercial
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                    #Termino Gerente de Vendas
                )
            ),
            #Termino Diretor Comercial
            #Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    #Inicio Gerente de Contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            #Inicip de Supervisor de pagamentos    
                            array(
                                'nome_cargo' => 'Supervisor de Pagamento'
                            )
                            #Termino de Supervisor de pagamentos
                        )
                    ),
                    #Termino Gerente de contas a pagar
                    #Inicio Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            #Inicio Supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de suprimentos'
                            )
                            #termino supervisor de suprimeos
                        )
                    )

                    #Termino Gerente de compras                
                )
            )
        )
    )
);

function exibe($cargos){

    $html = "<ul>";
    $html .= "</ul>";

    foreach ($cargos as $cargo) {
        # code...
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        
        if(isset($cargo['subordinados'])  && count($cargo['subordinados']) > 0 ){
            
            $html .= exibe($cargo['subordinados']);
        }
        
        $html .= "</li>";
    }
    return $html;
}

echo exibe($hierarquia);

?>
