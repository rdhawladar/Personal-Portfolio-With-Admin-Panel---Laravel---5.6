
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">.row.make-columns {
    -moz-column-width: 19em;
    -webkit-column-width: 19em;
    -moz-column-gap: 1em;
    -webkit-column-gap:1em; 
}

.row.make-columns > div {
    display: inline-block;
    padding:  .5rem;
    width:  100%; 
}

 /* demo only* */
.panel {
    display: inline-block;
    height: 100%;
    width:  100%; 
}
</style>

<body>
  
  
  <br>
<div class="container">
    <div class="row make-columns">
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">1 - This is my panel with some content!
                    <br><img src="//placehold.it/130x90"></div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">2 - This is another panel with even more text content!</div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">3 - This is a panel with just some text, stuff to say and some more blah filler fill content with even more text content...
                    <br> </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">4 - This is my panel with some blah content aliquam in cursus ut, ullamcorper in tort..</div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">5 - This is another panel with even more content!</div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">6 - This is a panel with and image
                    <br><img src="//placehold.it/150x80"> </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">7 - Nullam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam codeply mauris!</div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">8 - This is a panel with and image
                    <br><img src="//placehold.it/150x100"> </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">9 - This is another panel with even more text content! Nullam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">10 - Nullam sapien massa, aliquam in cursus ut, Yes. This is another panel with even more text content!</div>
            </div>
        </div>
    </div>
</div>
<div class="section" id="achievements">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Aachievements</div>
           <div class="row">
        <div class="col-md-12">
        @for($i=1; $i <= 10; $i++)
            
            <div class="col-md-4 ">
                <div class="card">
                    @if($i%2==0)
                    <img class="card-img-top" src="https://www.gettyimages.ca/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" alt="Card image cap">
                    @else
                    <img class="card-img-top" src="http://www.middleeasteye.net/sites/default/files/styles/main_image_article_page/public/main-images/SDF%20forces%20rest%20in%20Raqqa%20%28Reuters%29.JPG" alt="Card image cap">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title">Card title that wraps to a new line</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is   a little bit longer.</p><p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        @endfor
        </div>
    </div> 
            </div>
    </div>
</div>
<!-- 

    <div class="row">
        <div class="col-md-12">
        @for($i=1; $i <= 10; $i++)
            
            <div class="col-md-4 ">
                <div class="card">
                    <img class="card-img-top" src="https://www.gettyimages.ca/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title that wraps to a new line</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is   a little bit longer.</p><p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        @endfor
        </div>
    </div> -->