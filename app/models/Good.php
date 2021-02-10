<?php

/*
    * Class models Good
    * Connection between controller and connection
*/
class Good
{
    private $db;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        try {
            $this->db = new Connection;
        } catch (PDOException $e) {
            die("Error, al instanciar el models Good a la clase Connection, " . $e->getMessage());
        }
    } # End method construct

    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        try {
            $strSql = 'SELECT * FROM goods';

            $goods = $this->db->select($strSql);

            return $goods;
        } catch (PDOException $e) {
            die("Error, en model Good: all, " . $e->getMessage());
        }
    } # End method all

    /**
     * getIds
     *
     * @return void
     */
    public function getIds()
    {
        try {
            $strSql = 'SELECT id_real_estate FROM goods';
            $goods = $this->db->select($strSql, [], PDO::FETCH_ASSOC);
            return $goods;
        } catch (PDOException $e) {
            die("Error, en model Good: getIds, " . $e->getMessage());
        }
    } # End method getIds

    /**
     * save
     *
     * @param  mixed $data
     * @return void
     */
    public function save( $data )
    {
        try {
            $this->db->insert('goods', $data);
        } catch (PDOException $e) {
            die("Error,en model Good: save, " . $e->getMessage());
        }
    } # End method save

    /**
     * delete
     *
     * @param  int $id
     * @return void
     */
    public function delete( int $id )
    {
        try {
            $srtWhere = 'id = ' . $id;
            $this->db->delete('goods', $srtWhere);
        } catch (PDOException $e) {
            die("Error, en model Good: delete, " . $e->getMessage());
        }
    } # End method delete

} # End class Good
