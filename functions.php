<?php function getDomain($url)
{
    $pieces = parse_url($url);
    $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
        return $regs['domain'];
    }
    return false;
}
function headerRequest($url)
{
    $result = "";
    $ch = curl_init($url);
    $options = [CURLOPT_HEADER => true, CURLOPT_NOBODY => true, 
        CURLOPT_RETURNTRANSFER => true ];
    
    curl_setopt_array($ch, $options);    
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function statusRequest($url)
{
    $result = "";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
    curl_exec($ch);
    
    $result = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

    curl_close($ch);
    return $result;
}
function getRequest($url)
{
    $result = "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    return $result;
}
function postRequest($url, $parameters)
{
    $result = "";
    $fields = json_encode($$parameters);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    return $result;
}
function authRequest($url, $parameters,$username,$password)
{
    $result = "";
    $fields = json_encode($$parameters);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    return $result;
}
function fileRequest($url, $name)
{

    $ch = curl_init($url);
    $fp = fopen($name, 'w');

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, false);

    curl_exec($ch);

    if (curl_error($ch)) {
        fwrite($fp, curl_error($ch));
    }

    curl_close($ch);
    fclose($fp);
}
function getTitle($url) {
    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
}
function getDescription($url) {
    $tags = get_meta_tags($url);
    return @($tags['description'] ? $tags['description'] : "NULL");
}
// 
