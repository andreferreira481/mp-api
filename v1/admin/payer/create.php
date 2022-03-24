<?php

include("../conexao.php");

if (isset($_GET['id_externo_admin'])) {
    if (empty($_GET['id_externo_admin']) != true) {
        $id_externo_admin = $_GET['id_externo_admin'];
    } else {
        $id_externo_admin = null;
    }
} else {
    $id_externo_admin = null;
}

if (isset($_GET['id_externo_user'])) {
    if (empty($_GET['id_externo_user']) != true) {
        $id_externo_user = $_GET['id_externo_user'];
    } else {
        $id_externo_user = null;
    }
} else {
    $id_externo_user = null;
}

if (isset($_GET['access_token'])) {
    if (empty($_GET['access_token']) != true) {
        $access_token = $_GET['access_token'];
    } else {
        $result = "SHOW TABLES LIKE 'keys_admin'";
        $result2 = mysqli_query($conexao, $result);
        $exists = mysqli_num_rows($result2) > 0 ? true : false;

        if ($id_externo_admin != null) {

            $Id_Externo_Admin = $id_externo_admin;

            if ($exists) {
                $sql = "SELECT * FROM keys_admin where Id_Externo_Admin='$Id_Externo_Admin'";
                $dados_i = mysqli_query($conexao, $sql);
                $dados = mysqli_fetch_assoc($dados_i);
                $cont = mysqli_num_rows($dados_i);
                if ($cont > 0) {
                    $access_token = $dados['Access_Token_Keys_Admin'];
                } else {
                    $access_token = null;
                }
            } else {
                $access_token = null;
            }
        }
    }
} else {

    $result = "SHOW TABLES LIKE 'keys_admin'";
    $result2 = mysqli_query($conexao, $result);
    $exists = mysqli_num_rows($result2) > 0 ? true : false;

    if ($id_externo_admin != null) {

        $Id_Externo_Admin = $id_externo_admin;

        if ($exists) {
            $sql = "SELECT * FROM keys_admin where Id_Externo_Admin='$Id_Externo_Admin'";
            $dados_i = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_assoc($dados_i);
            $cont = mysqli_num_rows($dados_i);
            if ($cont > 0) {
                $access_token = $dados['Access_Token_Keys_Admin'];
            } else {
                $access_token = null;
            }
        } else {
            $access_token = null;
        }
    } else {
        $access_token = null;
    }
}

if (isset($_GET['notification_url'])) {
    if (empty($_GET['notification_url']) != true) {
        $notification_url = $_GET['notification_url'];
    } else {
        $notification_url = null;
    }
} else {

    $notification_url = "https://" . $_SERVER['HTTP_HOST'] . "/mp-api/v1/admin/payer/notification.php?Access_Token_Keys_Admin=" . $access_token . "&Id_Externo_Admin=" . $id_externo_admin . "&Id_Externo_Usuario=" . $id_externo_user;
}

if (isset($_GET['items_id'])) {
    if (empty($_GET['items_id']) != true) {
        $items_id = $_GET['items_id'];
    } else {
        $items_id = null;
    }
} else {
    $items_id = null;
}

if (isset($_GET['items_title'])) {
    if (empty($_GET['items_title']) != true) {
        $items_title = $_GET['items_title'];
    } else {
        $items_title = null;
    }
} else {
    $items_title = null;
}

if (isset($_GET['items_currency_id'])) {
    if (empty($_GET['items_currency_id']) != true) {
        $items_currency_id = $_GET['items_currency_id'];
    } else {
        $items_currency_id = null;
    }
} else {
    $items_currency_id = null;
}

if (isset($_GET['items_picture_url'])) {
    if (empty($_GET['items_picture_url']) != true) {
        $items_picture_url = $_GET['items_picture_url'];
    } else {
        $items_picture_url = null;
    }
} else {
    $items_picture_url = null;
}

if (isset($_GET['items_description'])) {
    if (empty($_GET['items_description']) != true) {
        $items_description = $_GET['items_description'];
    } else {
        $items_description = null;
    }
} else {
    $items_description = null;
}

