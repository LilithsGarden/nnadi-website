<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifeanyi Nnadi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ========================================
           HERO SECTION - Original Design
           ======================================== */
        body, html {
            height: 100%;
            margin: 0;
        }

        .hero-image {
            background-image: url("{{ asset('images/Hero3.1.jpg') }}");
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            width: 90%;
            max-width: 800px;
        }

        .hero-text h1 {
            font-family: Georgia, serif;
            font-weight: bold;
            font-style: italic;
            color: #fff;
            font-size: 50px;
            margin: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-text p {
            font-family: Georgia, serif;
            font-style: italic;
            font-size: 1.2rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 12px 35px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            border: 5px solid black;
            margin-top: 5%;
            font-size: 8pt;
            letter-spacing: 5px;
            font-weight: bold;
            font-family: Georgia, serif;
            font-style: italic;
            transition: all 0.3s ease;
        }

        .hero-text button:hover {
            background-color: transparent;
            color: white;
            border: 5px solid black;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-exclusions {
            position: absolute;
            text-align: center;
            bottom: 8%;
            left: 50%;
            transform: translateX(-50%);
            color: white;
        }

        .hero-exclusions a {
            color: #fff;
            text-decoration: none;
        }

        .hero-exclusions a:hover {
            color: #ccc;
        }

        .exclusions {
            font-family: Georgia, serif;
            font-size: 8pt;
            letter-spacing: 1px;
            text-shadow: none;
            font-style: normal;
            margin: 0;
        }

        /* ========================================
           POPUP STYLES
           ======================================== */
        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index: 1000;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 2px;
            width: 60%;
            max-width: 700px;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Georgia, serif;
            font-style: italic;
        }

        .popup .close {
            position: absolute;
            top: 10px;
            right: 20px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popup .close:hover {
            color: #a6a6a6;
        }

        .popup .content {
            max-height: 30%;
            overflow: auto;
            padding-top: 30px;
            color: #333;
        }

        /* ========================================
           RESPONSIVE
           ======================================== */
        @media screen and (max-width: 700px) {
            .popup {
                width: 90%;
                margin: 40px auto;
            }
            
            .hero-text h1 {
                font-size: 32px;
            }
            
            .hero-text p {
                font-size: 1rem;
            }
            
            .hero-text button {
                padding: 10px 25px;
                font-size: 7pt;
                letter-spacing: 3px;
            }
        }
    </style>
</head>
<body>

    <!-- ========================================
    HERO SECTION
    ======================================== -->
    <div class="hero-image">
        <div class="hero-text">
            <h1>Canada Goose</h1>
            <p>spring styles have arrived</p>
            <button>SHOP NOW</button>
        </div>
        <div class="hero-exclusions">
            <a href="#popup1">
                <p class="exclusions">*click here for details</p>
            </a>
        </div>

        <!-- Popup -->
        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <br><br>
                    <h2>Promotional Information & Exclusions</h2>
                    <p>This is a list of exclusions</p>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
    REST OF YOUR CONTENT
    ======================================== -->
    <section class="section-padding bg-white">
        <div class="container-custom">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-center text-navy">
                Welcome to the Site
            </h2>
            <p class="font-text text-center text-warm-grey max-w-2xl mx-auto mt-4">
                This is where your other content will go
            </p>
        </div>
    </section>

</body>
</html>