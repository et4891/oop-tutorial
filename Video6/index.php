<?php 

require 'Chest.php';
require 'Lock.php';

$chest = new Chest(new Lock);

$chest->close();
$chest->open();
 ?>


<br>


<?php 

require 'Database.php';
require 'User.php';

$user = new User(new Database);
$user->create(['username' => 'Terry']);

 ?>