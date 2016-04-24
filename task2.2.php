<?php
error_reporting(E_ALL);



class Cookie{
    public function save($name, $value, $liveTimeSeconds = 3600, $path = '/'){
        setcookie($name, $value,time() + $liveTimeSeconds, $path);
        $_COOKIE[$name] = $value;
    }
    public  function get($name){
        return $_COOKIE[$name];
    }
    public function del($name){
        if (isset($_COOKIE[$name])) {
            setcookie($name, '', time() - 3600, '/');
            unset($_COOKIE[$name]);
        }
    }
    public function edit($name, $value, $liveTimeSeconds = 3600, $path = '/'){
        if (isset($_COOKIE[$name])){
            $this->save($name, $value, $liveTimeSeconds, $path);
            $_COOKIE[$name] = $value;
        }
    }
}

$myCookie = new Cookie();

//$myCookie->save('name1', 'olga');

//$myCookie->edit('name1', 'serj');

//$myCookie->del('name1');

echo $myCookie->get('name1');


echo  "<pre>";
var_dump($_COOKIE);


