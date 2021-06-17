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
    <h4><b> Loại game : </b></h4>
    <div class="input-group">
        <div class="col-sm-14">
                <select class="select2" multiple="multiple" data-placeholder="Chọn loại game" style="width: 800px;">
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
   <h4><b> Gói nạp game : </b>
        <h4>
            <div class="input-group">
                <div class="col-sm-3">
                    <p>Tên gói: </p>
                    <input name="package[]" id="package" type="text" class="form-control"
                        placeholder="Tên gói. . . . . . . . .">
                </div>
                <div class="col-sm-3">
                    <p>Giá trị: </p>
                    <input name="value[]" id="value" type="text" class="form-control"
                        placeholder="Giá trị. . . . . . . . .">
                </div>
                <div class="col-sm-3">
                    <p>Points: </p>
                    <input name="point[]" id="point" type="text" class="form-control"
                        placeholder="Point. . . . . . . . .">
                </div>
                <div class="col-sm-3">
                    <p>Thao tác:</p>
                    <button type="button" class="btn btn-primary float-left" name="add_btn" id="add_btn"><i class="glyphicon glyphicon-plus"></i></button>
                </div>
            </div>
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
</div>
