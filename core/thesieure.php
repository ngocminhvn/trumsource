<?php
require('app.php');

require('../public/assets/libs/simple_html_dom.php');
$cookie = 'remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6InBFRGdjTHU1dncreFB4a3RNWGRZRnc9PSIsInZhbHVlIjoiSUhMdVlzYTVCTFFBU3BUMjBYbVFEMUZ6ZVwvQ21iT1lES2hFSFowaWZFR2ZwRGVuVUtLZUtWenBMVVwvN1ROSlBcL2pqWkpNejFRb1hcLzlBR3FRTDdtdGhvcmFleHZFa0U3TStIeHl3SE5HamY2SDg2WW9GTkdTK09cL0tDanNZZ2IxczB2K2dpZmNlMElXcHVaRm5vVjdURVNJK1ZVQVZ3VERXSHpYRzJKRWd3ZU5tZTMrY0liV2pvekM5c21rc203Z1AiLCJtYWMiOiI3YmNiMzFjM2Q1MDMzMzdhNGUzOWMzNGE1MDY4MmZiNGZhNjU0OTA3NTY1YjRiNTU3OTFhOWZhMjVlZTk4MzJhIn0=; TCK=ecab03c342cbda2f430c07803376d6e3; PHPSESSID=l55oevrfcfgo6rfrdnr54agh5h; XSRF-TOKEN=eyJpdiI6Img0Ykw3STJJUE9GNkd0dGV0TTV5U1E9PSIsInZhbHVlIjoidGRVajNqZXNkNkN1eVpaK3lBMDZ5K202dndqOUZqSUM5RkFaMzB0eEc2OVdKR0tyTFpIWUZsamtNc2V6UXNcL1AiLCJtYWMiOiI2YWM4ZDMxNTA3ZjEwMDc2YzZjOGUyMzBlZmIxNjQwNGFhMGE4ODBhMjBlZjRmYWU1MWM2YWEzYjUwMDY1NmVkIn0=; web_session=eyJpdiI6Inl4YTFTeGVEZkphSnhWa3ZTOTFKN1E9PSIsInZhbHVlIjoiQ25HMnlmcTNLaUVUeWczMWlpWTk2cUlJNGFkZHpDNXpKcm1ObWRIUFV0ak5YR0tRVVFjYnVxb0FYODBwaEhsYyIsIm1hYyI6IjExNGQzOTQzZjRlNmNjOWVjNGRmYTAyZDM3YmY4YmI0YjdlN2UxZmU0YjE4MjM0Zjc1MzQwYWQ0OTJkZGQ3ZDMifQ==; lang_code=eyJpdiI6ImY3MkdxdjB3YmlWVWtqaEpiTVBNWlE9PSIsInZhbHVlIjoidkhcL1dSMDdET29pK0xRZ2V6emJQcEE9PSIsIm1hYyI6ImZhNzMwMWE2NGE2NDE3YzE4Y2I3M2ViMDA0NzM3ZDlmMmM4YzQxMjA0MDcwYjQ1NDRiODJkMjljNmFjYzdjNmQifQ==; client_info=eyJpdiI6ImZXK3BtRFhxUlNHWHRDQ0xqdFFwV0E9PSIsInZhbHVlIjoib0RhU1hsTStPa0xZd0RmS0wxVExUQT09IiwibWFjIjoiYTk0YTg0OThmYjU4ZmIyZGI4MWRiZGUxNjcwMzkzMjZmNzlkZmYxMTJjZDliOWMxM2FkM2NhZDFlYzc3NmM0MCJ9';

$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://thesieure.com/wallet/transfer');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Accept-Language: vi,en-US;q=0.9,en;q=0.8,pt;q=0.7,de;q=0.6,mg;q=0.5',
    'Cookie: ' . $cookie,
    'Host: thesieure.com',
    'Referer: https://thesieure.com/wallet/transfer',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$result = curl_exec($ch);
curl_close($ch);

$html = str_get_html($result);
$lol = $html->find('tbody', 2);
if(!$lol){
    die(json_encode(array(
        'msg' => 'Lỗi'
    )));
}
foreach ($lol->find('tr') as $data) {
    $amount = str_replace([',','đ'],'',$data->find('td', 1)->plaintext);
    if($amount < 0){
        $io = '-';
    }else{
        $io = '+';
    }
    $tsr[] = [
        'io' => $io,
        'code'          => $data->find('td', 0)->plaintext,
        'amount'        => trim($amount,'-'),
        'username'      => $data->find('td', 2)->plaintext,
        'status'        => $data->find('td', 4)->plaintext,
        'description'   => $data->find('td', 5)->plaintext,
        'time'          => $data->find('td', 3)->plaintext,
    ];
}
die(json_encode(array(
    'TranList' => $tsr
)));
