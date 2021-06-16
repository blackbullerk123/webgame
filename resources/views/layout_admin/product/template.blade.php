<div class="box-body">
    <h4><b> Tên game : </b></h4>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}"
            placeholder="Tên game . . . . . . . . ." style="width: 760px;">
    </div>
    @error('name')
        <div style="color: red"> {{ $message }} </div>
    @enderror
    <br>
    <h4><b> Hệ điều hành game : </b></h4>
    <div class="input-group">
        <div class="col-sm-14">
                <select class="select2" multiple="multiple" data-placeholder="Chọn hệ điều hành" style="width: 800px;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
            <!-- /.form-group -->
          </div>
    </div>
   <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h4><b> Mô tả :</b>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="width:800px">
                        <textarea id="summernote" >
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
                        src="{{ asset('images/no_img.jpg') }}">
        </div><br>
        <!-- ./row -->
    <h4><b> Gói nạp game : </b>
        <h4>
            <div class="input-group">
                <div class="col-sm-2">
                    <p>Ảnh: </p>
                    <input id="thumbnail" type="file" name="thumbnail" class="form-control hidden"
                        onchange="changeThumbnail(this)">
                    <img id="thum" class="thumbnail" style="width: 50px; height: 40px;"
                        src="{{ asset('images/no_img.jpg') }}">
                </div>
                <div class="col-sm-3">
                    <p>Tên gói: </p>
                    <input id="package" name="package" type="text" class="form-control"
                        placeholder="Tên gói. . . . . . . . .">
                </div>
                <div class="col-sm-3">
                    <p>Giá trị: </p>
                    <input id="value" name="value" type="text" class="form-control"
                        placeholder="Giá trị. . . . . . . . .">
                </div>
                <div class="col-sm-3">
                    <p>Points: </p>
                    <input id="point" name="point" type="text" class="form-control"
                        placeholder="Point. . . . . . . . .">
                </div>
            </div>
            <div id="new_chq"></div>
            <input type="hidden" value="1" id="total_chq">

</div>
