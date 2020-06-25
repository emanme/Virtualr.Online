<?php
class View extends DatabaseObject {
    static protected $table_name = "view";
    static protected $db_columns = ['id', 'view_for','for_id','user','datetime'];

    public $id;
    public $view_for;
    public $for_id;
    public $user;
    public $fullname;
    public $datetime;
    public $creator_profile_pic;
   
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->view_for = $args['view_for'] ?? '';
        $this->for_id = $args['for_id'] ?? '';
        $this->type = $args['user'] ?? '';
        $this->fullname = $args['fullname'] ?? '';
        $this->user_id = $args['datetime'] ?? '';
        $this->creator_profile_pic = $args['creator_profile_pic'] ?? '';
 
      
    }
    
       public function get_view($id,$for=1) {
        $sql = "SELECT v.id,v.view_for,v.for_id,v.user,v.datetime,CONCAT(a.first_name,' ' ,a.last_name) as fullname
       ,profile_pic as creator_profile_pic FROM views v LEFT JOIN account a ON a.id=v.user where view_for='{$for}' and for_id='{$id}' limit 100";
         $obj_array = static::find_by_sql($sql);
         if(!empty($obj_array)) {
           return ($obj_array);
         } else {
           return false;
         }
    }
}