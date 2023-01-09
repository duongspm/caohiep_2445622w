<div class="menu">
    <div class="wrap-content menuuu">
        <ul class="menu-list">

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>

            <li class="menu__line"></li>
            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li class="menu__line"></li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li class="menu__line"></li>

            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin
                    tức</a>
            </li>
            <li class="menu__line"></li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he" title="Liên hệ">Liên
                    hệ</a></li>
        </ul>
        <div class="menu__search">
            <div class="search w-clear">
                <input type="text" id="keyword" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword');" />
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div>
        </div>
    </div>
</div>