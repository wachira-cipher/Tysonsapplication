<?php 
 class Posts_model extends CI_Model{
    public function __construct(){
        $this->load->database();
}
public function get_posts($slug=FALSE){
if ($slug === FALSE){
   $this->db->order_by('id','DESC');
    $query=$this->db->get('posts');
    return $query->result_array();
}
$query=$this->db->get_where('posts',array('slug'=>$slug));
return $query->row_array();
}
public function create_post(){
    $data['title']='create posts';

    $slug=url_title($this->input->post('title'));
    $data=array(
        'slug'=>$slug,
        'title'=>$this->input->post('title'),
        'body'=>$this->input->post('body')

    );
    return $this->db->insert('posts', $data);
}
public function delete_post($id){
    $this->db->where('id',$id);
    $this->db->delete('posts');
    return true;
}
public function update_post($id){
    $slug=url_title($this->input->post('title'));
    $data=array(
        'slug'=>$slug,
        'title'=>$this->input->post('title'),
        'body'=>$this->input->post('body')

    );
    $data=array(
        'slug'=>$slug,
        'title'=>$this->input->post('title'),
        'body'=>$this->input->post('body')

    ); 
    $this->db->where('id',$id);
    $this->input->post['id'];
    return $this->db->update('posts', $data);
}

 }
 