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
                          <option value="UserA">Student A</option>
                          <option value="FullClass">All Students</option>
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
                        <option value="AssignmentA">Airport</option>
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
                      <a href="#" class="button-blue text-white"><h5>Apply Filter</h5></a>
                      <a href="assignment-03_quest.php" class="button-red text-white"><h5>Reset Values</h5></a>
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

  <!-- Data Filter -->
    <section>
      <div id="popup2" class="overlay">
        <a class="cancel" href="#"></a>
        <div class="popup">
          <div class="full">
            <div class="header-b"><h3 class="text-white">Select Student</h3></div>
            <div class="full pad20">

                <div class="full mar20-top">
                  <!-- Assignment Selection -->
                    <div class="full">
                      <select name="LevelSelect" id="" class="full">
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                        <option value="AssignmentA">Student A</option>
                      </select>
                    </div><!-- END: Assignment Selection -->
                </div>

                <hr class="mar20-top mar20-bot"/>

                <div class="full">
                  <!-- Buttons -->
                  <div class="grid-3col text-center">
                    <div class="full"></div>
                    <div class="full grid-2col ggap-20">
                      <a href="#" class="button-blue text-white"><h5>Confirm</h5></a>
                      <a href="#" class="button-red text-white"><h5>Cancel</h5></a>
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
              <a href="#popup2" class="text-sprocket-lblue">Student A</a>
              <span class="text-sprocket-altblue mar5-left mar5-right"> | </span>
              <a href="#popup2" class="text-white">Airport</a></h4>
          </div>
          <div class="body">
            <div class="grid-3col ggap-10">
              <div class="full box-c">
                <div class="full"><h5 class="text-sprocket-slate">Attempts</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">5</h5></div>
              </div>
              <div class="full box-c">
                <div class="full"><h5 class="text-sprocket-slate">Average Time Per Attempt</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">1 min : 22 sec</h5></div>
              </div>
              <div class="full box-c">
                <div class="full"><h5 class="text-sprocket-slate">Total Play Time</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">15 min : 35 sec</h5></div>
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
          <div class="full grid-4col grid-4col-forcemobile">
            <a href="assignment-03_quest-student_achievements.php" class="tab-responsive react-tabs__tab--selected left">
              <i class="fas fa-trophy text-sprocket-lblue left"></i>
              <p class="left">Achievements</p>
            </a>
            <a href="assignment-03_quest-student_objectives.php" class="tab-responsive react-tabs__tab left">
              <i class="fas fa-clipboard-check text-sprocket-slate left"></i>
              <p class="text-sprocket-dblue">Objectives</p>
            </a>
            <a href="assignment-03_quest-student_resets.php" class="tab-responsive react-tabs__tab left">
              <i class="fas fa-undo-alt text-sprocket-slate left"></i>
              <p class="text-sprocket-dblue">Meter Resets</p>
            </a>
            <a href="assignment-03_quest-student_time.php" class="tab-responsive react-tabs__tab left">
              <i class="fas fa-alarm-clock text-sprocket-slate left"></i>
              <p class="text-sprocket-dblue">Time Statistics</p>
            </a>
          </div>
          <div class="full box-tabs">
          <div class="body">
            <div class="grid-2col ggap-20">
              <div class="full">
                <div class="full mar10-bot">
                  <h5 class="text-sprocket-dblue"><i class="fas fa-check-circle text-sprocket-green"></i> Achievements Completed</h5>
                </div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Play as Allison ( Global )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Parenting ( General )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Triangular Theory of Love A ( Vygotsky )</p></div>
              </div>
              <div class="full">
                <div class="full mar10-bot">
                  <h5 class="text-sprocket-dblue"><i class="fas fa-times-circle text-sprocket-red"></i> Achievements Not Completed</h5>
                </div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Co-Parenting ( General )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Work-Family Balance ( General )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Co-Parenting ( General )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Managing Parenting Stress ( General )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Generational Difference ( General )</p></div>
                <div class="full box-c mar10-bot"><p class="text-sprocket-dblue">Triangular Theory of Love B ( Vygotsky )</p></div>
              </div>
            </div>
          </div>
        </div>
        </div><!-- END: body -->
      </div><!-- Data Display A -->
    </section><!-- END: Statistics Display -->

  <!-- Heat Maps -->
    <section>
      <div class="full box-b mar30-top">
        <div class="header-b">
          <h3 class="text-white">Heat Map</h3>
        </div>
        <div class="body">
          <div class="full">
            
          </div>
        </div><!-- END: body -->
      </div><!-- Data Display A -->
    </section><!-- END: Statistics Display -->

  </div><!-- END: Wrapper -->
</div><!-- END: Wrapper Content -->

<!-- Footer -->
  <div class="wrapper footer-container">
    <div class="wrapper-content">
      <section class="pad60">
        <div class="full">
          <a href="https://gearlearning.org/" target="_blank">
            <img class="footer-logo" src="img/gearlearning-alt-dark.svg"/>
          </a>
        </div>
        <div class="full"><p class="text-center">Sprocket Data Systems is developed by <a href="https://gearlearning.org/" target="_blank">Gear Learning</a></p></div>
        <div class="full"><p class="text-center text-small text-sprocket-slate">© Gear Learning 2019</p></div>
      </section>
    </div>
  </div><!-- END: Footer -->

