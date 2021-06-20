<div class="box-body">
    <h4><b> Tên game : </b></h4>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
        <input id="name" name="name" type="text" class="form-control" value="{{ isset($product) ? $product->name : old('name') }}"
            placeholder="Tên game . . . . . . . . ." style="width: 760px;" required >
    </div>
    @error('name')
        <div style="color: red"> {{ $message }} </div>
    @enderror
    <br>
    <h4><b> Loại game : </b></h4>
    <div class="input-group">
        <div class="col-sm-14">
                <select class="select2" multiple="multiple" name="game_opt[]" data-placeholder="Chọn loại game" style="width: 800px;" required>
                    @if(isset($product))
                        @for ($i = 0; $i < count(explode(",", $product->os_supported)); $i++)
                            <option value="{{ explode(',', $product->os_supported)[$i] }}" selected>{{ explode(",", $product->os_supported)[$i] }}</option>
                        @endfor              
                    @elseif (isset($os_type))
                        @foreach ($os_type as $os)
                            <option value="{{ $os->name }}">{{ $os->name }}</option>
                        @endforeach
                    @endif
                  </select>
            <!-- /.form-group -->
          </div>
    </div>
   <br>
   @php
        $i = 0;
   @endphp
   <h4><b> Gói nạp game : </b> 
            @if(isset($package_by_id)  && $package_by_id->package_name != '')
                @if ($i == 0) 
                <button type="button" class="btn btn-primary float-left" name="add_btn" id="add_btn"><i class="glyphicon glyphicon-plus"></i></button>
                @endif
    <h4>            @if(isset($package_by_id->package_name))
                    @for($i; $i < count(explode(",", $package_by_id->package_name)); $i++)
                        <div class="input-group" id="row{{ $i + 1 }}">
                            <div class="col-sm-3">
                                <p>Tên gói: </p>
                                <input name="package[]" id="package" type="text" class="form-control"
                                    placeholder="Tên gói. . . . . . . . ." value="{{ explode(',', $package_by_id->package_name)[$i] }}" required>
                            </div>
                            <div class="col-sm-3">
                                <p>Giá trị: </p>
                                <input name="value[]" id="value" type="text" class="form-control"
                                    placeholder="Giá trị. . . . . . . . ." value="{{ explode(',', $package_by_id->package_price)[$i] }}" required>
                            </div>
                            <div class="col-sm-3">
                                <p>Points: </p>
                                <input name="point[]" id="point" type="text" class="form-control"
                                    placeholder="Point. . . . . . . . ." value="{{ explode(',', $package_by_id->point_number)[$i] }}" required>
                            </div>
                            <div class="col-sm-3">
                                <p>Thao tác:</p>
                                <button type="button" class="btn btn-danger btn_remove" name="remove_btn" id="{{ $i + 1 }}"><i class="glyphicon glyphicon-trash"></i></button>        
                            </div>
                        </div>
                    @endfor  
                    @endif             
            @else
    </h4>
                <div class="input-group">
                    <div class="col-sm-3">
                        <p>Tên gói: </p>
                        <input name="package[]" id="package" type="text" class="form-control"
                            placeholder="Tên gói. . . . . . . . ." required>
                    </div>
                    <div class="col-sm-3">
                        <p>Giá trị: </p>
                        <input name="value[]" id="value" type="text" class="form-control"
                            placeholder="Giá trị. . . . . . . . ." required>
                    </div>
                    <div class="col-sm-3">
                        <p>Points: </p>
                        <input name="point[]" id="point" type="number" class="form-control"
                            placeholder="Point. . . . . . . . ." required>
                    </div>
                    <div class="col-sm-3">
                        <p>Thao tác:</p>
                        <button type="button" class="btn btn-primary float-left" name="add_btn" id="add_btn"><i class="glyphicon glyphicon-plus"></i></button>
                    </div>
                </div>
            @endif
        <div id="new_chq"></div>
        <input type="hidden" value="1" id="total_chq">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h4><b> Mô tả :</b>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="width:800px">
                        <textarea id="summernote" name="content" required>{{ isset($product) ? $product->content_1 : '' }}</textarea>
                        </textarea>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div><br>
        <div class="input-group">
            <h4><b> Avatar :</b>
                <h4>
                    <input id="fImages" type="file" name="avatar" class="form-control hidden"
                        onchange="changeImg(this)">
                    <img id="img" class="img" style="width: 200px; height: 150px;"
                        src="{{ isset($product) ? asset($product->image) : asset('images/no_img.jpg') }}">
        </div><br>    
        <!-- ./row -->
</div>
