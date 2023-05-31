<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
</head>
<body>
    
    <div id="app">

        <div class="general-container position-relative">

            <div class="header">
                <img src="https://cdn.pixabay.com/photo/2016/10/22/00/15/spotify-1759471_960_720.jpg" alt="logo" class="img-logo">
            </div>

            <div class="container-cards text-white text-center">
                <div class="container w-75">
                    <div class="d-flex flex-wrap">

                        <div v-for="(element, index) in dischi" :key="index" class="single-card" @click="clickDisc(index)">
                            <div class="poster-box">
                                <img :src="element.poster" alt="" class="img-poster">
                            </div>
                            <p class="mb-1 mt-1"> <strong> {{ element.title }} </strong></p>
                            <p class="mb-1 small-text">{{ element.author }}</p>
                            <p class="mb-1">{{ element.year }}</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- card che appare al click -->

            <div :class="(indexDisc == '') ? 'd-none' : 'd-flex' " class="clicked-card">
                <div class="single-card-clicked">
                    <div class="poster-box">
                        <img :src="indexDisc.poster" alt="poster" class="img-poster">
                    </div>
                    <p class="mb-1 mt-1"> <strong> {{indexDisc.title}} </strong></p>
                    <p class="mb-1 small-text">{{indexDisc.author}}</p>
                    <p class="mb-1">{{indexDisc.year}}</p>
                </div>
                <div class="close" @click="closeDisc">X</div>
            </div>

        </div>

    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js' integrity='sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==' crossorigin='anonymous'></script>
    <script src="main.js"></script>
</body>
</html>