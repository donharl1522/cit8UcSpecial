<?php
   // We need to use sessions, so you should always start sessions using the below code.
   session_start();
   // If the user is not logged in redirect to the login page...
   if (!isset($_SESSION['loggedin'])) {
   	header('Location: ../../login.php');
   	exit;
   	//blah blah blah
   }
   ?>
<?php require "../../config/connection.php"; ?>
<?php include '../../template/header.php'; ?>
<?php include '../../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
   <div class="container pt-4">
      <section class="vw-25">
         <div class="card">
            <div class="card-body">
               <h1>Crop Prediction</h1>
               <!-- Tabs navs -->
               <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a
                        class="nav-link active"
                        id="ex2-tab-1"
                        data-mdb-toggle="tab"
                        href="#ex2-tabs-1"
                        role="tab"
                        aria-controls="ex2-tabs-1"
                        aria-selected="true"
                        >Yearly Crop Yield</a
                        >
                  </li>
                  <li class="nav-item" role="presentation">
                     <a
                        class="nav-link"
                        id="ex2-tab-2"
                        data-mdb-toggle="tab"
                        href="#ex2-tabs-2"
                        role="tab"
                        aria-controls="ex2-tabs-2"
                        aria-selected="false"
                        >Average Productivity</a
                        >
                  </li>
                  <li class="nav-item" role="presentation">
                     <a
                        class="nav-link"
                        id="ex2-tab-3"
                        data-mdb-toggle="tab"
                        href="#ex2-tabs-3"
                        role="tab"
                        aria-controls="ex2-tabs-3"
                        aria-selected="false"
                        >Another link</a
                        >
                  </li>
               </ul>
               <!-- Tabs navs -->
               <!-- Tabs content -->
               <div class="tab-content" id="ex2-content">
                  <div
                     class="tab-pane fade show active"
                     id="ex2-tabs-1"
                     role="tabpanel"
                     aria-labelledby="ex2-tab-1"
                     >
                     <iframe class="mb-3" title="TemporaryMultiLinear" style="width:100%;height:612px"src="https://app.powerbi.com/view?r=eyJrIjoiNTZjZGZhMzAtNzhlNS00NmJhLWJkYWYtNGU4NmQxM2I3ZTUwIiwidCI6ImE1MTVlN2M0LThjZjctNGY5Ny1iMjNiLTk2NDkxNjQ1ZjdmMCIsImMiOjEwfQ%3D%3D&pageName=ReportSection258e4a3870979cc2ae80" frameborder="0" allowFullScreen="true"></iframe>
                  </div>
                  <div
                     class="tab-pane fade"
                     id="ex2-tabs-2"
                     role="tabpanel"
                     aria-labelledby="ex2-tab-2"
                     >
                     <iframe title="Dashboard1Sample - Page 1" style="width:100%;height:612px" src="https://app.powerbi.com/view?r=eyJrIjoiZGE0NDkwNzQtMzNiZS00YTA1LTk2NzMtYzE0MzRhOGEyODlmIiwidCI6ImE1MTVlN2M0LThjZjctNGY5Ny1iMjNiLTk2NDkxNjQ1ZjdmMCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                  </div>
                  <div
                     class="tab-pane fade"
                     id="ex2-tabs-3"
                     role="tabpanel"
                     aria-labelledby="ex2-tab-3"
                     >
                     Tab 3 content
                  </div>
               </div>
               <!-- Tabs content -->
            </div>
         </div>
      </section>
   </div>
</main>
<!--Main layout-->
<?php include '../../template/footer.php'; ?>