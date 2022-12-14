<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RustSnipe</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/welcome.css">
    <link rel="stylesheet" href="./styles/black_bar.css">
    <link rel="stylesheet" href="./styles/game-display.css">
    <link rel="stylesheet" href="./styles/widgets.css">
    <link rel="icon" href="./img/Snipe.png" type="image/icon type">
    <script src="https://kit.fontawesome.com/03e5995de6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Black Bar -->
    <div class="black_bar">
      <div class="steam-login">
        <div><i class="fa-brands fa-steam-symbol"></i></div>
        <div>LOGIN WITH STEAM</div>
      </div>
      <div class="user-count">
        <div class="online-users">
          <div>Users Online</div>
          <div class="bandit-count">228</div>
          <div><i class="fa-solid fa-users"></i></div>
        </div>
      </div>
      <!-- <div class="navigation-links">
        <a href="">Friends</a>
      </div> -->
      <div class="logo">
        <img src="./img/Snipe.png" alt="">
      </div>
    </div>

    <!-- Nav Bar -->
    <div class="navbar">
      <div class="menu-trigger">
          <div><i class="fa-solid fa-bars"></i></div>
      </div>
      <div class="nav-links">
          <i id="dashboard" class="fa-solid fa-table-columns"></i>
          <i id="inventory" class="fa-solid fa-briefcase"></i>
          <i id="steam" class="fa-brands fa-steam"></i>
          <i id="friends" class="fa-solid fa-user-group"></i>
          <i id="games" class="fa-solid fa-gamepad"></i>
      </div>
      <div id="empty"></div>
    </div>

  <!-- Content -->
    <div class="content">
      <div class="welcome">
        <div class="main-welc">
          <div class="subtext">WELCOME TO</div>
          <div class="main-welcome">RUSTSNIPE.COM</div>
          <div class="gray-sub">
            The home of trade and commerce for the Rust Community.
          </div>
        </div>
        <div class="about">
          <!-- <div class="horizontal-container">
            <div class="the-what">
              <div class="about-heading">
                What
              </div>
              <div class="horiz-line"></div>
              <div class="about-context">
                better placeholder xd
              </div>
            </div>
            <div class="the-why">
              <div class="about-heading">
                Why
              </div>
              <div class="horiz-line"></div>
              <div class="about-context">
                better placeholder xd
              </div>
            </div>
            <div class="the-how">
              <div class="about-heading">
                How
              </div>
              <div class="horiz-line"></div>
              <div class="about-context">
                better placeholder xd
              </div>
            </div>
          </div> -->
          <div class="about-heading">
            Play. Win. Trade. Win More. 
            <div class="underline"></div>
          </div>
        </div>
        <div class="welc-buttons">
          <div>Dashboard</div>
          <div>Trade</div>
          <div>Play</div>
        </div>
        <div class="arrow">
          <div>
            <a href="#widgets"></a>
          </div>
        </div>
        <div class="space"></div>
        <!-- <div class="about-heading">
          Widgets
        </div> -->
        <div id="widgets" class="widgets">
          <div class="h-cont">
            <div class="friends-widget">
              <div class="widget-heading">
                Friends
                <div class="underline"></div>
              </div>

              <div class="widget-content">
                <div class="friends-list">
                  <div class="friends-card">
                    <div class="friend-details">
                      <div class="friend-logo">
                        <i id="friends" class="fa-solid fa-user-group"></i>
                      </div>
                      <div>ChickenMan</div>
                    </div>
                    <div class="friends-edit">
                      <i class="fa-solid fa-message"></i>
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                  </div>

                  <div class="friends-card">
                    <div class="friend-details">
                      <div class="friend-logo">
                        <i id="friends" class="fa-solid fa-user-group"></i>
                      </div>
                      <div>ChickenMan</div>
                    </div>
                    <div class="friends-edit">
                      <i class="fa-solid fa-message"></i>
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                  </div>

                  <div class="friends-card">
                    <div class="friend-details">
                      <div class="friend-logo">
                        <i id="friends" class="fa-solid fa-user-group"></i>
                      </div>
                      <div>ChickenMan</div>
                    </div>
                    <div class="friends-edit">
                      <i class="fa-solid fa-message"></i>
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                  </div>

                  <div class="friends-card">
                    <div class="friend-details">
                      <div class="friend-logo">
                        <i id="friends" class="fa-solid fa-user-group"></i>
                      </div>
                      <div>ChickenMan</div>
                    </div>
                    <div class="friends-edit">
                      <i class="fa-solid fa-message"></i>
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                  </div>

                  <div class="friends-card">
                    <div class="friend-details">
                      <div class="friend-logo">
                        <i id="friends" class="fa-solid fa-user-group"></i>
                      </div>
                      <div>ChickenMan</div>
                    </div>
                    <div class="friends-edit">
                      <i class="fa-solid fa-message"></i>
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="v-cont">

              <div class="inventory-widget">
                <div class="widget-heading">
                  Inventory
                  <div class="underline"></div>
                </div>
                <div class="inventory-content">
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="current-sales-widget">
                <div class="widget-heading">
                  Current Sales
                  <div class="underline"></div>
                </div>
                <!-- <div class="widget-content">
                  f
                </div> -->
                <div class="inventory-content">
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>          
                      <i id="friends" class="fa-solid fa-user-group"></i>
                      <div>
                        New Thingy
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="space"></div>

        <div class="gamemodes">
          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-dice"></i>
            </div>
            <div class="game-name">
              Dice
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Dice.</div>
          </div>

          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-coins"></i>
            </div>
            <div class="game-name">
              Coinflip
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Coinflip.</div>
          </div>

          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-land-mine-on"></i>
            </div>
            <div class="game-name">
              Mines
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Mines.</div>
          </div>          
          
          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-sack-dollar"></i>
            </div>
            <div class="game-name">
              Jackpot
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Jackpot.</div>
          </div>          
          
          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-dharmachakra"></i>
            </div>
            <div class="game-name">
              Wheel
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Wheel.</div>
          </div>

          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-box-open"></i>
            </div>
            <div class="game-name">
              Crate Unboxing
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Crate Unboxing.</div>
          </div>

          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-dolly"></i>
            </div>
            <div class="game-name">
              Crate Battle
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Crate Battle.</div>
          </div>

          <div class="game-card">
            <div class="game-image">
              <i class="fa-solid fa-diamond"></i>
            </div>
            <div class="game-name">
              Poker
            </div>
            <div class="game-description">
              Play a simple game of dice and gain easy rewards, though the rewards aren't 
              as merry as you think. Small Pickings here.
            </div>
            <div class="game-play">Play Poker.</div>
          </div>
        </div>

        <div class="space"></div>
      </div>
    </div>

	  <script src="animation.js"></script>
    <script src="icon.js"></script>
  </body>
</html>
