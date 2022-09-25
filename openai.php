<?php
function translate($text,$mode){
    
    
    // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://www.faraazin.ir/api/translate');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"text\":\"".$text."\",\"mode\":\"".$mode."\"}");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Accept: application/json, text/plain, */*';
    $headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'Authorization: Bearer undefined';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/json;charset=UTF-8';
    $headers[] = 'Cookie: _ga=GA1.2.460982806.1663419868; G_ENABLED_IDPS=google; _gid=GA1.2.190022991.1664023961; _gat=1; _mh=%22%2C61%2C80%22';
    $headers[] = 'Origin: https://www.faraazin.ir';
    $headers[] = 'Referer: https://www.faraazin.ir/';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36';
    $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"105\", \"Not)A;Brand\";v=\"8\", \"Chromium\";v=\"105\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"macOS\"';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $array = json_decode($result);
    return $array->tr->base[0][1];
    
}
function create_text($text){
    // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"model\": \"text-ada-001\",\n  \"prompt\": \"Write a creative ad for the following text:nnText: ".$text."\",\n  \"temperature\": 0.5,\n  \"max_tokens\": 60,\n  \"top_p\": 1,\n  \"frequency_penalty\": 0,\n  \"presence_penalty\": 0\n}");
    
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer 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';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $array = json_decode($result);
    return $array->choices[0]->text;
}
function main($text){
    #return translate(create_text(translate($text,"fa_en")),"en_fa");
    return create_text($text);
}
?>