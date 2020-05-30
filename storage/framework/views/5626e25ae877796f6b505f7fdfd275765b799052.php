<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravue</title>

        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>

        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Laravue</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/home" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/tasks" class="nav-link">Tasks</router-link>
                    </li>
                  </ul>
                </div>
            </nav>
    
            <router-view></router-view>        
        </div>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    </body>
</html>
<?php /**PATH C:\laragon\www\laravue\resources\views/welcome.blade.php ENDPATH**/ ?>