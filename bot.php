<?php
// Warna Terminal
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";
require_once('fb.php');
echo "$cyan + //////////////////////////////+\n";

echo "$cyan ___           _     _
|_ _|_ __  ___(_) __| | ___
 | || '_ \/ __| |/ _` |/ _ \
 | || | | \__ \ | (_| |  __/
|___|_| |_|___/_|\__,_|\___|\n";
echo "_   _                 _
| | | | ___  __ _ _ __| |_ ____
| |_| |/ _ \/ _` | '__| __|_  /
|  _  |  __/ (_| | |  | |_ / /
|_| |_|\___|\__,_|_|   \__/___|\n\n";

echo "+ //////////////////////////////+\n";
echo "$hijau Username Facebokk: makhasin@gmail.com";
$user= trim(fgets(STDIN));

echo ' Password Facebook: 435af8tyasdf';
$pass = trim(fgets(STDIN));

echo "$merah Your Token: EAAAAAYsX7TsBAP3l6I2ZAhfXNqW8jFm6Fqb1pgugw6F0P0eXRWhRqtkBcFeqcEUZCvXqxEddOK7CMbRiCti9yRSf1wzW9LLZB5YL5ZAjNOZAcH6YQ1zN69G9ajPY48RCoRWhFKEyVXdRRYg0pvdSUc8ZAQb0DPJ9uSnbiyELimt06CRFVluqAp24BTJ2nm469k87HgJuEuZBN0MxBCZBmvlQ";
$token = trim(fgets(STDIN));

echo "$kuning \n \n";
echo "        Choose one\n ";
echo "+================+\n"; 
echo "1 : Like\n";
echo "2 : Love\n";
echo "3 : Haha\n";
 echo "4 : Wow\n";
echo "5 : Angry\n";
 echo "+===============+\n";
   
echo "$biru Tipe Reaction : ";
$tipe= trim(fgets(STDIN));



//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= $user; // facebook username / email
$pass 		= $pass; // facebook passwod
$r_male	= $tipe; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= $tipe; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '250'; // maximum reacted status
$token 		= $token;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
