<div class="page-container row-fluid">
<!-- SIDEBAR - START -->
<div class="page-sidebar ">
   <!-- MAIN MENU - START -->
   <div class="page-sidebar-wrapper" id="main-menu-wrapper">
      <!-- USER INFO - START -->
      <div class="profile-info row">
         <div class="profile-image col-md-4 col-sm-4 col-xs-4">
            <a href="ui-profile.html">
            <img src="{{asset('data/profile/profile.png')}}" class="img-responsive img-circle">
            </a>
         </div>
         <div class="profile-details col-md-8 col-sm-8 col-xs-8">
            <h3>
               <a href="#">Doctor</a>
               <!-- Available statuses: online, idle, busy, away and offline -->
               <span class="profile-status online"></span>
            </h3>
            <p class="profile-title">Admin</p>
         </div>
      </div>
      <!-- USER INFO - END -->
      <ul class='wraplist'>
         <li class=""> 
            <a href="#">
            <i class="fa fa-dashboard"></i>
            <span class="title">Dashboard</span>
            </a>
         </li>
         <li class="">
            <a href="javascript:;">
            <i class="fa fa-user-md"></i>
            <span class="title">Doctors</span>
            <span class="arrow "></span><span class="label label-orange"></span>
            </a>
            <ul class="sub-menu" >
               <li>
                  <a class="" href="#" >Add Doctor</a>
               </li>
               <li>
                  <a class="" href="#" >Show Doctor</a>
               </li>
               <li>
                  <a class="" href="#" >Student Replies</a>
               </li>
            </ul>
         </li>
         <li class="">
            <a href="javascript:;">
            <i class="fa fa-suitcase"></i>
            <span class="title">Students</span>
            <span class="arrow "></span><span class="label label-orange"></span>
            </a>
            <ul class="sub-menu" >
               <li>
                  <a class="" href="#" >Add Student</a>
               </li>
               <li>
                  <a class="" href="#" >Show Student</a>
               </li>
               <li>
                  <a class="" href="#" >Show Patient Query</a>
               </li>
               <li>
                  <a class="" href="#" >Add Reply</a>
               </li>
            </ul>
         </li>
         
         <li class="">
            <a href="javascript:;">
            <i class="fa fa-wheelchair"></i>
            <span class="title">Patient</span>
            <span class="arrow "></span><span class="label label-orange"></span>
            </a>
            <ul class="sub-menu" >
               <li>
                  <a class="" href="#" >Patient Login</a>
               </li>
            </ul>
         </li>
      </ul>
   </div>
   <!-- MAIN MENU - END -->
  
</div>