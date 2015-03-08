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

            function _zoomToDefault(event) {
                event.chart.zoomToGroup('south_america');
            }

            function _zoomToSelectedGroupId(event) {
                event.chart.zoomToGroup(event.chart.selectedObject.groupId);
            }

            function _setAreas() {
                var areas = [];

                var _areas = [
                    { id: 'GF', color: '#3366ff' },
                    { id: 'BR', color: '#708d23' },
                    { id: 'CO', color: '#ffe436' },
                    { id: 'PE', color: '#a91101' },
                    { id: 'BO', color: '#edff0c' },
                    { id: 'EC', color: '#bababa' },
                    { id: 'VE', color: '#bababa' }
                ];

                for (var i = 0 ; i < _areas.length ; i++) {
                    areas.push({
                        id: _areas[i].id,
                        groupId: 'south_america',
                        color: _areas[i].color,
                        rollOverColor: _areas[i].color,
                        selectedColor: _areas[i].color,
                        rollOverOutlineColor: '#ffffff'
                    });
                }

                return areas;
            }

            function _setImages() {
                var images = [];

                var _images = [
                    { title: 'Cayenne', latitude: 4.9227, longitude: -52.3269, url: 'http://igniweb.net/amsud/premiers-jours' },
                    { title: 'Kourou', latitude: 5.1597, longitude: -52.6503, url: 'http://igniweb.net/amsud/le-centre-spatial' },
                    { title: 'Macapa', latitude: 0, longitude: -51.0705, url: 'http://igniweb.net/amsud/latitude-0' }
                ];

                for (var i = 0 ; i < _images.length ; i++) {
                    images.push({
                        svgPath: svgPath,
                        groupId: 'locations',
                        color: '#efd807',
                        title: _images[i].title,
                        latitude: _images[i].latitude,
                        longitude: _images[i].longitude,
                        url: _images[i].url,
                        urlTarget: '_blank'
                    });
                }

                return images;
            }

            var map = AmCharts.makeChart('map', {
                type: 'map',
                language: 'fr',
                pathToImages: './assets/medias/ammap/',
                dataProvider: {
                    map: 'worldHigh',
                    areas: _setAreas(),
                    images: _setImages()
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
            map.addListener('homeButtonClicked', _zoomToDefault);
            _zoomToDefault({ chart: map });
        });
    </script>
</body>
</html>
