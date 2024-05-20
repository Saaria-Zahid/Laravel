
<x-header/>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Islam 365</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        body{

         background-color: rgb(236, 236, 236) 

        }

       *{
            font-family: 'Amiri Quran', serif;
        }

        a{
            text-decoration: none;
            color: black;
        }
        p{
            font-size: {40px}
        }

        .bghov{
            background-color: white;
            transition: background-color 0.5s ease-in-out;
        }
        .bghov:hover{
            background-color: #2c99ff;

        }
        .htt{
            color: #2c99ff;
            
        }
        .bghov:hover .htt{
         color: white;
        }

    </style>

</head>

<body >


    <div class="container bg-light rounded">
                <h1 class="text-center mt-5 mb-5 pt-5">بِسْمِ ٱللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>
              @foreach ($surahdata as $dataa)
              
        
                <a href="{{ url('ayats/' . $dataa['number'])}}">
                    <div class=" m-3 border p-3 bghov">
                        <div class="row">
                          <div class="col-md-6 ">
                            <h3 class="htt">{{ $dataa['number'] }}. {{ $dataa['englishName'] }} ({{ $dataa['englishNameTranslation'] }})</h3>
                            <p class="h5 htt">{{ $dataa['numberOfAyahs']}} Ayahs</p>
                          </div>
                          <div class="col-md-6 text-end">
                            <h3 class="arabic htt">{{ $dataa['name'] }}</h3>
                            <p class="h5 htt">{{ $dataa['numberOfAyahs']}}  آيات</p>
                          </div>
                        </div>
                      </div>
                    </a>
                    
                @endforeach
     

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>