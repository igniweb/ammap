<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sandbox / Ammap</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/ammap.css">
</head>
<body>
    <div id="map" style="width: 1024px; height: 768px; margin: 30px;"></div>
    <script type="text/javascript" src="./assets/js/ammap.js"></script>
    <script type="text/javascript" src="./assets/js/maps/continentsHigh.js"></script>
    <script type="text/javascript" src="./assets/js/lang/fr.js"></script>
    <script type="text/javascript">
        AmCharts.ready(function () {
            var map = AmCharts.makeChart('map', {
                type: 'map',
                language: 'fr',
                pathToImages: './assets/medias/ammap/',
                dataProvider: {
                    map: 'continentsHigh',
                    areas: [
                        {
                            id: 'south_america',
                            color: '#f7b100',
                            rollOverColor: '#e6a000',
                            rollOverOutlineColor: '#ffffff'
                        }
                    ]
                },
                areasSettings: {
                    autoZoom: true
                },
                zoomControl: {
                    zoomControlEnabled: false
                },
                mouseWheelZoomEnabled: false,
                zoomOnDoubleClick: false,
                balloonLabelFunction: function (mapObject) {
                    return '';
                }
            });

            map.addListener('homeButtonClicked', function (event) {
                console.log(event.chart);
            });

            map.addListener('clickMapObject', function (event) {
                if (typeof event.mapObject.cname !== 'undefined') {
                    if (event.mapObject.cname === 'MapArea') {
                        console.log(event.mapObject);
                        event.chart.zoomToSelectedObject(event.mapObject.parentObject);
                    }
                }
            });
        });
    </script>
</body>
</html>
