<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://to3a.com/', '7bfdk3mx3dfhlnhszt649bpdtrfn88cc');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
$client->executeAndBreak();     // to stop page execution if there is redirect or some output

?>


<!DOCTYPE html>
<htnl lang='en'>
<head>

<mets charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
<body>
Ваш сайт
</body>
</html>