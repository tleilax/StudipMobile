<!-- FOOTER -->
<div data-role="footer" data-id="footer" data-position="fixed">
    <div data-role="navbar" data-iconspos="top">
                   <ul class="ui-grid-b">
                           <li class="ui-block-a"><a href="<?= $controller->url_for("mails/index") ?>" data-theme="c" data-icon="studip-inbox" data-transition="flip" class="externallink">Eingang</a></li>
                           <li class="ui-block-b"><a href="<?= $controller->url_for("mails/list_outbox") ?>" data-theme="c" data-icon="studip-shoebox"  data-transition="flip" class="externallink">Ausgang</a></li>
                           <li class="ui-block-c"><a href="<?= $controller->url_for("mails/write") ?>" data-theme="c" data-icon="studip-envelope" data-transition="slideup" class="externallink">Neu Nachricht</a></li>
                   </ul>
    </div>
</div>