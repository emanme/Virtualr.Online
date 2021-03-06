<?php
class VRWorld extends DatabaseObject {
    static protected $table_name = "vr_world";
    static protected $db_columns = ['id', 'creator_id','title','filename','path','thumnails_path'];

    public $id;
    public $creator_id;
    public $creator_name;
    public $first_name;
    public $last_name;
    public $title;
    public $path;
    public $filename;
    public $count;
    public $primary_img;
    public $thumnails_path;
    public $uploader;
    public $imageid;
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
      $this->creator_id = $args['creator_id'] ?? '';
      $this->title = $args['title'] ?? '';
      $this->path = $args['path'] ?? '';
      $this->filename = $args['filename'] ?? '';
      $this->count = $args['count'] ?? '';
      $this->uploader = $args['uploader'] ?? '';
      $this->thumnails_path = $args['thumnails_path'] ?? '';

      $this->first_name = $args['first_name'] ?? '';
      $this->last_name = $args['last_name'] ?? '';
      $this->imageid = $args['imageid'] ?? '';

      $this->creator_name =  $args['creator_name']  ?? '';
    }
    static public function get_list() {
      $sql = "SELECT vw.id,vw.creator_id,a.first_name,a.last_name,vw.content,vw.title,vi.path,vi.thumnails_path,vi.filename,COUNT(vi.id) 
    as count FROM vr_world vw LEFT JOIN vr_image vi on vw.id=vi.vr_world LEFT JOIN account a on a.id=vw.creator_id GROUP by (vw.id) limit 16 ";
      $obj_array = static::find_by_sql($sql);
      if(!empty($obj_array)) {
        return ($obj_array);
      } else {
        return false;
      }
    }
    static public function get_list2() {
      $sql = "SELECT vw.id,vw.creator_id,a.first_name,a.last_name,vw.content,vw.title,vi.path,vi.thumnails_path,vi.filename,COUNT(vi.id) 
    as count,vi.id as imageid FROM vr_world vw LEFT JOIN vr_image vi on vw.id=vi.vr_world LEFT JOIN account a on a.id=vw.creator_id  GROUP by (vw.id)  order by vw.id DESC limit 16 ";
      $obj_array = static::find_by_sql($sql);
      if(!empty($obj_array)) {
        return ($obj_array);
      } else {
        return false;
      }
    }
      static public function get_obj_by_id($id=0) {

        $sql = "SELECT * FROM " . static::$table_name . " where id='{$id}' ";
        $obj_array = static::find_by_sql($sql);
        if(!empty($obj_array)) {
          return array_shift($obj_array);
        } else {
          return false;
        }
      }
      static public function get_vw_images($vrworldid=0) {
           $sql = "SELECT vi.id,vw.id as vid,a.first_name,a.last_name,vw.creator_id,vw.content,vw.title,vi.path,vi.thumnails_path,vi.filename FROM vr_world vw 
             LEFT JOIN vr_image vi on vw.id=vi.vr_world LEFT JOIN account a on vw.creator_id=a.id where vw.id='{$vrworldid}' order by  vi.id desc  ";
             $obj_array = static::find_by_sql($sql);
             if(!empty($obj_array)) {
               return ($obj_array);
             } else {
               return false;
             }
           }
           static public function get_vr_image($id=0) {
            $sql = "SELECT vi.id,vi.uploader, vi.filename, vi.type,vi.path, vi.thumnails_path,vi.visibility,vi.created_at,
            CONCAT(a.first_name,' ',a.last_name) as uploader FROM vr_image vi LEFT JOIN account a on vi.uploader=a.id 
            where vi.id='{$id}' limit 1";
                 $obj_array = static::find_by_sql($sql);
                 if(!empty($obj_array)) {
                   return  ($obj_array);
                 } else {
                   return false;
                 }
               }
               
}