<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sandbox / Ammap / South</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/ammap.css">
</head>
<body>
    <div id="map" style="width: 1024px; height: 768px; margin: 30px;"></div>
    <script type="text/javascript" src="./assets/js/ammap.js"></script>
    <script type="text/javascript" src="./assets/js/maps/worldHigh.js"></script>
    <script type="text/javascript" src="./assets/js/lang/fr.js"></script>
    <script type="text/javascript">
        AmCharts.ready(function () {
            var svgPath = 'M16,22.375L7.116,28.83l3.396-10.438l-8.883-6.458l10.979,0.002L16.002,1.5l3.391,10.434h10.981l-8.886,6.457l3.396,10.439L16,22.375L16,22.375z';

            function _zoomToSouthAmerica(event) {
                event.chart.zoomToGroup('south_america');
            }

            function _zoomToSelectedGroupId(event) {
                event.chart.zoomToGroup(event.chart.selectedObject.groupId);
            }

            var map = AmCharts.makeChart('map', {
                type: 'map',
                language: 'fr',
                pathToImages: './assets/medias/ammap/',
                dataProvider: {
                    map: 'worldHigh',
                    areas: [
                        {
                            id: 'GF',
                            groupId: 'south_america',
                            color: '#22427c',
                            rollOverColor: '#3366ff',
                            selectedColor: '#3366ff',
                            rollOverOutlineColor: '#ffffff'
                        },
                        {
                            id: 'BR',
                            groupId: 'south_america',
                            color: '#568203',
                            rollOverColor: '#708d23',
                            selectedColor: '#708d23',
                            rollOverOutlineColor: '#ffffff'
                        },
                        {
                            id: 'CO',
                            groupId: 'south_america',
                            color: '#efd242',
                            rollOverColor: '#ffe436',
                            selectedColor: '#ffe436',
                            rollOverOutlineColor: '#ffffff'
                        },
                        {
                            id: 'PE',
                            groupId: 'south_america',
                            color: '#bf3030',
                            rollOverColor: '#a91101',
                            selectedColor: '#a91101',
                            rollOverOutlineColor: '#ffffff'
                        },
                        {
                            id: 'BO',
                            groupId: 'south_america',
                            color: '#f6dc12',
                            rollOverColor: '#edff0c',
                            selectedColor: '#edff0c',
                            rollOverOutlineColor: '#ffffff'
                        },
                        {
                            id: 'VE',
                            groupId: 'south_america',
                            color: '#cdcdcd',
                            rollOverColor: '#bababa',
                            selectedColor: '#bababa',
                            rollOverOutlineColor: '#ffffff'
                        },
                        {
                            id: 'EC',
                            groupId: 'south_america',
                            color: '#cdcdcd',
                            rollOverColor: '#bababa',
                            selectedColor: '#bababa',
                            rollOverOutlineColor: '#ffffff'
                        }
                    ],
                    images: [
                        {
                            svgPath: svgPath,
                            title: 'Cayenne',
                            groupId: 'locations',
                            color: '#efd807',
                            latitude: 4.9227,
                            longitude: -52.3269,
                            url: 'http://igniweb.net/amsud/premiers-jours',
                            urlTarget: '_blank'
                        }
                    ]
                },
                areasSettings: {
                    autoZoom: true
                },
                zoomControl: {
                    zoomControlEnabled: false
                },
                zoomOnDoubleClick: false
            });

            map.addListener('selectedObjectChanged', _zoomToSelectedGroupId);
            map.addListener('homeButtonClicked', _zoomToSouthAmerica);
            _zoomToSouthAmerica({ chart: map });
        });
    </script>
</body>
</html>
