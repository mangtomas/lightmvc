#LightMVC PHP Framework

![LightMVC](http://cdn4.f-cdn.com/ppic/1860520/logo/2238770/profile_logo_2238770.jpg)

 This is a small MVC PHP framework used just to add some organization to small projects it handles
 URI segments addresses and implements the MVC object oriented pattern, capable of manage
 multiple controllers, models and views with a clear file organization
 
 Inspired by Codeigniter

```php
http://{www.domain.com}/{controller}/{method}/{param1}/{param2}/...
```

Autoload {dir: application/config/autoload.php}
```php
//Models
$config['models'] = array('db','session');

//Helpers
//e.g. array('default','helper1');
$config['helpers'] = array('default');

//Libararies
$config['libraries'] = array('email');
```

Config {config.php} {dir: application/config/config.php}
```php
$config['base_url'] = 'http://{host}/{dir}/';

//default controller
$config['default_controller'] = 'main';

//default time zone
$config['time_zone'] = 'Asia/Manila';
```

Database {db.php} {dir: application/config/db.php}
```php
//your host/server
$config['host'] = 'localhost';

//server username
$config['username'] = 'root';

//server password
$config['password'] = '';

//declare your database type
//e.g. MySql, Oracle
$config['database_type'] = 'mysql';

//database name
$config['database_name'] = 'testdb';

```

Controller {default: main.php} {dir: application/controllers/main.php}
```php
class main extends MVC_controller{
	
	public function __construct(){
		parent::__construct();
	}
	//default method
	public function index(){
		$this->load->render('common/header_');
	}

}
```

Models {e.g. : crud.php} {dir: application/models/crud.php}
```php
class crud extends MVC_model{
	public function __construct(){
		parent::__construct();
	}
	
	public function create(){}
	public function read(){}
	public function update(){}
	public function delete(){}
}
```

Views {dir: application/views/sample.php}
```php
$this->load->render('sample');
```

#Author
De Juan, Red <br />
email : mangtomas.code@gmail.com