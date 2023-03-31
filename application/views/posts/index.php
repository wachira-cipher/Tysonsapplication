<?=$title ?>

<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title'];?></h3>
   <small class="post-date"> Posted on:<?php echo $post['created_at']; ?></small><br><br>
    <?php echo word_limiter( $post['body'],10);?>
    <br><br>
    <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug'])?>">Read More</a></p>
    <?php endforeach ?>
    <a class="btn btn-success" href="posts/create">Create Posts</a>