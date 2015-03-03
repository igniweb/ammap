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
                            color: '#f7b100',
                            rollOverColor: '#e6a000',
                            rollOverOutlineColor: '#a2a3a4',
                            groupId: 'europe'
                        },
                        {
                            id: 'DE',
                            color: '#f7b100',
                            rollOverColor: '#e6a000',
                            rollOverOutlineColor: '#a2a3a4',
                            groupId: 'europe'
                        },
                        {
                            id: 'BR',
                            color: '#7331fd',
                            rollOverColor: '#6220dc',
                            rollOverOutlineColor: '#a2a3a4',
                            groupId: 'south-america'
                        },
                        {
                            id: 'BO',
                            color: '#7331fd',
                            rollOverColor: '#6220dc',
                            rollOverOutlineColor: '#a2a3a4',
                            groupId: 'south-america'
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
                },
                clickMapObject: function (mapObject) {
                    this.zoomToGroup(mapObject.groupId);
                }
            });

            map.addListener('homeButtonClicked', function () {
                console.log(map);
            });
        });
    </script>
</body>
</html>
