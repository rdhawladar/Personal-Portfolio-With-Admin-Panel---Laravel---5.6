@if(isset($skill_title))
  <span class="skill-title"><b>{{$skill_title}}</b></span>
  <hr>
@endif
<div class="col-md-6 skill-container">
  <div class="progress-container progress-primary"><span class="progress-badge">{{$skill_name}}</span>
    <div class="progress">
      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill_rate}}%;"></div><span class="progress-value">{{$skill_rate}}%</span>
    </div>
  </div>
</div>