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
        <a href="game_game-list.php" class="left dashboard-header">Games</a>
        <div class="left divider mar10-right mar10-left"></div>
        <a href="game_class-list.php" class="left dashboard-header">Fair Play</a>
        <div class="left divider mar10-right mar10-left"></div>
        <a href="dashboard-class-list.php" class="left dashboard-header text-sprocket-altblue">Class A</a>
      </div><!-- END: Game Title -->
      </div>
    </section><!-- END: Dashboard Header -->

    <hr class="mar5-top mar20-bot"/>

  <!-- Data Display -->
    <section>
    <!-- Data Display A -->
      <div class="full box-b">
        <div class="header-b">
          <div class="full"><h3 class="text-white">Assignment Selection</h3></div>
          <div class="full"><p class="text-small text-sprocket-lblue">Assingments for  <span class="text-extrabold">Class A</span> that use <span class="text-extrabold">Fair Play</span></p></div>
        </div>
        <div class="body">
          <div class="full data-display-container mar5-bot">
              <a href="assignment-01.php" class="full data-display pad10 listlink">
                <div class="full"><p class="text-extrabold text-medium">Assignment A</p></div>
                <div class="full"><p class="text-small">Assignemnt information</p></div>
              </a> 
          </div>
          <div class="full data-display-container mar5-bot">
              <a href="assignment-01.php" class="full data-display pad10 listlink">
                <div class="full"><p class="text-extrabold text-medium">Assignment B</p></div>
                <div class="full"><p class="text-small">Assignemnt information</p></div>
              </a> 
          </div>
          <div class="full data-display-container mar5-bot">
              <a href="assignment-01.php" class="full data-display pad10 listlink">
                <div class="full"><p class="text-extrabold text-medium">Assignment C</p></div>
                <div class="full"><p class="text-small">Assignemnt information</p></div>
              </a> 
          </div>
          <div class="full data-display-container mar5-bot">
              <a href="assignment-01.php" class="full data-display pad10 listlink">
                <div class="full"><p class="text-extrabold text-medium">Assignment D</p></div>
                <div class="full"><p class="text-small">Assignemnt information</p></div>
              </a> 
          </div>
        </div>

      </div><!-- END: box-b -->

    </section><!-- END: Data Display -->

  </div><!-- END: Wrapper -->
</div><!-- END: Wrapper Content -->

<?php include('footer.php') ?>

