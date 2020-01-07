<?php include('header.php') ?>
<?php include('navigation.php') ?>
<?php include('user-info.php') ?>

<!-- Screen Box Shadow -->
<div class="box-shadow"></div>

<div class="wrapper">
  <div class="wrapper-content">

  <!-- Dashboard Header -->
    <section class="dashboard-header-container mar30-top">
      <div class="grid-2col">
    <!-- Game Title -->
      <div class="game-header">
         <div class="left dashboard-header">Assignments</div>
      </div><!-- END: Game Title -->
      </div>
    </section><!-- END: Dashboard Header -->

    <hr class="mar5-top mar20-bot"/>
    
    <div class="full mar20-bot"><p class="text-small text-sprocket-mblue">*Do not include this text* This page displays all assignments this teacher has assigned organized by class.</div>

  <!-- Data Display -->
    <section>

   <!-- Class A -->
      <div class="full box-b">
         <div class="header-b">
            <div class="full"><h3 class="text-white">Class A</h3></div>
         </div>
         <div class="body">
            <div class="full data-display-container mar5-bot">
               <a href="dashboard-assignment.php" class="full data-display pad10 listlink">
                  <div class="full"><p class="text-extrabold text-medium">Assignment A</p></div>
                  <div class="full"><p class="text-small">Assignemnt information</p></div>
               </a>
            </div>
            <div class="full data-display-container mar5-bot">
               <a href="dashboard-assignment.php" class="full data-display pad10 listlink">
                  <div class="full"><p class="text-extrabold text-medium">Assignment B</p></div>
                  <div class="full"><p class="text-small">Assignemnt information</p></div>
               </a>
            </div>
            <div class="full data-display-container mar5-bot">
               <a href="dashboard-assignment.php" class="full data-display pad10 listlink">
                  <div class="full"><p class="text-extrabold text-medium">Assignment C</p></div>
                  <div class="full"><p class="text-small">Assignemnt information</p></div>
               </a>
            </div>
            <div class="full data-display-container mar5-bot">
               <a href="dashboard-assignment.php" class="full data-display pad10 listlink">
                  <div class="full"><p class="text-extrabold text-medium">Assignment D</p></div>
                  <div class="full"><p class="text-small">Assignemnt information</p></div>
               </a>
            </div>
         </div>
      </div><!-- END: Class A -->

   <!-- Class B -->
      <div class="full box-b mar20-top">
         <div class="header-b">
            <h3 class="text-white">Class B</h3>
         </div>
         <div class="body">
            <div class="full data-display-container mar5-bot">
               <a href="dashboard-assignment.php" class="full data-display pad10 listlink">
                  <div class="full"><p class="text-extrabold text-medium">Assignment A</p></div>
                  <div class="full"><p class="text-small">Assignemnt information</p></div>
               </a>
            </div>
            <div class="full data-display-container mar5-bot">
               <a href="dashboard-assignment.php" class="full data-display pad10 listlink">
                  <div class="full"><p class="text-extrabold text-medium">Assignment B</p></div>
                  <div class="full"><p class="text-small">Assignemnt information</p></div>
               </a>
            </div>
         </div>
      </div><!-- END: Class B -->

    </section><!-- END: Data Display -->

  </div><!-- END: Wrapper -->
</div><!-- END: Wrapper Content -->

<?php include('footer.php') ?>

