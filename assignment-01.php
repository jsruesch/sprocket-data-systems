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
          <a href="" class="left">Fair Play</a>
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
                      <label for="AssignmentSelect"><h5 class="text-sprocket-slate">Select AssSelect Assignment</h5></label>
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
                        <label for="UserSelect"><h5 class="text-sprocket-slate">Select User</h5></label>
                      </div>
                      <div class="full">
                        <select name="UserSelect" id="" class="full">
                          <option value="FullClass">Full Class</option>
                          <option value="UserA">User A</option>
                          <option value="UserB">User B</option>
                          <option value="UserC">User C</option>
                        </select>
                      </div>
                  </div><!-- END: User Selection -->
                </div><!-- END: grid-2col -->

                <div class="full mar20-top">
                  <!-- Assignment Selection -->
                    <div class="full mar5-bot">
                      <label for="LevelSelect"><h5 class="text-sprocket-slate">Select Game Level</h5></label>
                    </div>
                    <div class="full">
                      <select name="LevelSelect" id="" class="full">
                        <option value="AssignmentA">All Levels</option>
                        <option value="AssignmentA">First Day at the Union</option>
                        <option value="AssignmentB">Finding an Advisor</option>
                        <option value="AssignmentC">Research at the Library</option>
                        <option value="AssignmentD">The Accusation</option>
                        <option value="AssignmentD">The Conference</option>
                      </select>
                    </div><!-- END: Assignment Selection -->
                </div>

                <hr class="mar20-top mar20-bot"/>

                <div class="full">
                  <!-- Buttons -->
                  <div class="grid-3col text-center">
                    <div class="full"></div>
                    <div class="full grid-2col ggap-20">
                      <a href="assignment-02.php" class="button-blue text-white"><h5>Apply Filter</h5></a>
                      <a href="" class="button-red text-white"><h5>Reset Values</h5></a>
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
                <div class="full"><h5 class="text-sprocket-slate">Session Stat</h5></div>
                <div class="full"><h5 class="text-sprocket-dblue">44</h5></div>
              </div>
            </div>
          </div>
        </div><!-- Data Display A -->

    </section><!-- END: Data Display -->

  <!-- Statistics Display -->
    <section>
      <div class="full box-b mar30-top">
        <div class="header-b">
          <h3 class="text-white">Time Played Per Game</h3>
        </div>
        <div class="body">
          <div class="grid-3col ggap-20">
            <div class="full box-b">
              <div class="header-c">
                <h4 class="text-sprocket-dblue">Basic Stats</h4>
              </div>
              <div class="body">
              <!-- Data Display Container -->
                <div class="full data-display-container">
                  
                <!-- Data Display Section : Total Users -->
                <!-- mar15-bot adds spacing between this section and the next section -->
                  <div class="data-display grid-2col mar15-bot">
                    <div class="data-display-border-vertical dd-item-a">
                      <p class="">Total Users</p>
                    </div>
                    <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">68</p></div>
                  </div><!-- END: Data Display Section : Total Users -->

                <!-- Data Display Section : Time Ranges -->
                <!-- mar15-bot adds spacing between this section and the next section -->
                  <div class="data-display mar15-bot">
                    <div class="data-display-border-horizontal pad10 bg-sprocket-lslate">
                      <p class="text-extrabold text-sprocket-dblue">Time Ranges</p>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>Min Time</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">8 seconds</p></div>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>Max Time</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">41 minutes : 45s</p></div>
                    </div>
                    <div class="grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>Mean Time</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">21 minutes : 37s</p></div>
                    </div>
                  </div><!-- END: Data Display Section : Time Ranges -->

                <!-- Data Display Section : Chapter Means -->
                <!-- mar15-bot adds spacing between this section and the next section -->
                  <div class="data-display">
                    <div class="data-display-border-horizontal pad10 bg-sprocket-lslate">
                      <p class="text-extrabold text-sprocket-dblue">Chapter Means</p>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>First Day at the Union</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">13 minutes : 4s</p></div>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>Finding an Advisor</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">7 minutes : 41s</p></div>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>Research at the Library</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">7 minutes : 53s</p></div>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>The Accusation</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">14 minutes : 42s</p></div>
                    </div>
                    <div class="data-display-border-horizontal grid-2col">
                      <div class="dd-item-a data-display-border-vertical"><p>The Conference</p></div>
                      <div class="dd-item-b"><p class="text-bold text-sprocket-altblue">1 minute : 6s</p></div>
                    </div>
                  </div><!-- END: Data Display Section : Chapter Means -->
                </div><!-- END: Data Display Container -->
              </div><!-- END: body -->
            </div><!-- END: box-b -->

          <!-- Time Spent Container -->
            <div class="full box-b">
              <div class="header-c">
                <h4 class="text-sprocket-dblue">Total Time Spent Per Chapter</h4>
              </div>
              <div class="body">
                <div class="full">
                  <div class="fakegraph"></div>
                </div>
              </div>
            </div><!-- END: Time Spent Container -->

          <!-- Chapters Complete Per Unique User Container -->
            <div class="full box-b">
              <div class="header-c">
                <h4 class="text-sprocket-dblue">Chapters Completed Per Unique User</h4>
              </div>
              <div class="body">
                <div class="full"><p class="text-center"> No Data to Display</div>
                <div class="full"></div>
              </div>
            </div><!-- END: Chapters Complete Per Unique User Container -->
          </div><!-- END: grid-3col -->
        </div><!-- END: body -->
      </div><!-- Data Display A -->
    </section><!-- END: Statistics Display -->

  <!-- Tab Styles Container -->
    <section class="pad30-top pad30-bot">
      <div class="full pad5-left">
        <div class="react-tabs__tab left"><p>Chapter 1</p></div>
        <div class="react-tabs__tab--selected left"><p>Chapter 2</p></div>
        <div class="react-tabs__tab left"><p>Chapter 3</p></div>
        <div class="react-tabs__tab left"><p>Chapter 4</p></div>
      </div>
      <div class="full box-tabs">
        <div class="body">
          <div class="full">
            <button class="arrow-button"><img class="icon-arrow-left" src="img/icon-arrow-left.svg"/></button>
            <button class="arrow-button"><img class="icon-arrow-right" src="img/icon-arrow-right.svg"/></button>
          </div>
        </div>
      </div>
    </section><!-- END: Tab Styles Container -->
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

