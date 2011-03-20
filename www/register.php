<?php

function generatePassword ($length = 12) {
   $validchars = '0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $password = '';
   while (strlen($password) < $length) {
     $password .= substr($validchars, rand(0, strlen($validchars)-1), 1);
   }
   return $password;
}

$username = $_GET['username'];

if (preg_match('/[^a-zA-Z0-9.]/', $username)) {
  die('Only [a-zA-Z0-9] allowed');
}

$one_week = date('Y-m-d', time() + (7 * 24 * 60 * 60));

$password = generatePassword();

shell_exec('/usr/sbin/useradd '.$username.' -e '.$one_week.' -m -p .'.$password);

?>
<!DOCTYPE html>
<html>
<head>
<style>
pre {
  background: black;
  color: white;
  padding: 10px;
} 
</style>
</head>
<body>

<pre><code>ssh <?php echo $username ?>@hack.camphackathon.com
</code></pre>

Your password is: 

<pre><?php echo $password ?></pre>

You can change it after you log in with:

<pre>passwd</pre>

Your website is live at

<a href="http://<?php echo $username ?>.hack.camphackathon.com">
  <?php echo $username ?>.hack.camphackathon.com
</a>

and you edit it in:

<pre><code>~/www</code></pre>
