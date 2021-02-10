<?php

class Connection extends PDO
{

    private $driver = DB_DRIVER;
    private $host = DB_HOST;
    private $dbName = DB_NAME;
    private $charset = DB_CHARSET;
    private $user = DB_USER;
    private $password = DB_PASSWORD;

    public function __construct()
    {
        try {
            parent::__construct("{$this->driver}: host={$this->host}; dbname={$this->dbName}; charset={$this->charset}", $this->user, $this->password);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos : " + $e->getMessage());
        }
    } # End method construct

    public function select($strSql, $arrayData = array(), $fetchMode = PDO::FETCH_OBJ)
    {
        try {
            $query = $this->prepare($strSql);

            foreach ($arrayData as $key => $value) {
                $query->bindValue(":$key", $value);
            }

            $query->execute();

            return $query->fetchAll($fetchMode);
        } catch (PDOException $e) {

            die("Error al ejecutar la consulta select, " . $e->getMessage());
        }
    } # End method select


    public function insert($table, $data)
    {
        try {
            ksort($data);
            unset($data['controller'], $data['method']);

            $fieldName = implode('`, `', array_keys($data));
            $fieldValues = ':' . implode(', :', array_keys($data));

            $strSql = "INSERT INTO $table (`$fieldName`) VALUES ($fieldValues)";

            $query = $this->prepare($strSql);

            foreach ($data as $key => $value) {
                $query->bindValue(":$key", $value);
            }

            $query->execute();
        } catch (PDOException $e) {
            die("Error, al ejecutar la consulta insert, " . $e->getMessage());
        }
    } # End method insert

    public function update($table, $data, $where)
    {
        try {
            ksort($data);

            $fieldDatails = NULL;
            foreach ($data as $key => $value) {
                $fieldDatails .= "`$key` = :$key,";
            }

            $fieldDatails = rtrim($fieldDatails, ',');

            $strSql = "UPDATE $table SET $fieldDatails WHERE $where";

            $query = $this->prepare($strSql);

            foreach ($data as $key => $value) {
                $query->bindValue(":$key", $value);
            }

            var_dump($query);

            $query->execute();
        } catch (PDOException $e) {
            die("Error, al ejecutar la consulta update, " . $e->getMessage());
        }
    } # End method update

    public function delete($table, $where, $limt = 1)
    {
        try {

            return $this->exec("DELETE FROM $table WHERE $where LIMIT $limt");
        } catch (PDOException $e) {
            die("Error, al ejecutar la consulta delete, " . $e->getMessage());
        }
    } # End method delete


} # End class Connection
