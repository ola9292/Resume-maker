
{{-- <div style="width: 83.333333%; margin: 0 auto;font-family:sans-serif">
    <table style="width: 100%">
        <tr>
            <th style="font-size: 1.5rem; text-align: left;">{{ strtoupper($userDetail['first_name']) }} {{ strtoupper($userDetail['last_name']) }}</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>{{ $userDetail['phone'] }} | {{ $userDetail['email'] }} | {{ $userDetail['country'] }} | {{ $userDetail['website'] }}</td>
            <td></td>
        </tr>
    </table>
    <h4 style="border-bottom: 1px solid #e6e6e6; font-size: 1.25rem; margin-bottom: 0.5rem;">SUMMARY</h4>
    <table style="width: 100%; margin-bottom: 0.5rem;">
        <tr>
            <td colspan="3">{{ $userDetail['summary'] }}</td>
        </tr>
    </table>
    <h4 style="border-bottom: 1px solid #e6e6e6; font-size: 1.25rem; margin-bottom: 0;padding-bottom:2px">Professional Experience</h4>
    <table style="width: 100%; margin-bottom: 1.2rem;">
        @foreach ($workHistory as $work)
        <tr>
            <td style="padding-bottom: 10px;">
                <div style="vertical-align: top;">
                    <h3 style="font-size: 18px; font-weight: bold; padding-bottom: 0;">{{ $work['company'] }}</h3>
                    <p style="padding-bottom: 0; font-size: 16px;">{{ $work['position'] }}</p>
                    <p style="padding-bottom: 0; font-size: 14px;">{{ $work['start_year'] }} - {{ $work['end_year'] }}</p>
                </div>
                @if(!empty($work['duties']))
                    <ul style="padding-left: 1.5rem; list-style-type: circle;">
                        @foreach (explode("\n", $work['duties']) as $duty)
                            @if (trim($duty) !== '')
                                <li>{{ $duty }}</li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    <h4 style="border-bottom: 1px solid #e6e6e6;padding-bottom:2px; font-size: 1.25rem; margin-bottom: 0.5em; page-break-before: auto;">Education</h4>
    <table style="width: 100%;">
        @foreach ($education as $edu)
        <tr>
            <td style="width: 33.333333%;">
                <h3 style="font-size: 18px; font-weight: bold; padding-bottom: 2px;">{{ $edu['degree'] }}</h3>
                <p style="padding-bottom: 2px;">{{ $edu['school'] }}</p>
                <p style="padding-bottom: 2px;">{{ $edu['graduation_year'] }}</p>
            </td>
        </tr>
        @endforeach
    </table>
</div> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('pdf.css')}}" type="text/css">
<style>
body{
    font-family: sans-serif;

}
.caps{
    text-transform: capitalize;
}
.upper{
    text-transform: uppercase;
}
.resume-main-container{
    width: 90%;
    margin: 0 auto;
    border-radius: 10px;
    padding: 0 10px;
}
.personal-details > h1{
    margin-bottom: 0;
    padding: 0;
}
.personal-details > h4{
    margin: 0;
    padding: 0;
}
.personal-details > p, .summary > p{
    margin-top: 4px;
    padding: 0;
}
.colored{
    color: #66c2ff;
}
.heading{
    text-transform: uppercase;
    border-bottom: 2px solid gray;
    margin-bottom: 10px;
}
.work-card{
    margin-bottom: 40px;
}
.work-card > h4, .work-card > p{
    margin: 4px 0;
    padding: 0;
}
.duties{
    padding-left: 1.5rem;
    list-style-type: circle;
}
.education-card{
    margin-bottom: 20px;
}
.education-card > p, .education-card > h4{
    margin: 4px 0;
}


</style>
<body>
    {{-- {{dd($education)}} --}}
    <div class="resume-main-container">
        @if($userDetail != null)
            <div class="personal-details">
                <h1>{{ strtoupper($userDetail['first_name']) }} {{ strtoupper($userDetail['last_name']) }}</h1>
                <h4 class="colored">{{ $userDetail['profession'] }}</h4>
                <p><i class="fa-solid fa-phone"></i> {{ $userDetail['phone'] }} |<i class="fa-solid fa-at"></i> {{ $userDetail['email'] }} |<i class="fa-solid fa-earth-americas"></i> {{ $userDetail['country'] }} | {{ $userDetail['website'] }}</p>
            </div>
            <div class="summary">
                <h3 class="heading">SUMMARY</h3>
                <p>{{ $userDetail['summary'] }}</p>
            </div>
            <div class="summary">
                <h3 class="heading">Technical Skills</h3>
                <p>{{ $userDetail['skills'] }}</p>
            </div>
        @endif
        @if(count($workHistory) > 0)
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
        @endif
        @if(count($education) > 0)
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
        @endif
    </div>
</body>
</html>




