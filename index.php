<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil 4</title>
    <link rel="stylesheet" href="data/style.css">
</head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;

        const darkMode = localStorage.getItem('darkMode');
        if (darkMode === 'enabled') {
            body.classList.add('dark-mode');
        }

        document.getElementById('darkModeToggle').addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            const isDarkMode = body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
        });

        document.getElementById('openPopupButton').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

    });
</script>

<body>
    <nav>
        <div class="logo">
            <img src="img/Resident_Evil_4-removebg-preview.png" alt="menu">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="Get.php">Detail</a></li>
            <li><a href="tambah.php">Tambah</a></li>
            <li><a href="#" onclick="alert('belum bisa diakses')">Contact</a></li>
        </ul>
        <button id="darkModeToggle">dark/light</button>
        <button id="openPopupButton">Open Pop-up</button>
    </nav>
    <div class="wrapper">
        <section id="home">
            <div class="cont-image">
                <img src="img/wp11811990-resident-evil-4-2023-wallpapers.png" width="1100px" alt="Resident Evil 4">
                <div class="overlay-text">
                    <h1>Weapon List</h1>
                    <table border="1" width="100%">
                        <tr>
                            <th>No</th>
                            <th width="100px">Gambar</th>
                            <th width="100px">Weapon</th>
                            <th width="100px">Power</th>
                            <th width="100px">Ammo Capacity</th>
                            <th width="100px">Reload Speed</th>
                            <th width="100px">Rate of Fire</th>
                            <th width="100px">Precision</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="img/combat-knife-1024x460.webp" width="100%" alt="Combat Knife"></td>
                            <td>Melee</td>
                            <td>0.6</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="img/boot-knife-1024x454.webp" width="100%"></td>
                            <td>Boot Knife</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="img/kitchen-knife-1024x397.webp" width="100%"></td>
                            <td>Kitchen Knife</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="img/fighting-knife-1024x576.webp" width="100%"></td>
                            <td>Fighting Knife</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="img/broken-butterfly-1024x576.webp" width="100%"></td>
                            <td>Broken Butterfly</td>
                            <td>15</td>
                            <td>6</td>
                            <td>0.52s</td>
                            <td>0.9</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="img/killer7-1024x576.webp" width="100%"></td>
                            <td>Killer Seven</td>
                            <td>20</td>
                            <td>7</td>
                            <td>1s</td>
                            <td>0.81</td>
                            <td>2.5</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src="img/SG-09-R-1024x576.webp" width="100%"></td>
                            <td>Sg-09R</td>
                            <td>1</td>
                            <td>10</td>
                            <td>1s</td>
                            <td>1</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><img src="img/matilda-1024x576.webp" width="100%"></td>
                            <td>Matilda</td>
                            <td>1.3</td>
                            <td>18</td>
                            <td>1s</td>
                            <td>1</td>
                            <td>4</td>
                        <tr>
                            <td>9</td>
                            <td>
                                <img src="img/punisher-1024x576.webp" width="450px">
                            </td>
                            <td>Punisher</td>
                            <td>0.90</td>
                            <td>12</td>
                            <td>1.1s</td>
                            <td>1.05</td>
                            <td>4.5</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <img src="img/sentinel-nine-1024x433.webp" width="450px">
                            </td>
                            <td>Sentinel Nine</td>
                            <td>1.1</td>
                            <td>19</td>
                            <td>0.9s</td>
                            <td>1,19</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                <img src="img/blacktail-1024x576.webp" width="450px">
                            </td>
                            <td>Blacktail</td>
                            <td>1.4</td>
                            <td>9</td>
                            <td>1.2s</td>
                            <td>1.19</td>
                            <td>4.2</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                <img src="img/red9-1024x576.webp" width="450px">
                            </td>
                            <td>Red9</td>
                            <td>1.5</td>
                            <td>8</td>
                            <td>0.85s</td>
                            <td>0.90</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                <img src="img/stingray-1024x576.webp" width="450px">
                            </td>
                            <td>StingRay</td>
                            <td>3.30</td>
                            <td>10</td>
                            <td>0.84s</td>
                            <td>0.73</td>
                            <td>5.40</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>
                                <img src="img/cqbr-assault-rifle-1024x576.webp" width="450px">
                            </td>
                            <td>CQBR Assault Rifle</td>
                            <td>2</td>
                            <td>20</td>
                            <td>0.85s</td>
                            <td>2.50</td>
                            <td>5.00</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>
                                <img src="img/LE-5-1024x470.webp" width="450px">
                            </td>
                            <td>LE 5</td>
                            <td>0.40</td>
                            <td>50</td>
                            <td>0.78s</td>
                            <td>2.50</td>
                            <td>4.50</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>
                                <img src="img/tmp-1024x576.webp" width="450px">
                            </td>
                            <td>TMP</td>
                            <td>0.50</td>
                            <td>30</td>
                            <td>1s</td>
                            <td>2.5</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>
                                <img src="img/sr-m1903-1024x576.webp" width="450px">
                            </td>
                            <td>SR M1903</td>
                            <td>2.5</td>
                            <td>5</td>
                            <td>0.46s</td>
                            <td>0.42</td>
                            <td>5.3</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>
                                <img src="img/riot-gun-1024x576.webp" width="450px">
                            </td>
                            <td>Riot Gun</td>
                            <td>6.4</td>
                            <td>7</td>
                            <td>1</td>
                            <td>0.75</td>
                            <td>3.5</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>
                                <img src="img/w-870-1024x576.webp" width="450px">
                            </td>
                            <td>W-870</td>
                            <td>5.60</td>
                            <td>5</td>
                            <td>0.60s</td>
                            <td>0.45</td>
                            <td>2.80</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>
                                <img src="img/skull-shaker-1024x441.webp" width="450px">
                            </td>
                            <td>Skull Shake</td>
                            <td>5.40</td>
                            <td>2</td>
                            <td>0.98</td>
                            <td>0.49</td>
                            <td>2.30</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>
                                <img src="img/striker-1024x576.webp" width="450px">
                            </td>
                            <td>Striker</td>
                            <td>9</td>
                            <td>12</td>
                            <td>0.25s</td>
                            <td>1.13</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>
                                <img src="img/bolt-thrower-1024x576.webp" width="450px">
                            </td>
                            <td>Bolt Thrower</td>
                            <td>1.2</td>
                            <td>3</td>
                            <td>0.78</td>
                            <td>0.70</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>
                                <img src="img/rocket-launcher-1024x576.webp" width="450px">
                            </td>
                            <td>Rocket Launcher</td>
                            <td>∞</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>
                                <img src="img/infinite-rocket-launcher-1024x576.webp" width="450px">
                            </td>
                            <td>Infinite Rocket Launcher</td>
                            <td>∞</td>
                            <td>∞</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>
                                <img src="img/chicago-sweeper-1024x447.webp" width="450px">
                            </td>
                            <td>Chicago Sweeper</td>
                            <td>0.4</td>
                            <td>50</td>
                            <td>0.78s</td>
                            <td>2.5</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>
                                <img src="img/primal-knife-1024x433.webp" width="450px">
                            </td>
                            <td>Primal Knife</td>
                            <td>0.8</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td><img src="img/Handcannon-1-1024x476.webp" width="450px" alt="HandCannon"></td>
                            <td>HandCannon</td>
                            <td>12</td>
                            <td>5</td>
                            <td>0.46s</td>
                            <td>0.53</td>
                            <td>1.8</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <footer>
            <p>ELY</p>
        </footer>
        <script src="../scripts/script.js"></script>
    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span id="closePopup" class="close-popup">&times;</span>
            <p>I'm not good at web programming.</p>
        </div>
    </div>
</body>

</html>