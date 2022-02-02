<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <?php include_once __DIR__ . "/partials/header.php "?>
    </header>
    <main id="app" class="bg-dark vh-100 d-flex justify-content-center align-items-center">
        <section>
            <div class="container bg-dark">
                <div class=" row row-cols-6 justify-content-around">
                    <div 
                        v-for="element in cards"
                        class="col card p-3 m-3 text-center">
                        <img :src="img/ + element.img"/>
                        
                    <h2 class="fs-4 text-uppercase text-center mt-2">
                        {{element.title}}
                    </h2>
                    <h3 class="fs-6">
                        {{element.artist}}
                    </h3>
                    <span class="fs-6">
                        {{element.data}}
                    </span>
                </div>
        </div>
    </div>
</section>
    </main>
<script src="./js/script.js"></script>
</body>
</html>