<?php

error_reporting(E_ALL ^ E_NOTICE); //display no error - release
//error_reporting( E_ALL ); //display all errors ? - debug/dev

function parse_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

    $path['query_utf8'] = urldecode($request_path[1]);
    $path['query'] = utf8_decode(urldecode($request_path[1]));
    $vars = explode('&', $path['query']);
    foreach ($vars as $var) {
      $t = explode('=', $var);
      $path['query_vars'][$t[0]] = $t[1];
    }
  }
return $path;
}
$path_info = parse_path(); //echo '<pre>'.print_r($path_info, true).'</pre>';

      require_once("header.html");

      $url_path = $path_info['call_parts'];
           if($url_path[0] == "") { require_once 'pages/home.html';  }
      else if($url_path[0] == "instagram") { require_once 'pages/instagram.html';  }
      else if($url_path[0] == "kalender") { require_once 'pages/kalender.html'; }
      else if($url_path[0] == "kontakt") { require_once 'pages/kontakt.php'; }
      else if($url_path[0] == "weather" || $url_path[0] == "vaeret") { require_once 'pages/weather.php'; }

      //category pages
      else if($url_path[0] == "handel") { require_once 'pages/Handel/handel.html'; }
        else if($url_path[0] == "jokerosen") { require_once 'pages/Handel/jokerosen.html'; }
        else if($url_path[0] == "osenlandhandleri") { require_once 'pages/Handel/osenlandhandleri.html'; }

      else if($url_path[0] == "camping") { require_once 'pages/Camping/camping.html'; }

      else if($url_path[0] == "lokalmat") { require_once 'pages/Lokalmat/lokalmat.html'; }

      else if($url_path[0] == "gaardsferie") { require_once 'pages/Gaardsferie/gaardsferie.html'; }

      else if($url_path[0] == "overnatting") { require_once 'pages/Overnatting/overnatting.html'; }

      else if($url_path[0] == "jaktogfiske") { require_once 'pages/Jaktogfiske/jaktogfiske.html'; }
        else if($url_path[0] == "fiskekort") { require_once 'pages/Jaktogfiske/fiskekort.html'; }

      else if($url_path[0] == "helseogvelvaere") { require_once 'pages/Helseogvelvaere/helseogvelvaere.html'; }

      else if($url_path[0] == "hytterogferiehus") { require_once 'pages/Hytterogferiehus/hytterogferiehus.html'; }

      else if($url_path[0] == "serviceogtjenester") { require_once 'pages/Serviceogtjenester/serviceogtjenester.html'; }

      else if($url_path[0] == "restaurantmatkafe") { require_once 'pages/Restaurantmatkafe/restaurantmatkafe.html'; }

      else if($url_path[0] == "aktiviteterogopplevelser") { require_once 'pages/Aktiviteterogopplevelser/aktiviteterogopplevelser.html'; }

        //events
        else if($url_path[0] == "17mai") { require_once 'pages/Events/17mai2016.html'; }
        else if($url_path[0] == "osendagene") { require_once 'pages/Events/osendagene.html'; }
        else if($url_path[0] == "amcar") { require_once 'pages/Events/amcarveterantreff2016.html'; }
        else if($url_path[0] == "amcar17") { require_once 'pages/Events/amcar17.html'; }
        else if($url_path[0] == "floterfestivalen") { require_once 'pages/Events/floterfestivalen.html'; }

           else { require_once 'pages/404.html'; }

      require_once("footer.html");
?>
