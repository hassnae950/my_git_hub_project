<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=group" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=group" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=event_seat" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=event" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=mail" />
</head>
<body>

<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="images/logo1.jpg">
                <h2>IMMO<span class="danger">BILIER</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>
        </div>  

        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>

            <a href="/touriste">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Tourist</h3>
            </a>

            <a href="/guide">
                <span class="material-symbols-outlined">group</span>
                <h3>Tourist Guide</h3>
            </a>

            <a href="/event">
                <span class="material-symbols-outlined">event</span>
                <h3>Event</h3>
            </a>

            <a href="/message">
                <span class="material-symbols-outlined">mail</span>
                <h3>Messages</h3>
                <span class="message-count">6</span>
            </a>

            <a href="/reservation">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Reservation</h3>
            </a>

            <a href="#">
                <span class="material-icons-sharp">settings</span>
                <h3>Settings</h3>
            </a>

            <a href="#">
                <span class="material-icons-sharp">logout</span>
                <h3>Log out</h3>
            </a>
        </div>
    </aside>
    <!-- --------------------------end of aside------------------------------>

    <main>
        <h1>Dashboard</h1>

        <div class="date">
            <input type="date" value="<?= esc($currentDate ?? date('Y-m-d')); ?>">
        </div>

        <div class="insights">
            <div class="expenses">
                <span class="material-symbols-outlined">group</span>
                <div class="middle">
                    <div class="left">
                        <h3>Number of Active Guides</h3>
                        <h1><?= $totalGuides; ?></h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>89%</p> <!-- Display the percentage -->
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 hours</small>
            </div>
            <!-- --------------------------end of expenses------------------------------>

            <div class="income">
                <span class="material-icons-sharp">person_outline</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Tourists</h3>
                        <h1><?= $totalTouristes; ?></h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>44%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 hours</small>
            </div>
            <!-- --------------------------end of incomes------------------------------>

            <div class="visites">
                <span class="material-icons-sharp">visibility</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Visites</h3>
                        <h1>200</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>62%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 hours</small>
            </div>
            <!-- --------------------------end of visites------------------------------>

            <div class="Stars">
                <span class="material-symbols-sharp">star_rate</span>
                <div class="middle">
                    <div class="left">
                        <h3>Tourist Satisfaction Rate</h3>
                        <h3 class="material-symbols-sharp">star_half star star star star</h3>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>90%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 hours</small>
            </div>
            <!-- --------------------------end of stars------------------------------>

            <div class="Comment">
                <span class="material-symbols-sharp">mark_chat_read</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total de commentaires</h3>
                        <h1>60</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="30"></circle>
                        </svg>
                        <div class="number">
                            <p>20%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 hours</small>
            </div>
            <!-- --------------------------end of comments------------------------------>

            <div class="sales">
                <span class="material-symbols-outlined">event</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total reservation</h3>
                        <h1><?= $totalReservations; ?></h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>81%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 hours</small>
            </div>
        </div>
        <!-- -----------------end of insights-------------------------->

        <div class="recent-orders">
            <h2>Recent Tourist</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tourist Name</th>
                        <th>Number</th>
                        <th>Etat</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add recent tourist data here -->
                </tbody>
            </table>
            <a href="#">Show all</a>
        </div>
    </main>
    <!-- --------------end of main---------------- -->

    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>

            <div class="profile">
                <div class="info">
                    <p>Hey, <b>IMMOBILIER</b></p>
                    <small class="text-muted">Admin</small>
                </div>	
                <div class="profile-photo">
                    <img src="images/5.jpg">
                </div>
            </div>
        </div>
        <!-- --------------------------------end of top-------------------------------- -->

        <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="updates">
                <div class="update">
                    <div class="profile-photo">
                        <img src="images/6.jpg">
                    </div>
                    <div class="message">
                        <p><b>Ahmed Halimi</b> added a reservation.</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>

                <div class="update">
                    <div class="profile-photo">
                        <img src="images/4.jpg">
                    </div>
                    <div class="message">
                        <p><b>Kawtar Misbah</b> received her order of Night Lion Tech GPS drone.</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>

                <div class="update">
                    <div class="profile-photo">
                        <img src="images/5.jpg">
                    </div>
                    <div class="message">
                        <p><b>Kawtar Misbah</b> received her order of Night Lion Tech GPS drone.</p>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- -----------------------------------------end of update------------------ -->

        <div class="sales-analytics">
            <h2>Recent Analytics</h2>
            
            <div class="item online">
                <div class="icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>LAST RESERVATION</h3>
                        <small class="text-muted">last 24 hours</small>
                    </div>
                    <h5 class="success">+39%</h5> 
                    <!-- Placeholder for growth percentage -->
                    <h3>78</h3>
                </div>
            </div>

            <div class="item offline">
                <div class="icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>LAST EVENT</h3>
                        <small class="text-muted">last 24 hours</small>
                    </div>
                    <h5 class="danger">-17%</h5>
                    <!-- Placeholder for growth percentage -->
                    <h3>45</h3>
                </div>
            </div>

            <div class="item customers">
                <div class="icon">
                    <span class="material-icons-sharp">person</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>New Members</h3>
                        <small class="text-muted">last 24 hours</small>
                    </div>
                    <h5 class="success">+25%</h5> <!-- Placeholder for growth percentage -->
                    <h3>78</h3>
                </div>


    </div>
</div>

<!-- --------------------------------------------------------------------------------------------------------------------->
           
<div class="item add-product">
	<div><span class="material-icons-sharp ">add</span>
		<h3>add Admin</h3>
	</div>
</div>
</div> 
</div>
</div>


<script src="js/orders.js"></script>
<script src="js/dashboard.js"></script>

</body>
</html> 