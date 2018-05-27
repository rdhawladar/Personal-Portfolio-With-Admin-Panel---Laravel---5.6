          <style type="text/css">
            .skill-title{
              width: 100%; 
              padding: 10px;
              margin-bottom: 15px;
              font-size: 16px;
              text-align: center;
            }
          </style>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          @include('skills/skill-details', [
                  'skill_title' => 'WEB LANGUAGE',
                  'skill_name' => 'HTML/HTML5',
                  'skill_rate' => 90
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'CSS/CSS3',
                  'skill_rate' => 90
                ])
        </div>
        <div class="row">
          @include('skills/skill-details', [
                  'skill_name' => 'PHP/PHP7',
                  'skill_rate' => 80
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'JAVASCRIPT/ ES6 / Ajax / JQuery',
                  'skill_rate' => 70
                ])
        </div>

        <div class="row">
          @include('skills/skill-details', [
                  'skill_title' => 'FRAMEWORK',
                  'skill_name' => 'LARAVEL',
                  'skill_rate' => 80
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'CODEIGNITER',
                  'skill_rate' => 80
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'VUE.JS',
                  'skill_rate' => 40
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'BOOTSTRAP4',
                  'skill_rate' => 90
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'Fabric.JS',
                  'skill_rate' => 80
                ])
        </div>
        <div class="row">
          @include('skills/skill-details', [
                  'skill_title' => 'CMS',
                  'skill_name' => 'Wordpress',
                  'skill_rate' => 80
                ])
        </div>
        <div class="row">
          @include('skills/skill-details', [
                  'skill_title' => 'OTHERS',
                  'skill_name' => 'Git / Bit Bucket / Docker',
                  'skill_rate' => 70
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'Graphics / Video Editing',
                  'skill_rate' => 60
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'Mobile Application ( Android, iOS, PhoneGap)',
                  'skill_rate' => 50
                ])
          @include('skills/skill-details', [
                  'skill_name' => 'Digital Marketing',
                  'skill_rate' => 80
                ])
        </div>
      </div>
    </div>
  </div>
</div>