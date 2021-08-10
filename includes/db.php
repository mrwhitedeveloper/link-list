<?php
   require __DIR__.'/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   // This assumes that you have placed the Firebase credentials in the same directory
   // as this PHP file.
   $serviceAccount = ServiceAccount::fromJsonFile('dbconfig.json');//__DIR__ . 
   $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('link-list-2e850-default-rtdb.asia-southeast1.firebaseio.com')
      ->create();
      
   $database = $firebase->getDatabase();
?>
