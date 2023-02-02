<html>
<body>

<?php
 
function create_bbcode($text) {
 
//BBcode
$find = array(
 
'~\[b\](.*?)\[/b\]~s',
 
'~\[i\](.*?)\[/i\]~s',
 
'~\[u\](.*?)\[/u\]~s',
 
'~\[quote\](.*?)\[/quote\]~s',
 
'~\[size=(.*?)\](.*?)\[/size\]~s',
 
'~\[color=(.*?)\](.*?)\[/color\]~s',
 
'~\[url\]((?:ftp|https?)://.*?)\[/url\]~s',
 
'~\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]~s'
 
);
 
// HTML tags thay thế BBcode
 
$replace = array(
 
'<b>$1</b>',
 
'<i>$1</i>',
 
'<span style="text-decoration:underline;">$1</span>',
 
'<pre>$1</'.'pre>',
 
'<span style="font-size:$1px;">$2</span>',
 
'<span style="color:$1;">$2</span>',
 
'<a href="$1">$1</a>',
 
'<img src="$1" alt="" />'
 
);
 
// Thay thế
 
return preg_replace($find,$replace,$text);
 
}
 
?>


<?php
 
$content="Đây là [b]Chữ đậm[/b]. Đây là [i]chữ nghiêng[/i]. Đây là chữ [u]gạch chân[/u]";
 
echo create_bbcode($content);
 
?>

</body>
</html>