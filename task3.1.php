<?php

error_reporting(E_ALL);


class DB{
    public function insertField(array $data){
        $request = '(';
        foreach ($data as $key=>$value) {
            $request .= "`{$key}`, ";
        }
        $request = rtrim($request, ", ") . ")";
        return $request;
    }

    public function insertValueField(array $data){
        $request = '(';
        foreach ($data as $value) {
            if (is_integer($value)){
                $request .= "{$value}, ";
            } else {
                $request .= "'{$value}', ";
            }
        }
        $request = rtrim($request, ", ") . ")";
        return $request;
    }

    function isArrayAss(array $data){
        foreach ($data as $value) {
            if (is_array($value)){
                return true;
            }
        }
        return false;
    }

    function createRequestInsert(array &$data){
        $requestField = '(';
        $requestValue = '(';
        if ($this->isArrayAss($data)) {
            foreach ($data as $value) {
                if (is_array($value)) {
                    $requestField = $this->insertField($value) . ", ";
                    $requestValue .= $this->insertValueField($value) . ", ";
                }
            }
        } else {
            $requestField .= ltrim($this->insertField($data), "(");
            $requestValue .= ltrim($this->insertValueField($data), "(");
        }
        $requestField = rtrim($requestField, ", ");
        $requestValue = rtrim($requestValue, ", ");
        return $requestField . " VALUES " . $requestValue;
    }

    public function save($tableName, array $data)
    {
        echo "INSERT INTO `{$tableName}` " . $this->createRequestInsert($data);
    }
}

/*
$data = array("array1"=>array("name"=>"s", "age" => 1, "pass"=>1234, "mail"=>"sss@gmail.com"),
              "array2"=>array("name"=>"d", "age" => 12, "pass"=>2222, "mail"=>"ddd@gmail.com"),
              "array3"=>array("name"=>"w", "age" => 123, "pass"=>4321, "mail"=>"www@gmail.com"));
*/
$data = array("name"=>"s", "age" => 1, "pass"=>1234, "mail"=>"sss@gmail.com");
echo "<hr>";

echo "Входной массив :<br><pre>";
print_r($data);
echo "<hr>";

echo "Строка для запроса в базу: <br>";
$s = new DB();
$s->save('orders', $data);
//$s->isArrayAss($data);



