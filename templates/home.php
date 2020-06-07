
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/php.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>ENlitenThem</title>
    <meta name="description" content="In this tutorial you will learn how to search the records in MySQL database table using the PHP and Ajax, where suggestions will appear as you start typing into the input box." />
    <!-- InstanceEndEditable -->
        <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="fb:admins" content="100001054961582" />
<meta property="fb:app_id" content="1404574483159557" />
<meta property="og:image" content="assets/images/favicon.png" />
<link type="image/x-icon" href="{{url_for('static',filename='assets/images/favicon.png')}}" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="{{url_for('static',filename='css/style.css')}}"> 
<link href="{{url_for('static',filename='1/thumbs2.css')}}" rel="stylesheet" />
    <link href="{{url_for('static',filename='1/thumbnail-slider.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{url_for('static',filename='1/thumbnail-slider.js')}}" type="text/javascript"></script>  
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40117907-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-40117907-1');
</script>
<style type="text/css">
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
</head>
<body>
    <!--Header-->
    
<div class="header">
    <div class="wrapper clearfix">
        <button type="button" class="open-menu mobile-only"><i class="icon-menu"></i></button>
        <div class="logo">
            <a href="{{ url_for('home') }}"><img src="{{url_for('static',filename='assets/images/logo.svg')}}" alt="TutorialRepublic" /></a>
        </div>
        <div class="site-search">
            <form action="https://www.google.com/search" method="get" target="_blank" class="clearfix">
                <input type="hidden" value="www.enlitenthem.com" name="sitesearch" />
                <input type="text" name="q" placeholder="Search topics, tutorials, questions and answers..." id="searchInput" class="search" />
                <button type="submit" class="search-btn"><span class="icon-search"></span></button>
            </form>
        </div>
        
        <div class="social">                
            <a href="https://www.facebook.com/enlitenthem" target="_blank" title="Join us on Facebook"><i class="icon-facebook"></i></a>
            <a href="https://twitter.com/enlitenthem" target="_blank" title="Follow us on Twitter"><i class="icon-twitter"></i></a>
            <a href="/contact-us.php" target="_blank" title="Send us an Email"><i class="icon-mail"></i></a>
        </div>
        <button type="button" class="open-search mobile-only">
            <i class="icon-search"></i>
        </button>
    </div>    
</div>
<div class="menu">
    <div class="wrapper">
        <a href="{{ url_for('home') }}" title="ENlitenThem">HOME</a>
        <a href="/html-tutorial/" title="Office 365 Applications">OFFICE 365 APPLICATIONS</a>            
        <a href="/css-tutorial/" title="Crafts">CRAFTS</a>
        <a href="/javascript-tutorial/" title="Musical Instruments">MUSICAL INSTRUMENTS</a>
        <a href="/twitter-bootstrap-tutorial/" title="Agriculture">AGRICULTURE</a>
        <a href="#" title="Web Development">WEB DEVELOPMENT</a>
        <a href="/codelab.php" class="tool-link" target="_blank">Online HTML Editor</a>
    </div>        
</div>    <!--End:Header-->
    <div class="wrapper clearfix">
        <div class="leftcolumn" id="myNav">
        
        <div class="segment"><span>OFFICE   </span> 365 Applications</div>
<div class="chapters">
    <a href="/php-tutorial/">Microsoft Word</a>
    <a href="/php-tutorial/php-get-started.php">Microsoft Excel</a>
    <a href="/php-tutorial/php-syntax.php">Microsft Access</a>
    <a href="/php-tutorial/php-variables.php">Microsft PowerPoint</a>
    <a href="/php-tutorial/php-constants.php">Microsoft OneNote</a>
    <a href="/php-tutorial/php-data-types.php">Microsoft Outlook</a>
    <a href="/php-tutorial/php-strings.php">OneDrive</a>
</div>
<div class="segment"><span>CRAFTS</span> </div>
<div class="chapters">
    <a href="/php-tutorial/php-date-and-time.php">BARBING</a>
    <a href="/php-tutorial/php-include-files.php">PRINTING</a>
</div>
<div class="segment"><span>MUSICAL</span>INSTRUMENTS</div>
<div class="chapters">
    <a href="/php-tutorial/php-mysql-introduction.php">KEYBOARD</a>
    <a href="/php-tutorial/php-mysql-connect.php">LEAD GUITAR</a>
</div>
<div class="segment"><span>AGRICULTURE</span> </div>
<div class="chapters">
    <a href="/php-reference/php-string-functions.php">FISHERY</a>
    <a href="/php-reference/php-array-functions.php">BIRDS POULTRY</a>   
</div>
<div class="segment"><span>WEB </span>DEVELOPMENT</div>
<div class="chapters">
    <a href="#">HTML</a>
    <a href="#">CSS</a>
    <a href="#">JAVASCRIPT</a>
    <a href="#">PYTHON</a>
</div>        
                </div>
        <div class="centercolumn">
            <!--Text Content-->
            <div class="content">
                <div class="leaderboard">
                    
<div class="ad-label">Advertisements</div>
<div class="ad-container">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Responsive Leaderboard -->
    <ins class="adsbygoogle"
            style="display:inline-block;max-width:728px;width:100%;height:90px"
            data-ad-client="ca-pub-9107540490929984"
            data-ad-slot="4302666817"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

