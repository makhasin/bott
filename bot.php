<?php
require_once('fb.php');
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

$user		= 'makhasin@gmail.com';
$pass 		= '435af8tyasdf';
$r_male	    = $tipe;; 
$r_female	= $tipe;;
$max_status	= '250';
$token 		= 'EAAAAAYsX7TsBAP3l6I2ZAhfXNqW8jFm6Fqb1pgugw6F0P0eXRWhRqtkBcFeqcEUZCvXqxEddOK7CMbRiCti9yRSf1wzW9LLZB5YL5ZAjNOZAcH6YQ1zN69G9ajPY48RCoRWhFKEyVXdRRYg0pvdSUc8ZAQb0DPJ9uSnbiyELimt06CRFVluqAp24BTJ2nm469k87HgJuEuZBN0MxBCZBmvlQ';
$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}
$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
