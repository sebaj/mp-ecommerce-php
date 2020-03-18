<?php

switch ( $_POST["payment_status"] ) {
	case 'approved':
		header( "Location: " . $_POST["back_url"] );
		break;

	default:
		var_dump($_POST);
		break;
}


//
// array(9) {
// 	["preference_id"]=> string(46) "469485398-a78f2bfc-1232-4e5f-9ceb-229329c5ed79"
// 	["external_reference"]=> string(8) "ABCD1234"
// 	["back_url"]=> string(318) "http://sjaimovich-mp-commerce-php.herokuapp.com/success.php?collection_id=6101360190&collection_status=approved&external_reference=ABCD1234&payment_type=credit_card&merchant_order_id=1252584757&preference_id=469485398-a78f2bfc-1232-4e5f-9ceb-229329c5ed79&site_id=MLA&processing_mode=aggregator&merchant_account_id=null"
// 	["payment_id"]=> string(10) "6101360190"
// 	["payment_status"]=> string(8) "approved"
// 	["payment_status_detail"]=> string(10) "accredited"
// 	["merchant_order_id"]=> string(10) "1252584757"
// 	["processing_mode"]=> string(10)"aggregator"
// 	["merchant_account_id"]=> string(0) ""
// }

?>
