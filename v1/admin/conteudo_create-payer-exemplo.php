<div class="content-wrapper">

    <h3 class="mb-0 text-success" id="btn_api" style="cursor:pointer;">Criar Link de Pagamentos GET</h3>
    <br>
    <div id="box_api">

        <div class="overflow-hidden content-section" id="content-get-characters">
            <p>
                Para obter link de pagamento precisa fazer uma chamada GET para a seguinte url:<br>
            <pre><code class="bash">https://<?php echo $_SERVER['HTTP_HOST']; ?>/mp-api/v1/admin/payer/create.php</code></pre>
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
                                            <td>access_token</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Access Token de Acesso do mercado pago. E opcional caso ja tenha cadastrado o token de acesso na api</td>
                                        </tr>
                                        <tr>
                                            <td>items_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Indentificador do item</td>
                                        </tr>
                                        <tr>
                                            <td>items_title</td>
                                            <td>String</td>
                                            <td>Obrigatório</td>
                                            <td>Este é o título do item, que será exibido durante o processo de pagamento, no checkout, nas atividades e nos e-mails. </td>
                                        </tr>
                                        <tr>
                                            <td>items_currency_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>ID exclusivo para identificar a moeda. Código ISO_4217. Alguns sites permitem moeda local e USD, mas é importante observar que o valor é convertido para moeda local quando a preferência é criada, pois o checkout sempre processa as transações em moeda local. Se você estiver usando USD, observe que esse valor não é atualizado automaticamente se o valor da moeda local mudar em relação ao USD.</td>
                                        </tr>
                                        <tr>
                                            <td>items_picture_url</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>URL da imagem do anúncio</td>
                                        </tr>
                                        <tr>
                                            <td>items_description</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Descrição do artigo</td>
                                        </tr>
                                        <tr>
                                            <td>items_category_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Esta é uma string livre onde a categoria do item pode ser adicionada.</td>
                                        </tr>
                                        <tr>
                                            <td>items_quantity</td>
                                            <td>Number</td>
                                            <td>Obrigatório</td>
                                            <td>Quantidade de itens. Esta propriedade é usada para calcular o custo total.</td>
                                        </tr>
                                        <tr>
                                            <td>items_unit_price</td>
                                            <td>Number</td>
                                            <td>Obrigatório</td>
                                            <td>Preço unitário do item. Essa propriedade é usada em conjunto com a propriedade de quantity para determinar o custo do pedido.</td>
                                        </tr>
                                        <tr>
                                            <td>back_urls_success</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>URL de retorno ante o pagamento aprovado</td>
                                        </tr>
                                        <tr>
                                            <td>back_urls_failure</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>URL de retorno diante de pagamento pendente ou em processo</td>
                                        </tr>
                                        <tr>
                                            <td>back_urls_pending</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>URL de retorno ante o pagamento cancelado</td>
                                        </tr>
                                        <tr>
                                            <td>auto_return</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>No caso de estar especificado o comprador será redirecionado para o seu site imediatamente após a compra<br>aprovado: O redirecionamento ocorre apenas para pagamentos aprovados.<br> all: O redirecionamento ocorre apenas para pagamentos aprovados, compatibilidade futura somente se alterarmos o comportamento padrão</td>
                                        </tr>
                                        <tr>
                                            <td>payment_methods_excluded_payment_methods_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Métodos de pagamento excluídos do checkout (exceto account_money, que estará sempre disponível). Os métodos de pagamento aqui incluídos não estarão disponíveis no checkout.
                                            <br>Exemplo: bolbradesco, pec, pix ...entre outros
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>payment_methods_excluded_payment_types_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Tipos de pagamento excluídos do processo de pagamento. Os tipos de pagamento incluídos aqui não estarão disponíveis no checkout.
                                                <br>Exemplo: ticket, account_money, bank_transfer ...entre outros
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>payment_methods_default_payment_method_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Forma de pagamento sugerida. O usuário iniciará o pagamento com esta forma de pagamento já selecionada. Considera-se sugerido porque os Checkouts seguem lógicas diferentes para selecionar o melhor meio de pagamento para uma determinada transação, sendo esta propriedade a opção menos relevante.</td>
                                        </tr>
                                        <tr>
                                            <td>payment_methods_installments</td>
                                            <td>Number</td>
                                            <td>Opcional</td>
                                            <td>Número Máximo de cotas </td>
                                        </tr>
                                        <tr>
                                            <td>payment_methods_default_installments</td>
                                            <td>Number</td>
                                            <td>Opcional</td>
                                            <td>Preferência de cotas</td>
                                        </tr>
                                        <tr>
                                            <td>notification_url</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>URL para a qual você gostaria de receber notificações de pagamentos</td>
                                        </tr>
                                        <tr>
                                            <td>statement_descriptor</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>O statement descriptor é um texto longo (até 16 caracteres) que será exibido na fatura do cartão de crédito do pagador para identificar facilmente a compra.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>external_reference</td>
                                            <td>String</td>
                                            <td>Obrigatório</td>
                                            <td>Referência que pode sincronizar com seu sistema de pagamentos</td>
                                        </tr>
                                        <tr>
                                            <td>binary_mode</td>
                                            <td>Boolean</td>
                                            <td>Opcional</td>
                                            <td>Você pode ativar o modo binário se o modelo de negócios exigir que a aprovação do pagamento seja instantânea. Dessa forma, o pagamento só poderá ser aprovado ou recusado.</td>
                                        </tr>
                                        <tr>
                                            <td>purpose</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Ao indicar o valor "wallet_purchase" neste método, o Checkout Pro apenas aceitará pagamentos de usuários cadastrados no Mercado Pago, com cartão e saldo em conta.</td>
                                        </tr>
                                        <tr>
                                            <td>expires</td>
                                            <td>Boolean</td>
                                            <td>Opcional</td>
                                            <td>Preferência que determina se uma preferência expira</td>
                                        </tr>
                                        <tr>
                                            <td>date_of_expiration</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Data de expiração de meios de pagamento em dinheiro</td>
                                        </tr>
                                        <tr>
                                            <td>expiration_date_from</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Data no formato AAAA-MM-DD-HH-MM-SS que indica o início do período de validade da preferência. Isso pode ser usado, por exemplo, para vendas limitadas, onde os vendedores fazem uma oferta entre determinadas datas.</td>
                                        </tr>
                                        <tr>
                                            <td>expiration_date_to</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Data no formato AAAA-MM-DD-HH-MM-SS que indica o início do período de validade da preferência. Isso pode ser usado, por exemplo, para vendas limitadas, onde os vendedores fazem uma oferta entre determinadas datas.</td>
                                        </tr>
                                        <tr>
                                            <td>id_externo_user</td>
                                            <td>String</td>
                                            <td>Obrigatório</td>
                                            <td>Id externo de usuario da sua aplicação</td>
                                        </tr>
                                        <tr>
                                            <td>id_externo_admin</td>
                                            <td>String</td>
                                            <td>Obrigatório</td>
                                            <td>id externo do usuario admintrador do sistema da sua aplicação</td>
                                        </tr>
                                        <tr>
                                            <td>anuncios</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Informa qual tracks deve se usada "facebook_ad" ou "google_ad"
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>tracks_values_pixel_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Seu pixel_id do Facebook</td>
                                        </tr>
                                        <tr>
                                            <td>tracks_values_conversion_id</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Sua tag (identificador) conversion_id para acompanhamento das conversões do Google Ads
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>tracks_values_conversion_label</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Sua tag (identificador) conversion_label para acompanhamento das conversões do Google Ads
                                        </tr>
                                        <tr>
                                            <td>shipments_dimensions</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Tamanho do pacote em cm x cm x cm, gr </td>
                                        </tr>
                                        <tr>
                                            <td>shipments_cost</td>
                                            <td>Number</td>
                                            <td>Opcional</td>
                                            <td>Custo do transporte</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_zip_code</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio Código postal</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_street_name</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio Rua</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_city_name</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio Cidade</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_state_name</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio Estado</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_street_number</td>
                                            <td>Number</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio O Número</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_floor</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio o andar</td>
                                        </tr>
                                        <tr>
                                            <td>shipments_receiver_address_apartment</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de envio Apartamento</td>
                                        </tr>
                                        <tr>
                                            <td>payer_name</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Nome do comprador</td>
                                        </tr>
                                        <tr>
                                            <td>payer_surname</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Apelido do comprador</td>
                                        </tr>
                                        <tr>
                                            <td>payer_email</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço de e-mail do comprador</td>
                                        </tr>
                                        <tr>
                                            <td>payer_date_created</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Data de registro</td>
                                        </tr>
                                        <tr>
                                            <td>payer_phone_area_code</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Telefone do comprador Código de área</td>
                                        </tr>
                                        <tr>
                                            <td>payer_phone_number</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Telefone do comprador Número</td>
                                        </tr>
                                        <tr>
                                            <td>payer_identification_type</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Identificação pessoal Tipo de identificação</td>
                                        </tr>
                                        <tr>
                                            <td>payer_identification_number</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Identificação pessoal Número</td>
                                        </tr>
                                        <tr>
                                            <td>payer_address_street_name</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço do comprador Código postal</td>
                                        </tr>
                                        <tr>
                                            <td>payer_address_street_number</td>
                                            <td>Number</td>
                                            <td>Opcional</td>
                                            <td>Endereço do comprador Rua</td>
                                        </tr>
                                        <tr>
                                            <td>payer_address_zip_code</td>
                                            <td>String</td>
                                            <td>Opcional</td>
                                            <td>Endereço do comprador O Número</td>
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

https://<?php echo $_SERVER['HTTP_HOST']; ?>/mp-api/v1/admin/payer/create.php?items_unit_price=25&items_title=teste&items_quantity=1&id_externo_user=17&id_externo_admin=<?php echo $_SESSION['id_externo_admin'];?>&external_reference=01

                </code></pre>
        <h4>Resposta</h4>
        <br>
        <pre><code class="json">
  Exemplo de resultado e gerado um link de pagamento:

  https://www.mercadopago.com/mla/checkout/start?pref_id=202809963-920c288b-4ebb-40be-966f-700250fa5370
                </code></pre>

    </div>

</div>



</div>