EXERCÍCIO 2 -> TEST BDR -> BRASIL
===================================================

<br />
2. Refatore o código abaixo, fazendo as alterações que julgar necessário.<br />
1. <?<br />
2.<br />
3. if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {<br />
4. header("Location: http://www.google.com");<br />
5. exit();<br />
6. } elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {<br />
7. header("Location: http://www.google.com");<br />
8. exit();<br />
9. }<br />