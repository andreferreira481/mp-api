<div class="content-wrapper">

    <h3 class="mb-0 text-success" id="btn_api" style="cursor:pointer;">Obter Status de Pagamentos GET</h3>
    <br>
    <div id="box_api">

        <div class="overflow-hidden content-section" id="content-get-characters">
            <p>
                Para obter status de pagamento precisa fazer uma chamada GET para a seguinte url:<br>
            <pre><code class="bash">https://<?php echo $_SERVER['HTTP_HOST']; ?>/mp-api/v1/admin/payer/status.php</code></pre>
            </p>
            <p>
                Com seguintes parâmetros:<br>
            </p>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">PARÂMETROS</h4>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped display">
                                    <thead>
                                        <tr>
                                            <th>Campo</th>
                                            <th>Tipo</th>
                                            <th>Status</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Id_Externo_Usuario</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Este é o id do usuario cliente</td>
                                        </tr>
                                        <tr>
                                            <td>External_Reference</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Este é uma referencia externa do pagamento usada para indetificação</td>
                                        </tr>
                                        <tr>
                                            <td>Id_Externo_Admin</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Este é o id do usuario administrador</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Campo</th>
                                            <th>Tipo</th>
                                            <th>Status</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <pre><code class="bash">
# Aqui está um exemplo de GET

