<?php

class IndexController extends Yaf\Controller_Abstract{
  
  public function init(){
    //echo "init ...";
  }

  public function indexAction(){
    //echo CSRF::getToken();
    exit;
    //use Gregwar\Captcha\CaptchaBuilder;
		$builder = new Gregwar\Captcha\CaptchaBuilder;
		$builder->build(); 
		header('Content-type: image/jpeg');
		$builder->output();
    exit;
    echo '<img src="<?php echo $builder->inline(); ?>" >';
    exit;
    $imagine = new Imagine\Gd\Imagine();
		// or
		$imagine = new Imagine\Imagick\Imagine();
		// or
		//$imagine = new Imagine\Gmagick\Imagine(); 
    print_r( $imagine );
    exit;
    //$upload = new \Upload\Upload();
    //print_r( $upload );exit;
    //$zippy = Alchemy\Zippy\Zippy::load();
    //var_dump( $zippy );
    $factory = new CalendR\Calendar;
    $month = $factory->getMonth(2012, 01);
    echo $month;
    exit;
		echo '<br />';
		// This is a secret pass-phrase, keep it in a safe place and don't loose it.
		$pass = 'my secret pass-phrase, it should be long';
		echo '$pass = '.$pass;
		echo '<br />';
		// The string to be encrypted.
		$string = 'my secret message';
		echo '$string = '.$string;
		echo '<br />';
		echo '<br />';
		// The default key size is 256 bits.
		$old_key_size = Aes::size();
		echo 'Encryption and decryption using a 256-bit key:';
		echo '<br />';
		Aes::size(256);
		// This is the result after encryption of the given string.
		$encrypted_string = Aes::enc($string, $pass);
		// This is the result after decryption of the previously encrypted string.
		// $decrypted_string == $string (should be).
		$decrypted_string = Aes::dec($encrypted_string, $pass);
		echo '$encrypted_string = '.$encrypted_string;
		echo '<br />';
		echo '$decrypted_string = '.$decrypted_string;
		echo '<br />';
		echo '<br />';
    //$ftp = new \FtpClient\FtpClient();

    // php mailer
    /*
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.qq.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '42677833@qq.com';                 // SMTP username
    $mail->Password = 'txwww789ROOT';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('42677833@qq.com', 'Mailer');
    $mail->addAddress('elarity@163.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $rs=$mail->send();
    var_dump( $rs );
    echo 'Message has been sent';
    */ 

    //$curl = new \Curl\Curl(); 
		//print_r( $curl );
    exit;
    $database = new Medoo\Medoo([
    //$database = new Medoo([
      // required
      'database_type' => 'mysql',
      'database_name' => 'test',
      'server' => '10.141.177.220',
      'username' => 'root',
      'password' => '123456',
         
      // [optional]
      'charset' => 'utf8',
      'port' => 3306,
         
      // [optional] Table prefix
      //'prefix' => 'PREFIX_',
         
      // [optional] Enable logging (Logging is disabled by default for better performance)
      'logging' => true,
         
      // [optional] MySQL socket (shouldn't be used with server and port)
      //'socket' => '/tmp/mysql.sock',
         
      // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
      'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
      ],  
         
      // [optional] Medoo will execute those commands after connected to the database for initialization
      'command' => [                                                                                                                                                                                
        'SET SQL_MODE=ANSI_QUOTES'
      ]
    ]);
    //print_r( $database );
    $rs=$database->insert("user", [
      "name" => "foo",
    ]); 
    print_r( $rs );
    exit;
		//$v = new Valitron\Validator( array('name' => 'Chester Tester') );
		$v = new Valitron\Validator( array('name1' => 'Chester Tester') );
		$v->rule( 'required', 'name' );
		if($v->validate()) {
			echo "Yay! We're all good!";
		} else {
			// Errors
			print_r($v->errors());
		}
		exit;

		$collection = (new MongoDB\Client)->test->users;

		$insertOneResult = $collection->insertOne([
			    'username' => 'admin',
					    'email' => 'admin@example.com',
							    'name' => 'Admin User',
								]);

		printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
		print_r($insertOneResult->getInsertedId());
		exit;

		//use Elasticsearch\ClientBuilder;
		//$client = \Elasticsearch\ClientBuilder::create()->build();
		//print_r( $client );

    exit;
  }

  public function infoAction(){
    phpinfo();
  }

}
