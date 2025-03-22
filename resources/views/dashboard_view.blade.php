<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Siswa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-MYSkanema"></span><span>My Skanema</span></h2>

        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="profilStaf.php"><span class="las la-user"></span> 
                        <span>Profil</span></a>
                </li>
                <li>
                    <a href="dahsboardStaf.php" class="active"><span class="las la-igloo"></span> 
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="absenStaf.php"><span class="las la-users"></span> 
                        <span>Absen Siswa</span></a>
                </li>
                <li>
                    <a href="poinStaf.php"><span class="las la-clipboard-list"></span> 
                        <span>Point Siswa</span></a>
                </li>
                <li>
                    <a href="dataaStaf.php"><span class="las la-clipboard"></span> 
                        <span>Data Siswa</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h3>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                    Dashboard
                </h3>
                <a href="logout.php"><button>Keluar<span class="las la-arrow-right">
                </span></button></a>
        </header>

        <main>
            <div class="color-box">
                <div class="box skyblue">
                    <p> <i class="fas fa-user-graduate"></i> </p>
                    <p> Jumlah Siswa </p>
                    <h3> 4 </h3>
                </div>
                <div class="box yellow">
                    <p><i class="fas fa-school"></i></p>
                    <p> Total Kelas </p>
                    <h3> 2 </h3>
                </div>
                <div class="box purple">
                    <p> <i class="fas fa-chalkboard-teacher"></i> </p>
                    <p> Total Guru </p>
                    <h3> 3 </h3>
                </div>
                <div class="box red">
                    <p> <i class="fas fa-laptop"></i> </p>
                    <p> Total Jurusan  </p>
                    <h3> 2 </h3>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Siswa</h3>
                            </span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Siswa</td>
                                            <td>Kelas</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nayla Sagita</td>
                                            <td>Kelas B</td>
                                            <td>
                                                <span class="status pink"></span>
                                                Online
                                            </td>
                                        </tr>
                                        <tr>
                                                <td>Ramadhani Akbar</td>
                                            <td>Kelas B</td>
                                            <td>
                                                <span class="status pink"></span>
                                                Online
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Arwan Pradipta</td>
                                            <td>Kelas B</td>
                                            <td>
                                                <span class="status pink"></span>
                                                Online
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fajar</td>
                                            <td>Kelas B</td>
                                            <td>
                                                <span class="status pink"></span>
                                                Online
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>
