<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"  href="css/dev.css"/>
    <link rel="stylesheet" href="plugin/font-awesome-animation.min.css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
            <ul class="nav nav-tabs">
                    <li class="active col-xs-4"><a data-toggle="tab" href="#home">Home</a></li>
                    <li class="col-xs-4"><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                    <li class="col-xs-4"><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>
        </div>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>HOME</h3>
            <div class="container">
                <!--start-->
                <div class="media item_works" style="">
                    <div class="media-left media-top">
                        <img class="" src="img/magento.png" class="media-object" style="width:50px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="#" style="color: black">Media Top</a>
                            <i class="fa fa-circle-o faa-burst animated"></i>
                        </h4>
                        <h5>
                            <i class="fa fa-check-circle-o" style="color: #1C9A71;border-right:1px solid black; padding-right: 4px" aria-hidden="true"><small style="padding-left: 2px">Đang Tuyển</small></i>
                            <code>PHP</code>
                            <code>Java</code>
                            <i class="fa fa-star-o faa-falling animated" style="border-left:1px solid black; padding-left: 4px";color:sandybrown"><small>Mới</small></i>
                        </h5>
                        <p>
                            <div class="row">
                                <div class="col-sm-9">
                                From shades of color to specific formularies, custom product attributes are essential when matching products to customer needs.
                                Magento helps you quickly and easily showcase your unique product attributes and tap robust product bundling to grow your average order value.
                                From shades of color to specific formularies, custom product attributes are essential when matching products to customer needs.
                                Magento helps you quickly and easily showcase your unique product attributes and tap robust product bundling to grow your average order value.
                                </div>
                            <div class="col-sm-3">
                                <img class="" src="img/magento2.png" class="img-responsive" style="height: 130px;float: right">
                            </div>
                            </div>
                        </p>
                        <span>
                            <i class="fa fa-comment fa_icon" style="color: red" aria-hidden="true">129 Comment</i>
                            <i class="fa fa-thumbs-up fa_icon" style="color: blue" aria-hidden="true">200 Like</i>
                            <i class="fa fa-eye fa_icon" aria-hidden="true" style="color: darkgray">490 View</i>
                            <i class="fa fa-clock-o fa_icon" style="color: grey" aria-hidden="true">20-10-2018</i>
                            <a href="#" class="fa_read"><i class="fa fa-play-circle-o fa_icon" aria-hidden="true" title="Click vào để đọc tiếp tin này!">Đọc Tin...</i></a>
                            <i class="fa fa-money fa_icon" style="float: right;color: olivedrab" aria-hidden="true"> <span class="label label-info">700$-1000$</span></i>
                        </span>
                    </div>
                </div>
                <!--and-->
                <!--start-->
                <div class="media item_works">
                    <div class="media-left media-top">
                        <img class="" src="img/magento.png" class="media-object" style="width:50px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="#" style="color: black">Media Top</a>
                            <i class="fa fa-circle-o faa-burst animated"></i>
                        </h4>
                        <h5>
                            <i class="fa fa fa-ban" style="color: #F0672F;border-right:1px solid black; padding-right: 4px" aria-hidden="true"><small style="padding-left: 2px">Đã Tuyển</small></i>
                            <code>PHP</code>
                            <code>Java</code>
                            <i class="fa fa-star-o faa-falling animated" style="border-left:1px solid black; padding-left: 4px";color:sandybrown"><small>Mới</small></i>
                        </h5>
                        <p>
                        <div class="row">
                            <div class="col-sm-9">
                                From shades of color to specific formularies, custom product attributes are essential when matching products to customer needs.
                                Magento helps you quickly and easily showcase your unique product attributes and tap robust product bundling to grow your average order value.
                                From shades of color to specific formularies, custom product attributes are essential when matching products to customer needs.
                                Magento helps you quickly and easily showcase your unique product attributes and tap robust product bundling to grow your average order value.
                            </div>
                            <div class="col-sm-3">
                                <img class="" src="img/magento2.png" class="img-responsive" style="height: 130px;float: right">
                            </div>
                        </div>
                        </p>
                        <span>
                            <i class="fa fa-comment fa_icon" style="color: red" aria-hidden="true">129 Comment</i>
                            <i class="fa fa-thumbs-up fa_icon" style="color: blue" aria-hidden="true">200 Like</i>
                            <i class="fa fa-eye fa_icon" aria-hidden="true" style="color: darkgray">490 View</i>
                            <i class="fa fa-clock-o fa_icon" style="color: grey" aria-hidden="true">20-10-2018</i>
                            <a href="#" class="fa_read"><i class="fa fa-play-circle-o fa_icon" aria-hidden="true" title="Click vào để đọc tiếp tin này!">Đọc Tin...</i></a>
                            <i class="fa fa-money fa_icon" style="float: right;color: olivedrab" aria-hidden="true"> <span class="label label-info">700$-1000$</span></i>
                        </span>
                    </div>
                </div>
                <!--and-->

            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
    </div>
</div>

</body>
</html>
<style>
    body {
        font-family: Segoe UI, Frutiger, Frutiger Linotype, Dejavu Sans, Helvetica Neue, Arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 20px;
    }
    .fa_icon{
        margin-right: 3px;
    }
    a .fa_icon:hover{
        text-decoration: underline;
    }
    body{
        background-color: #FAFAFA;
    }
    .item_works{
        border: 1px solid;
        background: #FFFFFF;
        border-radius: 5px;
        border: 1px solid #dddfe2;
    }
</style>