if (isset($_GET['items_category_id'])) {
    if (empty($_GET['items_category_id']) != true) {
        $items_category_id = $_GET['items_category_id'];
    } else {
        $items_category_id = null;
    }
} else {
    $items_category_id = null;
}

if (isset($_GET['items_quantity'])) {
    if (is_numeric($_GET['items_quantity'])) {
        $items_quantity = (int)$_GET['items_quantity'];
    } else {
        $items_quantity = null;
    }
} else {
    $items_quantity = null;
}

if (isset($_GET['items_unit_price'])) {
    if (is_numeric($_GET['items_unit_price'])) {
        $items_unit_price = (float)$_GET['items_unit_price'];
    } else {
        $items_unit_price = null;
    }
} else {
    $items_unit_price = null;
}

if (isset($_GET['back_urls_success'])) {
    if (empty($_GET['back_urls_success']) != true) {
        $back_urls_success = $_GET['back_urls_success'];
    } else {
        $back_urls_success = null;
    }
} else {
    $back_urls_success = null;
}

if (isset($_GET['back_urls_failure'])) {
    if (empty($_GET['back_urls_failure']) != true) {
        $back_urls_failure = $_GET['back_urls_failure'];
    } else {
        $back_urls_failure = null;
    }
} else {
    $back_urls_failure = null;
}

if (isset($_GET['back_urls_pending'])) {
    if (empty($_GET['back_urls_pending']) != true) {
        $back_urls_pending = $_GET['back_urls_pending'];
    } else {
        $back_urls_pending = null;
    }
} else {
    $back_urls_pending = null;
}

if (isset($_GET['auto_return'])) {
    if (empty($_GET['auto_return']) != true) {
        $auto_return = $_GET['auto_return'];
    } else {
        $auto_return = null;
    }
} else {
    $auto_return = null;
}

if (isset($_GET['payment_methods_excluded_payment_methods_id'])) {
    if (empty($_GET['payment_methods_excluded_payment_methods_id']) != true) {
        $payment_methods_excluded_payment_methods_id = $_GET['payment_methods_excluded_payment_methods_id'];
    } else {
        $payment_methods_excluded_payment_methods_id = null;
    }
} else {
    $payment_methods_excluded_payment_methods_id = null;
}

if (isset($_GET['payment_methods_excluded_payment_types_id'])) {
    if (empty($_GET['payment_methods_excluded_payment_types_id']) != true) {
        $payment_methods_excluded_payment_types_id = $_GET['payment_methods_excluded_payment_types_id'];
    } else {
        $payment_methods_excluded_payment_types_id = null;
    }
} else {
    $payment_methods_excluded_payment_types_id = null;
}

if (isset($_GET['payment_methods_default_payment_method_id'])) {
    if (is_numeric($_GET['payment_methods_default_payment_method_id'])) {
        $payment_methods_default_payment_method_id = $_GET['payment_methods_default_payment_method_id'];
    } else {
        $payment_methods_default_payment_method_id = null;
    }
} else {
    $payment_methods_default_payment_method_id = null;
}

if (isset($_GET['payment_methods_installments'])) {
    if (empty($_GET['payment_methods_installments']) != true) {
        $payment_methods_installments = (int)$_GET['payment_methods_installments'];
    } else {
        $payment_methods_installments = null;
    }
} else {
    $payment_methods_installments = null;
}


if (isset($_GET['payment_methods_default_installments'])) {
    if (empty($_GET['payment_methods_default_installments']) != true) {
        $payment_methods_default_installments = (int)$_GET['payment_methods_default_installments'];
    } else {
        $payment_methods_default_installments = null;
    }
} else {
    $payment_methods_default_installments = null;
}

if (isset($_GET['statement_descriptor'])) {
    if (empty($_GET['statement_descriptor']) != true) {
        $statement_descriptor = $_GET['statement_descriptor'];
    } else {
        $statement_descriptor = null;
    }
} else {
    $statement_descriptor = null;
}

if (isset($_GET['external_reference'])) {
    if (empty($_GET['external_reference']) != true) {
        $external_reference = $_GET['external_reference'];
    } else {
        $external_reference = null;
    }
} else {
    $external_reference = null;
}

