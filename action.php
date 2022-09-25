<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test-api.centralpay.net/v2/rest/paymentRequest');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'paymentMethod[]' => 'TRANSACTION',
    'currency' => 'EUR',
    'breakdown[]' => '{}',
    'totalAmount' => htmlspecialchars($_POST["amount"]*100),
    'breakdown[firstname]' => htmlspecialchars($_POST["firstName"]),
    'breakdown[lastname]' => htmlspecialchars($_POST["lastName"]),
    'breakdown[email]' => htmlspecialchars($_POST["email"]),
    'breakdown[amount]' => htmlspecialchars($_POST["amount"]*100),
    'description' => htmlspecialchars($_POST["description"])
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_USERPWD, '1c1b28f2-a84b-4b30' . ':' . 'VJezNXV9Wz#A');

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
$data = json_decode($result, true);
$prbdi = $data['breakdowns'][0]['paymentRequestBreakdownId'];


curl_setopt($ch, CURLOPT_URL, 'https://test-api.centralpay.net/v2/rest/paymentRequestBreakdown/'.$prbdi.'/qrcode');
curl_setopt($ch, CURLOPT_POSTFIELDS, "format=PNG");
$headers = array();
$headers[] = 'Content-Type:application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$qrcode = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$base = base64_encode($qrcode);
?>

<img src="data:image/png;charset=utf8;base64,<?php echo $base?>" alt="qrcode"/>
