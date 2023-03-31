<?php echo $post['title']?>
<small class="post-date">
     Posted on:<?php echo $post['created_at']; ?></small>
     <br><br>
<div class="post-body">
<?php echo $post['body'] ?>
</div>
<hr>
<a class="btn btn-primary pull_left"  href="<?php echo base_url();?>
posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<br>
<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="button" value="delete" class="btn btn-danger pull right" >
</form>