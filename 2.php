$username="userT6Sa";
$uppercase = preg_match('@[A-Z]@', $user);
$lowercase = preg_match('@[a-z]@', $user);


if(!$uppercase || !$lowercase || strlen($user)<=8){
    echo "username harus lebih dari 8 karakter, mengandung huruf BESAR, huruf kecil";
}else{
    echo "username memenuhi kriteria";
}



$pass="paswdT6Sa";
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || !$number || strlen($pass)<=8){
    echo "password harus lebih dari 6 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo "password memenuhi kriteria";
}