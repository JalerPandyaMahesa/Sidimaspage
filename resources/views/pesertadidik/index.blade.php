<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Semua Peserta Didik</title>

    <!-- Css -->
    <style>
        .header-aja {
            background-color: #343a40;
            /* padding-bottom: 80px; */
            font-family: 'Source Sans Pro', sans-serif;
        }

        .header-aja .navbar {
            background: transparent;
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #fff;
            border-radius: 0;
            box-shadow: none;
            border: none;
        }

        @media (min-width:768px) {
            .header-aja .navbar {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .header-aja .navbar .navbar-brand {
            font-weight: bold;
            color: inherit;
        }

        .batas-atas {
            padding-top: 50px;
        }

        .table-wrapper {
            max-height: 550px; /* Anda bisa menyesuaikan tinggi ini */
            max-width: 1500px;
            overflow-y: auto;
        }
        
    </style>
    <!-- ENd CSS -->
</head>

<body>
    <div class="header-aja">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Dinas Pendidikan</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <!-- <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Link</a></li> -->
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="#">Alat</a>
                                    <a class="dropdown-item" role="presentation" href="#">Angkutan</a>
                                    <a class="dropdown-item" role="presentation" href="#">Bangunan</a>
                                    <a class="dropdown-item" role="presentation" href="#">Buku</a>
                                    <a class="dropdown-item" role="presentation" href="/pesertadidik">Peserta Didik</a>
                                    <a class="dropdown-item" role="presentation" href="#">PTK</a>
                                    <a class="dropdown-item" role="presentation" href="#">PTK Terdaftar</a>
                                    <a class="dropdown-item" role="presentation" href="#">Rombongan Belajar</a>
                                    <a class="dropdown-item" role="presentation" href="#">Ruang</a>
                                    <a class="dropdown-item" role="presentation" href="#">Sanitasi</a>
                                    <a class="dropdown-item" role="presentation" href="/sekolah">Sekolah</a>
                                    <a class="dropdown-item" role="presentation" href="#">Tanah</a>
                                    <!-- <a class="dropdown-item" role="presentation" href="#">User</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Access Menu</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Login Sessions</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Notifikasi</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Role</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Sub Menu</a> -->
                                    <a class="dropdown-item" role="presentation" href="#">Zref Jenis PTK</a>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container batas-atas">
    <label class="navbar-b" for="filter">Filter Jenjang:</label>
    <select id="filter" onchange="filterTable()">
        <option value="all">Semua</option>
        <option value="slb">SLB</option>
        <option value="tk">TK</option>
        <option value="ra">RA</option>
        <option value="sps">PAUD</option>
        <option value="sd">SD</option>
        <option value="mi">MI</option>
        <option value="smp">SMP</option>
        <option value="ma">MA</option>
        <option value="mts">MTS</option>
        <option value="sma">SMA</option>
        <option value="smk">SMK</option>
        <option value="pkbm">PKBM</option>
        <option value="kursus">Kursus</option>
        <option value="kb">KB</option>
    </select>

    <label for="nameFilter">Filter Nama:</label>
    <input type="text" id="nameFilter" onkeyup="filterTable()" placeholder="Cari Nama Peserta Didik..">

    <a href="{{ route('pesertadidik.create') }}"><button>Create PD</button></a>

    
    </div>

    <div class="table-wrapper container">
        <table id="pesertadidikTable" class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Sekolah</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesertadidik as $index => $s)
                    <tr data-jenjang="{{ $s->bentuk_pendidikan }}">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $s->nisn}}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{$s->sekolah->nama ?? 'N/A'}}</td>
                        
                        <td>
                            <a href="{{ route('pesertadidik.edit', ['peserta_didik_id' => $s->peserta_didik_id]) }}"><button>Edit</button></a>
                            <a href="{{ route('pesertadidik.show', ['peserta_didik_id' => $s->peserta_didik_id]) }}"><button>View</button></a>

                            <form action="{{ route('pesertadidik.destroy', ['peserta_didik_id' => $s->peserta_didik_id]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function filterTable() {
            var filter = document.getElementById("filter").value.toLowerCase();
            var nameFilter = document.getElementById("nameFilter").value.toLowerCase();
            var rows = document.querySelectorAll("#pesertadidikTable tbody tr");
            var number = 1;

            rows.forEach(row => {
                var jenjang = row.getAttribute("data-jenjang").toLowerCase();
                var nama = row.children[2].textContent.toLowerCase();

                if ((filter === "all" || jenjang === filter) && (nama.includes(nameFilter))) {
                    row.style.display = "";
                    row.children[0].textContent = number++;
                }
                else {
                    row.style.display = "none";
                }
            });
        }
    </script>

</body>

</html>