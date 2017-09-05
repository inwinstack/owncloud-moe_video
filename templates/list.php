<?php /** @var $l \OCP\IL10N */ 
$chapterList = $_['chapterList'];
?>
<div id="videocontent">
      <div class="top">
      <!---
      <video id="videoID" width="320" height="240" controls="controls" autoplay="autoplay">
          <source src="<?php p(\OCP\Util::linkTo('moe_video', 'video/2-1.mp4'));?>" type="video/mp4" />
          Your browser does not support the video tag.
      </video>
      !-->
      </div>
      <div id="intro" class="section">
        <a class= "number">1.</a><a class = "title"><?php p($chapterList['One']['Title'])?></a>
        <hr></hr>
        <ul class='videoul'>
          <?php foreach($chapterList['One']['Chapters'] as $index => $chapter): ?>
              <li class='videoli'><a target="c1" class="videoa" target="_blank" href=<?php p($chapter['url'])?>><?php p($index)?></a></li><p></p>
          <?php endforeach; ?>
        </ul>
      </div>

      <div id="web" class="section">
        <a class= "number">2.</a><a class = "title"><?php p($chapterList['Two']['Title'])?></a>
        <hr></hr>
        <ul class='videoul'>
          <?php foreach($chapterList['Two']['Chapters'] as $index => $chapter): ?>
              <li class='videoli'><a target="c2" class="videoa" target="_blank" href=<?php p($chapter['url'])?>><?php p($index)?></a></li><p></p>
          <?php endforeach; ?>
        </ul>
      </div>

      <div id="android" class="section">
        <a class= "number">3.</a><a class = "title"><?php p($chapterList['Three']['Title'])?></a>
        <hr></hr>
        <ul class='videoul'>
            <?php foreach($chapterList['Three']['Chapters'] as $index => $chapter): ?>
              <li class='videoli'><a target="c3" class="videoa" target="_blank" href=<?php p($chapter['url'])?>><?php p($index)?></a></li><p></p>
          <?php endforeach; ?>
        </ul>
      </div>
  
      <div id="ios" class="section">
        <a class= "number">4.</a><a class = "title"><?php p($chapterList['Four']['Title'])?></a>
        <hr></hr>
      <ul class='videoul'>
          <?php foreach($chapterList['Four']['Chapters'] as $index => $chapter): ?>
              <li class='videoli'><a target="c4" class="videoa" target="_blank" href=<?php p($chapter['url'])?>><?php p($index)?></a></li><p></p>
          <?php endforeach; ?>
      </ul>
      </div>
  
      <div id="desktop" class="section">
        <a class= "number">5.</a><a class = "title"><?php p($chapterList['Five']['Title'])?></a>
        <hr></hr>
      <ul class='videoul'>
          <?php foreach($chapterList['Five']['Chapters'] as $index => $chapter): ?>
              <li class='videoli'><a target="c5" class="videoa" target="_blank" href=<?php p($chapter['url'])?>><?php p($index)?></a></li><p></p>
          <?php endforeach; ?>
      </ul>
      </div>

    </div>
