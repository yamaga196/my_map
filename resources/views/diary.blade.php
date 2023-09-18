@extends('layouts.app')

@section('content')

<form action="{{ route('diary_create') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="user_id" value="{{ Auth::id() }}">
  <div class="diary_detail">
    <input type="date" name="date" required>
    </div>
    <div class="diary_input_file">
      <input type="file" name="img_path" id="img" onchange="setImage(this);" onclick="this.value = '';" required>
      <img id="preview" class="diary_preview">
    </div>

    <div class="diary_text">
      <input type="text" name="english" class="diary_english" placeholder="today_english" required>
      <textarea name="good_point" id="" cols="30" rows="10" class="diary_good_point" placeholder="good_point" required></textarea>
      <textarea name="bad_point" id="" class="diary_improvement_point" cols="30" rows="10" placeholder="improvement_point" required></textarea>
      <input type="submit" value="アップロード" class="diary_submit">
    </div>
  </form>
  
  
  <script>
    function setImage(target) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("preview").setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(target.files[0]);
    };
    </script>
@endsection