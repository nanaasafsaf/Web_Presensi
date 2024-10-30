@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Rekap Presensi Siswa') }}</h1>

    <style>
     .no-vertical-borders th, 
    .no-vertical-borders td {
        border-left: none;
        border-right: none;
    }
    .custom-border thead th {
        border-top: none !important; 
        border-bottom: 1px solid #ddd !important; 
    }
    .custom-border tbody tr:first-child td {
        border-top: 1px solid #ddd !important; 
    }
    .custom-border th, 
    .custom-border td {
        border-bottom: 1px solid #ddd;
    }
    .custom-border thead th:first-child {
        border-top-left-radius: 10px; 
        border-left: 1px solid #ffffff !important;
    }
    .custom-border thead th:last-child {
        border-top-right-radius: 10px; 
        border-right: 1px solid #ffffff !important;
    }
    .custom-border thead th {
        background-color: #dbc8fb !important; 
        color: white !important; 
        border-top: none !important; 
    }
    .custom-border tbody td {
        border-bottom: 1px solid #ddd;
    }
    .custom-border {
        width: 100%;
        table-layout: fixed; 
    }
    .custom-border th, .custom-border td {
        padding: 17px; 
        white-space: nowrap; 
    }
    .container {
        max-width: 100%; 
        padding-left: 0;  
        padding-right: 0; 
    }
    h1.h3.mb-4.text-gray-800 {
    margin-bottom: 100px; 
    }
    .custom-border {
    margin-top: 100px; 
    border-radius: 10px 10px 0px 0px;
    }
    </style>
    
    <div class="container mt-5">
        <table class="table no-vertical-borders custom-border">
            <thead class="thead-dark">
                <tr>
                    <th style="background-color: #dbc8fb; color: white;">Tanggal</th> 
                    <th style="background-color: #dbc8fb; color: white;">Keterangan</th> 
                    <th style="background-color: #dbc8fb; color: white;">Waktu Datang</th> 
                    <th style="background-color: #dbc8fb; color: white;">Waktu Pulang</th>  
                </tr>     
            </thead>
            <tbody>
                @foreach($kehadiran as $data)
                <tr class="table-bordered">
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->waktu_datang }}</td>
                    <td>{{ $data->waktu_pulang }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
