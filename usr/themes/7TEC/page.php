<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-sm-12 col-lg-8" id="main" role="main">
    <article class="post Card typo" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-box paddingall">
            <div class="post-title-box">
                <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
            </div>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>

            <!---赞赏模块---->
            <div class="entry-shang text-center">
                <p>「一键投喂 软糖/蛋糕/布丁/牛奶/冰阔乐！」</p>
                <button class="zs show-zs btn btn-bred">赞赏</button>
            </div>
            <div class="zs-modal-bg"></div>
            <div class="zs-modal-box">
                <div class="zs-modal-head">
                    <button type="button" class="close">×</button>
                    <p class="author">
                        <img src="/usr/themes/7TEC/img/head.jpg" width="32px" height="32px" style="border-radius: 50%;"><?php $this->author(); ?>
                    </p>
                    <p class="tip"><i></i><span> (๑＞ڡ＜)☆谢谢老板~</span></p>
                </div>
                <div class="zs-modal-body">
                    <div class="zs-modal-btns">
                        <button class="btn btn-blink" data-num="2">2元</button>
                        <button class="btn btn-blink" data-num="5">5元</button>
                        <button class="btn btn-blink" data-num="10">10元</button>
                        <button class="btn btn-blink" data-num="50">50元</button>
                        <button class="btn btn-blink" data-num="100">100元</button>
                        <button class="btn btn-blink" data-num="any">任意金额</button>
                    </div>
                    <div class="zs-modal-pay">
                        <button class="btn btn-bred" id="pay-text">2元</button>
                        <p>使用<span id="pay-type">微信</span>扫描二维码完成支付</p>
                        <img width="150" height="150" src="<?php $this->options->themeUrl('img/alipay-2.jpg'); ?>" id="pay-image" />
                    </div>
                </div>
                <div class="zs-modal-footer">
                    <label style="float: left;width: 130px;">
                        <input type="radio" name="zs-type" value="alipay" class="zs-type" checked="checked" style="float: left;">
                        <span class="zs-alipay">
                            <img src="<?php $this->options->themeUrl('img/alipay-btn.png'); ?>" />
                        </span>
                    </label>
                    <label style="float: left;width: 130px;">
                        <input type="radio" name="zs-type" value="wechat" class="zs-type" style="float: left;">
                        <span class="zs-wechat">
                            <img src="<?php $this->options->themeUrl('img/wechat-btn.png'); ?>" />
                        </span>
                    </label>
                </div>
            </div>
            <br />
            <!---赞赏模块---->
        </div>
        <div class="info">
            <ul class="post-meta">
                <li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp; </i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
                <li><i class="fa fa-calendar" aria-hidden="true">&nbsp; </i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
                <li itemprop="interactionCount"><i class="fa fa-comments-o" aria-hidden="true">&nbsp; </i><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
            </ul>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>