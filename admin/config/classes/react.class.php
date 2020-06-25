<?php
class React extends DatabaseObject {
    static protected $table_name = "react";
    static protected $db_columns = ['id','react_for', 'for_id','type','user_id','datetime'];

    public $id;
    public $react_for;
    public $for_id;
    public $type;
    public $user_id;
    public $datetime;
    public $count;
    //public $data;
   
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->react_for = $args['react_for'] ?? '';
        $this->for_id = $args['for_id'] ?? '';
        $this->type = $args['type'] ?? '';
        $this->user_id = $args['user_id'] ?? '';
        $this->datetime = $args['datetime'] ?? '';
        $this->count = $args['count'] ?? '';
      
    }
    
       public function get_react($id) {
        $sql = "SELECT type, COUNT(*) as count FROM react where for_id='{$id}' GROUP BY type  ";
         $obj_array = static::find_by_sql($sql);
         if(!empty($obj_array)) {
           return ($obj_array);
         } else {
           return false;
         }
    }
}