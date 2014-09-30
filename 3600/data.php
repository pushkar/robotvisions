<?php

$reading_list = array (
    "Background" => array (
        "Mathematical Background" => "http://aima.cs.berkeley.edu/newchapa.pdf",
    ),
    "What is AI?" => array (
        "Mapping Great Debates: Can Computers Think?" => "http://www.macrovu.com/CCTGeneralInfo.html",
    ),
    "Resources for the textbook" => array (
        "Slides" => "http://aima.eecs.berkeley.edu/slides-pdf/",
    ),
);

$textbook_req_list = array (
    "http://aima.cs.berkeley.edu/" => array (
        "Stuart Russell and Peter Norvig, Artifical Intelligence: A Modern Approach, Third Edition." => "",
    )
);

$software_list = array (
    "http://www.codecademy.com/tracks/python" => array (
        "Code Academy" => "Python Track",
    ),
);

$app_list = array (
    "http://www.youtube.com/watch?v=DleXA5ADG78" => array (
        "Brains, Sex, and Machine Learning" => "Geoffrey Hinton <a href=\"http://yann.lecun.com/ex/fun/\">(facts)</a> in GoogleTechTalks.",
    )
);



function list_reading($arr) {
    echo "<ul>";
    foreach ($arr as $topic => $topic_list) {
        echo "<li>";
        echo "$topic";
        echo "<ul>";
        foreach ($topic_list as $heading => $url) {
            echo "<li>";
            echo "<a href=\"$url\">$heading</a>";
            echo "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
}


function list_other($arr) {
    echo "<ul>";
    foreach ($arr as $url => $info) {
        echo "<li>";
        foreach ($info as $url_info => $more_info) {
            echo "<a href=\"$url\">$url_info</a>  $more_info";
        }
        echo "</li>";
    }
    echo "</ul>";
}

?>
