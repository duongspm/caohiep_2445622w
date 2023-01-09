<div class="footer">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item">
                <div class="footer-name">
                    <span><?=$footer['name'.$lang]?></span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <span>Chính sách</span>
                    <div class="footer_line">
                        <img src="assets/images/images/ft-line.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                </div>
                <div class="footer__list">
                    <?php if(!empty($policy)){?>
                    <ul>
                        <?php foreach($policy as $v){?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
                <div class="footer-social">
                    <?php if(!empty($social)){foreach($social as $v){?>
                    <a class="social-item" href="<?=$v['link']?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '40x40x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                    <?php }}?>

                </div>
            </div>
            <div class="footer-item">
                <div class="footer-fb">
                    <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="500"
                        data-height="230" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="<?=$optsetting['fanpage']?>">
                                <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__tag mr-bottom mr-top">
            <span>tag từ khóa: </span>
            <?php if(!empty($tag)){
                foreach($tag as $v){?>

            <a class="tag__item" href="<?=$v['desc'.$lang]?>" title="<?=$v['name'.$lang]?>">
                <?=$v['name'.$lang]?>
            </a>

            <?php }}?>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © 2022
                    <span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>. Design by Nina Co.,Ltd
                </span>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($optsetting['coords_iframe'])){?>
<?= $addons->set('footer-map', 'footer-map', 6); ?>
<?php }?>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>