<?
$this->set_layout("layouts/quickdial");
$page_title = _("Uni Osnabrück");

?>


      
      <div class="ui-grid-b" >
          <div class="ui-block-a grid">
            <a href="<?= $controller->url_for("activities") ?>">
              <img class="icon" src="<?= $plugin_path ?>/public/images/quickdial/news.png" /><br />
              <span>News</span>
            </a>
          </div>
          <div class="ui-block-b grid">
            <a href="<?= $controller->url_for("calendar") ?>"  class="externallink">
              <img class="icon" src="<?= $plugin_path ?>/public/images/quickdial/schedule.png" /><br />
              <span>Planer</span>
            </a>
          </div>
          <div class="ui-block-c grid">
            <a href="<?= $controller->url_for("mails") ?>/" class="externallink">
	      <?
	      	if ($number_unread_mails > 0)
		{ 
			?>
			<span class="notification"><?= $number_unread_mails ?></span>
			<?
		}
		?>
              <img class="icon" src="<?= $plugin_path ?>/public/images/quickdial/mail.png" /><br />
              <span>Nachrichten</span>              
            </a>
          </div>
          
          <div class="ui-block-a grid scndrow">
            <a href="<?= $controller->url_for("courses") ?>" class="externallink">
              <img class="icon" src="<?= $plugin_path ?>/public/images/quickdial/seminar.png" /><br />
              <span>Kurse</span>
            </a>
          </div>
          <div class="ui-block-b grid scndrow">
            <a href="<?= $controller->url_for("dropfiles") ?>">
              <img class="icon" src="<?= $plugin_path ?>/public/images/quickdial/dropbox.png" /><br />
              <span>DropFiles</span>
            </a>
          </div>
          <div class="ui-block-c grid scndrow">
            <a href="html/community.html">
              <img class="icon" src="<?= $plugin_path ?>/public/images/quickdial/community.png" /><br />
              <span>Community</span>
            </a>
          </div>
      </div>
   
    <?

	if (!empty($next_courses))
	{
		?>
			<ul data-role="listview" data-inset="true" data-theme="c">
				<li data-role="list-divider" data-theme="b">Als Nächstes</li>
		<?
	}
    foreach($next_courses as $next)
	{	
		?>
				<li>
					<a href="<?= $controller->url_for("courses/show", htmlReady($next["id"])) ?>" data-ajax='false'>
						<p><strong><?=htmlReady($next["title"]) ?></Strong></p>
						<p>
							<?=htmlReady($next["description"]) ?>
						    <span class="ui-li-count">
						    	<?=htmlReady($next["beginn"])?> - <?=htmlReady($next["ende"])?>
						    </span>
						</p>
					</a>
				</li>
		<?
	}
	if (!empty($next_courses))
	{
		?>
			</ul>
		<?
	}
    ?>

    