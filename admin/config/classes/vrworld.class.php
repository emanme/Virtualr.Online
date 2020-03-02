<?php
class VRWorld extends DatabaseObject {
    static protected $table_name = "vr_world";
    static protected $db_columns = ['id', 'creator_id','title','filename','path','thumnails_path'];

    public $id;
    public $creator_id;
    public $title;
    public $path;
    public $filename;
    public $primary_img;
    public $thumnails_path;
  
    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
      $this->creator_id = $args['creator_id'] ?? '';
      $this->title = $args['title'] ?? '';
      $this->path = $args['path'] ?? '';
      $this->filename = $args['filename'] ?? '';
      $this->thumnails_path = $args['thumnails_path'] ?? '';
    }
    static public function get_list() {
        $sql = "SELECT vw.id,vw.creator_id,vw.content,vw.title,vi.path,vi.thumnails_path,vi.filename FROM vr_world vw 
        LEFT JOIN vr_image vi on vw.id=vi.vr_world GROUP by (vw.id) limit 9 ";
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
      static public function get_vr_images($vrworldid=0) {

       echo $sql = "SELECT vi.id,vw.id,vw.creator_id,vw.content,vw.title,vi.path,vi.thumnails_path,vi.filename FROM vr_world vw 
        LEFT JOIN vr_image vi on vw.id=vi.vr_world where vw.id='{$vrworldid}' order by  vi.id desc  ";
        $obj_array = static::find_by_sql($sql);
        if(!empty($obj_array)) {
          return ($obj_array);
        } else {
          return false;
        }
      }
}