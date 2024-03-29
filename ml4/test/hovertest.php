<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Hover Fader for Thumbnails | JavaScript Examples | UIZE JavaScript Framework</title>
  <meta name="keywords" content="featured animation widget Uize.Widget.HoverFader"/>
  <meta name="description" content="See how to liven up image thumbnails with some cool JavaScript animation! Diverse effects can be achieved by animating different CSS style properties."/>
  <link rel="alternate" type="application/rss+xml" title="UIZE JavaScript Framework - Latest News" href="http://www.uize.com/latest-news.rss"/>
  <link rel="stylesheet" href="../css/page.css"/>
  <link rel="stylesheet" href="../css/page.example.css"/>
  <style type="text/css">
    .thumbnails {
      width:678px;
      margin:auto;
    }
    .thumbnails .thumbnail {
      position:relative;
      cursor:pointer;
      display:block;
      float:left;
      font-size:12px;
      width:105px;
      margin:0 4px;
      background-position:left 20px;
      background-repeat:no-repeat;
      white-space:nowrap;
      overflow:hidden;
    }
    .clearFloatLeft {
      clear:left;
      height:0;
    }

    /*** thumbnails set 1 ***/
      #thumbnails1 .thumbnail {
        line-height:200px;
        height:95px;
      }

    /*** thumbnails set 2 ***/
      #thumbnails2 .thumbnail {
        text-indent:110px;
        line-height:170px;
        height:95px;
      }

    /*** thumbnails set 3 ***/
      #thumbnails3 .thumbnail {
        background-position:left top;
        line-height:200px;
        height:95px;
      }

    /*** thumbnails set 4 ***/
      #thumbnails4 .thumbnail {
        background-position:left top;
        background-color:#fff;
        padding:75px 0 0 0;
        line-height:20px;
        height:0;
        margin-bottom:20px;
        text-align:center;
      }

    /*** thumbnails set 5 ***/
      #thumbnails5 .thumbnail {
        border:3px solid #000;
        background-position:left top;
        background-color:#000;
        padding:75px 0 0 0;
        line-height:20px;
        height:0;
        margin:0 1px 20px 1px;
        text-align:center;
      }

    /*** thumbnails set 6 ***/
      #thumbnails6 .thumbnail {
        border:1px solid #000;
        background-position:left top;
        margin:0 3px;
        height:75px;
      }
      #thumbnails6 .thumbnailScaled {
        position:absolute;
        width:147px;
        height:105px;
        left:-21px;
        top:-15px;
      }
      #thumbnails6 .thumbnailNormal {
        position:absolute;
        width:105px;
        height:75px;
        left:0;
        top:0;
      }

    /*** thumbnails set 7 ***/
      #thumbnails7 .thumbnail {
        border:1px solid #000;
        background-position:left top;
        margin:0 3px;
        height:75px;
      }
      #thumbnails7 .thumbnailScaled {
        position:absolute;
        width:147px;
        height:105px;
        left:-21px;
        top:-15px;
      }
      #thumbnails7 .thumbnailImage {
        position:absolute;
        width:105px;
        height:75px;
        left:0;
        top:0;
      }
  </style>
</head>

<body>

<script type="text/javascript" src="../js/Uize.js"></script>

<h1 class="document-title">
  <a id="page-homeLink" href="../index.html" title="UIZE JavaScript Framework home"></a>
  <a href="../javascript-examples.html" class="breadcrumb breadcrumbWithArrow">JAVASCRIPT EXAMPLES</a>
  Hover Fader for Thumbnails
  <div id="page-actions" class="pageActions">
    <a href="source-code/hover-fader-for-thumbnails.html" class="buttonLink">SOURCE</a>
  </div>
</h1>

