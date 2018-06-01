<div class="col-md-6 col-xl-4 col-sm-6 col-12">
    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <!-- <a href="#" data-toggle="modal" data-target="#details"> -->
        <a href="{{$project_link or '#'}}" target="_blank">
            <figure class="cc-effect">
                <img src="{{asset('images/portfolio/'.$project_img)}}" alt="Image"/>
                <figcaption>
                    <div class="h4">{{$project_title or ''}}</div>
                    <p>{{$project_details or ''}}</p>
                    <p> <b>{{$project_tools or ''}} </b></p>
                </figcaption>
            </figure>
        </a>
    </div>
</div>

<!-- Modal -->
<div id="details" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>    
        <p>{{$project_title}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>