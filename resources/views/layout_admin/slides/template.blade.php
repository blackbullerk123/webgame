<div class="box-body">
    <h4><b> Tên banner : </b></h4>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
        <input id="name" name="name" type="text" class="form-control" value="{{ isset($slides) ? $slides->name : old('name') }}"
            placeholder="Tên game . . . . . . . . ." style="width: 700px;">
    </div>
    @error('name')
        <div style="color: red"> {{ $message }} </div>
    @enderror
   <br>
        <div class="input-group">
            <h4><b> Avatar :</b>
                <h4>
                    <input id="fImages" type="file" name="avatar" class="form-control hidden"
                        onchange="changeImg(this)">
                    <img id="img" class="img" style="width: 200px; height: 150px;"
                        src="{{ isset($slides) ? asset($slides->images) : asset('images/no_img.jpg') }}">
        </div>
     @error('avatar')
        <div style="color: red"> {{ $message }} </div>
    @enderror
        <!-- ./row -->
