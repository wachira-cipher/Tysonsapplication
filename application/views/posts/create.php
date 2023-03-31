<h2><?=$title?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/create');?>
<div class="mb-3 row">
    <label >Title</label>
    <div class="col-sm-10">
      <input type="text" class="form_control"  name="title" placeholder="add title">
    </div>
  </div>
  <div class="mb-3 row">
    <label >Body</label>
    <div class="col-sm-10">
      <textarea class="form_control" name="body"placeholder="add body" ></textarea>
    </div>
  </div>
  <button class="btn btn-primary " type="submit">Submit</button>