if (isset($_GET['binary_mode'])) {
    if (empty($_GET['binary_mode']) != true) {
        $binary_mode = (bool) $_GET['binary_mode'];
    } else {
        $binary_mode = null;
    }
} else {
    $binary_mode = null;
}

if (isset($_GET['purpose'])) {
    if (empty($_GET['purpose']) != true) {
        $purpose = $_GET['purpose'];
    } else {
        $purpose = null;
    }
} else {
    $purpose = null;
}

if (isset($_GET['expires'])) {
    if (empty($_GET['expires']) != true) {
        $expires = (bool)$_GET['expires'];
    } else {
        $expires = null;
    }
} else {
    $expires = null;
}

if (isset($_GET['date_of_expiration'])) {
    if (empty($_GET['date_of_expiration']) != true) {
        $date_of_expiration = $_GET['date_of_expiration'];
    } else {
        $date_of_expiration = null;
    }
} else {
    $date_of_expiration = null;
}

if (isset($_GET['expiration_date_from'])) {
    if (empty($_GET['expiration_date_from']) != true) {
        $expiration_date_from = $_GET['expiration_date_from'];
    } else {
        $expiration_date_from = null;
    }
} else {
    $expiration_date_from = null;
}

if (isset($_GET['expiration_date_to'])) {
    if (empty($_GET['expiration_date_to']) != true) {
        $expiration_date_to = $_GET['expiration_date_to'];
    } else {
        $expiration_date_to = null;
    }
} else {
    $expiration_date_to = null;
}

if (isset($_GET['tracks_type'])) {
    if (empty($_GET['tracks_type']) != true) {
        $tracks_type = $_GET['tracks_type'];
    } else {
        $tracks_type = null;
    }
} else {
    $tracks_type = null;
}

if (isset($_GET['tracks_values_pixel_id'])) {
    if (empty($_GET['tracks_values_pixel_id']) != true) {
        $tracks_values_pixel_id = $_GET['tracks_values_pixel_id'];
    } else {
        $tracks_values_pixel_id = null;
    }
} else {
    $tracks_values_pixel_id = null;
}

if (isset($_GET['tracks_values_conversion_id'])) {
    if (empty($_GET['tracks_values_conversion_id']) != true) {
        $tracks_values_conversion_id = $_GET['tracks_values_conversion_id'];
    } else {
        $tracks_values_conversion_id = null;
    }
} else {
    $tracks_values_conversion_id = null;
}

if (isset($_GET['tracks_values_conversion_label'])) {
    if (empty($_GET['tracks_values_conversion_label']) != true) {
        $tracks_values_conversion_label = $_GET['tracks_values_conversion_label'];
    } else {
        $tracks_values_conversion_label = null;
    }
} else {
    $tracks_values_conversion_label = null;
}

if (isset($_GET['anuncios'])) {
    if (empty($_GET['anuncios']) != true) {
        $anuncios = $_GET['anuncios'];
    } else {
        $anuncios = "desativado";
    }
} else {
    $anuncios = "desativado";
}

if (isset($_GET['payer_name'])) {
    if (empty($_GET['payer_name']) != true) {
        $payer_name = $_GET['payer_name'];
    } else {
        $payer_name = null;
    }
} else {
    $payer_name = null;
}

if (isset($_GET['payer_surname'])) {
    if (empty($_GET['payer_surname']) != true) {
        $payer_surname = $_GET['payer_surname'];
    } else {
        $payer_surname = null;
    }
} else {
    $payer_surname = null;
}

if (isset($_GET['payer_email'])) {
    if (empty($_GET['payer_email']) != true) {
        $payer_email = $_GET['payer_email'];
    } else {
        $payer_email = null;
    }
} else {
    $payer_email = null;
}

if (isset($_GET['payer_date_created'])) {
    if (empty($_GET['payer_date_created']) != true) {
        $payer_date_created = $_GET['payer_date_created'];
    } else {
        $payer_date_created = null;
    }
} else {
    $payer_date_created = null;
}

if (isset($_GET['payer_phone_area_code'])) {
    if (empty($_GET['payer_phone_area_code']) != true) {
        $payer_phone_area_code = $_GET['payer_phone_area_code'];
    } else {
        $payer_phone_area_code = null;
    }
} else {
    $payer_phone_area_code = null;
}

