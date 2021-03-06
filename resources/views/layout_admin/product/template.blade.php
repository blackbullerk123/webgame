<div class="box-body">
    <h4><b> Tên game : </b></h4>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
        <input id="name" name="name" type="text" class="form-control"
            value="{{ isset($product) ? $product->name : old('name') }}" placeholder="Tên game . . . . . . . . ."
            style="width: 760px;" maxlength="150">
    </div>
    @error('name')
        <div style="color: red"> {{ $message }} </div>
    @enderror
    <br>
    <h4><b> Mô tả ngắn : </b></h4>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
        <input id="short_des" name="short_des" type="text" class="form-control"
            value="{{ isset($product) ? $product->short_des : old('name') }}" placeholder="Mô tả . . . . . . . . ."
            style="width: 760px;">
    </div>
    @error('short_des')
        <div style="color: red"> {{ $message }} </div>
    @enderror
    <div class="col-md-12" style="margin-left:-27px">
        <div class="col-md-4">
            <h4><b> Loại game : </b></h4>


            <select class="select2" name="game_type" style="width: 150px;">
                @if (isset($product))
                    @foreach ($product_types as $pt)
                        @if ($pt->name == $product->product_type)
                            <option value="{{ $product->product_type }}" selected>{{ $product->product_type }}
                            </option>
                        @else
                            <option value="{{ $pt->name }}">{{ $pt->name }}</option>
                        @endif
                    @endforeach
                @elseif (isset($product_type))
                    @foreach ($product_type as $pt)
                        <option value="{{ $pt->name }}">{{ $pt->name }}</option>
                    @endforeach
                @endif
            </select>

        </div>
        <div class="col-md-4">
            <h4><b> Hệ điều hành hổ trợ nạp : </b></h4>

            <select class="select2" name="game_opt" style="width: 150px;" data-placeholder="Chọn loại game"
                style="width: 800px;">
                @if (isset($product))
                    @foreach ($os_type as $os)
                        @if (in_array($os->name, explode(',', $product->os_supported)) == true)
                            <option
                                value="{{ explode(',', $product->os_supported)[array_search($os->name, explode(',', $product->os_supported))] }}"
                                selected>
                                {{ explode(',', $product->os_supported)[array_search($os->name, explode(',', $product->os_supported))] }}
                            </option>
                        @else
                            <option value="{{ $os->name }}">{{ $os->name }}</option>
                        @endif
                    @endforeach
                @elseif (isset($os_type_new))
                    @foreach ($os_type as $os)
                        <option value="{{ $os->name }}">{{ $os->name }}</option>
                    @endforeach
                @endif
            </select>
            <!-- /.form-group -->
        </div>
        @error('game_opt')
            <div style="color: red"> {{ $message }} </div>
        @enderror
    </div>
    <br>
    @php
        $i = 0;
    @endphp
    <div class="col-md-12" style="margin-left:-13px">
        <h4><b> Gói nạp game : </b> </h4>
        @if (isset($package_by_id) && $package_by_id->package_name != '')
            @if ($i == 0)
                <button type="button" class="btn btn-primary float-left" name="add_btn" id="add_btn"><i
                        class="glyphicon glyphicon-plus"></i></button>
            @endif
            @if (isset($package_by_id->package_name))
                @for ($i; $i < count(json_decode($package_by_id->package_name)); $i++)
                    <div class="input-group" id="row{{ $i + 1 }}">
                        <input type="hidden" name="pack[]"
                            value="{{ isset(json_decode($package_by_id->package_image)[$i]) ? json_decode($package_by_id->package_image)[$i] : 'images/no_img.jpg' }}">
                        <div class="col-sm-2">
                            <p>Tên gói: </p>
                            <input name="package[]" id="package" type="text" class="form-control"
                                placeholder="Tên gói. . . . . . . . ." maxlength="150"
                                value="{{ json_decode($package_by_id->package_name)[$i] }}" required>
                        </div>
                        <div class="col-sm-2">
                            <p>Giá trị: </p>
                            <input name="value[]" id="value" type="text" class="form-control"
                                placeholder="Giá trị. . . . . . . . ."
                                value="{{ json_decode($package_by_id->package_price)[$i] }}" required>
                        </div>
                        <div class="col-sm-2">
                            <p>Points: </p>
                            <input name="point[]" id="point" type="number" class="form-control"
                                placeholder="Point. . . . . . . . ."
                                value="{{ json_decode($package_by_id->point_number)[$i] }}" required>
                        </div>
                        <div class="col-sm-2">
                            <p>Ảnh packgame</p>
                            <input id="img{{ $i + 1 }}" type="file" name="packgame[]"
                                class="form-control hidden packgame"
                                onchange="changeImgPack(this, {{ $i + 1 }})">
                            <img id="{{ $i + 1 }}" class="img{{ $i + 1 }} imgpackgame"
                                style="width: 50px; height: 34px;"
                                src="{{ asset(isset(json_decode($package_by_id->package_image)[$i]) ? json_decode($package_by_id->package_image)[$i] : 'images/no_img.jpg') }}">
                        </div>
                        <div class="col-sm-2">
                            <p>Thao tác:</p>
                            <button type="button" class="btn btn-danger btn_remove" name="remove_btn"
                                id="{{ $i + 1 }}"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </div>
                @endfor
            @endif
        @else

            <div class="input-group">
                <div class="col-sm-2">
                    <p>Tên gói: </p>
                    <input name="package[]" id="package" type="text" class="form-control"
                        placeholder="Tên gói. . . . . . . . ." maxlength="150" required>
                </div>
                <div class="col-sm-2">
                    <p>Giá trị: </p>
                    <input name="value[]" id="value" type="text" class="form-control"
                        placeholder="Giá trị. . . . . . . . ." required>
                </div>
                <div class="col-sm-2">
                    <p>Points: </p>
                    <input name="point[]" id="point" type="number" class="form-control"
                        placeholder="Point. . . . . . . . ." required>
                </div>
                <div class="col-sm-2">
                    <p>Ảnh packgame</p>
                    <input id="img0" type="file" name="packgame[]" class="form-control hidden packgame"
                        onchange="changeImgPack(this, 0)">
                    <img id="0" class="img0 imgpackgame" style="width: 50px; height: 34px;"
                        src="{{ asset('images/no_img.jpg') }}">
                </div>
                <div class="col-sm-2">
                    <p>Thao tác:</p>
                    <button type="button" class="btn btn-primary float-left" name="add_btn" id="add_btn"><i
                            class="glyphicon glyphicon-plus"></i></button>
                </div>
            </div>
        @endif
        <div id="new_chq"></div>
        <input type="hidden" value="1" id="total_chq">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h4><b>Mô tả :</b>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="width:800px">
                    <textarea id="summernote"
                        name="content">{{ isset($product) ? $product->content_1 : '' }}</textarea>
                    </textarea>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div><br>
    <div class="col-md-12">
        <h4><b> Ảnh chi tiết :</b></h4>
        <input id="fImages_detail" type="file" name="avatar_detail" class="form-control hidden"
            onchange="changeImgDetail(this)">
        <img id="img_detail" class="img_detail" style="width: 300px; height: 150px;"
            src="{{ isset($product->image_detail) ? asset($product->image_detail) : asset('images/no_img.jpg') }}">
        @error('avatar_detail')
            <p style="color: red"> {{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4">
        <h4><b> Avatar :</b></h4>
        <input id="fImages" type="file" name="avatar" class="form-control hidden" onchange="changeImg(this)">
        <img id="img" class="img" style="width: 200px; height: 200px;"
            src="{{ isset($product) ? asset($product->image) : asset('images/no_img.jpg') }}">
        @error('avatar')
            <p style="color: red"> {{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4">
        <h4><b> Thumbnail :</b></h4>
        <input id="thumbnail" type="file" name="thumbnail" class="form-control hidden" onchange="changeThumbnail(this)">
        <img id="thum" class="thumbnail" style="width: 300px; height: 150px;"
            src="{{ isset($product) ? asset($product->thumbnail) : asset('images/no_img.jpg') }}">
        @error('thumbnail')
            <p style="color: red"> {{ $message }} </p>
        @enderror
    </div>
    <br>
    <!-- ./row -->
</div>
