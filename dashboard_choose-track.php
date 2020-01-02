<?php include('header.php') ?>
<?php include('navigation.php') ?>
<?php include('user-info.php') ?>

<div class="wrapper">
  <div class="wrapper-content">

  <!-- Dashboard Header -->
    <section class="dashboard-header-container mar30-top">
      <!-- Game Title -->
      <div class="full">
        <div class="dashboard-header left">Select Dashboard View</div>
      </div>
    </section><!-- END: Dashboard Header -->

    <hr class="mar20-top mar30-bot"/>

  <!-- Data Display -->
    <section>
      <div class="grid-3col ggap-30">
      
         <!-- Games -->
         <div class="full">
            <a href="game_game-list.php">
               <button class="button-large full">
                  <div class="full track-select-icon"><i class="fas fa-gamepad"></i></div>
                  <div class="full mar10-top"><h2>Games</h2></div> 
               </button>
            </a>
            <div class="full mar10-top">
               <div class="full">
                  <div class="text-center">
                     <input type="checkbox" name="dashboard-preference_games" value="dashboard-preference_users">
                     <label class="mar5-left text-sprocket-altblue" for="dashboard-preference_games">Set as Default</label></div>
                  </div>
            </div>
         </div>

         <!-- Users -->
         <div class="full">
            <a href="user_user-list.php">
               <button class="button-large full">
                  <div class="full track-select-icon"><i class="fas fa-user-friends"></i></div>
                  <div class="full mar10-top"><h2>Users</h2></div> 
               </button>
            </a>
            <div class="full mar10-top">
               <div class="full">
                  <div class="text-center">
                     <input type="checkbox" name="dashboard-preference_users" value="dashboard-preference_users">
                     <label class="mar5-left text-sprocket-altblue" for="dashboard-preference_users">Set as Default</label></div>
                  </div>
            </div>
         </div>
         
         <!-- Assignments -->
         <div class="full">
            <a href="assignment_assignment-list.php">
               <button class="button-large full">
                  <div class="full track-select-icon"><i class="fas fa-file-alt"></i></div>
                  <div class="full mar10-top"><h2>Assigments</h2></div>   
               </button>
            </a>
            <div class="full mar10-top">
               <div class="full">
                  <div class="text-center">
                     <input type="checkbox" name="dashboard-preference_assignments" value="dashboard-preference_users">
                     <label class="mar5-left text-sprocket-altblue" for="dashboard-preference-assignments">Set as Default</label></div>
                  </div>
            </div>
         </div>

      </div>

      <div class="full mar30-top">
         <p class="text-small text-sprocket-slate text-center">Selecting <b>Set as Default</b> remembers this choice for the next time you log in. This choice can be altered at any time in your account settings.</p>
      </div>

    </section><!-- END: Data Display -->
  
  </div><!-- END: Wrapper -->
</div><!-- END: Wrapper Content -->

