<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Field Operation System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                font-weight: 600;
            }
            .text{
                font-size: 40px;
            }

            .links > a {
                color: blue;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
        </style> 

    </head>
    <body background="https://imagineering.co.th/wp-content/uploads/2018/11/bg-home-product.png">
    
      
        <div class="flex-center position-ref full-height">
           
                
            <div class="content">
                <div class="title m-b-md">
                    Field Operation System
                </div>
                <div class="text ">
                        ระบบบันทึกค่าใช้จ่ายนอกพื้นที่ 
                    </div>
                    <br>

                <div class="links">
                    <a href="{{URL::to('/login')}}">  <img src="http://www.sapphire.co.th/images/logo.png"></a>
                </div>
            </div>
        </div>
        
    </body>
</html>