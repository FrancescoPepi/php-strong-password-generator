<?php
function generate_Password($n_character)
{
    $str_all_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,.-!?@+*_:;$%';
    $password_temporany = '';
    for ($i = 0; $i < $n_character; $i++) {
        $n_random = random_int(0, strlen($str_all_characters) - 1);
        $password_temporany .= $str_all_characters[$n_random];
    }
    return $password_temporany;
}

?>