<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Assessment 
                </div>

                <div class="links">
                    <a href="/Kijang_Emas">Kijang Emas</a>
                    <a href="/OPR">OPR</a>
                    <a href="/kl_usd_reference_rate">KL USD Reference Rate</a>

                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script>

            // let xhr = new XMLHttpRequest;
            // //Call the open function, GET-type of request, url, true-asynchronous
            // xhr.open('GET', 'https://api.bnm.gov.my/public/kijang-emas', true)
            // xhr.setRequestHeader('Accept', 'application/vnd.BNM.API.v1+json')
            // //call the onload 
            // xhr.onload = function() 
            //     {
            //         //check if the status is 200(means everything is okay)
            //         if (this.status === 200) 
            //             {
            //                 //return server response as an object with JSON.parse
            //                 console.log('DATA:', JSON.parse(this.responseText));
            //     }
            //             }
            // //call send
            // xhr.send();

            // $(document).ready(function() {
            //     var api_url= 'https://api.bnm.gov.my/public/kijang-emas'
            //     $.ajax({
            //         headers: {'Accept': 'application/vnd.BNM.API.v1+json'},
            //         url: api_url,
            //         type: 'GET',
            //         success: function(result){
            //             console.log(result);
            //         },
            //     });
            // });
            
            const uri = 'https://api.bnm.gov.my/public/kijang-emas';
            let h = new Headers();
            h.append('Accept', 'application/vnd.BNM.API.v1+json');

            let req = new Request(uri, {
                method: 'GET',
                headers: h,
                mode: 'cors'
            });

            fetch(req)
                .then( (response)=>{
                    if(response.ok){
                        return response.json();
                    }else{
                        throw new Error('BAD HTTP stuff');
                    }
                })
                .then( (jsonData) =>{
                    console.log(jsonData);
                })
                .catch( (err) =>{
                    console.log('ERROR:', err.message);
                });
        </script>
    </body>
</html>
