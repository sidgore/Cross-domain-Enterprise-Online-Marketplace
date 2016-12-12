   if (isset($_COOKIE)) 
{
foreach ($_COOKIE as $key => $value) {
    echo $value;
    unset($value);
    setcookie($key, '', time() - (86400 * 30), '/');
}