<div class="main">
  <!-- explanation copy -->

  <div class="explanation">
    <p>In this example, the <a href="../reference/Uize.Widget.HoverFader.html"><code>Uize.Widget.HoverFader</code></a> widget class is being used to add a JavaScript animation effect to the thumbnails in several different sets of thumbnails (seen below). An instance of <code>Uize.Widget.HoverFader</code> is created and wired up to the thumbnail nodes for each thumbnail set. Each instance manages the fade effect for various CSS style properties for all the thumbnails in its set. Try mousing over the thumbnails to experience the animation effect, comparing the effect from one set to the next.</p>

    <p>The <code>Uize.Widget.HoverFader</code> class lets you fade a wide variety of different CSS style properties, including <code>color</code>, <code>backgroundColor</code>, <code>borderColor</code>, <code>margin</code>, <code>letterSpacing</code>, <code>textIndent</code>, <code>lineHeight</code>, <code>opacity</code>, <code>left</code>, <code>top</code>, <code>width</code>, <code>height</code>, and many more. You can also set the fade-in and fade-out durations, as well as other properties of the fade-in and fade-out (such as <code>acceleration</code> and <code>deceleration</code>). Take a look at the source code for this page to see how the thumbnails are wire up with this effect, and how different CSS style properties are being faded for each thumbnail set. Worth noting is that this example uses the declarative syntax for widget adoption, so you will see the widget declarations next to the HTML for the thumbnail sets.</p>
  </div>

  <div id="thumbnails" class="thumbnails">

    <!-- ************************* thumbnails set 1 ************************* -->
    <div class="exampleSectionHeading">Image and Title Move Up Together</div>
    <div id="thumbnails1" class="thumbnailsSet">
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105);" class="thumbnail">San Fran Sunset</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105);" class="thumbnail">Shadow of Past</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105);" class="thumbnail">Hook in the Wall</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105);" class="thumbnail">Retirement Home</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105);" class="thumbnail">Heavens Open</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105);" class="thumbnail">Window Lean</div>
      <script type="text/javascript">
        window.$page_thumbnails1HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails1',className:/\bthumbnail\b/},
          defaultStyle:{backgroundPosition:'left 20px',lineHeight:200,color:'#f'},
          hoverStyle:{backgroundPosition:'left 0px',lineHeight:170,color:'#0'},
          fadeIn:{duration:400,deceleration:1},
          fadeOut:{duration:400,deceleration:1}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>

    <!-- ************************* thumbnails set 2 ************************* -->
    <div class="exampleSectionHeading">Image Moves Up, Title Slides in from Right</div>
    <div id="thumbnails2" class="thumbnailsSet">
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105);" class="thumbnail">San Fran Sunset</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105);" class="thumbnail">Shadow of Past</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105);" class="thumbnail">Hook in the Wall</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105);" class="thumbnail">Retirement Home</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105);" class="thumbnail">Heavens Open</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105);" class="thumbnail">Window Lean</div>
      <script type="text/javascript">
        window.$page_thumbnails2HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails2',className:/\bthumbnail\b/},
          defaultStyle:{backgroundPosition:'left 20px',textIndent:110,color:'#f'},
          hoverStyle:{backgroundPosition:'left 0px',textIndent:2,color:'#0'},
          fadeIn:{duration:400,deceleration:1},
          fadeOut:{duration:400,deceleration:1}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>

    <!-- ************************* thumbnails set 3 ************************* -->
    <div class="exampleSectionHeading">Image Moves Down, Title Slides and Shrinks in from Bottom</div>
    <div id="thumbnails3" class="thumbnailsSet">
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105);" class="thumbnail">San Fran Sunset</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105);" class="thumbnail">Shadow of Past</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105);" class="thumbnail">Hook in the Wall</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105);" class="thumbnail">Retirement Home</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105);" class="thumbnail">Heavens Open</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105);" class="thumbnail">Window Lean</div>
      <script type="text/javascript">
        window.$page_thumbnails3HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails3',className:/\bthumbnail\b/},
          defaultStyle:{backgroundPosition:'left 0px',lineHeight:200,letterSpacing:15,color:'#f'},
          hoverStyle:{backgroundPosition:'left 20px',lineHeight:20,letterSpacing:0,color:'#0'},
          fadeIn:{duration:400,deceleration:1},
          fadeOut:{duration:500,acceleration:.5,deceleration:.5}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>

    <!-- ************************* thumbnails set 4 ************************* -->
    <div class="exampleSectionHeading">Title Bar Rolls Down Below Image, Fades from White to Black</div>
    <div id="thumbnails4" class="thumbnailsSet">
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105);" class="thumbnail">San Fran Sunset</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105);" class="thumbnail">Shadow of Past</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105);" class="thumbnail">Hook in the Wall</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105);" class="thumbnail">Retirement Home</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105);" class="thumbnail">Heavens Open</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105);" class="thumbnail">Window Lean</div>
      <script type="text/javascript">
        window.$page_thumbnails4HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails4',className:/\bthumbnail\b/},
          defaultStyle:{height:0,marginBottom:20,backgroundColor:'#fff',color:'#0'},
          hoverStyle:{height:20,marginBottom:0,backgroundColor:'#000',color:'#f'},
          fadeIn:{duration:400,deceleration:1},
          fadeOut:{duration:700,acceleration:1}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>

    <!-- ************************* thumbnails set 5 ************************* -->
    <div class="exampleSectionHeading">Title Bar Rolls Down Below Image, Border Color Fades</div>
    <div id="thumbnails5" class="thumbnailsSet">
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105);" class="thumbnail">San Fran Sunset</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105);" class="thumbnail">Shadow of Past</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105);" class="thumbnail">Hook in the Wall</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105);" class="thumbnail">Retirement Home</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105);" class="thumbnail">Heavens Open</div>
      <div style="background-image:url(http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105);" class="thumbnail">Window Lean</div>
      <script type="text/javascript">
        window.$page_thumbnails5HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails5',className:/\bthumbnail\b/},
          defaultStyle:{height:0,marginBottom:20,borderColor:'#000',color:'#0'},
          hoverStyle:{height:20,marginBottom:0,borderColor:'#ffa200',color:'#f'},
          fadeIn:{duration:400,deceleration:1},
          fadeOut:{duration:700,acceleration:1}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>

    <!-- ************************* thumbnails set 6 ************************* -->
    <div class="exampleSectionHeading">Zoomed in Image Fades in Over Zoomed Out, No Title</div>
    <div id="thumbnails6" class="thumbnailsSet">
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105" class="thumbnailNormal" alt="San Fran Sunset"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105" class="thumbnailNormal" alt="Shadow of Past"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105" class="thumbnailNormal" alt="Hook in the Wall"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105" class="thumbnailNormal" alt="Retirement Home"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105" class="thumbnailNormal" alt="Heavens Open"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105" class="thumbnailNormal" alt="Window Lean"/>
      </div>
      <script type="text/javascript">
        window.$page_thumbnails6HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails6',className:/\bthumbnailNormal\b/},
          defaultStyle:{opacity:1},
          hoverStyle:{opacity:.01},
          fadeIn:{duration:800,acceleration:.5,deceleration:.5},
          fadeOut:{duration:900,acceleration:1}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>

    <!-- ************************* thumbnails set 7 ************************* -->
    <div class="exampleSectionHeading">Image is Scaled Up With Animation for Zoom in Preview, No Title</div>
    <div id="thumbnails7" class="thumbnailsSet">
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228074575082103294&max_dim=105" class="thumbnailImage" alt="San Fran Sunset"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228026937512483785&max_dim=105" class="thumbnailImage" alt="Shadow of Past"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228855435929294206&max_dim=105" class="thumbnailImage" alt="Hook in the Wall"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228580091324147918&max_dim=105" class="thumbnailImage" alt="Retirement Home"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228483162492178759&max_dim=105" class="thumbnailImage" alt="Heavens Open"/>
      </div>
      <div class="thumbnail">
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=147" class="thumbnailScaled"/>
        <img src="http://rlv.zcache.com/isapi/designall.dll?action=realview&rvtype=pre&pid=228213464916914087&max_dim=105" class="thumbnailImage" alt="Window Lean"/>
      </div>
      <script type="text/javascript">
        window.$page_thumbnails7HoverFader = {
          widgetClass:'Uize.Widget.HoverFader',
          nodes:{root:'thumbnails7',className:/\bthumbnailImage\b/},
          defaultStyle:{width:105,height:75,left:0,top:0,opacity:1},
          hoverStyle:{width:147,height:105,left:-21,top:-15,opacity:.01},
          fadeIn:{duration:350,deceleration:1},
          fadeOut:{duration:500,deceleration:1}
        };
      </script>
      <div class="clearFloatLeft"></div>
    </div>
  </div>
</div>

<!-- JavaScript code to make the static HTML "come alive" -->

<script type="text/javascript">

Uize.module ({
  required:[
    'UizeDotCom.Page.Example.library',
    'UizeDotCom.Page.Example'
  ],
  builder:function () {(window.page = new UizeDotCom.Page.Example).wireUi ()}
});

</script>

</body>
</html>
