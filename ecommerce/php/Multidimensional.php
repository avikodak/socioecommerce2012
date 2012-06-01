<?php

function recursor($array) {

    print "<ul>\n";

    foreach ($array as $key => $value) {
        if (is_array($value))
            recursor($value);
        else
            print "<li>$value</li>\n";
    }

    print "</ul>\n";
}

?>
/*
Array ( [data] => Array ( [0] => Array ( [name] => Web Development- PHP, dot NET, CMS Portals [category] => Website [id] => 189713054413366 [created_time] => 2012-05-17T08:47:42+0000 ) [1] => Array ( [name] => Reading [category] => Interest [id] => 136550053041283 [created_time] => 2012-05-17T08:47:26+0000 ) ) [paging] => Array ( [next] => https://graph.facebook.com/me/interests?method=GET&access_token=AAAFdzu09Sw0BAHhLHRYnrUsuc15gqtvdMYjYjN8n7YYVIaWZCU7MST33zIRHZC6OYcm3abCfJuXtAZCDqxZCwi5fAWSF3IlNTjYoPPrtDwZDZD&limit=5000&offset=5000&__after_id=136550053041283 ) ) */




/*
Array ( [id] => 1626916972 [name] => Kodakandla Avinash [first_name] => Kodakandla [last_name] => Avinash [link] => http://www.facebook.com/avikodak [username] => avikodak [birthday] => 12/19/1990 [hometown] => Array ( [id] => 107956472565108 [name] => Kazipet ) [location] => Array ( [id] => 106377336067638 [name] => Bangalore, India ) [work] => Array ( [0] => Array ( [employer] => Array ( [id] => 116045491739389 [name] => Yahoo! Software Development India Pvt. Ltd. ) [location] => Array ( [id] => 106377336067638 [name] => Bangalore, India ) [position] => Array ( [id] => 108703555821060 [name] => Intern ) [start_date] => 0000-00 ) [1] => Array ( [employer] => Array ( [id] => 107833929248832 [name] => vipashyin labs ) [location] => Array ( [id] => 106377336067638 [name] => Bangalore, India ) [start_date] => 2010-05 [end_date] => 2010-06 ) ) [favorite_teams] => Array ( [0] => Array ( [id] => 107222059313059 [name] => Team 3gp ) [1] => Array ( [id] => 98027790139 [name] => Deccan Chargers ) [2] => Array ( [id] => 75018959472 [name] => Deccan Chargers Home ) [3] => Array ( [id] => 198358615428 [name] => Mumbai Indians ) [4] => Array ( [id] => 190313434323691 [name] => Indian Cricket Team ) [5] => Array ( [id] => 146078378744600 [name] => International Cricket Council ) [6] => Array ( [id] => 290897664260544 [name] => The BACK Benchers ) [7] => Array ( [id] => 115891808444355 [name] => Team India ) ) [favorite_athletes] => Array ( [0] => Array ( [id] => 22231020470 [name] => Sachin Tendulkar ) [1] => Array ( [id] => 65920772679 [name] => Maria Sharapova ) [2] => Array ( [id] => 324331619655 [name] => SACHIN TENDULKAR'S 200 AGAINST SOUTH AFRICA !! Truly LEGENDARY !! ) [3] => Array ( [id] => 64822581025 [name] => Rafael Nadal ) [4] => Array ( [id] => 108122792548976 [name] => Yuvraj Singh ) [5] => Array ( [id] => 187925511226863 [name] => Zaheer Khan ) [6] => Array ( [id] => 201246173223850 [name] => Harsha Bhogle - The Greatest Cricket Commentator ) [7] => Array ( [id] => 13184062045 [name] => Sachin Tendulkar ) [8] => Array ( [id] => 195136617198739 [name] => Cricket is Our Religion and Sachin is Our God ) [9] => Array ( [id] => 19998923923 [name] => VVS Laxman ) [10] => Array ( [id] => 53229657316 [name] => Mansour Bahrami ) [11] => Array ( [id] => 185861051427274 [name] => Paul Valthaty ) ) [education] => Array ( [0] => Array ( [school] => Array ( [id] => 111920618835156 [name] => St Gabriels High School ) [year] => Array ( [id] => 137616982934053 [name] => 2006 ) [type] => High School ) [1] => Array ( [school] => Array ( [id] => 115907608455294 [name] => St. Gabriel's High School, Kazipet ) [year] => Array ( [id] => 137616982934053 [name] => 2006 ) [type] => High School ) [2] => Array ( [school] => Array ( [id] => 108048742562204 [name] => bits pilani hyd campus ) [type] => College ) [3] => Array ( [school] => Array ( [id] => 113069582096774 [name] => sri chaitanya junior college,raman bhavan ) [type] => College ) [4] => Array ( [school] => Array ( [id] => 115859595094167 [name] => BITS Pilani Hyderabad Campus ) [type] => College ) [5] => Array ( [school] => Array ( [id] => 109999675689315 [name] => Birla Institute of Technology & Science ) [type] => Graduate School ) ) [gender] => male [email] => avikodak@gmail.com [timezone] => 5.5 [locale] => en_US [verified] => 1 [updated_time] => 2012-05-17T08:47:26+0000 )
*/