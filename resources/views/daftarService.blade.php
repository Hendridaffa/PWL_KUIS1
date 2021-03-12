@extends('layouts.app')

@section('content')
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Finance Business</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/daftarService">Daftar Service</a>
                                    <a class="dropdown-item" href="/pelanggan">Daftar Pelanggan</a>
                                    <a class="dropdown-item" href="/pegawai">Daftar Pegawai</a>
                                    <a class="dropdown-item" href="/penyedia">Daftar Penyedia</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <br><br><br><br>
    <div id="content">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name Service</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                        <tr>
                            <td>{{ $item->Service }}</td>
                            <td>{{ $item->Keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="/daftarService?page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="/daftarService?page=2">2</a></li>
            <li class="page-item"><a class="page-link" href="/daftarService?page=3">3</a></li>
        </ul>
    </nav>

@endsection
