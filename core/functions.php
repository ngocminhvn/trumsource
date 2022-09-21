<?php 
function redirect($url) {
    return header("location: ".$url);
}
function __($text) {
    return $text;
}
function datetime($time) {
    return date("H:i:s d/m/Y", $time);
}
function vaidivale($string) {
    foreach ($string as $key) {
        if(strlen($key) < 5){
            return die(json_encode(array(
                'status'  => false,
                'message' => 'Trường này phải có tối thiểu 5 ký tự.'
            )));
        }
        if(strlen($key) > 30){
            return die(json_encode(array(
                'status'  => false,
                'message' => 'Trường này phải có tối đa 30 ký tự.'
            )));
        }
    }
}
function is_user() {
    global $user;
    if(!isset($_COOKIE['token'])){
        return die(json_encode(array(
            'status'  => false,
            'message' => 'Vui lòng đăng nhập để tiếp tục.'
        )));
    }else if(!$user){
        unset($_COOKIE['token']);
        setcookie('token', null, -1, '/');
        return die(json_encode(array(
            'status'  => false,
            'message' => 'Vui lòng đăng nhập để tiếp tục.'
        )));
    }
}
function is_admin() {
    global $user;
    if(!$user){
        return die(json_encode(array(
            'status'  => false,
            'message' => 'Vui lòng đăng nhập để tiếp tục.'
        )));
    }
    if($user['role'] != 'admin'){
        return die(json_encode(array(
            'status'  => false,
            'message' => 'Hành động này dành cho ADMIN.'
        )));
    }
}
function vaidivale_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function random($length = 50) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function injection($var)
{
    return xss(htmlspecialchars(addslashes(str_replace(['<', "'", '>', '?', '--', 'eval(', '<php', ');', 'WHERE', 'UNION', 'CONCAT', 'SELECT'], [''], strip_tags($var))))); 
}
function table_empty() {
    return '
    <tr class="404">
        <td valign="top" colspan="100%">
            <center>
                <img src="https://i.imgur.com/se7QLIS.png" width="80" height="80" class="pt-3" />
                <p class="pt-3">Không có dữ liệu để hiển thị</p>
            </center>
        </td>
    </tr>
    ';
}
function status_card($code) {
    if($code == 1){
        return '<span class="badge bg-info">Chờ duyệt</span>';
    }else if($code == 2){
        return '<span class="badge bg-success">Thành công</span>';
    }else{
        return '<span class="badge bg-danger">Thất bại</span>';
    }
}
function csrf() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers['csrf-token'];
}

function geolocation()
{
    $details = file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json");
    /**{
      "ip": "1.1.1.1",
      "hostname": "one.one.one.one",
      "anycast": true,
      "city": "Los Angeles",
      "region": "California",
      "country": "US",
      "loc": "34.0522,-118.2437",
      "org": "AS13335 Cloudflare, Inc.",
      "postal": "90076",
      "timezone": "America/Los_Angeles",
      "readme": "https://ipinfo.io/missingauth"
    }**/
    return $details;
}
function slug($strTitle)
{
    $strTitle = strtolower($strTitle);
    $strTitle = trim($strTitle);
    $strTitle = str_replace(['!','@','#','%','^','&','*','(',')',':','=','~','*'], ' ', $strTitle);
    $strTitle = str_replace(' ', '-', $strTitle);
    $strTitle = preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strTitle);
    $strTitle = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strTitle);
    $strTitle = str_replace('đ', 'd', $strTitle);
    $strTitle = str_replace('Đ', 'd', $strTitle);
    $strTitle = preg_replace("/[^-a-zA-Z0-9]/", '', $strTitle);
    return $strTitle;
}
function xss($data)
{
    $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
    $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);
    do
    {
        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    }
    while ($old_data !== $data);
    return $data;
}
function tele($msg) {
        $url = "https://api.telegram.org/bot5551921244:AAGioeOJtP2OnaihZaY2miMzkQDFMP1J33c/sendMessage?parse_mode=html&chat_id=1996812631&text=" . urlencode("🔔 THÔNG BÁO
📝 Nội dung: " .
        $msg .
        "
🕒 Thời gian: " .
        date('d/m/Y H:i:s'));
        return file_get_contents($url);
}
function minify($buffer)
{
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s'
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );

    if (preg_match("/\<html/i", $buffer) == 1 && preg_match("/\<\/html\>/i", $buffer) == 1) {
        $buffer = preg_replace($search, $replace, $buffer);
    }

    return $buffer;
}

function BBCode($str)
{
    $str = str_replace('[URL=https://', '[URL=', $str);
    $str = str_replace('[URL]https://', '[URL]', $str);
    $bbcode_smiles = [
        '/\[B\](.*?)\[\/B\]/is',
        '/\[I\](.*?)\[\/I\]/is',
        '/\[U\](.*?)\[\/U\]/is',
        '/\[BLOCK\](.*?)\[\/BLOCK\]/is',
        '/\[COLOR=(.*?)\](.*?)\[\/COLOR\]/is',
        '/\[BR\]/is',

        '/\[URL\=(.*?)\](.*?)\[\/URL\]/is',
        '/\[URL\](.*?)\[\/URL\]/is',

        '/\[IMG\=(.*?)\](.*?)\[\/IMG\]/is',
        '/\[IMG\](.*?)\[\/IMG\]/is',
    ];
    $html_tags = [
        '<b>$1</b>',
        '<i>$1</i>',
        '<u>$1</u>',
        '<blockquote>$1</blockquote>',
        '<span style="color:$1;">$2</span>',
        '<br/>',

        '<a target="_blank" href="https://$1">$2</a>',
        '<a target="_blank" href="https://$1">$1</a>',

        '<img src="$1" alt="$2" style="max-width:99%;height:auto;" />',
        '<img src="$1" alt="$1" style="max-width:99%;height:auto;" />',
    ];
    $str = preg_replace($bbcode_smiles, $html_tags, $str);
    return $str;
}
function timeago($timestamp)
{
  $strTime = ["s", "p", "h", "d", "m", "y"];
  $length = ["60", "60", "24", "30", "12", "10"];

  $currentTime = time();
  if ($currentTime >= $timestamp){
    $diff     = time() - $timestamp;
    for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
      $diff = $diff / $length[$i];
    }

    $diff = round($diff);
    return $diff."".$strTime[$i]." trước";
    }
}
function GET($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    curl_close($ch);
    return $data;
}