<script>
    try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
        return true;
        }).catch(function(e) {
        var contentBox = document.getElementsByClassName("content")[0];
        contentBox.insertAdjacentHTML('afterbegin', '<div id="carbon-block" style="width:100%;height:90px;"></div>');
        var carbonScript = document.createElement("script");
        carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7D6K3M&placement=wwwtutorialrepubliccom";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
        var cssLink = document.createElement("link");
        cssLink.rel = "stylesheet";
        cssLink.href = "css/carbon.css";
        (document.getElementsByTagName("head")[0]).appendChild(cssLink);
        });
    } catch (error) {
        console.log(error);
    }
</script>                </div>
                <!-- InstanceBeginEditable name="main_content" -->

            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a href="/">
                                <span class="thumb" style="background-image:url(https://i.ytimg.com/vi/WWNH3c7MKiE/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCKnNeeiNFS2r_mLjpGs7udExjQzQ)">
                                    This slide demonstrates how to link the thumbnail image to another web page.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/U91iG7Ym7jI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAW0V8UzWLFRpSYdjD2gQFzvS1EYw"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/vlB492MnGxk/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA4TV1FAyx7n0MzCqtvpcLbf75omQ"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/hJKLvvw0rlI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDGTOFOqSTOosJE1pi-4GiKHhYrYw"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/EgdI5LADO7Q/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAWWObS6AqlDZ_hlkkt79CM3bh1Jg"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/ew5ZgstTb6w/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBH-mKzCEO0euQ-IpKpNcAm0-NRaA"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/m-1RjjMAkrI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAO_7tsEYevvg-ZRATkTemXrZXgjQ"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/aOoAE4exnvA/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCn6Rnd6qV74HxXLtBrHb2VSFIGlA"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/TtokaxHZKWo/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBzWxjaniLn7v1z3T5Zs8Dw7V89uw"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/1sIWhZ7LVXA/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDMgvT082XDpVdyHo0RKoqFo54Vtw"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://i.ytimg.com/vi/D0VOXKULouQ/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLC3m-BnUYzXiqsDtQUGI55qQL2sXQ"></a>
                        </li>
                        <li>
                            <a class="thumb" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Rotating_earth_%28large%29.gif/200px-Rotating_earth_%28large%29.gif"></a>
                        </li>
                    </ul>
                </div>
            </div>
        



                <!--End:Note box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">

                </div>
                <!--End:Bottom Navigation-->  
                <!-- InstanceEndEditable -->
                <!--Bottom Ads-->
                <div class="bottom-ad clearfix">
                    <div class="ad-label">Advertisements</div>

<!--Rectangle Left-->
<div class="rectangle-left fl">
    
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Large Rectangle Left -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-9107540490929984"
     data-ad-slot="8162953958"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
<!--End:Rectangle Left-->


<!--Rectangle Right-->
<div class="rectangle-right fr">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Large Rectangle Right -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-9107540490929984"
     data-ad-slot="3324015654"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
<!--End:Rectangle Right-->                </div>
                <!--End:Bottom Ads-->
            </div>
            <!--End:Text Content-->
            <!--Feedback Form-->
            
<div class="report-error" id="feedback">
    <div class="contact-form clearfix">
        <div class="close"><span class="icon-close"></span></div>
        <form id="feedback-form">
            <h3>Your Feedback:</h3>
            <div class="clearfix">
                <div class="name fl"><label>Your Name (optional) <input type="text" name="user-name" id="user-name" /></label></div>
                <div class="email fr"><label>Your E-mail (optional) <input type="text" name="user-email" id="user-email" /></label></div>
            </div>
            <div><label>Page address <input type="text" name="page-url" id="page-url" class="disabled" disabled="disabled" /></label></div>
            <div><label>Description <textarea name="description" id="description" rows="6"></textarea></label></div>
            <p id="feedback-error">We would love to hear from you, please drop us a line.</p>
            <div><button type="button" class="action-btn" onclick="sendFeedback()"><span class="icon-send"></span> Send</button></div>
        </form>
        <div id="response"></div>
    </div>           
</div>            <!--End:Feedback Form-->
        </div>        
        <div class="sidebar">
           

<div class="skyscraper primary">


<a class="twitter-timeline" href="https://twitter.com/enlitenthem?ref_src=twsrc%5Etfw">Tweets by enlitenthem</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>




</div>

</div>
</div>

    
<div class="backdrop mobile-only"></div>

<!-- TutorialRepublic base script -->
<script>
// Adding CSS files
[   
    "{{url_for('static',filename='css/extended.new-3.8.css')}}",
    "{{url_for('static',filename='css/style2.css')}}"
].forEach(function(href) {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    (document.getElementsByTagName('head')[0]).appendChild(link);
});

// Adding JS files
[
    "{{url_for('static',filename='js/jquery-3.2.1.min.js')}}",
    "{{url_for('static',filename='js/prism.js')}}",
    "{{url_for('static',filename='js/default.new-2.9.min.js')}}"
].forEach(function(src) {
    var script = document.createElement('script');
    script.async = false; // important
    script.src = src;
    (document.getElementsByTagName('body')[0]).appendChild(script);
});
</script>


    <!--End:Footer-->
</body>
<!-- InstanceEnd --></html>
