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
        <div><a href="dashboard-track-game"><img class="icon-home" src="img/icon-home.svg"/></a></div>
        <div class="divider mar20-right"></div>
        <div class="dashboard-header">Fair Play</div>
      </div><!-- END: Game Title -->
      <!-- Dates Container -->
        <div class="game-dates">
          <ul>
          <!-- Dates -->
            <li>
              <div class="dashboard-dates">
                <p>Dates : 
                  <span class="text-extrabold text-sprocket-altblue">2019-06-10</span> 
                  - 
                  <span class="text-extrabold text-sprocket-altblue">2019-06-14</span>
                </p>
              </div>
            </li><!-- END: Dates -->
          <!-- Change Dates -->
            <li class="mar20-left">
              <a href="">
                <button class="button-blue">
                  Change Dates
                </button>
              </a>
            </li><!-- END: Change Dates -->
          </ul>
        </div><!-- END: Dates Container -->
      </div>
    </section><!-- END: Dashboard Header -->

    <hr class="mar20-top mar30-bot"/>

  <!-- Data Display -->
    <section>
      <div class="grid-2col ggap-30">
      <!-- Data Display A -->
        <div class="full box-b">
          <div class="header-b">
            <h2 class="text-white">Time Played Per Game</h2>
          </div>
          <div class="body">
            <div class="full"><p class="text-center text-feature text-sprocket-slate"> 1 Day : 2h : 31m : 4s</div>
            <div class="full"></div>
          </div>
        </div><!-- Data Display A -->
      <!-- Data Display B -->
        <div class="full box-b">
          <div class="header-b">
          <h2 class="text-white">Number of Plays Per Game</h2>
          </div>
          <div class="body">
            <div class="full"><p class="text-center text-feature text-sprocket-slate"> No Data to Display</div>
            <div class="full"></div>
          </div>
        </div><!-- Data Display B -->
      </div>
    </section><!-- END: Data Display -->

  <!-- Statistics Display -->
    <section>
      <div class="full box-b mar30-top">
        <div class="header-b">
          <h2 class="text-white">Time Played Per Game</h2>
        </div>
        <div class="body">
          <div class="grid-3col ggap-20">
            <div class="full box-b">
              <div class="header-c">
                <h3 class="text-sprocket-altblue">Basic Stats</h3>
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
                <h3 class="text-sprocket-altblue">Total Time Spent Per Chapter</h3>
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
                <h3 class="text-sprocket-altblue">Chapters Completed Per Unique User</h3>
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

