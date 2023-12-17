<?php

// String Functions

echo "9. empty = '', false , 0, null /isset = '' , fdsafsg , set or not. if set var_dump true or not set var_dump false   <br><br>";
$name = "";
var_dump(empty($name));

echo "<br><br>Join/Merge array<br>";
 echo "<br>10.implode/join = array => string<br>";
 
 $wrd = [
    'my',
    'name',
    'is',
    'fatema',
 ];

 echo implode(" ",$wrd);

 echo "<br><br>11.explode = string => array<br>";

//  $wrd2 = "My name is Fatema";
//  $array = explode(" ", $wrd2);

//  print_r($array);

echo "<br><br>12.explode = string => array with array_reverse<br>";
 $filename = "png.jpg.png.svg.pdf";
 $filearray = explode(".",$filename);
 $rvarray = array_reverse($filearray);

 if ($filearray [0] == "png") {
    echo "<br><br>File extension procceed<br>";
 }else{
    echo "<br><br>File extension failed<br>";
 }


 echo "<br><br>13.explode = string => array with array_end<br>";
 $filename2 = "png.txt.jpg";
 $filearray2 = explode(".",$filename2);
 $fileend = end($filearray2);
 
 print_r(  $fileend);

 if (  $fileend == "jpg"){
   echo "<br><br>File extension procceed 2<br>";
 }else{
   echo "<br><br>File extension failed 2<br>";
 }


 echo "<br>youtube thumbnail api:<br>";

 $api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";

 $youtubeurl = "https://youtu.be/kr9lTwR34yM?si=L9mj7FbleL5PsBHE";

 $urlexplode = explode("?si=", $youtubeurl);

 $youtubeurlArray= explode('/' , $urlexplode[0]);

 $youtubeId = end($youtubeurlArray);

$url = str_replace("<insert-youtube-video-id-here>", $youtubeId ,  $api);

echo "<img src= '$url'>";


// Function homework with thumbnail generator in php

function video_thumb ($video_url) {
   $api2 = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";

   $url_explode1 = explode('?si=',   $video_url);

   $url_explode2 = explode('/', $url_explode1[0]);

   $video_Id = end($url_explode2);

   $url = str_replace("<insert-youtube-video-id-here>", $video_Id ,$api2);

   echo "<img src = '$url' >";

}

video_thumb ("https://youtu.be/nreXr5LXt5c?si=sCCcXOgRKPvzjP3x");



echo "<br><br>14.compact: <br>";

$user = ["Fatema",1999];
$facebook =["Mst Fatema Akther Baly"];

$res = compact('user','facebook');

print_r($res);



echo "<br><br>15.count: count of array<br>";

$cntdata =[
   "4564567",
   "4t34teg",
   "cdhghjtyj"
];

echo count($cntdata );

echo "<br><br>16.sizeof: size of array<br>";

$cntdata1 =[
   "4564567",
   "4t34teg",
   "cdhghjtyj"
];

echo sizeof($cntdata1);


echo "<br><br>17.arra_diff: Difference beetween Array <br>";

$std1 =[
   'fatema', 23 , 'front end developer'
];

$std2 = [
   'fatema', 24 , 'full stack developer'
];

$diff1 = array_diff($std1,$std2);
$diff2 = array_diff($std2,$std1);

// print_r($diff1);
// print_r($diff2);

$new_Array = (array_merge($diff1,$diff2));

print_r($new_Array); 
// Important

echo "<br><br>18.array_intersect: common <br>";

$user1 = [
   "fatema",
   23,
   "reading a book"
];
$user2 = [
   "jannat",
   23,
   "playing a carrom"
];

$interarray = array_intersect($user1,$user2);

print_r($interarray);


echo "<br><br>19.array_pop: last array out <br>";

echo "<br><br>20.array_push: add new data <br>";

echo "<br><br>21.array_shift/unshift: out first/last data <br>";

echo "<br><br>22.array_rand: add new data <br>";

$rnd = [
   "good",
   "better",
   "best"
];

print_r($rnd [array_rand($rnd)]);

var_dump(in_array("best",$rnd));

echo "<br><br>23.array_reverse: <br>";

echo "<br><br>24.in_array: to check spesific element <br>";

$correctext =[
   'jpg',
   'svg',
   'exe',
   'png'
];

$ext = 'png';

var_dump(in_array($ext,$correctext));

echo "<br><br>25.array_search: <br>";

// echo "<br><br>26.array_filter: <br>";

// $active = [
//   30,30,48,60,67,89,89,100,40
// ];

// $newdata = array_filter($active, function ($data) {
//    if ($data > 30) {
//       return $data;
//    }
// });

// print_r($newdata);
// bujai nite hobe

echo "<br><br>27.array_slice: <br>";

















 
?>