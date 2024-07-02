<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('pdf.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="resume-main-container">
        <div class="personal-details">
            <h1>{{ strtoupper($userDetail['first_name']) }} {{ strtoupper($userDetail['last_name']) }}</h1>
            <h4 class="colored">{{ $userDetail['profession'] }}</h4>
            <p>{{ $userDetail['phone'] }} | {{ $userDetail['email'] }} | {{ $userDetail['country'] }} | {{ $userDetail['website'] }}</p>
        </div>
        <div class="summary">
            <h3 class="heading">SUMMARY</h3>
            <p>{{ $userDetail['summary'] }}</p>
        </div>
        <div class="work-history">
            <h3 class="heading">Experience</h3>
            @foreach ($workHistory as $work)
            <div class="work-card">
                <h4 class="caps">{{ $work['position'] }}</h4>
                <p class="colored caps">{{ $work['company'] }}</p>
                <p>{{ $work['start_year'] }} - {{ $work['end_year'] }}</p>
                @if(!empty($work['duties']))
                    <ul class="duties" style="">
                        @foreach (explode("\n", $work['duties']) as $duty)
                            @if (trim($duty) !== '')
                                <li>{{ $duty }}</li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>

            @endforeach
        </div>
        <div class="education">
            <h3 class="heading">Education</h3>
            @foreach ($education as $edu)
                <div class="education-card">
                    <h4 class="caps">{{ $edu['degree'] }}</h4>
                    <p class="colored">{{ $edu['school'] }}</p>
                    <p> {{ $edu['graduation_year'] }}</p>

                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
