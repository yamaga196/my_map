@extends('layouts.app')

@section('content')
<div class="google_map">
     <a href="https://www.google.com/maps/place/%E3%82%AA%E3%83%BC%E3%82%B9%E3%83%88%E3%83%A9%E3%83%AA%E3%82%A2+%E3%83%93%E3%82%AF%E3%83%88%E3%83%AA%E3%82%A2+%E3%83%A1%E3%83%AB%E3%83%9C%E3%83%AB%E3%83%B3/@-37.9715652,144.7235035,10z/data=!3m1!4b1!4m6!3m5!1s0x6ad646b5d2ba4df7:0x4045675218ccd90!8m2!3d-37.8136276!4d144.9630576!16zL20vMGNoZ3pt?authuser=0&entry=ttu" target="_blank" rel="noopener noreferrer" class="google_map_a">google map(search)</a>
</div>
    <div class="map_form">
        <form action="{{ route('create') }}" method="post" class="map_form_create">
            @csrf
            <div class="map_form_longitude_latitude">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="text" name="longitude" class="map_input_longitude" placeholder="longitude" required>
                <input type="text" name="latitude" class="map_input_latitude" placeholder="latitude" required>
            </div>
            <div class="map_form_explanation_text">
                <input type="text" name="explanation" class="map_input_explanation" placeholder="name" required>
                <textarea name="explanation_text" class="map_input_explanation_text" placeholder="explanation" required></textarea>
            </div>
            <div class="map_input_submit">
                <input type="submit" value="追加" class="map_input_submit">
            </div>
        </form>
    </div>

      <div id="view_map" class="view_map"></div>
      <script type="text/javascript">
        let data_id = JSON.parse(JSON.stringify(@json($data_id)));
        let data_id_count = JSON.parse(JSON.stringify(@json($data_id_count)));
        let data_longitude = JSON.parse(JSON.stringify(@json($data_longitude)));
        let data_latitude = JSON.parse(JSON.stringify(@json($data_latitude)));
        let data_explanation = JSON.parse(JSON.stringify(@json($data_explanation)));

        
        
        //緯度,経度,ズーム
        var map = L.map('view_map').setView([-37.805192899011246, 144.95643239801805], 12);
        // OpenStreetMap から地図画像を読み込む
        L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
          maxZoom: 18,
          attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
        }).addTo(map);
          
        for(let i = 0; i < data_id_count; i++){
            var popup = L.popup();
            L.marker([data_longitude[i].longitude,data_latitude[i].latitude]).addTo(map).on('click', function (e) {
            popup
            .setLatLng(e.latlng)
            .setContent(data_explanation[i].explanation)
            .openOn(map);
          });
        }
        </script>
@endsection
