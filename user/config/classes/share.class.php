<?php
class Share extends DatabaseObject {
    static protected $table_name = "share";
    static protected $db_columns = ['id', 'share_for','for_id','user','datetime'];

    public $id;
    public $share_for;
    public $for_id;
    public $user;
    public $fullname;
    public $datetime;
    public $creator_profile_pic;
   
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->share_for = $args['share_for'] ?? '';
        $this->for_id = $args['for_id'] ?? '';
        $this->type = $args['user'] ?? '';
        $this->fullname = $args['fullname'] ?? '';
        $this->user_id = $args['datetime'] ?? '';
        $this->creator_profile_pic = $args['creator_profile_pic'] ?? '';
 
      
    }
    
    public function get_share($id,$for=1) {
      $sql = "SELECT s.id,s.share_for,s.for_id,s.user,s.datetime,CONCAT(a.first_name,' ' ,a.last_name) as fullname
   ,profile_pic as creator_profile_pic FROM share s LEFT JOIN account a ON a.id=s.user where share_for='{$for}' and for_id='{$id}' limit 100";
     $obj_array = static::find_by_sql($sql);
     if(!empty($obj_array)) {
       return ($obj_array);
     } else {
       return false;
     }
}
}