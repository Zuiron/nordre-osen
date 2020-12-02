<link href="../assets/css/weather.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../assets/css/custom_weather.css" media="screen" rel="stylesheet" type="text/css" />
    <?php
    require_once('../assets/php/htmldom/simple_html_dom.php');
    
    $html = file_get_html('http://pent.no/forecast/Nordre%20Osen;61.30140;11.76360');
    
    $e = $html->find('div#forecastData');
    echo $e[0];
    ?>