https://<?php echo $_SERVER['HTTP_HOST']; ?>/mp-api/v1/admin/payer/status.php?Id_Externo_Usuario=18

                </code></pre>
        <h4>Resposta</h4>
        <p>
            Com seguintes parâmetros:<br>
        </p>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PARÂMETROS</h4>
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped display">
                                <thead>
                                    <tr>
                                        <th>Campo</th>
                                        <th>Tipo</th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Id_Notification_Admin</td>
                                        <td>String</td>
                                        <td>id automatico gerado pela api na hora do registro</td>
                                    </tr>
                                    <tr>
                                        <td>Id_Preference_Notification_Admin</td>
                                        <td>String</td>
                                        <td>ID exclusivo gerado automaticamente que identifica a preferência</td>
                                    </tr>
                                    <tr>
                                        <td>Payment_Method_Id_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Id do meio de pagamento. Indica o ID do meio de pagamento selecionado para efetuar o pagamento.</td>
                                    </tr>
                                    <tr>
                                        <td>Payment_Type_Id_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Tipo do meio de pagamento escolhido<br>
                                            account_money: Dinheiro na conta do Mercado Pago.<br>
                                            bilhete: Bilhete impresso.<br>
                                            bank_transfer: Transferência bancária.<br>
                                            ATM: Pagamento por Multibanco.<br>
                                            credit_card: Pagamento com cartão de crédito.<br>
                                            debit_card: Pagamento com cartão de débito.<br>
                                            prepaid_card: Pagamento com cartão pré-pago.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Estado do pagamento<br>
                                            pending: O usuário ainda não concluiu o processo de pagamento.<br>
                                            approved: O pagamento foi aprovado e credenciado.<br>
                                            authorized: O pagamento foi autorizado, mas ainda não capturado.<br>
                                            in_process: O pagamento está sendo revisado.<br>
                                            in_mediation: Os usuários iniciaram uma disputa.<br>
                                            rejected: O pagamento foi rejeitado. O usuário pode tentar novamente o pagamento.<br>
                                            cancelled: O pagamento foi cancelado por uma das partes ou porque o prazo de pagamento expirou<br>
                                            refunded: O pagamento foi reembolsado ao usuário.<br>
                                            charged_back: Foi feito um estorno no cartão de crédito do comprador.<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status_Detail_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Detalhe em que resultou a Coleção<br>
                                            Accredited: pagamento creditado.<br>
                                            pending_contingency: o pagamento está sendo processado.<br>
                                            pending_review_manual: o pagamento está sob revisão para determinar sua aprovação ou rejeição.<br>
                                            cc_rejected_bad_filled_date: data de validade incorreta.<br>
                                            cc_rejected_bad_filled_other: dados incorretos do cartão.<br>
                                            cc_rejected_bad_filled_security_code: CVV errado.<br>
                                            cc_rejected_blacklist: o cartão está em uma black list para roubo/reclamações/fraude.<br>
                                            cc_rejected_call_for_authorize: o meio de pagamento requer autorização prévia do valor da operação.<br>
                                            cc_rejected_card_disabled: o cartão está inativo.<br>
                                            cc_rejected_duplicated_payment: transacción duplicada.<br>
                                            cc_rejected_high_risk: rechazo por Prevención de Fraude.<br>
                                            cc_rejected_insufficient_amount: quantidade insuficiente.<br>
                                            cc_rejected_invalid_installments: número de parcelas inválidas.<br>
                                            cc_rejected_max_attempts: excedeu o número máximo de tentativas.<br>
                                            cc_rejected_other_reason: erro genérico.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Transaction_Amount_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Custo do produto</td>
                                    </tr>
                                    <tr>
                                        <td>Transaction_Amount_Refunded_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Valor do estorno</td>
                                    </tr>
                                    <tr>
                                        <td>Installments_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Número Máximo de cotas</td>
                                    </tr>
                                    <tr>
                                        <td>External_Reference_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Referência que pode sincronizar com seu sistema de pagamentos</td>
                                    </tr>
                                    <tr>
                                        <td>Description_Notification_Admin</td>
                                        <td>String</td>
                                        <td>O statement descriptor é um texto longo (até 16 caracteres) que será exibido na fatura do cartão de crédito do pagador para identificar facilmente a compra</td>
                                    </tr>
                                    <tr>
                                        <td>Date_Created_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Data de registro</td>
                                    </tr>
                                    <tr>
                                        <td>Date_Last_Updated_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Data da última atualização</td>
                                    </tr>
                                    <tr>
                                        <td>Date_Of_Expiration_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Data de expiração de meios de pagamento em dinheiro</td>
                                    </tr>
                                    <tr>
                                        <td>Date_Approved_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Data de aprovação do pagamento. Um pagamento pode ser gerado em um estado intermediário e depois aprovado, portanto, a data de criação nem sempre coincidirá com a Data de Aprovação</td>
                                    </tr>
                                    <tr>
                                        <td>Currency_Id_Notification_Admin</td>
                                        <td>String</td>
                                        <td>ID exclusivo para identificar a moeda. Código ISO_4217. Alguns sites permitem moeda local e USD, mas é importante observar que o valor é convertido para moeda local quando a preferência é criada, pois o checkout sempre processa as transações em moeda local. Se você estiver usando USD, observe que esse valor não é atualizado automaticamente se o valor da moeda local mudar em relação ao USD</td>
                                    </tr>
                                    <tr>
                                        <td>Binary_Mode_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Quando definido como TRUE, os pagamentos só podem ser aprovados ou rejeitados. Caso contrário, eles também podem resultar in_process</td>
                                    </tr>
                                    <tr>
                                        <td>Collector_Id_Notification_Admin</td>
                                        <td>String</td>
                                        <td>ID exclusivo usado para identificar o coletor. É o mesmo que o Cust ID</td>
                                    </tr>
                                    <tr>
                                        <td>Operation_Type_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Tipo de pagamento<br>
                                            regular_payment: tipificação por padrão de uma compra paga pelo Mercado Pago.<br>
                                            money_transfer: Transferência de fundos entre dois usuários.<br>
                                            pagamento_recorrente : Pagamento recorrente automático devido a uma assinatura de usuário ativa.<br>
                                            account_fund: Renda monetária na conta do usuário.<br>
                                            payment_addition: Adição de dinheiro a um pagamento já existente, feito através de uma conta do Mercado Pago.<br>
                                            cellphone_recharge: Recarga da conta de celular de um usuário.<br>
                                            pos_payment: Pagamento feito através de um Ponto de Venda.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Email_Notification_Admin</td>
                                        <td>String</td>
                                        <td>E-mail do pagante</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_First_Name_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Nome do comprador</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Last_Name_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Sobrenome do comprador</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Date_Created_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Data de registro</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Identification_Number_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Identificador de pagador número de identificação</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Identification_Type_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Identificador de pagador tipo de identificação</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Phone_Area_Code_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Telefone do comprador código de área</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Phone_Number_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Telefone do comprador número de telefone</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Address_Street_Name_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço do comprador Código postal</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Address_Street_Number_Notification_Admin</td>
                                        <td>Number</td>
                                        <td>Endereço do comprador Rua</td>
                                    </tr>
                                    <tr>
                                        <td>Payer_Address_Zip_Code_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço do comprador O Número</td>
                                    </tr>
                                    <tr>
                                        <td>Notification_Url_Notification_Admin</td>
                                        <td>String</td>
                                        <td>URL para a qual você gostaria de receber notificações de pagamentos</td>
                                    </tr>
                                    <tr>
                                        <td>Init_Point_Notification_Admin</td>
                                        <td>String</td>
                                        <td>URL gerado automaticamente para abrir o Checkout</td>
                                    </tr>
                                    <tr>
                                        <td>Id_Externo_Admin</td>
                                        <td>String</td>
                                        <td>Este é o id do administrador</td>
                                    </tr>
                                    <tr>
                                        <td>Id_Externo_Usuario</td>
                                        <td>String</td>
                                        <td>Este é o id do usuario cliente</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Dimensions_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Tamanho do pacote em cm x cm x cm, gr (mode:me2 somente)</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Cost_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Custo do transporte (mode:custom somente)</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_Zip_Code_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio Código postal</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_Street_Name_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio Rua</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_City_Name_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio Cidade</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_State_Name_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio Estado</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_Street_Number_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio O Número</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_Floor_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio o andar</td>
                                    </tr>
                                    <tr>
                                        <td>Shipments_Receiver_Address_Apartment_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Endereço de envio Apartamento</td>
                                    </tr>
                                    <tr>
                                        <td>Qr_Code_Base64_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Para exibir o código QR</td>
                                    </tr>
                                    <tr>
                                        <td>Qr_Code_Notification_Admin</td>
                                        <td>String</td>
                                        <td>Para apresentar a opção que permitirá copiar e colar o código de pagamento</td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Campo</th>
                                        <th>Tipo</th>
                                        <th>Descrição</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <pre><code class="json">
  Exemplo de resultado e gerado um json que lista todos os status de pagamentos cria pelo cliente de id 18:

  [
    {
        "Id_Notification_Admin": "5",
        "Id_Preference_Notification_Admin": "20202722474",
        "Payment_Method_Id_Notification_Admin": "pec",
        "Payment_Type_Id_Notification_Admin": "ticket",
        "Status_Notification_Admin": "pending",
        "Status_Detail_Notification_Admin": "pending_waiting_payment",
        "Transaction_Amount_Notification_Admin": "100",
        "Transaction_Amount_Refunded_Notification_Admin": "0",
        "Installments_Notification_Admin": "1",
        "External_Reference_Notification_Admin": "",
        "Description_Notification_Admin": "Título do produto",
        "Date_Created_Notification_Admin": "2022-02-14T18:10:08.000-04:00",
        "Date_Last_Updated_Notification_Admin": "2022-02-14T18:10:08.000-04:00",
        "Date_Of_Expiration_Notification_Admin": "2022-02-18T22:59:59.000-04:00",
        "Date_Approved_Notification_Admin": "",
        "Currency_Id_Notification_Admin": "BRL",
        "Binary_Mode_Notification_Admin": "",
        "Collector_Id_Notification_Admin": "258257874",
        "Operation_Type_Notification_Admin": "regular_payment",
        "Payer_Email_Notification_Admin": "test@test.com",
        "Payer_First_Name_Notification_Admin": "",
        "Payer_Last_Name_Notification_Admin": "",
        "Payer_Date_Created_Notification_Admin":"",
        "Payer_Identification_Number_Notification_Admin": "19119119100",
        "Payer_Identification_Type_Notification_Admin": "CPF",
        "Payer_Phone_Area_Code_Notification_Admin": "",
        "Payer_Phone_Number_Notification_Admin": "",
        "Payer_Address_Street_Name_Notification_Admin": "",
        "Payer_Address_Street_Number_Notification_Admin": "",
        "Payer_Address_Zip_Code_Notification_Admin": "",
        "Shipments_Dimensions_Notification_Admin": "",
        "Shipments_Cost_Notification_Admin": "",
        "Shipments_Receiver_Address_Zip_Code_Notification_Admin": "",
        "Shipments_Receiver_Address_Street_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_City_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_State_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_Street_Number_Notification_Admin": "",
        "Shipments_Receiver_Address_Floor_Notification_Admin": "",
        "Shipments_Receiver_Address_Apartment_Notification_Admin": "",
        "Notification_Url_Notification_Admin": "https://webhook.site/f77162ba-9f35-418c-bd8f-565a56ae624a?source_news=webhook",
        "Init_Point_Notification_Admin": "",
        "Qr_Code_Notification_Admin": "",
        "Qr_Code_Base64_Notification_Admin": "",
        "Id_Externo_Admin": "2501320220503112",
        "Id_Externo_Usuario": "18"
    },
    {
        "Id_Notification_Admin": "6",
        "Id_Preference_Notification_Admin": "20202789076",
        "Payment_Method_Id_Notification_Admin": "bolbradesco",
        "Payment_Type_Id_Notification_Admin": "ticket",
        "Status_Notification_Admin": "pending",
        "Status_Detail_Notification_Admin": "pending_waiting_payment",
        "Transaction_Amount_Notification_Admin": "100",
        "Transaction_Amount_Refunded_Notification_Admin": "0",
        "Installments_Notification_Admin": "1",
        "External_Reference_Notification_Admin": "",
        "Description_Notification_Admin": "Título do produto",
        "Date_Created_Notification_Admin": "2022-02-14T18:11:17.000-04:00",
        "Date_Last_Updated_Notification_Admin": "2022-02-14T18:11:17.000-04:00",
        "Date_Of_Expiration_Notification_Admin": "2022-02-17T22:59:59.000-04:00",
        "Date_Approved_Notification_Admin": "",
        "Currency_Id_Notification_Admin": "BRL",
        "Binary_Mode_Notification_Admin": "",
        "Collector_Id_Notification_Admin": "258257874",
        "Operation_Type_Notification_Admin": "regular_payment",
        "Payer_Email_Notification_Admin": "test@test.com",
        "Payer_First_Name_Notification_Admin": "",
        "Payer_Last_Name_Notification_Admin": "",
        "Payer_Date_Created_Notification_Admin":"",
        "Payer_Identification_Number_Notification_Admin": "19119119100",
        "Payer_Identification_Type_Notification_Admin": "CPF",
        "Payer_Phone_Area_Code_Notification_Admin": "",
        "Payer_Phone_Number_Notification_Admin": "",
        "Payer_Address_Street_Name_Notification_Admin": "",
        "Payer_Address_Street_Number_Notification_Admin": "",
        "Payer_Address_Zip_Code_Notification_Admin": "",
        "Shipments_Dimensions_Notification_Admin": "",
        "Shipments_Cost_Notification_Admin": "",
        "Shipments_Receiver_Address_Zip_Code_Notification_Admin": "",
        "Shipments_Receiver_Address_Street_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_City_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_State_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_Street_Number_Notification_Admin": "",
        "Shipments_Receiver_Address_Floor_Notification_Admin": "",
        "Shipments_Receiver_Address_Apartment_Notification_Admin": "",
        "Notification_Url_Notification_Admin": "https://webhook.site/f77162ba-9f35-418c-bd8f-565a56ae624a?source_news=webhook",
        "Init_Point_Notification_Admin": "",
        "Qr_Code_Notification_Admin": "",
        "Qr_Code_Base64_Notification_Admin": "",
        "Id_Externo_Admin": "2501320220503112",
        "Id_Externo_Usuario": "18"
    },
    {
        "Id_Notification_Admin": "7",
        "Id_Preference_Notification_Admin": "20572991251",
        "Payment_Method_Id_Notification_Admin": "pix",
        "Payment_Type_Id_Notification_Admin": "bank_transfer",
        "Status_Notification_Admin": "pending",
        "Status_Detail_Notification_Admin": "pending_waiting_transfer",
        "Transaction_Amount_Notification_Admin": "100",
        "Transaction_Amount_Refunded_Notification_Admin": "0",
        "Installments_Notification_Admin": "1",
        "External_Reference_Notification_Admin": "",
        "Description_Notification_Admin": "Título do produto",
        "Date_Created_Notification_Admin": "2022-03-03T03:08:54.000-04:00",
        "Date_Last_Updated_Notification_Admin": "2022-03-03T03:08:54.000-04:00",
        "Date_Of_Expiration_Notification_Admin": "2022-01-25T23:59:59.000-04:00",
        "Date_Approved_Notification_Admin": "",
        "Currency_Id_Notification_Admin": "BRL",
        "Binary_Mode_Notification_Admin": "",
        "Collector_Id_Notification_Admin": "258257874",
        "Operation_Type_Notification_Admin": "regular_payment",
        "Payer_Email_Notification_Admin": "test@test.com",
        "Payer_First_Name_Notification_Admin": "",
        "Payer_Last_Name_Notification_Admin": "",
        "Payer_Date_Created_Notification_Admin":"",
        "Payer_Identification_Number_Notification_Admin": "19119119100",
        "Payer_Identification_Type_Notification_Admin": "CPF",
        "Payer_Phone_Area_Code_Notification_Admin": "",
        "Payer_Phone_Number_Notification_Admin": "",
        "Payer_Address_Street_Name_Notification_Admin": "",
        "Payer_Address_Street_Number_Notification_Admin": "",
        "Payer_Address_Zip_Code_Notification_Admin": "",
        "Shipments_Dimensions_Notification_Admin": "",
        "Shipments_Cost_Notification_Admin": "",
        "Shipments_Receiver_Address_Zip_Code_Notification_Admin": "",
        "Shipments_Receiver_Address_Street_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_City_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_State_Name_Notification_Admin": "",
        "Shipments_Receiver_Address_Street_Number_Notification_Admin": "",
        "Shipments_Receiver_Address_Floor_Notification_Admin": "",
        "Shipments_Receiver_Address_Apartment_Notification_Admin": "",
        "Notification_Url_Notification_Admin": "https://webhook.site/ced09cdd-de18-4658-9bad-1003f17d5c24?source_news=webhook",
        "Init_Point_Notification_Admin": "",
        "Qr_Code_Notification_Admin": "",
        "Qr_Code_Base64_Notification_Admin": "",
        "Id_Externo_Admin": "2501320220503112",
        "Id_Externo_Usuario": "18"
    }
]
                </code></pre>

    </div>

</div>



</div>