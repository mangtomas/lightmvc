#Small MVC PHP Framework

[![SmallMVC](http://cdn4.f-cdn.com/ppic/1860520/logo/2238770/profile_logo_2238770.jpg)]

 This is a small MVC PHP framework used just to add some organization to small projects it handles
 URI segments addresses and implements the MVC object oriented pattern, capable of manage
 multiple controllers, models and views with a clear file organization
 
 Inspired by Codeigniter

```
http://{www.domain.com}/{controller}/{method}/{param1}/{param2}/...
```

Autoload {dir: application/config/autoload.php}
```
//Models
$config['models'] = array('db','session');

//Helpers
//e.g. array('default','helper1');
$config['helpers'] = array('default');

//Libararies
$config['libraries'] = array('email');
```