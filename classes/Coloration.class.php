<?php

class Coloration {

  /*
     Fonction permettant de colorier du code passé en paramètre
     Entrée : $code : le code à colorier
              $lang : le langage dans lequel est écrit le code (défaut : C++)
              $theme : le thème dans lequel colorier le code (defaut : Mac Classic)
   */
  public static function colorier($code, $lang = "C++", $theme = "Mac Classic") {

    $c = curl_init('http://markup.su/api/highlighter');
    curl_setopt_array($c, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => 'language='. urlencode($lang). '&theme='. urlencode($theme). '&source=' . urlencode($code)
    ));
    $response = curl_exec($c);
    $info = curl_getinfo($c);
    curl_close($c);

    if ($info['http_code'] == 200 && $info['content_type'] == 'text/html') {
      return $response;
    } else {
      return 'Error';
    }

  }

}

?>
