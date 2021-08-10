<?php
   require './vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   // This assumes that you have placed the Firebase credentials in the same directory
   // as this PHP file.
   //echo __DIR__.'\dbconfig.json';
   // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'\dbconfig.json');//__DIR__ . 
   // $firebase = (new Factory)
   //    ->withServiceAccount($serviceAccount)
   //    ->withDatabaseUri('link-list-2e850-default-rtdb.asia-southeast1.firebaseio.com')
   //    ->create();
      
   // $database = $firebase->getDatabase();

   $factory = (new Factory)->withServiceAccount(__DIR__.'/dbconfig.json')
   ->withDatabaseUri('https://link-list-2e850-default-rtdb.asia-southeast1.firebasedatabase.app')->createDatabase();

   $database = $factory;

?>
