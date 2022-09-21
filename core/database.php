<?php
/**
 * @package TOIDICODEDB
 * @author  Toidicode Team
 * @copyright   Copyright (c) 2017, toidicode.com
 * @link    https://toidicode.com
 * @since   Version 1.0
 */
class Database
{
    private $host         = 'localhost';
    private $username     = 'trumsour_sql';
    private $password     = 'trumsour_sql';
    private $databaseName = 'trumsour_sql';
    private $conn;

    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        if(!$this->conn){
            $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->databaseName);
            if (mysqli_connect_errno()) {
                echo 'Failed: '. mysqli_connect_error();
                die();
            }
            mysqli_set_charset($this->conn,'utf8');
        }
    }
    public function disConnect()
    {
        if($this->conn)
            mysqli_close($this->conn);
    }
    public function error()
    {
        if($this->conn)
            return mysqli_error($this->conn);
        else
            return false;
    }
    public function insert($table = '', $data = [])
    {
        $keys = '';
        $values= '';
        foreach ($data as $key => $value) {
            $keys .= ',' . $key;
            $values .= ',"' . mysqli_real_escape_string($this->conn,$value).'"';
        }
        $sql = 'INSERT INTO ' .$table . '(' . trim($keys,',') . ') VALUES (' . trim($values,',') . ')';
        return mysqli_query($this->conn,$sql);
    }
    public function update($table = '',$data = [], $where)
    {
        $content = '';
        foreach ($data as $key => $value) {
            $content .= ','. $key . '="' . mysqli_real_escape_string($this->conn,$value).'"';
        }
        $sql = 'UPDATE ' .$table .' SET '.trim($content,',') . ' WHERE ' . $where ;
        return mysqli_query($this->conn,$sql);
    }
    public function delete($table= '', $where= '')
    {
        $sql = 'DELETE FROM ' . $table . ' WHERE ' . $where ;
        return mysqli_query($this->conn,$sql);
    }
    public function getObject($table = '')
    {
        $sql = 'SELECT * FROM '. $table;
        $data = null;
        if($result = mysqli_query($this->conn,$sql)){
            while($row = mysqli_fetch_object($result)){
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function getArray($table = '')
    {
        $sql = 'SELECT * FROM '. $table;
        $data = null;
        if($result = mysqli_query($this->conn,$sql)){
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    public function getRowObject($table = '', $id = [])
    {
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM '. $table . ' WHERE '. $where;
        
        if($result = mysqli_query($this->conn,$sql)){
            $data = mysqli_fetch_object($result);
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    public function getRowArray($table = '', $where = '')
    {
        $sql = 'SELECT * FROM '. $table . ' WHERE '. $where;
        
        $result = mysqli_query($this->conn,$sql);
        if(!$result){
            return 'ERROR';
        }
        $data = mysqli_fetch_array($result);
        mysqli_free_result($result);
        return $data;
    }
    public function query($sql ='', $return = true)
    {
        if($result = mysqli_query($this->conn,$sql))
        {
            if($return === true){
                /* while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }
                mysqli_free_result($result); */
                return $result;
            } 
            else
                return true;
        }
        else
            return false;
    }
    public function get_row($sql)
    {
        $result = mysqli_query($this->conn, $sql);
        if (!$result)
        {
            die ('ERROR: '.$sql);
        }
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if ($row)
        {
            return $row;
        }
        return false;
    }
    function num_rows($sql)
    {
        $result = mysqli_query($this->conn, $sql);
        if (!$result)
        {
            die ('ERROR: '.$sql);
        }
        $row = mysqli_num_rows($result);
        mysqli_free_result($result);
        if ($row)
        {
            return $row;
        }
        return false;
    }
    function add($table, $data, $sotien, $where)
    {
        $row = mysqli_query($this->conn,"UPDATE `$table` SET `$data` = `$data` + '$sotien' WHERE $where ");
        return $row;
    }
    function get_Count($table)
    {
        $row = mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT COUNT(*) FROM `$table`")) ['COUNT(*)'];
        return $row;
    }
    public function __destruct()
    {
        $this->disConnect();
    }
}