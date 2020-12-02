
<!DOCTYPE html>
<html lang="nb">
<head>
    
<meta charset="utf-8"/>

    
<link href="/assets/css/weather.css" media="screen" rel="stylesheet" type="text/css" />
<!--[if IE]> <link href="/css/layout_ie.css?cache=1458745980" media="all" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file
$html = file_get_html('http://pent.no/forecast/Nordre%20Osen;61.30140;11.76360');

// find all div tags with id=gbar
//foreach($html->find('div#forecastData') as $e)
    //echo $e->innertext . '<br>';
    
$e = $html->find('div#forecastData');
echo $e[0];

// extract text from HTML
//echo $html->plaintext;
//echo $html;
?>