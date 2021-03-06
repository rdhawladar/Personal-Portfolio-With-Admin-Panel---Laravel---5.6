<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary nav-pill-1" role="tablist">
              
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#laravel" role="tablist"><b>Laravel</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#codeigniter" role="tablist"><b>CodeIgniter</b></a>
              </li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#js" role="tablist"><b>JS</b></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#others" role="tablist"><b>Others</b></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tv" role="tablist"><b>TV Programs</b></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
        <div class="tab-pane active" id="laravel">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Create Caddy',
                        'project_details' => 'Online Design Tool and Creator\'s  Shop',
                        'project_tools' => 'Laravel 5.6, Fabric.js, Vue.js, Redis Cache, JQuery, Ajax, Bootstrap 4, HTML5',
                        'project_img' => 'create-caddy.jpg',
                        'project_link' => 'http://qa.createcaddy.com'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Online Food Order',
                        'project_details' => 'Online Food ordering system with payment gateway',
                        'project_tools' => 'Payment Gateway, Laravel 5.5, JQuery, Ajax, Bootstrap 4, HTML5',
                        'project_img' => 'hokuto.jpg',
                        'project_link' => 'https://hokutousuisan.com/home'
                    ])
            @include('portfolio/portfolio-details', [
                        'project_title' => 'HRM and Admin',
                        'project_details' => 'Employee management, Leave management, Accounts, Report Generating',
                        'project_tools' => 'Laravel 4.2, Ajax, JQuery',
                        'project_img' => 'hrm.jpg',
                        'project_link' => 'https://github.com/rdhawladar/Human_Resource_management'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'MLM Management System',
                        'project_details' => 'Manages MLM, Accounts, Debit-Credit, Loans',
                        'project_tools' => 'Laravel 5.5, Ajax',
                        'project_img' => 'mlm.jpg',
                        'project_link' => 'https://github.com/rdhawladar/fc2'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Microfinanace',
                        'project_details' => 'Manages microfinanace and Loans',
                        'project_tools' => 'Laravel',
                        'project_img' => 'microfinance.jpg',
                        'project_link' => 'https://github.com/rdhawladar/fc2'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'FC2',
                        'project_details' => 'HRM ',
                        'project_tools' => 'Google API, Laravel 5.5, JQuery, Ajax, Bootstrap 4',
                        'project_img' => 'fc2.jpg',
                        'project_link' => 'https://github.com/rdhawladar/fc2'
                    ])
                </div>
            </div>
        </div>
        <div class="tab-pane" id="codeigniter">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'University Automation ERP',
                        'project_details' => 'Manages admission, attentendce, exams, results, Library, Accounts and many more',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'university.jpg',
                        'project_link' => 'https://github.com/rdhawladar/University_Automation_ERP'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'School Management System',
                        'project_details' => 'Manages admission, attentendce, exams, results and many more',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'school.jpg',
                        'project_link' => 'http://viewsoft.biz/schoolerp/'
                        
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'School Management System',
                        'project_details' => 'Manages admission, attentendce, exams, results and many more',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'payroll.jpg',
                        'project_link' => 'http://viewsoft.biz/schoolerp/'
                        
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Ecommerce Site',
                        'project_details' => 'Smart cart system, Paypall Sandbox Gateway, Admin panel, Sales Report',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'payroll.jpg',
                        'project_link' => 'https://github.com/rdhawladar/ecom_3'
                        
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Procurement',
                        'project_details' => 'Stock, Order, Report Generator, 4 Level user access',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'procurement.jpg',
                        'project_link' => 'https://github.com/rdhawladar/Procurement_CI'
                        
                    ])
                </div>
            </div>
        </div>
        <div class="tab-pane" id="js">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Personal Notebook',
                        'project_details' => 'Personal notebook to write notes',
                        'project_tools' => 'VueJS, Laravel 5.6, Balma',
                        'project_img' => 'vue.jpg',
                        'project_link' => 'https://github.com/rdhawladar/personal_notebook'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Personal Portfolio',
                        'project_details' => 'Personal Portfolio with Admin Panel',
                        'project_tools' => 'Laravel 5.6, Bankend in VueJS',
                        'project_img' => 'portfolio.jpg',
                        'project_link' => 'Personal-Portfolio-With-Admin-Panel---Laravel---5.6/'
                        
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Crud Operation Using AngularJS',
                        'project_details' => '',
                        'project_tools' => 'AngularJS',
                        'project_img' => 'angular.jpg',
                        'project_link' => 'https://github.com/rdhawladar/angularjs_CRUD_Op'
                        
                    ])
                </div>
            </div>
        </div>
        <div class="tab-pane" id="others">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Personal Notebook',
                        'project_details' => 'Personal notebook to write notes',
                        'project_tools' => 'VueJS, Laravel 5.6, Balma',
                        'project_img' => 'vue.jpg',
                        'project_link' => 'https://github.com/rdhawladar/personal_notebook'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Personal Portfolio',
                        'project_details' => 'Personal Portfolio with Admin Panel',
                        'project_tools' => 'Laravel 5.6, Bankend in VueJS',
                        'project_img' => 'portfolio.jpg',
                        'project_link' => 'Personal-Portfolio-With-Admin-Panel---Laravel---5.6/'
                        
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Crud Operation Using AngularJS',
                        'project_details' => '',
                        'project_tools' => 'AngularJS',
                        'project_img' => 'angular.jpg',
                        'project_link' => 'https://github.com/rdhawladar/angularjs_CRUD_Op'
                        
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'TMSS Magazine',
                        'project_details' => '',
                        'project_tools' => 'Wordpress',
                        'project_img' => 'wordpress.jpg',
                        'project_link' => 'http://tmssmagazine.com/'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'TMSS ICT LTD',
                        'project_details' => '',
                        'project_tools' => 'Wordpress',
                        'project_img' => 'wordpress.jpg',
                        'project_link' => 'http://tmss-ict.com/'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'TMSS ICT LTD',
                        'project_details' => '',
                        'project_tools' => 'Wordpress',
                        'project_img' => 'wordpress.jpg',
                        'project_link' => 'http://tmss-bd.org/'
                    ])
                </div>
            </div>
        </div>
      
        <div class="tab-pane" id="tv">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Web Design and Development Live Episode',
                        'project_tools' => 'Introduction to HTML',
                        'project_img' => 'deshtv.jpg',
                        'project_link' => 'https://www.youtube.com/watch?v=bAhQa0FB2SU&t=10s'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Web Design and Development Live Episode',
                        'project_tools' => 'Web Design and CSS',
                        'project_img' => 'me.png',
                        'project_link' => 'https://www.youtube.com/watch?v=NSd1ctGV4qA'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'Web Design and Development Live Episode',
                        'project_tools' => 'Web Development and PHP',
                        'project_img' => 'deshtv.jpg',
                        'project_link' => 'https://www.youtube.com/watch?v=mv-8HGtCrxE&t=8s'
                    ])
                </div>
            </div>
        </div>

      

    </div>
  </div>
</div>