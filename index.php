<!doctype html>
<html>
<head>
    <title>Sandbox / Ammap</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/ammap.css">
</head>
<body>
    <div id="map" style="width: 1024px; height: 768px; margin: 30px;"></div>
    <script type="text/javascript" src="./assets/js/ammap.js"></script>
    <script type="text/javascript" src="./assets/js/maps/worldLow.js"></script>
    <script type="text/javascript">
        AmCharts.ready(function () {
            var map = AmCharts.makeChart('map', {
                type: 'map',
                pathToImages: './assets/medias/ammap/',
                dataProvider: {
                    map: 'worldLow'
                }
            });
        });
    </script>
</body>
</html>
