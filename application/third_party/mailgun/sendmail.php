<?php 
    
         require "vendor/autoload.php";
        // require_once(APPPATH."plugins/vendor/autoload.php")
			use Mailgun\Mailgun;;

			# Instantiate the client.
			$mgClient = new Mailgun('key-6a055f0b617724d4900848909eebe756');
			$domain = "sandbox9d8c359b09004c299b7932b976c9c4e2.mailgun.org";

			# Make the call to the client.
			$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox9d8c359b09004c299b7932b976c9c4e2.mailgun.org>',
                        'to'      => 'Carl Njoku <carlnjoku@yahoo.com>',
                        'subject' => 'Hello Carl Njoku',
                        'text'    => 'Congratulations Carl Njoku, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.')
                        
                  );
    
     
?>
