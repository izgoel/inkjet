
<div class="container">
    <div class="row-fluid">
        <div class="slider" style="margin-left: 10px;">
        <div class="span4" id="s1" style="height:220px;">
            <img src="images/slider-01_01.png" width="300" height="210"/>
            <img src="images/slider-02_01.png" width="300" height="210"/>
        </div>
        <div class="span4" id="s2" style="height:220px;">
            <img src="images/slider-01_02.png" />
            <img src="images/slider-02_02.png" />

        </div>
        <div class="span4" id="s3" style="height:220px;">
            <img src="images/slider-01_03.png" />
            <img src="images/slider-02_03.png" />
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function($) { $('#s1').cycle({ fx:'scrollDown',timeout:3000,speed:900,
        pause:0});
        $('#s2').cycle({ fx:'scrollUp',timeout:3000,speed:900,
        pause:0});
        $('#s3').cycle({ fx:'scrollDown',timeout:3000,speed:900,
        pause:0});
    });
    </script>
    </div>
</div>