<div id="player">
    <div id="player-track" class="">
      <div id="album-name"><?php the_title(); ?></div>
      <div id="track-time" class="active">
        <div id="current-time">00:01</div>
        <div id="track-length">03:09</div>
      </div>
      <div id="s-area">
        <div id="ins-time"></div>
        <div id="s-hover"></div>
        <div id="seek-bar" style="width: 0.884907%;"></div>
      </div>
    </div>
    <div id="player-content">
      <div id="album-art" class="">
        <img src="<?php the_post_thumbnail_url(  ); ?>" class="active" id="_1">
        <!-- <img src="http://localhost/flame/wp-content/uploads/2024/01/l9DfdGE9jX40ceEKHg8PWOkfQAYji1QG1Io5NOWB-j8lw6M-5.jpeg" id="_2">
        <img src="http://localhost/flame/wp-content/uploads/2024/01/l9DfdGE9jX40ceEKHg8PWOkfQAYji1QG1Io5NOWB-j8lw6M-5.jpeg" id="_3">
        <img src="http://localhost/flame/wp-content/uploads/2024/01/l9DfdGE9jX40ceEKHg8PWOkfQAYji1QG1Io5NOWB-j8lw6M-5.jpeg" id="_4">
        <img src="http://localhost/flame/wp-content/uploads/2024/01/l9DfdGE9jX40ceEKHg8PWOkfQAYji1QG1Io5NOWB-j8lw6M-5.jpeg" id="_5"> -->
        <div id="buffer-box">Buffering ...</div>
      </div>
      <div id="player-controls">
        <div class="control">
          <div class="button" id="play-previous">
            <i class="fas fa-backward"></i>
          </div>
        </div>
        <div class="control">
          <div class="button" id="play-pause-button" style="border: 1px solid #4FBFC2; border-radius: 50%;">
            <i class="fas fa-pause"></i>
          </div>
        </div>
        <div class="control">
          <div class="button" id="play-next">
            <i class="fas fa-forward"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

<script>

    var exAutoURL = "<?php the_field($acf_field_name);  ?>";
    var postTitle = "<?php the_title();  ?>";


</script>