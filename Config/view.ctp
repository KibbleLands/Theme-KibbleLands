<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  $logo = explode('/', $config['logo']);
  $form_input['img'] = 'uploads/'.end($logo);
  $form_input['filename'] = 'theme_logo';
}
?>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" data-ajax="false">
            
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>KibbleLands (Based on <a href="https://github.com/Fox2Code" target="_blank">Maven</a>)</h1>
                    <p>Mainteners: <a href="https://github.com/Fox2Code" target="_blank">Fox2Code</a> &  <a href="https://github.com/Nooffy" target="_blank">Nooffy4Kibbles</a> (Original creator <a href="https://twitter.com/orphevs" target="_blank">Orphevs</a>)</p>
                    <br><br>
                    <p>
                        <a class="btn btn-success" href="https://github.com/KibbleLands/Theme-KibbleLands" target="_blank" role="button">GitHub</a>
                        <a class="btn btn-success" href="https://github.com/KibbleLands/Theme-KibbleLands/issues/new" target="_blank" role="button">Report an issue</a>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
              <?= $this->element('form.input.upload.img', $form_input) ?>
                <div class="form-group">
                    <label><?= $Lang->get('THEME__FAVICON_URL') ?></label>
                    <input type="text" class="form-control" name="favicon_url" value="<?= $config['favicon_url'] ?>">
                </div>
            </div>

            <div class="col-md-8">
               
                <!-- KibblesTweaks -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Interface</h3>
                    </div>
                    <div class="panel-body">
                        <label>Scrollbars</label>
                        <select name="theme-scrollbar" class="form-control" style="margin-bottom:20px;">                        
                            <option value="normal"<?= ($config['theme-scrollbar'] == "normal") ? ' selected' : '' ?>>Normal</option>
                            <option value="small"<?= ($config['theme-scrollbar'] == "small") ? ' selected' : '' ?>>Small</option>
                            <option value="disabled"<?= ($config['theme-scrollbar'] == "disabled") ? ' selected' : '' ?>>Disabled</option>
                        </select>
                    </div>
                </div>
               <!-- Features -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Showcase</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activate the showcase</label>
                        <select name="theme-features" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-features'] == "true") ? ' selected' : '' ?>>Yes</option>
                            <option value="false"<?= ($config['theme-features'] == "false") ? ' selected' : '' ?>>No</option>
                        </select>
                        
                        <?php if(!isset($theme_config['theme-features']) || $theme_config['theme-features'] == "true") { ?>
                            <div class="page-header"></div>
                            <p>Title of showcase N°1</p>
                            <textarea class="form-control" name="theme-features-title-1" cols="1" rows="1"><?= $config['theme-features-title-1']; ?></textarea>
                            <br>
                            <p>Description of showcase N°1</p>
                            <textarea class="form-control" name="theme-features-description-1" cols="1" rows="1"><?= $config['theme-features-description-1']; ?></textarea>
                            <br>
                            <p>Image of showcase N°1</p>
                            <textarea class="form-control" name="theme-features-img-1" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-1']; ?></textarea>
                            <br>
                            <div class="page-header"></div>
                            <p>Title of showcase N°2</p>
                            <textarea class="form-control" name="theme-features-title-2" cols="1" rows="1"><?= $config['theme-features-title-2']; ?></textarea>
                            <br>
                            <p>Description of showcase N°2</p>
                            <textarea class="form-control" name="theme-features-description-2" cols="1" rows="1"><?= $config['theme-features-description-2']; ?></textarea>
                            <br>
                            <p>Image of showcase N°2</p>
                            <textarea class="form-control" name="theme-features-img-2" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-2']; ?></textarea>
                            <br>
                            <div class="page-header"></div>
                            <p>Title of showcase N°3</p>
                            <textarea class="form-control" name="theme-features-title-3" cols="1" rows="1"><?= $config['theme-features-title-3']; ?></textarea>
                            <br>
                            <p>Description of showcase N°3</p>
                            <textarea class="form-control" name="theme-features-description-3" cols="1" rows="1"><?= $config['theme-features-description-3']; ?></textarea>
                            <br>
                            <p>Image of showcase N°3</p>
                            <textarea class="form-control" name="theme-features-img-3" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-3']; ?></textarea>
                            <br>
                            <div class="page-header"></div>
                            <p>Title of showcase N°4</p>
                            <textarea class="form-control" name="theme-features-title-4" cols="1" rows="1"><?= $config['theme-features-title-4']; ?></textarea>
                            <br>
                            <p>Description of showcase N°4</p>
                            <textarea class="form-control" name="theme-features-description-4" cols="1" rows="1"><?= $config['theme-features-description-4']; ?></textarea>
                            <br>
                            <p>Image of showcase N°4</p>
                            <textarea class="form-control" name="theme-features-img-4" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-4']; ?></textarea>
                            <br>
                        <?php } ?>
                    </div>
                </div>
                <!-- Player counter -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Player counter</h3>
                    </div>
                    <div class="panel-body">
                        <label>Enable the counter</label>
                        <select name="theme-counter" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-counter'] == "true") ? ' selected' : '' ?>>Yes</option>
                            <option value="false"<?= ($config['theme-counter'] == "false") ? ' selected' : '' ?>>No</option>
                        </select>

                        <?php if(!isset($theme_config['theme-counter']) || $theme_config['theme-counter'] == "true") { ?>
                            <div class="page-header"></div>
                            <label>Do you use a launcher ?</label>
                            <select name="theme-counter-launcher" class="form-control" style="margin-bottom:20px;">                        
                                <option value="true"<?= ($config['theme-counter-launcher'] == "true") ? ' selected' : '' ?>>Yes</option>
                                <option value="false"<?= ($config['theme-counter-launcher'] == "false") ? ' selected' : '' ?>>No</option>
                            </select>
                            <?php if(!isset($theme_config['theme-counter-launcher']) || $theme_config['theme-counter-launcher'] == "true") { ?>
                                <div class="page-header"></div>
                                <p>Launcher URL</p>
                                <textarea class="form-control" name="theme-counter-launcher-url" cols="1" rows="1"><?= $config['theme-counter-launcher-url']; ?></textarea>
                                <br>
                            <?php } else { ?>
                                <div class="page-header"></div>
                                <p>Serveur IP</p>
                                <textarea class="form-control" name="theme-counter-ip" cols="1" rows="1"><?= $config['theme-counter-ip']; ?></textarea>
                                <br>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <!-- Vote -->
                <?php if($EyPlugin->isInstalled('eywek.vote')){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vote panel</h3>
                    </div>
                    <div class="panel-body">
                        <label>Enable vote panel</label>
                        <select name="theme-vote" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-vote'] == "true") ? ' selected' : '' ?>>Yes</option>
                            <option value="false"<?= ($config['theme-vote'] == "false") ? ' selected' : '' ?>>No</option>
                        </select>
                        <?php if(!isset($theme_config['theme-vote']) || $theme_config['theme-vote'] == "true") { ?>
                            <div class="page-header"></div>
                            <p>Image URL</p>
                            <textarea class="form-control" name="theme-vote-img" cols="1" rows="1"><?= $config['theme-vote-img']; ?></textarea>
                            <br>
                            <p>Panel Text</p>
                            <textarea class="form-control" name="theme-vote-text" cols="1" rows="3"><?= $config['theme-vote-text']; ?></textarea>
                            <br>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <!-- Réseaux sociaux -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Social networks</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activate social networks</label>
                        <select name="theme-social" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-social'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-social'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        <br>
                        <p>Social networks are to be modified in : <a href="<?= $this->Html->url('/') ?>/admin/configuration">General > General Preferences > Social preferences</a></p>
                    </div>
                </div>
                <!-- Discord -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Discord</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activate the Discord panel</label>
                        <select name="theme-discord" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-discord'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-discord'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        <?php if(!isset($theme_config['theme-discord']) || $theme_config['theme-discord'] == "true") { ?>
                            <div class="page-header"></div>
                            <p>Server ID</p>
                            <textarea class="form-control" name="theme-discord-id" cols="1" rows="1"><?= $config['theme-discord-id']; ?></textarea>
                            <br>
                            <p>To find the id go to your Discord: Server Settings > Widget, activate the Widget and copy the id of your server.</p>
                        <?php } ?>
                    </div>
                </div>
                <!-- Infos Footer -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Information</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activate the Information panel</label>
                        <select name="theme-infos" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-infos'] == "true") ? ' selected' : '' ?>>Yes</option>
                            <option value="false"<?= ($config['theme-infos'] == "false") ? ' selected' : '' ?>>No</option>
                        </select>
                        <?php if(!isset($theme_config['theme-infos']) || $theme_config['theme-infos'] == "true") { ?>
                        <div class="page-header"></div>
                        <p>Information panel text</p>
                        <textarea class="form-control" name="theme-infos-text" cols="1" rows="3"><?= $config['theme-infos-text']; ?></textarea>
                        <?php } ?>
                    </div>
                </div>
                <!-- Classement Footer -->
                <?php if($EyPlugin->isInstalled('eywek.vote')){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Voter Ranking</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activate voters ranking</label>
                        <select name="theme-ranking" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-ranking'] == "true") ? ' selected' : '' ?>>Yes</option>
                            <option value="false"<?= ($config['theme-ranking'] == "false") ? ' selected' : '' ?>>No</option>
                        </select>
                    </div>
                </div>
                <?php } ?>
                <!-- SEO -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SEO</h3>
                    </div>
                    <div class="panel-body">
                        <label>Disable indexation (Hide your website from search results)</label>
                        <select name="theme-infos" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['seo-noindex'] == "true") ? ' selected' : '' ?>>Yes</option>
                            <option value="false"<?= ($config['seo-noindex'] == "false") ? ' selected' : '' ?>>No</option>
                        </select>
                        <div class="page-header"></div>
                        <p>Website description (Visible on search engines)</p>
                        <textarea class="form-control" name="seo-description" cols="1" rows="3"><?= isset($theme_config['seo-description']) ? $config['seo-description'] : "Awesome Minecraft server!" ?></textarea>
                        <div class="page-header"></div>
                        <p>Search Tags (Putting too many tags might degrade your SEO)</p>
                        <textarea class="form-control" name="seo-tags" cols="1" rows="3"><?= isset($theme_config['seo-tags']) ? $config['seo-tags'] : "Minecraft, Minecraft Server" ?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="pull-right">
                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                    <button class="btn btn-primary btn-lg" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
