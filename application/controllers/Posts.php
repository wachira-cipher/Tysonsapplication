<?php
class Posts extends CI_Controller{
    public function __construct(){
        parent::__construct();
       
        $this->load->model('Posts_model');
    }
    public function index($page= 'home'){

        $data['title']= "Latest posts";

        $data['posts'] = $this->posts_model->get_posts();

        $this->load->view("templates/header");
        $this->load->view("posts/index",$data);
        $this->load->view("templates/footer");
    }
    public function view($slug= NULL){
       
    $data['post']=$this->posts_model->get_posts($slug);

    if(empty($data['post'])){
        show_404();
    }
    $data['title '] = $data['post']['title'];

    $this->load->view("templates/header");
    $this->load->view("Posts/view",$data);
    $this->load->view("templates/footer");
    }
    public function create(){
        $data['title']='Create post';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run()=== FALSE){

            $this->load->view("templates/header");
            $this->load->view("posts/create", $data);
            $this->load->view("templates/footer"); 
        }else{
            $this->posts_model->create_post();
            redirect('posts');
        }
    }
   public function delete($id){
   $this->posts_model->delete_post('id');
   redirect('posts');
   }
   public function edit($slug){
    $data['post']=$this->posts_model->get_posts($slug);
   
   if(empty($data['post'])){
    show_404();
   }
   $data['title']='Edit Posts';

   $this->load->view("templates/header");
   $this->load->view("posts/edit", $data);
   $this->load->view("templates/footer"); 

}
public function update(){
$this->posts_model->update_post();
}
}
?>