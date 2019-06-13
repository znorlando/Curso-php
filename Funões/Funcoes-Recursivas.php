<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor  Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //Termino: Gerente de vendas
                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor  Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Inicio: gerente de Contas a  pagar
                    array(
                        'nome_cargo'=>'gerente de Contas a  pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de pagamentos
                           array(
                               'nome_cargo'=>'Supervisor de Pagamentos'
                           )
                            //Termino:Suervisor de contas a pagar
                        )
                           ),
                    //Termino: gerente de Contas a  pagar
                )
            )
            //Termino: Diretor Financeiro 
        )
    )
 )

?>