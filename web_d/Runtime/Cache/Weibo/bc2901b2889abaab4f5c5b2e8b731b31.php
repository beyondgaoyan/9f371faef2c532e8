<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="<?php echo getRootUrl();?>Addons/Checkin/View/Css/check.css">
<div class="box1 " id="checkdiv">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
            <i class="ico_calendar"></i>

        </div>
            <div class="col-xs-4  text-center" style="color: #fff; padding-top:2px;line-height: 16px">
                <div><?php echo ($check["day"]); ?></div>
                <div><?php echo ($check["week"]); ?></div>

            </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

            <a href="<?php echo U('Home/User/login');?>" id="checkin" class="btn-sign">签到</a>

        </div>

    </div>
</div>