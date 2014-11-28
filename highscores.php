<!DOCTYPE html>
<html>
<head>
    <title>Mallard Mania</title>
    
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

    <script language="javascript" type="text/javascript" src="createjs-2013.12.12.min.js"></script>
    <script language="javascript" type="text/javascript" src="init.js"></script>

</head>
<body>
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="mallardmania.html" class="navbar-brand">
                        <img style="max-width:100%;max-height:100%;" src="assets/logo.png" />
                    </a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="highscores.php">High Scores</a>
                        </li>
                        <li>
                            <a href="https://github.com/joeyjoeuk/MallardMania" target="_blank">GitHub</a>
                        </li>
                        <li>
                            <a href="http://www.joesshed.com/index.html#contact" target="_blank">Contact</a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
        <div class="bs-docs-section">
            <div class="page-header" style="height: 80px;">
            </div>
            <div class="bs-component">
                <div class="jumbotron">

                    <h2>High Scores</h2>
                    <?php include_once("getscores.php")?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>