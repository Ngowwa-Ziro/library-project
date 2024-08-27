<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <style>
        .highlight-text {
            font-weight: bold;
            color: blue;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>

    <style>
        .pagination-wrapper {
            position: relative;
            width: 100%;
            padding: 10px 0;
        }

        .pagination-simple {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .pagination-simple a,
        .pagination-simple span {
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            color: #ffffff;
            background-color: #3498db;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .pagination-simple a:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }

        .pagination-simple .disabled {
            background-color: #bdc3c7;
            color: #7f8c8d;
            pointer-events: none;
        }

        .pagination-simple .prev {
            margin-right: auto;
        }

        .pagination-simple .next {
            margin-left: auto;
        }
        .blink {
    animation: blinker 1s linear infinite;
}

@keyframes blinker {
    50% {
        opacity: 0;
    }
}

    </style>


    <style>

        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(110, 142, 251, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loader {
            text-align: center;
        }

        .loader-emoji {
            font-size: 80px;
            animation: pulse 1s infinite alternate;
        }

        .loader-text {
            color: white;
            font-size: 24px;
            margin-top: 20px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.2);
            }
        }
    </style>


    <header>
        <h1>
            @if (isset($title))
                {{ $title }}&nbsp;-&nbsp;
            @endif
            <img src="{{ URL::asset('assets/images/man.png') }}" alt=" Management System" height="24px">
            {{ config('app.name') }}
        </h1>
    </header>

    <div id="wrapper">
        @include('partials.sidebar')

        <div class="content-page">
            <div class="content">
                
                <!-- Start Content-->
                <div class="container-fluid">
                    @include('partials.alerts')

                    @yield('breadcrumb')
                    @yield('content')

                </div>
            </div>

        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
