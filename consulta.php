$url = "https://graph.facebook.com/v12.0/1643204302616358?fields=posts%7Bfull_picture%2Cmessage%7D&access_token=EAADdUDROBlkBAGrvwF9gDmsqDGXlns90cnDtZAdJi5kaxgu0r0p44NkKFrXlmMnauRbZBI1y6Elgh4gtnxP9XCYS2xqk5JBHFrqqkekzUpkONgaaehSHqXZAZBboZAwSyZAqZAlzHOOsc5IcFyeFtTXOIs9thXjeRItvvYfU8jUuUQyFGAVpTJU241EDvlAlvYXAZCJ7QtvSZAbanU9TmhMNfl7nmdjZAk2vT1lTfTconh9zDax4hUcTxJvrTg5oru7s8ZD";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$result = json_decode($resp);

//echo '<pre>';
//print_r($result);
//echo '</pre>';


foreach ($result->posts->data as $list) {
//    echo '<pre>';
//        print_r($list->full_picture);
//    echo '</pre>';

    echo  "<img src=$list->full_picture width='200px'><br>";
    echo $list->message."<br>";
}
