<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browser Deprecated</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Open Sans", sans-serif;
        }

        body {
            font-family: "Open Sans", sans-serif;
            color: #ffffff;
        }

        .page {
            position: relative;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        .page::before {
            content: "";
            position: fixed;
            inset: 0;
            background:
                linear-gradient(to right,
                    #EBBA4A8a 0%,
                    #EBBA4A8a 28.571%,
                    #E8A03E8a 28.571%,
                    #E8A03E8a 42.857%,
                    #5AC6FA8a 42.857%,
                    #5AC6FA8a 57.142%,
                    #459CE38a 57.142%,
                    #459CE38a 71.428%,
                    #E3634D8a 71.428%,
                    #E3634D8a 100%
                ),
                url("{{ asset('images/background.jpg') }}") center/cover no-repeat;
            z-index: -1;
        }

        .content-wrapper-warning {
            width: 100%;
            margin: 0;
            padding: 80px 0 0;
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .content-wrapper {
            width: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .warning-panel {
            background: #696969F5;
            padding: 40px 60px;
            width: 100%;
            max-width: none;
        }

        .warning-inner {
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .warning-header {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 22px;
        }

        .warning-svg {
            width: 34px;
            height: 34px;
            filter: invert(1);
        }

        .warning-title {
            font-size: 22px;
            font-weight: 700;
        }

        .warning-title span {
            font-weight: 800;
        }

        .warning-text {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.95;
            max-width: 700px;
        }

        .warning-text p + p {
            margin-top: 8px;
        }

        .btn-outline {
            background: #949494;
            margin-top: 28px;
            display: inline-flex;
            padding: 10px 24px;
            border: 1px solid #ffffff;
            border-radius: 3px;
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
        }

        .browser-list {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 2fr;
        }

        .browser-item {
            text-align: center;
            padding: 34px 20px 26px;
            color: #ffffff;
        }

        .browser-svg {
            width: 82px;
            height: 82px;
            filter: invert(1);
            margin-bottom: 14px;
        }

        .browser-text h3 {
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .browser-text p {
            font-size: 12px;
            margin-top: 5px;
        }

        .btn-download {
            margin-top: 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 24px;
            border: 1px solid #ffffff;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
        }

        .download-icon {
            display: none;
        }

        @media (max-width: 980px) {
            .page::before {
                background: url("{{ asset('images/background.jpg') }}") center/cover no-repeat !important;
            }

            .content-wrapper-warning {
                padding: 0;
            }

            .warning-inner {
                width: 100%;
                padding: 20px 16px 24px;
            }

            .browser-list {
                grid-template-columns: 1fr;
            }

            .browser-item:nth-child(1) {
                background-color: #EBBA4A8a;
            }

            .browser-item:nth-child(2) {
                background-color: #E8A03E8a;
            }

            .browser-item:nth-child(3) {
                background-color: #5AC6FA8a;
            }

            .browser-item:nth-child(4) {
                background-color: #459CE38a;
            }

            .browser-item:nth-child(5) {
                background-color: #E3634D8a;
            }

            .browser-item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 18px 16px;
                text-align: left;
            }

            .browser-svg {
                width: 48px;
                height: 48px;
                margin: 0 12px 0 0;
            }

            .browser-text {
                flex: 1;
            }

            .btn-download {
                margin-top: 0;
                padding: 0;
                border: none;
                background: transparent;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .download-icon {
                display: block;
                width: 20px;
                height: 20px;
                filter: invert(1);
            }

            .download-text{
                display: none;
            }
        }

    </style>

</head>
<body>

<div class="page">
    <div class="content-wrapper-warning">
        <section class="warning-panel">
            <div class="warning-inner">
                <div class="warning-header">
                    <img src="{{ asset('images/exclamation-triangle.svg') }}" class="warning-svg">
                    <div class="warning-title">Your browser <span>Internet Explorer 11</span> is deprecated</div>
                </div>

                <div class="warning-text">
                    <p>Modern browsers protect your device from viruses and support new technologies.</p>
                    <p>That's why we decided to stop supporting your current browser or your browser version. To access our website, please download one of the browsers below.</p>
                </div>

                <a href="#" class="btn-outline">How do I update my browser?</a>
            </div>

        </section>
    </div>

    <div class="content-wrapper">
        @php
            $browsers = [
                ['name'=>'GOOGLE CHROME','version'=>'Version 40+','class'=>'chrome','icon'=>'chrome.svg'],
                ['name'=>'MOZILLA FIREFOX','version'=>'Version 40+','class'=>'firefox','icon'=>'firefox-browser.svg'],
                ['name'=>'MICROSOFT EDGE','version'=>'Version 40+','class'=>'edge','icon'=>'edge.svg'],
                ['name'=>'APPLE SAFARI','version'=>'Version 40+','class'=>'safari','icon'=>'safari.svg'],
                ['name'=>'OPERA','version'=>'Version 40+','class'=>'opera','icon'=>'opera.svg'],
            ];
        @endphp

        <section class="browser-list">
            @foreach ($browsers as $index => $b)
            <div class="browser-item {{ $b['class'] }}" data-bg="{{ $index + 1 }}">
                
                <img src="{{ asset('images/'.$b['icon']) }}" class="browser-svg">

                <div class="browser-text">
                    <h3>{{ $b['name'] }}</h3>
                    <p>{{ $b['version'] }}</p>
                </div>

                <a href="#" class="btn-download">
                    <span class="download-text">Download</span>
                    <img src="{{ asset('images/download.svg') }}" class="download-icon">
                </a>

            </div>
            @endforeach
        </section>


    </div>
</div>

</body>
</html>
