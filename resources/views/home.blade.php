@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="font-family: 'Times New Roman', sans-serif;">{{ __('Selamat datang!!') }}</h1>

    @if (session('success'))
    
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <head>
        <link rel="stylesheet" href="path/to/your/css/file.css">
        <style>
            .time-box {
                /* border: 2px solid #ffffff; Warna border */
                border-radius: 10px; /* Sudut melengkung */
                padding: 50px; /* Ruang di dalam kotak */
                font-size: 5rem; /* Ukuran font lebih besar */
                /* background-color: #ffffff; Warna latar belakang */
                display: inline-block; /* Agar kotak tidak memenuhi lebar penuh */
                animation: bounce 1s infinite;
            }
            

            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: scale(1); /* Ukuran asli */
                }
                40% {
                    transform: scale(0.9); /* Bergerak ke dalam */
                }
                60% {
                    transform: scale(1.1); /* Bergerak ke luar */
                }
            }

            .absen-instruction {
                font-size: 1.5rem; /* Ukuran font lebih besar */
                margin-top: 50px; /* Jarak atas dari waktu */
                margin-bottom: 5px; /* Jarak bawah untuk mendekatkan dengan tombol */
            }
        </style>
    </head>

    <div class="col-lg-12 mb-4 text-center">
        <h5 id="currentDate"></h5>
        <h5 class="time-box" id="currentTime"></h5> 
        <p class="mt-5 absen-instruction" style="font-family: 'Times New Roman', sans-serif;">Silahkan tekan tombol datang atau pulang untuk mengisi absen</p> 
    </div>    

    <div class="row justify-content-center mt-5">
        <!-- Time and Date Section -->
        <div class="col-lg-12 mb-4 text-center">
            <h5 id="currentDate"></h5>
            <h5 id="currentTime"></h5>
        </div>
        
        <!-- Color System -->
        <div class="col-lg-2 mb-1">
            <form action="{{ route('datang') }}" method="POST">
                @csrf
                <button type="submit" class="btn text-white shadow text-center" style="background-color:#b97ad6; border: none; width: 100%; cursor: pointer;" type="submit">
                    <div class="card-body" style="font-size: 1rem;">
                Datang
                    </div>
            </button>
            </form>
        </div>
        <div class="col-lg-2 mb-1">
            <form action="{{ route('pulang') }}" method="POST">
                @csrf
                <button type="submit" class="btn text-white shadow text-center"  style="background-color:#9256F8; border: none; width: 100%; cursor: pointer;" type="submit">
                    <div class="card-body" style="font-size: 1rem;">
                Pulang
                    </div>
            </button>
            </form>
        </div>
        
    
    <script>
        // Function to update time and date
        function updateTime() {
            const now = new Date();
            
            // Get date in 'Day, Date Month Year' format
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const currentDate = now.toLocaleDateString('en-US', options);
            
            // Get time in 'HH:MM:SS' format
            const currentTime = now.toLocaleTimeString();

            // Display the date and time
            document.getElementById('currentDate').textContent = currentDate;
            document.getElementById('currentTime').textContent = currentTime;
        }

        // Update the time immediately and every second
        setInterval(updateTime, 1000);
        updateTime();
    </script>
    
@endsection