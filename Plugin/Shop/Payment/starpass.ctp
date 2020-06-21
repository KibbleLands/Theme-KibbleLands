<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $Lang->get('SHOP__STARPASS_PAYMENT') ?></h3>
                </div>
                <div class="panel-body">
                    <p>1 code = <?= $money ?> <?= $Configuration->getMoneyName() ?></p>

                     <div id="starpass_<?= $idd ?>"></div>
                      <script type="text/javascript" src="http://script.starpass.fr/script.php?idd=<?= $idd ?>&amp;verif_en_php=1&amp;datas=<?= $id ?>"></script>
                      <noscript>Please enable Javascript in your browser.<br />
                        <a href="http://www.starpass.fr/">Micro Payment StarPass</a>
                      </noscript>
                </div>
            </div>
        </div>
    </div>
</div>