if (isset($_GET['payer_phone_number'])) {
    if (empty($_GET['payer_phone_number']) != true) {
        $payer_phone_number = $_GET['payer_phone_number'];
    } else {
        $payer_phone_number = null;
    }
} else {
    $payer_phone_number = null;
}

if (isset($_GET['payer_identification_type'])) {
    if (empty($_GET['payer_identification_type']) != true) {
        $payer_identification_type = $_GET['payer_identification_type'];
    } else {
        $payer_identification_type = null;
    }
} else {
    $payer_identification_type = null;
}

if (isset($_GET['payer_identification_number'])) {
    if (empty($_GET['payer_identification_number']) != true) {
        $payer_identification_number = $_GET['payer_identification_number'];
    } else {
        $payer_identification_number = null;
    }
} else {
    $payer_identification_number = null;
}

if (isset($_GET['payer_address_street_name'])) {
    if (empty($_GET['payer_address_street_name']) != true) {
        $payer_address_street_name = $_GET['payer_address_street_name'];
    } else {
        $payer_address_street_name = null;
    }
} else {
    $payer_address_street_name = null;
}

if (isset($_GET['payer_address_street_number'])) {
    if (empty($_GET['payer_address_street_number']) != true) {
        $payer_address_street_number = (int)$_GET['payer_address_street_number'];
    } else {
        $payer_address_street_number = null;
    }
} else {
    $payer_address_street_number = null;
}

if (isset($_GET['payer_address_zip_code'])) {
    if (empty($_GET['payer_address_zip_code']) != true) {
        $payer_address_zip_code = $_GET['payer_address_zip_code'];
    } else {
        $payer_address_zip_code = null;
    }
} else {
    $payer_address_zip_code = null;
}

if (isset($_GET['shipments_dimensions'])) {
    if (empty($_GET['shipments_dimensions']) != true) {
        $shipments_dimensions = $_GET['shipments_dimensions'];
    } else {
        $shipments_dimensions = null;
    }
} else {
    $shipments_dimensions = null;
}

if (isset($_GET['shipments_cost'])) {
    if (empty($_GET['shipments_cost']) != true) {
        $shipments_cost = (float)$_GET['shipments_cost'];
    } else {
        $shipments_cost = null;
    }
} else {
    $shipments_cost = null;
}

if (isset($_GET['shipments_receiver_address_zip_code'])) {
    if (empty($_GET['shipments_receiver_address_zip_code']) != true) {
        $shipments_receiver_address_zip_code = $_GET['shipments_receiver_address_zip_code'];
    } else {
        $shipments_receiver_address_zip_code = null;
    }
} else {
    $shipments_receiver_address_zip_code = null;
}

if (isset($_GET['shipments_receiver_address_street_name'])) {
    if (empty($_GET['shipments_receiver_address_street_name']) != true) {
        $shipments_receiver_address_street_name = $_GET['shipments_receiver_address_street_name'];
    } else {
        $shipments_receiver_address_street_name = null;
    }
} else {
    $shipments_receiver_address_street_name = null;
}

if (isset($_GET['shipments_receiver_address_city_name'])) {
    if (empty($_GET['shipments_receiver_address_city_name']) != true) {
        $shipments_receiver_address_city_name = $_GET['shipments_receiver_address_city_name'];
    } else {
        $shipments_receiver_address_city_name = null;
    }
} else {
    $shipments_receiver_address_city_name = null;
}

if (isset($_GET['shipments_receiver_address_state_name'])) {
    if (empty($_GET['shipments_receiver_address_state_name']) != true) {
        $shipments_receiver_address_state_name = $_GET['shipments_receiver_address_state_name'];
    } else {
        $shipments_receiver_address_state_name = null;
    }
} else {
    $shipments_receiver_address_state_name = null;
}

if (isset($_GET['shipments_receiver_address_street_number'])) {
    if (empty($_GET['shipments_receiver_address_street_number']) != true) {
        $shipments_receiver_address_street_number = (int)$_GET['shipments_receiver_address_street_number'];
    } else {
        $shipments_receiver_address_street_number = null;
    }
} else {
    $shipments_receiver_address_street_number = null;
}

