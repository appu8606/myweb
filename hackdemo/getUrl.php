<?php
$serverPath='http://localhost:9090';
$parameterList = strval($_GET['paramObject']);
$reportId=strval($_GET['reportId']);
//'39b7f330-5c3e-4764-9e09-48b789951984';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "9090",
  CURLOPT_URL => $serverPath."/rest/retailservice/reports/".$reportId."/pdf",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $parameterList,
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>