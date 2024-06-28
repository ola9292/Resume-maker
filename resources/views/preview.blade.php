{{-- @extends('layouts.layout')

@section('content') --}}
<div style="width: 83.333333%; margin: 0 auto;font-family:sans-serif">
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
</div>

{{-- @endsection --}}


