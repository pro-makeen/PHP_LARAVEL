<?php
class dbSchemaPg
{
    public $result;
    private $stm, $dbh;
    private $host = "dpg-d3ua6jjipnbc738q7g5g-a.frankfurt-postgres.render.com";
    private $db_name = "me_users";
    private $username = "root";
    private $password = "ybIeaygTzEWTg0AJnZ3T1yYZeTGtODUK";
    private $port = "5432";
    
    function __construct()
    {
        $this->connectToDB();
    }
    
    private function connectToDB()
    {
        try {
	    $this->dbh = new PDO("pgsql:host={$this->host};port={$this->port};dbname={$this->db_name};user={$this->username};password={$this->password}");
	            }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
        return ($this->dbh);
    }
    
    public function query($sql)
    {
        try {
            $this->result = $this->dbh->exec($sql) or die("QUERY FAILED !!! " . $sql);
            return $this->result;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function last_insert_id()
    {
        try {
            $this->result = $this->dbh->lastInsertId() or die("QUERY FAILED !!! " . $sql);
            return $this->result;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function fetchQuery($sql)
    {
        try {
            $this->stm = $this->dbh->query($sql) or die("QUERY FAILED !!! " . $sql);
            $this->result = $this->stm->fetchAll(PDO::FETCH_ASSOC);
            return $this->result;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function queryPrepared($sql, $vars)
    {
        try {
            $this->result = $this->dbh->prepare($sql) or die("QUERY FAILED !!! " . $sql);
            $this->result->execute($vars);
	    // only for returning value #TODO check for rowcount();
	    $this->result = $this->result->fetchAll(PDO::FETCH_ASSOC); 
            return $this->result;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function fetchQueryPrepared($sql, $vars)
    {
        try {
            $this->stm = $this->dbh->prepare($sql) or die("QUERY FAILED !!! " . $sql);
            $this->stm->execute($vars);
            $this->result = $this->stm->fetchAll(PDO::FETCH_ASSOC);
            
            return $this->result;
            $this->dbh = null;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
$db_pg = new dbSchemaPg();
?>