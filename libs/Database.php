<?php

class Database extends PDO {

//connection for database
    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//for mysql error displaying
        
            }

    /**
     * selecting data from db
     * @param string $sqlAn SQL string
     * @param array $array parameters to bind
     * @param constant $fetchMode A PDO Fetch mode
     * @return mixed
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_NAMED) {
//        echo $sql; die;
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     * inserting data to db
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
    public function insert($table, $data) {
        ksort($data);
        $fieldNames = implode(' , ', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));
        $sth = $this->prepare("INSERT INTO $table ($fieldNames)  VALUES ($fieldValues) ");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $dbResult = $sth->execute();
        if ($dbResult) {
            $message = array('success' => "true");
            return $message;
        } else {
            $message = array('error' => "error");
            return $message;
        }
    }

    /**
     * updating data in a db
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     * @param string $where the where query part
     */
    public function update($table, $data, $where) {
//        print_r($data); die;
        ksort($data);
        $fieldDetails = NULL;
        foreach ($data as $key => $value) {
            $fieldDetails .= "`$key`=:$key,";
//            echo $value;
        }
        $fieldDetail = rtrim($fieldDetails, ',');
//        echo "UPDATE $table SET $fieldDetail WHERE $where"; die;
        $sth = $this->prepare("UPDATE $table SET $fieldDetail WHERE $where");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $result = $sth->execute();
        if ($result) {
            $message = array('success' => "true");
            return $message;
        } else {
            $message = array('error' => "true");
            return $message;
        }
    }

    /**
     * delete
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return integer Affected rows
     */
    public function delete($table, $where, $limit) {
//        echo $where; die;
        $result = $this->exec("DELETE FROM $table  WHERE $where LIMIT $limit");
        if ($result) {
            $message = array('success' => "true");
            return $message;
        } else {
            $message = array('error' => "true");
            return $message;
        }
    }
    
//    public function addColumn($table, $name, $type) {
//        echo $type; die;
//         $result = $this->exec("ALTER TABLE $table ADD $name $type;");
//          if ($result) {
//            $message = array('success' => "true");
//            return $message;
//        } else {
//            $message = array('error' => "true");
//            return $message;
//        }
//    }

    public function backup() {

//        $backup_file = "piduruthalagala" . date("Y-m-d-H-i-s") . '.gz';
//   $command = "mysqldump --opt -h $DB_HOST -u $dbuser -p $dbpass ". "test_db | gzip > $backup_file";
//   
//   system($command);
//        echo 'backup';die;
//        $date_string   = date("Ymd");
//        $this->exec("mysqldump " . URL . "{$date_string}_piduruthalagala.sql");

        $filename = 'My_backup_' . date('G_a_m_d_y') . '.sql';

        $result = $this->exec('single-transaction >/var/backups/' . $filename);

        if ($result == '') {
            echo 'backed up';
            die;
        } else {
            echo 'not backed up';
            die;
        }
    }

}
