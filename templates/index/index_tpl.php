<div class="doitac">
    <div class="doitacc">
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="4:10" data-sm-items="5:10" data-md-items="6:10"
            data-lg-items="7:10" data-xlg-items="9:10" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0"
            data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
            data-nav="0"
            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
            data-navcontainer=".control-partner">
            <?php if(!empty($doitac)) {
                foreach($doitac as $v){?>
            <div class="doitac-item">
                <a href="<?=$v['link']?>" class="doitac__img effect10">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '100x70x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]]) ?>
                </a>
            </div>
            <?php }}?>
        </div>
    </div>
</div>
<div class="tieuchi">
    <div class="wrapper">
        <div class="tieuchii">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="2:0"
                data-lg-items="3:0" data-xlg-items="3:0" data-rewind="1" data-autoplay="0" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-partner">
                <?php if(!empty($tieuchi)) {
                foreach($tieuchi as $v){?>
                <div class="tieuchi__item">
                    <div class="tieuchi__item--icon">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '55x51x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                    </div>
                    <div class="tieuchi__content">
                        <div class="tieuchi__name">
                            <span>
                                <?=$v['name'.$lang]?>
                            </span>
                        </div>
                        <div class="tieuchi__desc">
                            <span>
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <div class="about__heading heading">
                    <span><?=$about[0]['name'.$lang]?></span>
                </div>
                <div class="about__middle">
                    <div>
                        <img src="assets/images/images/item-about02.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                    <div class="about__content">
                        <span>
                            <?=$about[0]['desc'.$lang]?>
                        </span>
                        <div class="about__btn">
                            <a href="gioi-thieu" title="Giới thiệu"
                                class="button button--isi button--text-thick button--text-upper button--size-s"><span>Xem
                                    tất cả</span><img src="assets/images/images/item-btn.png"
                                    alt="<?=$setting['name'.$lang]?>"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="about__right">
                <?php if(!empty($imgabout[0])){?>
                <div class="about__right-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '190x190x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgabout[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
                <?php if(!empty($imgabout[1])){?>
                <div class="about__right-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '240x220x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgabout[1]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
                <?php if(!empty($imgabout[2])){?>
                <div class="about__right-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '300x340x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgabout[2]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<div class="productbc pd mr-top">
    <div class="wrapper">
        <div class="heading__top">
            <span class="heading heading--white">
                Sản phẩm bán chạy
            </span>
            <div class="heading__slogan heading__slogan--white">
                <div>
                    <img src="assets/images/images/line-white.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>
                    <?=$slogan['name'.$lang]?>
                </span>
                <div>
                    <img src="assets/images/images/line-white-right.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
        </div>
        <div class="productbc__list">
            <?php if (count($productbc)) { ?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:20" data-sm-items="2:20" data-md-items="3:20"
                data-lg-items="4:20" data-xlg-items="4:20" data-rewind="1" data-autoplay="1" data-loop="1"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="1"
                data-navtext="<img src='assets/images/page-prev.png'>|<img src='assets/images/page-next.png'>"
                data-navcontainer=".control-congtrinh">
                <?php foreach ($productbc as $v) { ?>
                <div>
                    <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="productbc__item">
                        <div class="productbc__img effect10 scale-img">
                            <?= $func->getImage(['class' => 'w-100 lazy','isWatermark' => true, 'prefix' => 'product', 'sizes' => '380x380x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="productbc__content">
                            <div class="productbc__name">
                                <span><?=$v['name'.$lang]?></span>
                            </div>
                            <div class="productbc__price">
                                <span>
                                    <?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="control-congtrinh transition"></div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="productnb pd">
    <div class="wrapper">
        <div class="heading__top">
            <span class="heading heading--black">
                Sản phẩm nổi bật
            </span>
            <div class="heading__slogan heading__slogan--black">
                <div>
                    <img src="assets/images/images/line-blue.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>
                    <?=$slogan['name'.$lang]?>
                </span>
                <div>
                    <img src="assets/images/images/line-blue-02.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
        </div>
        <?php if (!empty($productlist)) { ?>
        <div class="title-product-list text-center">
            <?php foreach ($productlist as $key => $vl) : ?>
            <a class="text-decoration-none a-title-product" data-list="<?= $vl['id'] ?>"><?= $vl['name' . $lang] ?></a>
            <?php endforeach ?>
        </div>
        <?php } ?>
        <div class="productnb__list">
            <div class="paging-product-list"></div>
        </div>
    </div>
</div>
<div>
    <?php if(!empty($banner)){?>
    <div class="banner effect10">
        <?= $func->getImage(['class' => 'lazy', 'sizes' => '1366x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => "about"]) ?>
    </div>
    <?php }?>
</div>
<div class="videofb pd">
    <div class="wrapper">
        <div class="videofbb">
            <div class="videoo">
                <div class="heading__02">
                    <span class="heading--02">
                        video nổi bật
                    </span>
                    <div class="heading__slogan--02">
                        <span>
                            <?=$slogan['name'.$lang]?>
                        </span>
                    </div>
                </div>
                <div class="video__list">

                    <div class="slider-for">
                        <?php if(!empty($videoclipd)) { foreach($videoclipd as $k => $v) { ?>
                        <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                            <div class="video-image scale-img">
                                <?= $func->getImage(['class' => 'w-100', 'sizes' => '580x400x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                        </div>
                        <?php } }?>
                    </div>


                    <div class="slider-nav">
                        <?php if(!empty($videoclipd)) { foreach($videoclipd as $k => $v) { ?>
                        <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                            <div class="video-images scale-img">
                                <?= $func->getImage(['class' => 'w-100', 'sizes' => '180x110x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                        </div>
                        <?php } }?>
                    </div>

                </div>
            </div>
            <div class="feedback">
                <div class="heading__02">
                    <span class="heading--02">
                        cảm nhận khách hàng
                    </span>
                    <div class="heading__slogan--02">
                        <span>
                            <?=$slogan['name'.$lang]?>
                        </span>
                    </div>
                </div>
                <div class="feedback__list">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                        data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1"
                        data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="1" data-nav="0"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".feedback-partner">
                        <?php if(!empty($feedback)) {
                foreach($feedback as $v){?>
                        <div class="feedback__item">
                            <div class="feedback__img scale-img effect10">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '220x220x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                            <div class="feedback__content">
                                <div class="feedback__name">
                                    <span><?=$v['name'.$lang]?></span>
                                </div>
                                <div class="feedback__desc">
                                    <span>
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="blog pd-b">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading__top">
                <span class="heading heading--black">
                    tin tức & sự kiện
                </span>
                <div class="heading__slogan heading__slogan--black">
                    <div>
                        <img src="assets/images/images/line-blue.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                    <div>
                        <img src="assets/images/images/line-blue-02.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                </div>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:5" data-sm-items="2:5"
                    data-md-items="3:15" data-lg-items="4:15" data-xlg-items="4:15" data-rewind="1" data-autoplay="0"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-newsnb">
                    <?php foreach($newsnb as $v){?>
                    <a href="<?=$v[$sluglang]?>" class="blog__item">
                        <div class="blog__date">
                            <span class="blog__date--date">
                                <?=date("d",$v['date_created'])?>
                            </span>
                            <span class="blog__date--month">
                                Th<?=date("m",$v['date_created'])?>
                            </span>
                        </div>
                        <div class="blog__img effect10">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '270x270x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="blog__content">
                            <span class="blog__name">
                                <?=$v['name'.$lang]?>
                            </span>
                            <div class="line__blog"></div>
                            <span class="blog__desc">
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </a>
                    <?php }?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="dangky mr-top">
    <div class=" wrapper">
        <div class="dangkyy">
            <div class="dangky__left">
                <div class="dangky__left--icon">
                    <img src="assets/images/images/icon-dk.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>đăng ký nhận tin</span>
            </div>
            <div class="dangky__right">
                <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="dangky__form">
                        <div class="newsletter-input">
                            <div class="dk-icon">
                                <img src="assets/images/images/icon-dk01.png" alt="">
                            </div>
                            <input type="text" class="form-controld form-d1 text-sm" id="fullname-newsletter"
                                name="dataNewsletter[fullname]" placeholder="Tên của bạn" required />
                            <div class="invalid-tooltip">Vui lòng nhập tên của bạn</div>
                        </div>

                        <div class="newsletter-input">
                            <div class="dk-icon">
                                <img src="assets/images/images/icon-dk-02.png" alt="">
                            </div>
                            <input type="number" class="form-controld form-d1 text-sm" id="phone-newsletter"
                                name="dataNewsletter[phone]" placeholder="Số điện thoại" required />
                            <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                        </div>

                        <div class="newsletter-input">
                            <div class="dk-icon">
                                <img src="assets/images/images/icon-dk-03.png" alt="">
                            </div>
                            <input class="form-controld text-sm" id="content-newsletter" name="dataNewsletter[content]"
                                placeholder="Nội dung" required></input>
                            <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                        </div>

                        <div class="formgroup">
                            <div class="newsletter-button">
                                <input type="submit" class="btn-f" name="submit-newsletter" value="GỬI" disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>