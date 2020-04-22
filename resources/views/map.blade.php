@extends('layouts.master')

@section('content')
<section>
    <div>
        <div class="fixed-action-filter">
            <div class="card">
                <div class="card-body">
                    <div class="pull-right">
                        <label class="mb-0">Pilih Tahun</label>
                        <select name="test" class="form-control" onchange="changeMap(this.value)">
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2017">2016</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-action-compass">
            <img src="{{ asset('assets/image/compass.jpg') }}" style="max-width:40px;" alt="Kompas">
        </div>
        <div style="width: 100%; height: 100%;">
            {!! Mapper::render() !!}
            <div id="legend"><h6 class="font-weight-bold">Legend</h6></div>
        </div>
        <div class="fixed-action-btn">
            <a id="showmodal" data-toggle="modal" data-target="#graphic" class="btn-floating btn-lg bg-success">
                <i class="fa fa-info-circle"></i>
            </a>
        </div>
    </div>
</section>

<div class="modal fade" id="graphic" tabindex="-1" role="dialog" aria-labelledby="graphic" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="classic-tabs">
                    <ul class="nav tabs-success" id="myClassicTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="luas_kerapatan" data-toggle="tab" href="#luas_kerapatan_content" role="tab" aria-controls="luas_kerapatan" aria-selected="true">Luas Kerapatan Mangrove</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light" id="kriteria_kondisi" data-toggle="tab" href="#kriteria_kondisi_content" role="tab" aria-controls="kriteria_kondisi" aria-selected="false">Kriteria Kondisi Mangrove</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light" id="grafik" data-toggle="tab" href="#grafik_content" role="tab" aria-controls="grafik" aria-selected="false">Grafik</a>
                        </li>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </ul>
                    <div class="tab-content border-right border-bottom border-left rounded-bottom" id="myClassicTabContent">
                        <div class="tab-pane fade active show" id="luas_kerapatan_content" role="tabpanel" aria-labelledby="luas_kerapatan_content">
                            <h6 class="font-weight-bold">Tabel Luas Kerapatan Mangrove</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="p-1">Tahun</th>
                                            <th colspan="5" class="p-1">Luas Kerapatan (ha)</th>
                                            <th rowspan="2" class="p-1">Luas Total<br>(ha)</th>
                                        </tr>
                                        <tr>
                                            <th class="p-1">Sangat Buruk</th>
                                            <th class="p-1">Buruk</th>
                                            <th class="p-1">Normal</th>
                                            <th class="p-1">Baik</th>
                                            <th class="p-1">Sangat Baik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2016</td>
                                            <td>1,120552</td>
                                            <td>15,4712795</td>
                                            <td>181,681895</td>
                                            <td>1238,856740</td>
                                            <td>674,763411</td>
                                            <td>2111,893877</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>0,100638</td>
                                            <td>3,668909</td>
                                            <td>227,537183</td>
                                            <td>1371,974372</td>
                                            <td>975,133822</td>
                                            <td>2578,414924</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>0,997043</td>
                                            <td>17,630619</td>
                                            <td>294,038679</td>
                                            <td>1145,728918</td>
                                            <td>1075,080325</td>
                                            <td>2533,475584</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>0,210597</td>
                                            <td>8,209759</td>
                                            <td>200,281769</td>
                                            <td>1087,667143</td>
                                            <td>1027,144512</td>
                                            <td>2323,513780</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kriteria_kondisi_content" role="tabpanel" aria-labelledby="kriteria_kondisi_content">
                            <h6 class="font-weight-bold">Tabel Kriteria Kondisi Mangrove</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tahun</th>
                                            <th>Kecamatan</th>
                                            <th>Luas Mangrove<br>Kondisi Baik (ha)</th>
                                            <th>Luas Mangrove<br>Kondisi Baik (%)</th>
                                            <th>Kriteria Kondisi Mangrove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-1" rowspan="6">2016</td>
                                            <td class="p-1">Ujung Pangkah</td>
                                            <td class="p-1">1357,033</td>
                                            <td class="p-1">99,209</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Sidayu</td>
                                            <td class="p-1">65,438</td>
                                            <td class="p-1">91,548</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Bungah</td>
                                            <td class="p-1">327,851</td>
                                            <td class="p-1">71,359</td>
                                            <td class="p-1 font-weight-bold white-text" style="background-color:#ffa700;">Baik (Sedang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Manyar</td>
                                            <td class="p-1">161,652</td>
                                            <td class="p-1">77,661</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Kebomas</td>
                                            <td class="p-1">1,630</td>
                                            <td class="p-1">34,235</td>
                                            <td class="p-1 bg-danger font-weight-bold white-text">Rusak (Jarang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Gresik</td>
                                            <td class="p-1">0,017</td>
                                            <td class="p-1">8,000</td>
                                            <td class="p-1 bg-danger font-weight-bold white-text">Rusak (Jarang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" rowspan="6">2017</td>
                                            <td class="p-1">Ujung Pangkah</td>
                                            <td class="p-1">1548,249</td>
                                            <td class="p-1">91,324</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Sidayu</td>
                                            <td class="p-1">54,063</td>
                                            <td class="p-1">83,391</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Bungah</td>
                                            <td class="p-1">475,631</td>
                                            <td class="p-1">90,282</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Manyar</td>
                                            <td class="p-1">252,566</td>
                                            <td class="p-1">92,507</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Kebomas	Baik</td>
                                            <td class="p-1">15,673</td>
                                            <td class="p-1">92,316</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Gresik</td>
                                            <td class="p-1">0,925</td>
                                            <td class="p-1">65,497</td>
                                            <td class="p-1 font-weight-bold white-text" style="background-color:#ffa700;">Baik (Sedang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" rowspan="6">2018</td>
                                            <td class="p-1">Ujung Pangkah</td>
                                            <td class="p-1">1482,604</td>
                                            <td class="p-1">90,892</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Sidayu</td>
                                            <td class="p-1">58,030</td>
                                            <td class="p-1">78,697</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Bungah</td>
                                            <td class="p-1">464,012</td>
                                            <td class="p-1">83,576</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Manyar</td>
                                            <td class="p-1">211,577</td>
                                            <td class="p-1">79,367</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Kebomas</td>
                                            <td class="p-1">3,780</td>
                                            <td class="p-1">68,794</td>
                                            <td class="p-1 font-weight-bold white-text" style="background-color:#ffa700;">Baik (Sedang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Gresik</td>
                                            <td class="p-1">0,806</td>
                                            <td class="p-1">62,258</td>
                                            <td class="p-1 font-weight-bold white-text" style="background-color:#ffa700;">Baik (Sedang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" rowspan="6">2019</td>
                                            <td class="p-1">Ujung Pangkah</td>
                                            <td class="p-1">1469,106</td>
                                            <td class="p-1">91,953</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Sidayu</td>
                                            <td class="p-1">45,321</td>
                                            <td class="p-1">85,214</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Bungah</td>
                                            <td class="p-1">427,100</td>
                                            <td class="p-1">91,780</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Manyar</td>
                                            <td class="p-1">164,543</td>
                                            <td class="p-1">84,390</td>
                                            <td class="p-1 bg-success font-weight-bold white-text">Baik (Padat)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Kebomas</td>
                                            <td class="p-1">7,912</td>
                                            <td class="p-1">71,827</td>
                                            <td class="p-1 font-weight-bold white-text" style="background-color:#ffa700;">Baik (Sedang)</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1">Gresik</td>
                                            <td class="p-1">0,830</td>
                                            <td class="p-1">63,578</td>
                                            <td class="p-1 font-weight-bold white-text" style="background-color:#ffa700;">Baik (Sedang)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="grafik_content" role="tabpanel" aria-labelledby="grafik_content">
                            <div id="firstDiv" style="height:250px;">
                                <canvas id="firstChart"></canvas>
                            </div>
                            <div id="secondDiv" style="height:250px;">
                                <canvas id="secondChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/utils.js') }}"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/googlemaps/js-map-label/gh-pages/src/maplabel.js"></script>
    <script src="{{asset('geojson/kec_gresik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/sampel.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2016mangrove_sangat_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2016mangrove_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2016mangrove_normal.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2016mangrove_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2016mangrove_sangat_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2017mangrove_sangat_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2017mangrove_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2017mangrove_normal.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2017mangrove_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2017mangrove_sangat_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2018mangrove_sangat_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2018mangrove_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2018mangrove_normal.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2018mangrove_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2018mangrove_sangat_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2019mangrove_sangat_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2019mangrove_baik.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2019mangrove_normal.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2019mangrove_buruk.geojson')}}" type="text/javascript"></script>
    <script src="{{asset('geojson/2019mangrove_sangat_buruk.geojson')}}" type="text/javascript"></script>
    <script>
        var layer;
        var sampels = {!! json_encode($sampels->toArray(), JSON_HEX_TAG) !!};
        var infowindow = new google.maps.InfoWindow();
        function initMap() {
            layer = maps[0].map.data;
            layer.addGeoJson(first_mangrove_sangat_baik);
            layer.addGeoJson(first_mangrove_baik);
            layer.addGeoJson(first_mangrove_normal);
            layer.addGeoJson(first_mangrove_buruk);
            layer.addGeoJson(first_mangrove_sangat_buruk);
            layer.addGeoJson(kec_gresik);
            layer.addGeoJson(sampel);
            layer.setStyle(function(feature) {
                color = "gray";
                opacity = 0.3;
                weight = 0.3;
                var name = feature.getProperty('Name');
                if (name == "Mangrove Kondisi Sangat Buruk") {
                    color = "red";
                    opacity = 1;
                    weight = 0;
                }
                else if (name == "Mangrove Kondisi Buruk") {
                    color = "orange";
                    opacity = 1;
                    weight = 0;
                }
                else if (name == "Mangrove Kondisi Normal") {
                    color = "yellow";
                    opacity = 1;
                    weight = 0;
                }
                else if (name == "Mangrove Kondisi Baik") {
                    color = "#25e82f";
                    opacity = 1;
                    weight = 0;
                }
                else if (name == "Mangrove Kondisi Sangat Baik") {
                    color = "green";
                    opacity = 1;
                    weight = 0;
                }
                return {
                    fillColor: color,
                    fillOpacity: opacity,
                    strokeWeight: weight
                }
            });
            google.maps.event.addListener(maps[0].map, 'maptypeid_changed', function() {
                if (maps[0].map.getMapTypeId() == 'roadmap') {
                    geocolor = "gray";
                }
                if (maps[0].map.getMapTypeId() == 'hybrid') {
                    geocolor = "white";
                }
                layer.setStyle(function(feature) {
                    color = geocolor;
                    opacity = 0.3;
                    weight = 0.3;
                    var name = feature.getProperty('Name');
                    if (name == "Mangrove Kondisi Sangat Buruk") {
                        color = "red";
                        opacity = 1;
                        weight = 0;
                    }
                    else if (name == "Mangrove Kondisi Buruk") {
                        color = "orange";
                        opacity = 1;
                        weight = 0;
                    }
                    else if (name == "Mangrove Kondisi Normal") {
                        color = "yellow";
                        opacity = 1;
                        weight = 0;
                    }
                    else if (name == "Mangrove Kondisi Baik") {
                        color = "#25e82f";
                        opacity = 1;
                        weight = 0;
                    }
                    else if (name == "Mangrove Kondisi Sangat Baik") {
                        color = "green";
                        opacity = 1;
                        weight = 0;
                    }
                    return {
                        fillColor: color,
                        fillOpacity: opacity,
                        strokeWeight: weight
                    }
                });
            });
            layer.addListener('click', function(event) {
                var feature = event.feature;
                feature.toGeoJson(function(geojson){
                    var name = geojson.properties.Name;
                    sampels.forEach(element => {
                        if(name == element.nama) {
                            var html = '<b>Rincian Sampel Paramater<br>Kecamatan ' + element.kecamatan.kecamatan + ' Kabupaten Gresik<br><br>pH Air: '+ element.ph_air + '<br>' + 'Salinitas Air: '+ element.salinitas + '<br>Kadar Air Tanah: '+ element.kadar_air + '<br>' + 'Nitrogen Tanah: '+ element.nitrogen + '<br>' + 'Pasir: '+ element.pasir + '<br>' + 'Lanau: '+ element.lanau + '<br>' + 'Lempung: '+ element.lempung + '<br></b>';
                            infowindow.setContent(html);
                            infowindow.setPosition(event.latLng);
                            infowindow.open(maps[0].map);
                        }
                    });
                });
            });
            var kec1 = new MapLabel({
                text: 'Ujung Pangkah',
                position: new google.maps.LatLng(-6.921304, 112.549067),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec2 = new MapLabel({
                text: 'Panceng',
                position: new google.maps.LatLng(-6.933547, 112.460995),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec3 = new MapLabel({
                text: 'Dukun',
                position: new google.maps.LatLng(-6.979573, 112.432402),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec4 = new MapLabel({
                text: 'Sidayu',
                position: new google.maps.LatLng(-6.990649, 112.561267),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec5 = new MapLabel({
                text: 'Bungah',
                position: new google.maps.LatLng(-7.028827, 112.591568),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec6 = new MapLabel({
                text: 'Manyar',
                position: new google.maps.LatLng(-7.103478, 112.590386),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec7 = new MapLabel({
                text: 'Duduk Sampeyan',
                position: new google.maps.LatLng(-7.143405, 112.527766),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec8 = new MapLabel({
                text: 'Gresik',
                position: new google.maps.LatLng(-7.155907, 112.649014),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec9 = new MapLabel({
                text: 'Kebomas',
                position: new google.maps.LatLng(-7.177059, 112.621303),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec10 = new MapLabel({
                text: 'Cerme',
                position: new google.maps.LatLng(-7.219881, 112.553416),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec11 = new MapLabel({
                text: 'Benjeng',
                position: new google.maps.LatLng(-7.248332, 112.487864),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec12 = new MapLabel({
                text: 'Balongpanggang',
                position: new google.maps.LatLng(-7.266691, 112.433293),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec13 = new MapLabel({
                text: 'Menganti',
                position: new google.maps.LatLng(-7.277675, 112.583804),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec14 = new MapLabel({
                text: 'Kedamean',
                position: new google.maps.LatLng(-7.318536, 112.529313),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec15 = new MapLabel({
                text: 'Driyorejo',
                position: new google.maps.LatLng(-7.344568, 112.610880),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec16 = new MapLabel({
                text: 'Wringinanom',
                position: new google.maps.LatLng(-7.374556, 112.518959),
                map: maps[0].map,
                fontSize: 13,
                align: 'center'
            });
            var kec17 = new MapLabel({
                text: 'Kabupaten Gresik',
                position: new google.maps.LatLng(-7.090220, 112.548762),
                map: maps[0].map,
                fontSize: 17,
                align: 'center'
            });

            var legend = document.getElementById('legend');
            var div = document.createElement('div');
            div.innerHTML = "<svg width=\"23\" height=\"10\"><rect width=\"50\" height=\"20\" style=\"fill:red;\" /></svg>" + " Kerapatan Sangat Buruk";
            var div2 = document.createElement('div');
            div2.innerHTML = "<svg width=\"23\" height=\"10\"><rect width=\"50\" height=\"20\" style=\"fill:orange;\" /></svg>" + " Kerapatan Buruk";
            var div3 = document.createElement('div');
            div3.innerHTML = "<svg width=\"23\" height=\"10\"><rect width=\"50\" height=\"20\" style=\"fill:yellow;\" /></svg>" + " Kerapatan Normal";
            var div4 = document.createElement('div');
            div4.innerHTML = "<svg width=\"23\" height=\"10\"><rect width=\"50\" height=\"20\" style=\"fill:#25e82f;\" /></svg>" + " Kerapatan Baik";
            var div5 = document.createElement('div');
            div5.innerHTML = "<svg width=\"23\" height=\"10\"><rect width=\"50\" height=\"20\" style=\"fill:green;\" /></svg>" + " Kerapatan Sangat Baik";
            var div6 = document.createElement('div');
            div6.innerHTML = "<div class=\"pt-1\"><img src=\"{{ asset('assets/image/marker-icon.png') }}\" style=\"padding-right:12px\" height=20 >" + " Titik Sampel</div>";
            legend.appendChild(div);
            legend.appendChild(div2);
            legend.appendChild(div3);
            legend.appendChild(div4);
            legend.appendChild(div5);
            legend.appendChild(div6);
            maps[0].map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(legend);
        }
        google.maps.event.addDomListener(window, 'load', initMap);
        function changeMap(year) {
            if (year == 2019) {
                if(layer) {
                    layer.forEach(function (feature) {
                        layer.remove(feature);
                    });
                }
                layer.addGeoJson(first_mangrove_sangat_baik);
                layer.addGeoJson(first_mangrove_baik);
                layer.addGeoJson(first_mangrove_normal);
                layer.addGeoJson(first_mangrove_buruk);
                layer.addGeoJson(first_mangrove_sangat_buruk);
                layer.addGeoJson(kec_gresik);
                layer.addGeoJson(sampel);
            }
            else if (year == 2018) {
                if(layer) {
                    layer.forEach(function (feature) {
                        layer.remove(feature);
                    });
                }
                layer.addGeoJson(second_mangrove_sangat_baik);
                layer.addGeoJson(second_mangrove_baik);
                layer.addGeoJson(second_mangrove_normal);
                layer.addGeoJson(second_mangrove_buruk);
                layer.addGeoJson(second_mangrove_sangat_buruk);
                layer.addGeoJson(kec_gresik);
                layer.addGeoJson(sampel);
            }
            else if (year == 2017) {
                if(layer) {
                    layer.forEach(function (feature) {
                        layer.remove(feature);
                    });
                }
                layer.addGeoJson(third_mangrove_sangat_baik);
                layer.addGeoJson(third_mangrove_baik);
                layer.addGeoJson(third_mangrove_normal);
                layer.addGeoJson(third_mangrove_buruk);
                layer.addGeoJson(third_mangrove_sangat_buruk);
                layer.addGeoJson(kec_gresik);
                layer.addGeoJson(sampel);
            }
            else if (year == 2016) {
                if(layer) {
                    layer.forEach(function (feature) {
                        layer.remove(feature);
                    });
                }
                layer.addGeoJson(fourth_mangrove_sangat_baik);
                layer.addGeoJson(fourth_mangrove_baik);
                layer.addGeoJson(fourth_mangrove_normal);
                layer.addGeoJson(fourth_mangrove_buruk);
                layer.addGeoJson(fourth_mangrove_sangat_buruk);
                layer.addGeoJson(kec_gresik);
                layer.addGeoJson(sampel);
            }
            google.maps.event.addDomListener(window, 'load', initMap);
        }
    </script>
    <script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#firstChart').remove();
            $('#firstDiv').append('<canvas id="firstChart" ><canvas>');
            canvas = document.querySelector('#firstChart');
            ctx = canvas.getContext('2d');
            var firstChart = new Chart (ctx, {
                type: 'bar',
                data: {
                    labels: ["2016", "2017", "2018", "2019"],
                    datasets: [{
                        label: 'Sangat Buruk',
                        backgroundColor: '#ff0000',
                        borderColor: '#ff0000',
                        borderWidth: 1,
                        data: [1.120552, 0.100638, 0.997043, 0.210597]
                    },
                    {
                        label: 'Buruk',
                        backgroundColor: '#ffa500',
                        borderColor: '#ffa500',
                        borderWidth: 1,
                        data: [15.471279, 3.668909, 17.630619, 8.209759]
                    },
                    {
                        label: 'Normal',
                        backgroundColor: '#ffff00',
                        borderColor: '#ffff00',
                        borderWidth: 1,
                        data: [181.681895, 227.537183, 294.038679, 200.281769]
                    },
                    {
                        label: 'Baik',
                        backgroundColor: '#25e82f',
                        borderColor: '#25e82f',
                        borderWidth: 1,
                        data: [1238.856740, 1371.974372, 1145.728918, 1087.667143]
                    },
                    {
                        label: 'Sangat Baik',
                        backgroundColor: '#008000',
                        borderColor: '#008000',
                        borderWidth: 1,
                        data: [674.763411, 975.133822, 1075.080325, 1027.144512]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'top',
                    },
                    scales: {
                        xAxes: [{
                            scaleLabel: {
                                display: true,
                                labelString: 'Tahun'
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 200,
                                max: 1600
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Luas Kerapatan Mangrove (ha)'
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Grafik Luas Kerapatan Mangrove Berdasarkan Tingkat Kerapatan'
                    }
                }
            });
        });
	</script>
    <script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#secondChart').remove();
            $('#secondDiv').append('<canvas id="secondChart" ><canvas>');
            canvas = document.querySelector('#secondChart');
            ctx = canvas.getContext('2d');
            var ctx = document.getElementById("secondChart");
            ctx.height = 300;
            var secondChart = new Chart (ctx, {
                type: 'bar',
                data: {
                    labels: ["2016", "2017", "2018", "2019"],
                    datasets: [{
                        label: 'Luas Mangrove (ha)',
                        backgroundColor: '#00c851',
                        borderColor: '#00c851',
                        borderWidth: 1,
                        data: [2111.893877, 2578.414924, 2533.475584, 2323.513780]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'top',
                    },
                    scales: {
                        xAxes: [{
                            scaleLabel: {
                                display: true,
                                labelString: 'Tahun'
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 500,
                                max: 3000
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Luas Mangrove (ha)'
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Grafik Luas Mangrove Total'
                    }
                }
            });
        });
	</script>
@endsection