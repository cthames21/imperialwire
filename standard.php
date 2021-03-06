﻿<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
          $AutoPlay: 1,
          $AutoPlaySteps: 1,
          $SlideDuration: 250,
          $SlideWidth: 250,
          $SlideSpacing: 20,
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $Steps: 1
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1100;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        window.addEventListener("resize", ScaleSlider);
        window.addEventListener("load", ScaleSlider);
        window.addEventListener('mousemove', ScaleSlider);
        window.addEventListener("orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /*jssor slider bullet skin 057 css*/
    .jssorb057 .i {position:absolute;cursor:pointer;}
    .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
    .jssorb057 .i:hover .b {stroke-opacity:.7;}
    .jssorb057 .iav .b {stroke-opacity: 1;}
    .jssorb057 .i.idn {opacity:.3;}

    /*jssor slider arrow skin 073 css*/
    .jssora073 {display:block;position:absolute;cursor:pointer;}
    .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
    .jssora073:hover {opacity:.8;}
    .jssora073.jssora073dn {opacity:.4;}
    .jssora073.jssora073ds {opacity:.3;pointer-events:none;}


    #jssor_1 {
        width: 800px;
        position:relative;
        margin:0 auto;
        top:0px;
        left:0px;
        height:195px;
        visibility:hidden;
        grid-row: 2;
    }

    #jssor_1_2 {
        width: 800px;
        cursor:default;
        position:relative;
        top:0px;
        left:0px;
        height:195px;
        overflow:hidden;
    }

    .jssora073 {
        background-color: rgba(200,200,200,.2);
        transition: .5s;
    }

    #jssor_1:hover .jssora073 {
        background-color: rgba(200,200,200,.8)
    }

/*
    @media only screen and (max-width: 900px) {
        #jssor_1, #jssor_1_2 {
            width: 500px
        }
    }
*/

</style>
<div id="jssor_1">
    <!-- Loading Screen
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
     -->
    <div id="jssor_1_2" data-u="slides">
        <div>
            <img data-u="image" src="photos/fixture1.jpg" />
        </div>
        <div>
            <img data-u="image" src="photos/fixture2.jpg" />
        </div>
        <div>
            <img data-u="image" src="photos/fixture3.jpg" />
        </div>
        <div>
            <img data-u="image" src="photos/fixture4.jpeg" />
        </div>
        <div>
            <img data-u="image" src="photos/fixture5.jpeg" />
        </div>
        <div>
            <img data-u="image" src="photos/fixture6.jpg" />
        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5000"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora073" style="width:40px;height:100px;top:0px;left:5px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora073" style="width:40px;height:100px;top:0px;right:5px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
        </svg>
    </div>
</div>
<script type="text/javascript">

    jssor_1_slider_init();
/*
    $(window).resize(function(){
        if ($(window).width()< 960) {

                            $("#jssor_1").css("width","500px");
                            $("#jssor_1_2").css("width","500px")
                        }
                    })

    function resizeGallery() {
    if ($(window).width()< 960) {
                            $("#jssor_1").css("width","500px");
                            $("#jssor_1_2").css("width","500px")
                        }
    }
*/


</script>