if (isset($_GET['shipments_receiver_address_floor'])) {
    if (empty($_GET['shipments_receiver_address_floor']) != true) {
        $shipments_receiver_address_floor = $_GET['shipments_receiver_address_floor'];
    } else {
        $shipments_receiver_address_floor = null;
    }
} else {
    $shipments_receiver_address_floor = null;
}

if (isset($_GET['shipments_receiver_address_apartment'])) {
    if (empty($_GET['shipments_receiver_address_apartment']) != true) {
        $shipments_receiver_address_apartment = $_GET['shipments_receiver_address_apartment'];
    } else {
        $shipments_receiver_address_apartment = null;
    }
} else {
    $shipments_receiver_address_apartment = null;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken($access_token);

$preference = new MercadoPago\Preference();

$preference->back_urls = array(

    "success" => $back_urls_success,

    "failure" => $back_urls_failure,

    "pending" => $back_urls_pending,

);

$preference->auto_return = $auto_return;

$preference->purpose = $purpose;


$preference->payment_methods = array(

    "binary_mode" => $binary_mode,

    "excluded_payment_methods" => array(

        array("id" => $payment_methods_excluded_payment_methods_id)
    ),

    "excluded_payment_types" => array(

        array("id" => $payment_methods_excluded_payment_types_id)
    ),
    "installments" => $payment_methods_installments,
    "default_installments" => $payment_methods_default_installments,
    "default_payment_method_id" =>$payment_methods_default_payment_method_id,

);

$preference->shipments = (object) array(
    'cost' => $shipments_cost,
    'mode' => "not_specified",
    'dimensions' => $shipments_dimensions,
    'receiver_address' => (object) array(
        'zip_code' => $shipments_receiver_address_zip_code,
        'street_name' => $shipments_receiver_address_street_name,
        'city_name' => $shipments_receiver_address_city_name,
        'state_name' => $shipments_receiver_address_state_name,
        'street_number' => $shipments_receiver_address_street_number,
        'floor' => $shipments_receiver_address_floor,
        'apartment' => $shipments_receiver_address_apartment,
    ),

);

$preference->payer = (object) array(
    'name' => $payer_name,
    'surname' => $payer_surname,
    'email' => $payer_email,
    'date_created' => $payer_date_created,
    'phone' => array(
        'area_code' => $payer_phone_area_code,
        'number' => $payer_phone_number,
    ),
    'identification' => array(
        'type' => $payer_identification_type,
        'number' => $payer_identification_number,
    ),
    'address' => (object) array(
        'zip_code' => $payer_address_zip_code,
        'street_name' => $payer_address_street_name,
        'street_number' => $payer_address_street_number,
    ),
);

if ($anuncios == "facebook_ad") {

    $preference->tracks = array(
        array(
            'type' => "facebook_ad",
            'values' => array(
                'pixel_id' => $tracks_values_pixel_id
            )
        )
    );
} else if ($anuncios == "google_ad") {

    $preference->tracks = array(
        array(
            'type' => "google_ad",
            'values' => array(
                'conversion_id' => $tracks_values_conversion_id,
                'conversion_label' => $tracks_values_conversion_label
            )
        )
    );
} else {
}

$preference->notification_url = $notification_url;
$preference->statement_descriptor = $statement_descriptor;
$preference->external_reference = $external_reference;
$preference->expires = $expires;
$preference->date_of_expiration = $date_of_expiration;
$preference->expiration_date_from = $expiration_date_from;
$preference->expiration_date_to = $expiration_date_to;

$item = new MercadoPago\Item();

$item->id = $items_id;

$item->title = $items_title;

$item->description = $items_description;

$item->category_id = $items_category_id;

$item->quantity = $items_quantity;

$item->currency_id = $items_currency_id;

$item->unit_price = $items_unit_price;

$preference->items = array($item);

$preference->save();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Pagamento Online</title>
    <meta http-equiv="refresh" content="0; URL='<?php echo $preference->init_point; ?>'" />
</head>

<body>
</body>

</html>