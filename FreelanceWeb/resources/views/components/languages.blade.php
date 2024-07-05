
@php
$languages = [
    'en' => 'English',
    'es' => 'Spanish',
    'fr' => 'French',
    'de' => 'German',
    'it' => 'Italian',
    'pt' => 'Portuguese',
    'ru' => 'Russian',
    'zh' => 'Chinese',
    'ja' => 'Japanese',
    'ko' => 'Korean',
    'ar' => 'Arabic',
    'hi' => 'Hindi',
    'bn' => 'Bengali',
    'pa' => 'Punjabi',
    'jv' => 'Javanese',
    'vi' => 'Vietnamese',
    'mr' => 'Marathi',
    'ta' => 'Tamil',
    'tr' => 'Turkish',
    'fa' => 'Persian',
    'ur' => 'Urdu',
    // Add more languages as needed
];
@endphp


    @foreach ($languages as $code => $name)
        <option >  {{  $name }}</option>
    @endforeach


    {{-- call method --}}
    {{-- <select id="inputState" name="edu_deg" class="form-select">
        <x-countries/>
       </select> --}}
