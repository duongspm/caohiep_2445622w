<?php
if (!defined('SOURCES')) die("Error");

/* Query allpage */
// need
$product = $cache->get("select id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'), 'result', 7200);

$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);

$social = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social'), 'result', 7200);

$policy = $cache->get("select name$lang, slugvi, slugen, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'), 'result', 7200);

$footer = $cache->get("select name$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);

$opentime = $cache->get("select name$lang, content$lang from #_static where type = ? limit 0,1", array('opening-time'), 'fetch', 7200);

$logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo', 'photo_static'), 'fetch', 7200);

$bannerheader = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner-header', 'photo_static'), 'fetch', 7200);

$productlist = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);

$dichvulist = $cache->get("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'), 'result', 7200);

$dichvu = $cache->get("select name$lang, slugvi, slugen,photo, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'), 'result', 7200);

// need

/* Get statistic */
$counter = $statistic->getCounter();
$online = $statistic->getOnline();

/* Newsletter */
if (!empty($_POST['submit-newsletter'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

    /* Valid data */
    // if (empty($dataNewsletter['email'])) {
    //     $flash->set('error', 'Email kh??ng ???????c tr???ng');
    // }

    if (!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email'])) {
        $flash->set('error', 'Email kh??ng h???p l???');
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true) {
        $data = array();
        foreach ($dataNewsletter as $column => $value) {
            $data[$column] = htmlspecialchars($value);
        }
        $data['date_created'] = time();
        $data['type'] = 'dangkynhantin';

        if ($d->insert('newsletter', $data)) {
            $func->transfer("????ng k?? nh???n tin th??nh c??ng. Ch??ng t??i s??? li??n h??? v???i b???n s???m.", $configBase);
        } else {
            $func->transfer("????ng k?? nh???n tin th???t b???i. Vui l??ng th??? l???i sau.", $configBase, false);
        }
    } else {
        $func->transfer("????ng k?? nh???n tin th???t b???i. Vui l??ng th??? l???i sau.", $configBase, false);
    }
}