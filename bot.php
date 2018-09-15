<?php
require_once('fb.php');
$user		= 'makhasin@gmail.com';
$pass 		= '435af8tyasdf';
$r_male	= '3'; 
$r_female	= '8';
$max_status	= '99999';
$token 		= 'EAAAAAYsX7TsBAP3l6I2ZAhfXNqW8jFm6Fqb1pgugw6F0P0eXRWhRqtkBcFeqcEUZCvXqxEddOK7CMbRiCti9yRSf1wzW9LLZB5YL5ZAjNOZAcH6YQ1zN69G9ajPY48RCoRWhFKEyVXdRRYg0pvdSUc8ZAQb0DPJ9uSnbiyELimt06CRFVluqAp24BTJ2nm469k87HgJuEuZBN0MxBCZBmvlQ';
$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}
$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
