<?php
class Comment extends DatabaseObject {
    static protected $table_name = "comment";
    static protected $db_columns = ['id','for_id', 'creator_id','for_type','content','media_type','created_at','updated_at'];

    public $id;
    public $creator_id;
    public $creator_name;
    public $creator_profile_pic;
    public $for_id;
    public $for_type;
    public $content;
    public $media_type;
    public $url;
    public $created_at;
    public $updated_at;
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->creator_id = $args['creator_id'] ?? '';
        $this->creator_name = $args['creator_name'] ?? '';
        $this->creator_profile_pic = $args['creator_profile_pic'] ?? '';
      $this->for_id = $args['for_id'] ?? '';
      $this->for_type = $args['for_type'] ?? '';
      $this->content = $args['content'] ?? '';
      $this->media_type = $args['media_type'] ?? '';
      $this->url = $args['url'] ?? '';
      $this->created_at = $args['created_at'] ?? '';
      $this->updated_at = $args['updated_at'] ?? '';
    }
    public function comment_by_id($id,$pfor_type,$limit=10) {
      $sql = "select c.id,c.for_id,c.creator_id,c.url as url, c.for_type,c.content,c.media_type,c.created_at,c.updated_at,a.profile_pic as creator_profile_pic ,CONCAT(a.first_name,' ',a.last_name) as creator_name from " . static::$table_name . "  c LEFT JOIN account a on a.id=c.creator_id  where for_type='{$pfor_type}' and for_id ='{$id}' order by c.updated_at DESC limit {$limit} ";
       $obj_array = static::find_by_sql($sql);
       if(!empty($obj_array)) {
         return ($obj_array);
       } else {
         return false;
       }
      }
       public function get_react($id) {
        $sql = "SELECT type, COUNT(*) as count FROM react GROUP BY type where for_id='{$id}' ";
         $obj_array = static::find_by_sql($sql);
         if(!empty($obj_array)) {
           return ($obj_array);
         } else {
           return false;
         }
    }
}