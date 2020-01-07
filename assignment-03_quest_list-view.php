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
      <div class="full">
        <div class="full"><h1 class="left text-extrabold text-sprocket-altblue">Assigment A</h1></div>
        <div class="full">
          <a href="" class="left">Quest</a>
          <p class="left mar5-left mar5-right text-sprocket-lblue">|</p>          
          <a href="" class="left">Class A</a>
        </div>
        
      </div><!-- END: Game Title -->
      <!-- Dates Container -->
        <div class="game-dates date-range-container">
          <ul>
          <!-- Dates -->
            <li>
              <div class="dashboard-dates">
                <p>
                  <span class="text-extrabold text-sprocket-dblue">10.6.2019</span> 
                  <span class="text-extrabold text-sprocket-slate">-</span> 
                  <span class="text-extrabold text-sprocket-dblue">6.14.2019</span>
                </p>
              </div>
            </li><!-- END: Dates -->
          <!-- Change Dates -->
            <li class="mar10-left">
              <a href="">
                <button class="button-blue"><i class="far fa-calendar-alt"></i></button>
              </a>
            </li><!-- END: Change Dates -->
            <li class="mar10-left mar5-top"><a class="button-blue text-white" href="#popup1">Filter Data</a></li>
          </ul>
        </div><!-- END: Dates Container -->
      </div>
    </section><!-- END: Dashboard Header -->

    <hr class="mar15-top mar15-bot"/>

  <!-- Data Filter -->
    <section>
      <div id="popup1" class="overlay">
        <a class="cancel" href="#"></a>
        <div class="popup">
          <div class="full">
            <div class="header-b"><h3 class="text-white">Filter Data</h3></div>
            <div class="full pad20">

                <div class="grid-2col ggap-20">
                <!-- Assignment Selection -->
                  <div class="full">
                    <div class="full mar5-bot">
                      <label for="AssignmentSelect"><h5 class="text-sprocket-slate">Select Assignment</h5></label>
                    </div>
                    <div class="full">
                      <select name="AssignemntSelect" id="" class="full">
                        <option value="AssignmentA">Assignment A</option>
                        <option value="AssignmentB">Assignment B</option>
                        <option value="AssignmentC">Assignment C</option>
                        <option value="AssignmentD">Assignment D</option>
                      </select>
                    </div>
                  </div><!-- END: Assignment Selection -->

                  <!-- User Selection -->
                    <div class="full">
                      <div class="full mar5-bot">
                        <label for="UserSelect"><h5 class="text-sprocket-slate">Select Students</h5></label>
                      </div>
                      <div class="full">
                        <select name="UserSelect" id="" class="full">
                          <option value="FullClass">All Students</option>
                          <option value="UserA">Student A</option>
                          <option value="UserB">Student B</option>
                          <option value="UserC">Student C</option>
                        </select>
                      </div>
                  </div><!-- END: User Selection -->
                </div><!-- END: grid-2col -->

                <div class="full mar20-top">
                  <!-- Assignment Selection -->
                    <div class="full mar5-bot">
                      <label for="LevelSelect"><h5 class="text-sprocket-slate">Select a Level</h5></label>
                    </div>
                    <div class="full">
                      <select name="LevelSelect" id="" class="full">
                      <option value="AssignmentA">All Levels</option>
                        <option value="AssignmentA">Home</option>
                        <option value="AssignmentA">Beach</option>
                        <option value="AssignmentA">Head Start</option>
                        <option value="AssignmentA">Halloween</option>
                        <option value="AssignmentA">Carnival</option>
                        <option value="AssignmentA">Park</option>
                        <option value="AssignmentA">Museum</option>
                        <option value="AssignmentA">House Party</option>
                        <option value="AssignmentA">Military Base</option>
                        <option value="AssignmentA">Airport</option>
                        <option value="AssignmentA">Hospital</option>
                        <option value="AssignmentA">Casino</option>
                        <option value="AssignmentA">Garden</option>
                        <option value="AssignmentA">Grocery Store</option>
                      </select>
                    </div><!-- END: Assignment Selection -->
                </div>

                <hr class="mar20-top mar20-bot"/>

                <div class="full">
                  <!-- Buttons -->
                  <div class="grid-3col text-center">
                    <div class="full"></div>
                    <div class="full grid-2col ggap-20">
                      <a href="assignment-03_quest-student_achievements.php" class="button-blue text-white"><h5>Apply Filter</h5></a>
                      <a href="#" class="button-red text-white"><h5>Reset Values</h5></a>
                    </div>
                    <div class="full"></div>
                    
                  </div><!-- Buttons -->
                </div>
              </div>
            </div><!-- END: full -->
          <a class="close" href="#"><i class="fas fa-times text-sprocket-lblue"></i></a>
        </div><!-- END: Popup --> 
      </div>
    </section><!-- END: Data Filter -->


  <!-- Data Display -->
    <section>
      
      <!-- Data Display A -->
      <div class="full box-b">
          <div class="header-b">
            <h4 class="text-sprocket-lblue">
              All Users ( <span class="text-white">68</span> ) 
              <span class="text-sprocket-altblue mar5-left mar5-right"> | </span>
              <span class="text-white">All Levels</span></h4>
          </div>
          <div class="body">
            <div class="grid-3col ggap-10">
              <div class="full box-c">
                <div class="full"><h5 class="text-sprocket-slate">Total Sessions</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">44</h5></div>
              </div>              
              <div class="full box-c">
                <div class="full"><h5 class="text-sprocket-slate">Average Time Per Session</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">1 min : 22 sec</h5></div>
              </div>
              <div class="full box-c">
                <div class="full"><h5 class="text-sprocket-slate">Total Play Time</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">33 min : 4 sec</h5></div>
              </div>
            </div>
          </div>
        </div><!-- Data Display A -->

    </section><!-- END: Data Display -->

  <!-- Statistics Display -->
    <section>
      <div class="full box-b mar30-top">
        <div class="header-b">
          <h3 class="text-white">Assignment Data</h3>
        </div>
        <div class="body">

          <div class="grid-3col-data-select mar20-bot">
            <!-- Assignment Selection -->
            <div class="full">
              <select name="DataTypeSelect" id="" class="full">
              <option value="AssignmentA">Chapters Complete Per Unique User</option>
              <option value="AssignmentA">Total Time Spent Per Chapter</option>
              <option value="AssignmentA">Chapter Means</option>
              </select>
            </div><!-- END: Assignment Selection -->
            <a href="assignment-03_quest.php" class="full text-center tab-responsive">
              <i class="fas fa-chart-pie text-sprocket-slate"></i>
              <p class="text-sprocket-slate">Graph View</p>
            </a>
 
            <a href="#" class="full text-center tab-responsive">
              <i class="fas fa-list text-sprocket-dblue text-extrabold"></i>
              <p class="text-sprocket-dblue text-extrabold"> List View</p></a>
          </div>
          
          

          <div class="full box-tabs">
          <div class="body">


          <div class="full">
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Home ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Beach ( <span class="text-extrabold">10 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Head Start ( <span class="text-extrabold">11 / 44</span> )<span  tooltip="This is how we could call out something special about this item"><i class="far fa-info-circle text-extrabold text-sprocket-altblue mar5-left"></i></p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Halloween ( <span class="text-extrabold">10 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Carnival ( <span class="text-extrabold">6 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Park ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Museum ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">House Party ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Military Base ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Airport ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Hospital ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Casino ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Garden ( <span class="text-extrabold">4 / 44</span> )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Market ( <span class="text-extrabold">4 / 44</span> )</p></div>

          </div>
        </div>

                </div><!-- END: Data Display Container -->
              </div><!-- END: body -->
            </div><!-- END: box-b -->

          </div><!-- END: grid-3col -->
        </div><!-- END: body -->
      </div><!-- Data Display A -->
    </section><!-- END: Statistics Display -->

  </div><!-- END: Wrapper -->
</div><!-- END: Wrapper Content -->

<?php include('footer.php') ?>

