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
    <script type="text/javascript" src="./assets/js/maps/worldHigh.js"></script>
    <script type="text/javascript" src="./assets/js/lang/fr.js"></script>
    <script type="text/javascript">
        AmCharts.ready(function () {
            var map = AmCharts.makeChart('map', {
                type: 'map',
                language: 'fr',
                pathToImages: './assets/medias/ammap/',
                dataProvider: {
                    map: 'worldHigh',
                    areas: [
                        {
                            id: 'FR',
                            groupId: 'europe',
                            showAsSelected: true
                        },
                        {
                            id: 'DE',
                            groupId: 'europe',
                            showAsSelected: true
                        },
                        {
                            id: 'BR',
                            groupId: 'south-america'
                        },
                        {
                            id: 'BO',
                            groupId: 'south-america'
                        }
                    ]
                },
                areasSettings: {
                    autoZoom: true,
                    unlistedAreasOutlineAlpha: 0.5
                },
                zoomControl: {
                    zoomControlEnabled: false
                },
                mouseWheelZoomEnabled: false,
                zoomOnDoubleClick: false,
                clickMapObject: function (mapObject) {
                    this.zoomToGroup(mapObject.groupId);
                }
            });
        });
    </script>
</body>
</html>
