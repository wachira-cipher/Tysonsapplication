<h2><?=$title?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/create');?>
<div class="mb-3 row">
    <label >Title</label>
    <div class="col-sm-10">
      <input type="text" class="form_control"  name="title" value="<?php echo $post['title'];?>" placeholder="add title">
    </div>
  </div>
  <div class="mb-3 row">
    <label >Body</label>
    <div class="col-sm-10">
      <textarea id="editor1" class="form_control" name="body" value="" placeholder="add body" ><?php echo $post['body'];?> </textarea>
    </div>
  </div>
  <button class="btn btn-primary " type="submit">Submit</button>

    <?php echo form_open('posts/update');?>
    <input type="hidden" name="id" value="<?php echo $post['id'];?>"
  
 