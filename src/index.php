<?php

declare(strict_types=1);


// require_once './app/PaymentGateway/Paddle/Transaction.php';
// require_once './app/notification/Email.php';
// require_once './app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once './app/PaymentGateway/Stripe/StripeTransaction.php';

use App\PaymentGateway\Paddle\Transaction;

echo 'Hello World';

// run every time php can't find a class
spl_autoload_register(function ($class) {
  var_dump($class); //"App\PaymentGateway\Paddle\Transaction"
  // project-specific namespace prefix
  $prefix = 'App\\';

  // base directory for the namespace prefix
  $base_dir = __DIR__ . '/';

  // does the class use the namespace prefix?
  $len = strlen($prefix);
  if (strncmp($prefix, $class, $len) !== 0) {
    // no, move to the next registered autoloader
    return;
  }

  // get the relative class name
  $relative_class = lcfirst($class);

  // $classPath = $base_dir . lcfirst(str_replace('\\', '/', $class)) . '.php';
  $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

  var_dump($file);

  if (file_exists($file))
    require_once $file;
});

$paddleTransaction = new Transaction();
