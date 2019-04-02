<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('img/hello_favicon.png') }}" sizes="56x56">

        <title>hello.ir - immobilien netzwerk</title>

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

            .links {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
            .form-control{
                border-radius: 0 !important;
                border: none !important;
                border-bottom: 1px solid #5896d0 !important;
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
                    <img src="{{ asset('img/hello_logo.svg') }}" style="width: 500px; height: auto;">
                </div>

                <div class="links">
                    Ein exklusives Netzwerk für alle die in der Branche was zu sagen haben.
                </div>

                <form class="form-inline justify-content-center js-cm-form" id="subForm" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="30FEA77E7D0A9B8D7616376B90063231559560C2B49BDB229227B6C69FC82CE3F1BAFDD3C8279665E23F4FA100BF04A56905C95659DC77BCA4E1EFF287F689FD">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-transparent border-0">@</div>
                        </div>
                        <input id="fieldEmail" name="cm-efhti-efhti" type="email" class="form-control js-cm-email-input" id="inlineFormInputGroupUsername2" placeholder="e-mail adresse" required>
                    </div>
                    <div class="form-check mb-2 mr-sm-2">
                        <input id="cm-privacy-consent" name="cm-privacy-consent" required type="checkbox" />
                        <label class="form-check-label" for="inlineFormCheck">
                            Ja, ich will hello.ir Mails erhalten.
                        </label>
                    </div>
                    <input id="cm-privacy-consent-hidden" name="cm-privacy-consent-hidden"
                           type="hidden" value="true" />
                    <button class="js-cm-submit-button btn btn-light btn-sm" type="submit">anmelden</button>
                </form>
                <script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
            </div>
        </div>
    </body>
</html>
