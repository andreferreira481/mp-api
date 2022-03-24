<div class="content-wrapper">
          
            <h3 class="mb-0" id="btn_api" style="cursor:pointer;">API</h3>
          
            <?php  

            include("function_dashboard_requisicoes_api_search.php");

            $resposta_requisicoes_api=dashboard_requisicoes_api_search();
            ?>
            <br>
            <div class="row"  id="box_api">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php echo $resposta_menu_lateral_search['N_A_Admin']; ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Total de Login</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["total_requisicoes"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Total de Requisições</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["create_link"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições de Criação de Pagamentos</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["approved"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Aprovados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["pending"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Pendentes</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["refunded"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Estornados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["authorized"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Autorizados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["in_process"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições em Revisões</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["in_mediation"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições em Disputas</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["rejected"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Rejeitados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["cancelled"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Cancelados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_requisicoes_api["charged_back"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Requisições Estornos no Cartão de Crédito do Comprador</h6>
                    </div>
                  </div>
                </div>

        







            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_status" style="cursor:pointer;">Pagamentos Status</h3>
            <?php  

            include("function_dashboard_Pagamentos_status_search.php");

            $resposta_Status=dashboard_Pagamentos_status_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_status">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["approved"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Aprovados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["pending"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Pendentes</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["refunded"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Estornados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["authorized"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Autorizados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["in_process"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos em Revisões</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["in_mediation"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos em Disputas</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["rejected"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Rejeitados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["cancelled"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Cancelados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"><?php  echo  $resposta_Status["charged_back"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Estornos no Cartão de Crédito do Comprador</h6>
                    </div>
                  </div>
                </div>
            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos" style="cursor:pointer;">Pagamentos</h3>
            <?php  

            include("function_dashboard_Pagamentos_search.php");

            $resposta_pagamentos=dashboard_Pagamentos_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["approved"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Aprovados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["pending"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Pendentes</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["refunded"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Estornados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["authorized"];  ?></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Autorizados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["in_process"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos em Revisões</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["in_mediation"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos em Disputas</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["rejected"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Rejeitados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["cancelled"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Cancelados</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pagamentos["charged_back"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pagamentos Estornos no Cartão de Crédito do Comprador</h6>
                    </div>
                  </div>
                </div>
            </div>

            
            <br>
            <h3 class="mb-0" id="btn_Pagamentos_concluidos" style="cursor:pointer;">Tipos de Pagamentos Aprovados</h3>
            <?php  

            include("function_dashboard_Pagamentos_concluidos_search.php");

            $resposta_aprroved=dashboard_Pagamentos_concluidos_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_concluidos">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_aprroved["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>
            <br>
            <h3 class="mb-0" id="btn_Pagamentos_pendentes" style="cursor:pointer;">Tipos de Pagamentos Pendentes</h3>
            <?php  

            include("function_dashboard_Pagamentos_pendentes_search.php");

            $resposta_pending=dashboard_Pagamentos_pendentes_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_pendentes">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_pending["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_estornados" style="cursor:pointer;">Tipos de Pagamentos Estornados</h3>
            <?php  

            include("function_dashboard_Pagamentos_estornados_search.php");

            $resposta_estornados=dashboard_Pagamentos_estornados_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_estornados">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_estornados["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_authorized" style="cursor:pointer;">Tipos de Pagamentos Autorizado</h3>
            <?php  

            include("function_dashboard_Pagamentos_authorized_search.php");

            $resposta_authorized=dashboard_Pagamentos_authorized_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_authorized">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_authorized["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_in_process" style="cursor:pointer;">Tipos de Pagamentos em Revisão</h3>
            <?php  

            include("function_dashboard_Pagamentos_in_process_search.php");

            $resposta_in_process=dashboard_Pagamentos_in_process_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_in_process">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_process["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_in_mediation" style="cursor:pointer;">Tipos de Pagamentos em Disputas</h3>
            <?php  

            include("function_dashboard_Pagamentos_in_mediation_search.php");

            $resposta_in_mediation=dashboard_Pagamentos_in_mediation_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_in_mediation">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_in_mediation["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_rejected" style="cursor:pointer;">Tipos de Pagamentos Rejeitados</h3>
            <?php  

            include("function_dashboard_Pagamentos_rejected_search.php");

            $resposta_rejected=dashboard_Pagamentos_rejected_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_rejected">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_rejected["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_cancelled" style="cursor:pointer;">Tipos de Pagamentos Cancelados</h3>
            <?php  

            include("function_dashboard_Pagamentos_cancelled_search.php");

            $resposta_cancelled=dashboard_Pagamentos_cancelled_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_cancelled">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_cancelled["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>


            <br>
            <h3 class="mb-0" id="btn_Pagamentos_charged_back" style="cursor:pointer;">Tipos de Pagamentos Estornos Cartão de Crédito do Comprador</h3>
            <?php  

            include("function_dashboard_Pagamentos_charged_back_search.php");

            $resposta_charged_back=dashboard_Pagamentos_charged_back_search();
            ?>
            <br>
            <div class="row"  id="box_Pagamentos_charged_back">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["credit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Crédito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["debit_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão de Débito</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["ticket"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Boleto</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["account_money"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Dinheiro na Conta</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["digital_wallet"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Carteira Digital</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["bank_transfer"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Transferência Bancária</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["prepaid_card"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Cartão Pré-Pago</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["atm"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Caixa Eletrônico</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$<?php  echo  $resposta_charged_back["digital_currency"];  ?></h3>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Moeda Digital</h6>
                    </div>
                  </div>
                </div>





            </div>
          </div>