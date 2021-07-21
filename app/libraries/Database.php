<?php
class Database
{
    private $dbh;
    private $stmt;
    private $error;

    ### define all the database parameters
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $name = DB_NAME;

    public function __construct()
    {
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );
        // check the connecton
        try {
            $this->dbh = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }

    }

    ## define query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    ## bind params
    public function bind($param, $value, $type = '')
    {
        if (is_null($type)) {
            switch (true) {
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    ## execute the query
    public function execute()
    {
        return $this->stmt->execute();
    }

    ## define single
    public function single()
    {
        $this->execute();
        // get the single row result
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    ## define multiple
    public function resultSet()
    {
        $this->execute();
        return $this->resultSet(PDO::FETCH_OBJ);
    }

    ## row count
    public function rowCount()
    {
        if ($this->stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function closeConn()
    {
        $this->dbh = null;
    }

}
