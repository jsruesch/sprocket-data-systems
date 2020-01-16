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
        <!-- <div class="full">
          <a href="" class="left">Quest</a>
          <p class="left mar5-left mar5-right text-sprocket-lblue">|</p>          
          <a href="" class="left">Class A</a>
        </div> -->
        
      </div><!-- END: Game Title -->
      
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
            <div class="full pad20 filter-content">
            <!-- Date Range -->
                <div class="full">
                  <div class="left">
                      <a href="">
                        <button class="button-blue"><i class="far fa-calendar-alt"></i></button>
                      </a>
                    </div>
                  <div class="left mar5-top mar5-left">
                      <p>
                        <span class="text-extrabold text-sprocket-dblue">10.6.2019</span> 
                        <span class="text-extrabold text-sprocket-slate">-</span> 
                        <span class="text-extrabold text-sprocket-dblue">6.14.2019</span>
                      </p>
                    </div>
                </div><!-- END:  Date Range -->
              <!-- Quest Select -->
                <div class="full mar20-top">
                  <div class="full mar5-bot">
                    <label for="QuestSelect"><h5 class="text-sprocket-slate">Select a Quest</h5></label>
                  </div>
                  <fieldset class="full checkbox-list">
                    <form id="QuestSelectFilter" name="QuestSelect" class="full">
                      <div class="full checkbox-list-item">
                        <input type="checkbox" name="allquests" value="All Quests" checked="true"> <p class="left">All Quests</p>
                      </div>
                      <div class="full grid-2col ggap-10">
                        <div class="full">
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="infancy" value="Infancy">
                            <label class="left" for="Infancy">Infancy</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="headstart" value="Head Start">
                            <label class="left" for="Head Start">Head Start</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="beach" value="Beach">
                            <label class="left" for="Beach">Beach</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="halloween" value="Halloween">
                            <label class="left" for="Halloween">Halloween</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="carnival" value="Carnival">
                            <label class="left" for="Carnival">Carnival</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="park" value="Park">
                            <label class="left" for="Park">Park</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="museum" value="Museum">
                            <label class="left" for="Museum">Museum</label>
                          </div>
                        </div>
                        <div class="full">
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="houseparty" value="House Party">
                            <label class="left" for="House Party">House Party</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="military" value="Military">
                            <label class="left" for="Military">Military</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="airport" value="Airport">
                            <label class="left" for="Airport">Airport</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="hospital" value="Hospital">
                            <label class="left" for="Hospital">Hospital</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="casino" value="Casino">
                            <label class="left" for="Casino">Casino</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="garden" value="Garden">
                            <label class="left" for="Garden">Garden</label>
                          </div>
                          <div class="full checkbox-list-item">
                            <input type="checkbox" name="grocerystore" value="Grocery Store">
                            <label class="left" for="Grocery Store">Grocery Store</label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div><!-- END: Quest Select -->
              </div>
            <!-- Buttons -->
              <div class="full filter-button-container">
                <div class="grid-3col text-center">
                  <div class="full"></div>
                  <div class="grid-2col ggap-20 pad20">
                    <a href="assignment-03_quest-student_achievements.php" class="button-blue text-white"><h5>Apply Filter</h5></a>
                    <a href="" class="button-red text-white"><h5>Reset Values</h5></a>
                  </div>
                  <div class="full"></div>
                </div>
              </div><!-- END: Buttons -->
            </div><!-- END: full -->
          <a class="close" href="#"><i class="fas fa-times text-sprocket-lblue"></i></a>
        </div><!-- END: Popup --> 
      </div>
    </section><!-- END: Data Filter -->


  <!-- Global Stats -->
    <section>
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
    </section><!-- END: Global Stats -->
  <!-- Assignment Data -->
    <section>
      <div class="full box-b mar30-top">
        <div class="header-b">
          <h3 class="text-white">Assignment Data</h3>
        </div>
        <div class="body">
          <div class="grid-3col-data-select mar20-bot">
          <!-- Data Selection -->
            <div class="full">
              <select name="DataTypeSelect" id="" class="full">
              <option value="AssignmentA">Chapters Complete Per Unique User</option>
              <option value="AssignmentA">Total Time Spent Per Chapter</option>
              <option value="AssignmentA">Chapter Means</option>
              </select>
            </div><!-- END: Data Selection -->
          <!-- View Toggles -->
            <a href="#" class="full text-center tab-responsive">
              <i class="fas fa-chart-pie text-sprocket-dblue text-extrabold"></i>
              <p class="text-sprocket-dblue text-extrabold">Graph View</p>
            </a>
            <a href="assignment-03_quest_list-view.php" class="full text-center tab-responsive">
              <i class="fas fa-list text-sprocket-slate"></i>
              <p class="text-sprocket-slate"> List View</p>
            </a><!-- END: View Toggles -->
          </div><!-- END: grid-3col-data-select mar20-bot -->
          <div class="full box-tabs">
            <div class="body">
              <div class="full">
                <img class="full" src="img/obviousfakegraphisobvious.png"><div class="background-sprocket-dblue pad30"></div></img>
              
                

              </div>
            </div>
          </div><!-- END: full box-tabs -->
        </div><!-- END: Data Display Container -->
      </div><!-- END: body -->
    </section><!-- END: Assignment Data -->
  <!-- Heat Maps -->
    <section>
      <div class="full box-b mar30-top">
        <div class="header-b">
          <h3 class="text-white">Heat Map</h3>
        </div>
        <div class="body">

      <!-- Heatmap Legend -->
        <div class="full">
          <div class="full mar10-bot">
            <h5 class="text-sprocket-dblue">Relative Time Spent</h5>            
          </div>
          <div class="heatmap-legend-gradient mar5-bot"></div>
          <div class="full grid-2col grid-2col-forcemobile">
            <div class="full">
              <p class="text-sprocket-dblue text-left text-bold"><i class="fas fa-square legend-blue"></i> Less Time Spent</p>
            </div>
            <div class="full">
              <p class="text-sprocket-dblue text-right text-bold">More Time Spent <i class="fas fa-square legend-red"></i></p>
            </div>
          </div>
          <div class="full mar15-top">
            <p class="text-sprocket-dblue">Every five seconds the player location is reported to Sprocket. The longer a player was reported in a given location, the more red the marker will display. Relative to the most red marker, other markers on the heatmap are displayed more blue the greater the discrepancy between their respective values.</p>
          </div>
        </div><!-- END: Heatmap Legend -->
          
        <div class="full pad30">

        <div class="flex">
          <div class="heatmap-parent heatmap-image-carnival">
            <img src="img/heatmaps/heatmap-carnival.png" class="heatmap-hidden">
            <div class="heatmap-graph">
              <!-- <div class="yaxis"></div>
              <div class="xaxis"></div> -->
              <div class="heatmap-blips">
                <div class="center-origin-marker"></div>
                <!-- Heatmap here -->
              </div>
            </div>
          </div>
        </div>
          
          
        </div>
          
        </div><!-- END: body -->
      </div><!-- Data Display A -->
    </section><!-- END: Heatmap -->
  </div><!-- END: Wrapper -->
</div><!-- END: Wrapper Content -->





<?php include('footer.php') ?>
