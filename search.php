<?php

function grab($url)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $setUA = 'Opera/9.80 (BlackBerry; Opera Mini/4.5.33868/37.8993; HD; en_US) Presto/2.12.423 Version/12.16';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $setUA); // Set UA curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR:$ip","HTTP_X_FORWARDED_FOR:$ip"));
        $ret = curl_exec($ch);
        curl_close($ch);
        return $ret;
    }
    $teks_asli = $_GET['q'];
$hasil = str_replace([' '], ['-'], $teks_asli);
$url='https://www.google.com/search?lr=lang_id&safe=strict&biw=1366&bih=625&tbs=srcf%3AH4sIAAAAAAAAANOuzC8tKU1K1UvOz1VLS0xOTcrPzwZzsvNzCxKLwcyS_1Oz8gtSUzEQwLzOvOLWoJCezDKKpJDUFTAMA9p-Ed0oAAAA%2Ccc%3A1%2Clr%3Alang_1id&tbm=vid&sxsrf=ALeKk03DkE2RgASZkdQDkaAXEohjI-xEeg%3A1607933402240&ei=2h3XX72RDueQ4-EPivOQ4AQ&q=site%3A%22youtube.com%3Fwatch%3D%22+'.$hasil.'&oq=site%3A%22youtube.com%3Fwatch%3D%22+'.$hasil.'&gs_l=psy-ab.3...20705.23125.0.23465.10.10.0.0.0.0.330.1310.0j6j0j1.7.0....0...1c.1.64.psy-ab..3.0.0....0.Gve1ALPae5E';

    $html = grab($url);
    
    echo $html;
    ?>
