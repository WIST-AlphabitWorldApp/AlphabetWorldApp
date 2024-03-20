<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Dashboard </title>

	    <!-- EXTERENAL LIBRARY -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Mada:wght@200;300;400&family=Tajawal:wght@200;300;400&display=swap" rel="stylesheet"><link
		rel="stylesheet"
		href="https://fonts.google.com/specimen/Alkalami?preview.text=%D9%85%D9%87%D8%A7%D9%85%D9%8A&preview.text_type=custom&subset=arabic"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
		/>
		<!-- END EXTERENAL LIBRARY -->
	
	<!-- CSS files -->
    <link href="asset/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="asset/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="asset/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="asset/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="asset/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <link href="asset/Css/main.css" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="asset/dist/js/demo-theme.min.js?1684106062"></script>
   
    <div class="page ">
      <div class="container">
      <!-- Navbar -->
	  <nav class="navbar navbar-expand mt-2 pe-5 rounded-5 " style="background: none;">
        <span><img src="asset/image/menu1.svg" class="mt-3" width="20" alt=""></span>
        <a class="navbar-brand pe-3 text-white" href="#">لوحة التحكم</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
               
          <form class="form-inline  my-lg-0">
            <div class="d-flex justify-content-end bg-white rounded-3">
            <span class=" pt- pe-2 ps-1 my-1" style="border-left: 1px solid rgb(219, 207, 207);  ">
				<i class="fa fa-search border-right"></i> </span>
            <input class="form-control mr-sm-2 border-0" type="search" placeholder="البحث.." aria-label="Search">
          </div>
          </form>
       
        </div>
      </nav>
    
     <!-- SECTION Date -->
				<div class="date rounded mt-1 mx-5   "  dir="rtl">
				
					<div class="row  d-flex justify-content-between">
						<div class="col-3">
						<h2 class="fw-bold fs-1 pe-3">اليوم  
						</h2>
						<div class="row pb-2 pe-3">
						<span class="fw-bold"> الجمعة مارس<span>18 2024 12:00 PM</span> </span>
						<span></span>
						</div>
						
						</div>   
						<div class="col-3 pt-4 ps-4">
						<div class="nav-item dropdown d-none d-md-flex justify-content-end ">
							<a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
							<!-- Download SVG icon from http://tabler-icons.io/i/bell -->
							<img src="asset/image/notification.png" width="20" alt="" srcset="">
							<span class="badge bg-red"></span>
							</a>
							</div>
						
						</div> 
					</div>
				</div>
    <!-- SECTION Date -->

    <!-- start section statistics -->
       <div class="statistics  me-5 mt-3  " style="width: 90%;">
			<div class="row me-5 pe-5  d-flex justify-content-center">
				<div class="col-lg-3 ">
				<div class="card rounded-3 py-4 px-5" style="width: 14rem;">
					<h2 class="d-flex justify-content-center">التحديات</h2>
					<div class="card-body d-flex justify-content-center">
						<span class="fw-bold fs-2 px-4 py-3 rounded-3">3</span>
					</div>
				</div>
				</div>
		     	<div class="col-lg-3 ">
					<div class="card rounded-3 py-4 px-5" style="width: 14rem;">
						<h2 class="d-flex justify-content-center">الكؤوس</h2>
						<div class="card-body d-flex justify-content-center">
						<span class="fw-bold fs-2 px-4 py-3 rounded-3">3</span>
						</div>
					</div>
			    </div>
			<div class="col-lg-3 ">
				<div class="card rounded-3 py-4 px-5" style="width: 14rem;">
					<h2 class="d-flex justify-content-center">النقاط</h2>
					<div class="card-body d-flex justify-content-center">
					<span class="fw-bold fs-2 px-4 py-3 rounded-3">3</span>
					</div>
				</div>
			</div>
			
		
		</div>
       </div> 
      <!-- end section statistics -->


      <!-- start last activities -->
       <div class="activities ">
        <div class="container rounded-3 mt-5  " style="width: 90%;">
          <h2 class="pt-2 ">اخر النشاطات</h2>
          <div class="row">
            <div class="nav-item ">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(asset/static/avatars/000m.jpg) ; width: 50px; height: 50px;"></span>
                <div class="d-none d-xl-block pe-2">
                  <div>Paweł Kuna</div>
                  <div class="mt-1 small text-muted">UI Designer</div>
                </div>
              </a>
              
              <table class="table mt-5" >
                <thead>
                  <tr >
                    <th style="color: #2684ff;" class="fs-4 fw-bolder" scope="col" >المستخدم</th>
                    <th style="color: #2684ff;" class="fs-4 fw-bolder" scope="col">النشاط</th>
                    <th style="color: #2684ff;" class="fs-4 fw-bolder" scope="col">الوقت</th>
                    <th style="color: #2684ff;" class="fs-4 fw-bolder" scope="col">العرض</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"> 
                       <div class="nav-item ">
                         <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm rounded-circle" style="background-image: url(asset/static/avatars/000m.jpg) ; width: 50px; height: 50px;"></span>
                            <div class="d-none d-xl-block pe-2">
                              <div>Paweł Kuna</div>
                              
                            </div>
                        </a>
                      
                    </th>
                    <td>قام بأضافة مرحلة جديدة</td>
                    <td>01:00PM</td>
                    <td><button class="p-2 px-3 btn fw-bold rounded-2" style="background: #bddafe;">عرض</button></td>
                  </tr>
                  <tr>
                    <th scope="row"> 
                       <div class="nav-item ">
                         <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm rounded-circle" style="background-image: url(asset/static/avatars/000m.jpg) ; width: 50px; height: 50px;"></span>
                            <div class="d-none d-xl-block pe-2">
                              <div>Paweł Kuna</div>
                              
                            </div>
                        </a>
                      
                    </th>
                    <td ">
                     <div>قام بأضافة مرحلة جديدة</div> 
                    </td>
                    <td>01:00PM</td>
                    <td><button class="p-2 px-3 btn fw-bold rounded-2" style="background: #bddafe;">عرض</button></td>
                  </tr>
                  <tr>
                    <th scope="row"> 
                       <div class="nav-item ">
                         <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm rounded-circle" style="background-image: url(asset/static/avatars/000m.jpg) ; width: 50px; height: 50px;"></span>
                            <div class="d-none d-xl-block pe-2">
                              <div>Paweł Kuna</div>
                              
                            </div>
                        </a>
                      
                    </th>
                    <td ">
                     <div>قام بأضافة مرحلة جديدة</div> 
                    </td>
                    <td>01:00PM</td>
                    <td><button class="p-2 px-3 btn fw-bold rounded-2" style="background: #bddafe;">عرض</button></td>
                  </tr>
                  <tr>
                    <th scope="row"> 
                       <div class="nav-item ">
                         <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm rounded-circle" style="background-image: url(asset/static/avatars/000m.jpg) ; width: 50px; height: 50px;"></span>
                            <div class="d-none d-xl-block pe-2">
                              <div>Paweł Kuna</div>
                              
                            </div>
                        </a>
                      
                    </th>
                    <td ">
                     <div>قام بأضافة مرحلة جديدة</div> 
                    </td>
                    <td>01:00PM</td>
                    <td><button class="p-2 px-3 btn fw-bold rounded-2" style="background: #bddafe;">عرض</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       </div>
      <!-- end last activities -->

    </div>
    </div>
        <!-- Sidebar -->
		<aside class=" navbar-vertical navbar-right navbar-expand">
			<div class="container-fluid">
			  <h1 class="d-flex justify-content-center p-3">
				<a href=".">
				  <img src="asset/image/figm1.png"  alt="Tabler" class="img-fluid" width="90">
				</a>
			  </h1>
			  
			  <div class="collapse navbar-collapse" id="sidebar-menu">
				<ul class="navbar-nav pt-lg-3">
				  <li class="nav-item py-3 ">
					
					<a class="nav-link rounded-3 me-1 px-5 active py-3" href="index.html" " >
					  <span class="nav-link-icon ps-1 d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
						<!--  <svg  class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg> -->
						<img src="asset/image/home.png" >
					   </span>
					  
					  <span class="nav-link-title">
						
						الرئيسية
						 
					  </span>
					</a>
				  </li>
				  <li class="nav-item py-3">
					<a class="nav-link rounded-3 py-3" href="user.html" >
					  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
						<img src="asset/image/user.png" alt="">
					  </span>
					  <span class="nav-link-title pe-2">
					  المستخدمون 
					  </span>
					</a>
				  </li>
				  <li class="nav-item py-3">
					<a class="nav-link rounded-3 py-3" href="level.html" >
					  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
						<svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M5.57812 24.2194H4.01562C3.70482 24.2194 3.40675 24.0959 3.18698 23.8761C2.96722 23.6564 2.84375 23.3583 2.84375 23.0475V16.0162C2.84375 15.7054 2.96722 15.4074 3.18698 15.1876C3.40675 14.9678 3.70482 14.8444 4.01562 14.8444H5.57812C5.88892 14.8444 6.187 14.9678 6.40676 15.1876C6.62653 15.4074 6.75 15.7054 6.75 16.0162V23.0475C6.75 23.3583 6.62653 23.6564 6.40676 23.8761C6.187 24.0959 5.88892 24.2194 5.57812 24.2194Z" fill="#2684FF"/>
						  <path d="M16.5156 24.218H14.9531C14.6423 24.218 14.3443 24.0945 14.1245 23.8748C13.9047 23.655 13.7812 23.3569 13.7812 23.0461V11.3274C13.7812 11.0166 13.9047 10.7185 14.1245 10.4988C14.3443 10.279 14.6423 10.1555 14.9531 10.1555H16.5156C16.8264 10.1555 17.1245 10.279 17.3443 10.4988C17.564 10.7185 17.6875 11.0166 17.6875 11.3274V23.0461C17.6875 23.3569 17.564 23.655 17.3443 23.8748C17.1245 24.0945 16.8264 24.218 16.5156 24.218Z" fill="#2684FF"/>
						  <path d="M21.9844 24.2186H20.4219C20.1111 24.2186 19.813 24.0952 19.5932 23.8754C19.3735 23.6556 19.25 23.3575 19.25 23.0467V5.85925C19.25 5.54845 19.3735 5.25038 19.5932 5.03061C19.813 4.81084 20.1111 4.68738 20.4219 4.68738H21.9844C22.2952 4.68738 22.5932 4.81084 22.813 5.03061C23.0328 5.25038 23.1562 5.54845 23.1562 5.85925V23.0467C23.1562 23.3575 23.0328 23.6556 22.813 23.8754C22.5932 24.0952 22.2952 24.2186 21.9844 24.2186Z" fill="#2684FF"/>
						  <path d="M11.0469 24.2183H9.48437C9.17357 24.2183 8.8755 24.0949 8.65573 23.8751C8.43596 23.6553 8.3125 23.3572 8.3125 23.0464V1.9527C8.3125 1.6419 8.43596 1.34383 8.65573 1.12406C8.8755 0.904288 9.17357 0.780823 9.48437 0.780823H11.0469C11.3577 0.780823 11.6557 0.904288 11.8755 1.12406C12.0953 1.34383 12.2187 1.6419 12.2187 1.9527V23.0464C12.2187 23.3572 12.0953 23.6553 11.8755 23.8751C11.6557 24.0949 11.3577 24.2183 11.0469 24.2183Z" fill="#2684FF"/>
						  </svg>                     </span>
					  <span class="nav-link-title pe-2 ">
						المستويات
					  </span>
					</a>
				  </li>
				  <li class="nav-item py-3">
					<a class="nav-link rounded-3 py-3" href="challanges.html" >
					  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
						<svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M1.56152 15.3424C2.71918 20.1165 6.80129 23.6441 11.6594 23.6441C17.4179 23.6441 22.086 18.688 22.086 12.5743C22.086 6.92952 18.1064 2.27153 12.9633 1.59033V15.3424H1.56152Z" fill="#2684FF"/>
						  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3566 9.80619H0.010498C0.65204 4.34582 5.03943 0.120605 10.3563 0.120605H10.3566V9.80619Z" fill="#2684FF"/>
						  </svg>                     </span>
					  <span class="nav-link-title pe-2">
					  التحديات 
					  </span>
					</a>
				  </li>
				  <li class="nav-item py-3 dropdown">
					<a class="nav-link rounded-3 py-3 dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
					  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
						<img src="asset/image/setting.png" alt="">
					  </span>
					  <span class="nav-link-title pe-1">
						الاعدادات
					  </span>
					</a>
					<div class="dropdown-menu">
					  <div class="dropdown-menu-columns">
						<div class="dropdown-menu-column">
						  <a class="dropdown-item" href="./empty.html">
							Empty page
						  </a>
						  <a class="dropdown-item" href="./activity.html">
							Activity
						  </a>
						  <a class="dropdown-item" href="./gallery.html">
							Gallery
						  </a>
						  <a class="dropdown-item" href="./search-results.html">
							Search results
						  </a>
						  <a class="dropdown-item" href="./faq.html">
							FAQ
							<span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
						  </a>
						  <a class="dropdown-item" href="./users.html">
							Users
						  </a>
						</div>
						<div class="dropdown-menu-column">
						  <a class="dropdown-item" href="./logs.html">
							Logs
							<span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
						  </a>
						  <a class="dropdown-item" href="./settings.html">
							Settings
							<span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
						  </a>
						</div>
					  </div>
					</div>
				  </li>
				</ul>
			  </div>
			</div>
		  </aside>
	   
       </div>
      <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">New report</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
              </div>
              <label class="form-label">Report type</label>
              <div class="form-selectgroup-boxes row mb-3">
                <div class="col-lg-6">
                  <label class="form-selectgroup-item">
                    <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                      <span class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </span>
                      <span class="form-selectgroup-label-content">
                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                        <span class="d-block text-muted">Provide only basic data needed for the report</span>
                      </span>
                    </span>
                  </label>
                </div>
                <div class="col-lg-6">
                  <label class="form-selectgroup-item">
                    <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                      <span class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </span>
                      <span class="form-selectgroup-label-content">
                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                        <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="mb-3">
                    <label class="form-label">Report url</label>
                    <div class="input-group input-group-flat">
                      <span class="input-group-text">
                        https://tabler.io/reports/
                      </span>
                      <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label class="form-label">Visibility</label>
                    <select class="form-select">
                      <option value="1" selected>Private</option>
                      <option value="2">Public</option>
                      <option value="3">Hidden</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Client name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Reporting period</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div>
                    <label class="form-label">Additional information</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
              </a>
              <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                Create new report
              </a>
            </div>
          </div>
        </div>
      </div>
    <!-- Libs JS -->
    <script src="asset/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
    <script src="asset/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
    <script src="asset/dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
    <script src="asset/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
    <!-- Tabler Core -->
    <script src="asset/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="asset/dist/js/demo.min.js?1684106062" defer></script>
	<script src="asset/js/main.js"></script>   
    <script src="asset/js/all.min.js"></script>   
    <script src="asset/js/bootstrap.bundle.min.js"></script>  
 
   
 
 
 
 
 <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
      		chart: {
      			type: "area",
      			fontFamily: 'inherit',
      			height: 40.0,
      			sparkline: {
      				enabled: true
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: .16,
      			type: 'solid'
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      			curve: "smooth",
      		},
      		series: [{
      			name: "Profits",
      			data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			type: 'datetime',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      		],
      		colors: [tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 40.0,
      			sparkline: {
      				enabled: true
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		fill: {
      			opacity: 1,
      		},
      		stroke: {
      			width: [2, 1],
      			dashArray: [0, 3],
      			lineCap: "round",
      			curve: "smooth",
      		},
      		series: [{
      			name: "May",
      			data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
      		},{
      			name: "April",
      			data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			type: 'datetime',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      		],
      		colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 40.0,
      			sparkline: {
      				enabled: true
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Profits",
      			data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			type: 'datetime',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      		],
      		colors: [tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 240,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      			stacked: true,
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Web",
      			data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
      		},{
      			name: "Social",
      			data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
      		},{
      			name: "Other",
      			data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      			xaxis: {
      				lines: {
      					show: true
      				}
      			},
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			type: 'datetime',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
      		],
      		colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("green", 0.8)],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:on
      document.addEventListener("DOMContentLoaded", function() {
      	const map = new jsVectorMap({
      		selector: '#map-world',
      		map: 'world',
      		backgroundColor: 'transparent',
      		regionStyle: {
      			initial: {
      				fill: tabler.getColor('body-bg'),
      				stroke: tabler.getColor('border-color'),
      				strokeWidth: 2,
      			}
      		},
      		zoomOnScroll: false,
      		zoomButtons: false,
      		// -------- Series --------
      		visualizeData: {
      			scale: [tabler.getColor('bg-surface'), tabler.getColor('primary')],
      			values: { "AF": 16, "AL": 11, "DZ": 158, "AO": 85, "AG": 1, "AR": 351, "AM": 8, "AU": 1219, "AT": 366, "AZ": 52, "BS": 7, "BH": 21, "BD": 105, "BB": 3, "BY": 52, "BE": 461, "BZ": 1, "BJ": 6, "BT": 1, "BO": 19, "BA": 16, "BW": 12, "BR": 2023, "BN": 11, "BG": 44, "BF": 8, "BI": 1, "KH": 11, "CM": 21, "CA": 1563, "CV": 1, "CF": 2, "TD": 7, "CL": 199, "CN": 5745, "CO": 283, "KM": 0, "CD": 12, "CG": 11, "CR": 35, "CI": 22, "HR": 59, "CY": 22, "CZ": 195, "DK": 304, "DJ": 1, "DM": 0, "DO": 50, "EC": 61, "EG": 216, "SV": 21, "GQ": 14, "ER": 2, "EE": 19, "ET": 30, "FJ": 3, "FI": 231, "FR": 2555, "GA": 12, "GM": 1, "GE": 11, "DE": 3305, "GH": 18, "GR": 305, "GD": 0, "GT": 40, "GN": 4, "GW": 0, "GY": 2, "HT": 6, "HN": 15, "HK": 226, "HU": 132, "IS": 12, "IN": 1430, "ID": 695, "IR": 337, "IQ": 84, "IE": 204, "IL": 201, "IT": 2036, "JM": 13, "JP": 5390, "JO": 27, "KZ": 129, "KE": 32, "KI": 0, "KR": 986, "KW": 117, "KG": 4, "LA": 6, "LV": 23, "LB": 39, "LS": 1, "LR": 0, "LY": 77, "LT": 35, "LU": 52, "MK": 9, "MG": 8, "MW": 5, "MY": 218, "MV": 1, "ML": 9, "MT": 7, "MR": 3, "MU": 9, "MX": 1004, "MD": 5, "MN": 5, "ME": 3, "MA": 91, "MZ": 10, "MM": 35, "NA": 11, "NP": 15, "NL": 770, "NZ": 138, "NI": 6, "NE": 5, "NG": 206, "NO": 413, "OM": 53, "PK": 174, "PA": 27, "PG": 8, "PY": 17, "PE": 153, "PH": 189, "PL": 438, "PT": 223, "QA": 126, "RO": 158, "RU": 1476, "RW": 5, "WS": 0, "ST": 0, "SA": 434, "SN": 12, "RS": 38, "SC": 0, "SL": 1, "SG": 217, "SK": 86, "SI": 46, "SB": 0, "ZA": 354, "ES": 1374, "LK": 48, "KN": 0, "LC": 1, "VC": 0, "SD": 65, "SR": 3, "SZ": 3, "SE": 444, "CH": 522, "SY": 59, "TW": 426, "TJ": 5, "TZ": 22, "TH": 312, "TL": 0, "TG": 3, "TO": 0, "TT": 21, "TN": 43, "TR": 729, "TM": 0, "UG": 17, "UA": 136, "AE": 239, "GB": 2258, "US": 4624, "UY": 40, "UZ": 37, "VU": 0, "VE": 285, "VN": 101, "YE": 30, "ZM": 15, "ZW": 5 },
      		},
      	});
      	window.addEventListener("resize", () => {
      		map.updateSize();
      	});
      });
      // @formatter:off
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
      		chart: {
      			type: "radialBar",
      			fontFamily: 'inherit',
      			height: 40,
      			width: 40,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		plotOptions: {
      			radialBar: {
      				hollow: {
      					margin: 0,
      					size: '75%'
      				},
      				track: {
      					margin: 0
      				},
      				dataLabels: {
      					show: false
      				}
      			}
      		},
      		colors: [tabler.getColor("blue")],
      		series: [35],
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
      		chart: {
      			type: "area",
      			fontFamily: 'inherit',
      			height: 192,
      			sparkline: {
      				enabled: true
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: .16,
      			type: 'solid'
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      			curve: "smooth",
      		},
      		series: [{
      			name: "Purchases",
      			data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			type: 'datetime',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      		],
      		colors: [tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      		point: {
      			show: false
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 24,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      		},
      		series: [{
      			color: tabler.getColor("primary"),
      			data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
      		}],
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 24,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      		},
      		series: [{
      			color: tabler.getColor("primary"),
      			data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
      		}],
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 24,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      		},
      		series: [{
      			color: tabler.getColor("primary"),
      			data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
      		}],
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 24,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      		},
      		series: [{
      			color: tabler.getColor("primary"),
      			data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
      		}],
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 24,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      		},
      		series: [{
      			color: tabler.getColor("primary"),
      			data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
      		}],
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 24,
      			animations: {
      				enabled: false
      			},
      			sparkline: {
      				enabled: true
      			},
      		},
      		tooltip: {
      			enabled: false,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      		},
      		series: [{
      			color: tabler.getColor("primary"),
      			data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
      		}],
      	})).render();
      });
      // @formatter:on
    </script>
  </body>
</html><?php /**PATH D:\All_My_Projects\Git +WIST\New Pull requests AlphabetWorldApp\AlphabetWorldApp\alphabet_world_app\resources\views/welcome.blade.php ENDPATH**/ ?>