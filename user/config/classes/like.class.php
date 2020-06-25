<?php
class Like extends DatabaseObject {
    static protected $table_name = "likes";
    static protected $db_columns = ['id', 'like_for','for_id','user','datetime'];

    public $id;
    public $like_for;
    public $for_id;
    public $user;
    public $fullname;
    public $datetime;
    public $creator_profile_pic;
   
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->like_for = $args['like_for'] ?? '';
        $this->for_id = $args['for_id'] ?? '';
        $this->type = $args['user'] ?? '';
        $this->fullname = $args['fullname'] ?? '';
        $this->user_id = $args['datetime'] ?? '';
        $this->creator_profile_pic = $args['creator_profile_pic'] ?? '';
 
      
    }
    
    public function get_like($id,$for=1) {
      $sql = "SELECT l.id,l.like_for,l.for_id,l.user,l.datetime,CONCAT(a.first_name,' ' ,a.last_name) as fullname
   ,profile_pic as creator_profile_pic FROM likes l LEFT JOIN account a ON a.id=l.user where like_for='{$for}' and for_id='{$id}' limit 100";
     $obj_array = static::find_by_sql($sql);
     if(!empty($obj_array)) {
       return ($obj_array);
     } else {
       return false;
     }
}
}