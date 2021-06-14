@extends('layout_index.master')
@section('content')

<div class="container">

    <div class="nk-store nk-store-checkout">
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Billing</span> Details</span></h3>

        <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Order</th>
              <th scope="col">Name</th>
              <th scope="col">Occupation</th>
              <th scope="col">Contact</th>
              <th scope="col">Education</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">

              
                      
                      <td>
                        1392
                      </td>
                      <td><a href="#">James Yates</a></td>
                      <td>
                        Web Designer
                        <small class="d-block">Far far away, behind the word mountains</small>
                      </td>
                      <td>+63 983 0962 971</td>
                      <td>NY University</td>
                      <td><a href="#" class="more">Details</a></td>
            
            </tr>            
            
          </tbody>
        </table>
      </div>

        <div class="nk-gap-2"></div>
        <a class="nk-btn nk-btn-rounded nk-btn-color-main-1" href="#">Place Order</a>
    </div>
</div>
<div class="nk-gap-2"></div>

@endsection