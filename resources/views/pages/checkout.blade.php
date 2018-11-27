@extends('layout')

@section('title')

    Checkout
@endsection

@section('content')


<div class="fulldiv container">
  <h1 class="text-center mt-5">Checkout</h1>
  <form class="mt-5">


    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>AR</option>
          <option>AZ</option>
          <option>CA</option>
          <option>CO</option>
          <option>CT</option>
          <option>FL</option>
          <option>GA</option>
          <option>HI</option>
          <option>IA</option>
          <option>ID</option>
          <option>IL</option>
          <option>IN</option>
          <option>KS</option>
          <option>KY</option>
          <option>LA</option>
          <option>MA</option>
          <option>MD</option>
          <option>ME</option>
          <option>MI</option>
          <option>MN</option>
          <option>MO</option>
          <option>MS</option>
          <option>MT</option>
          <option>NC</option>
          <option>ND</option>
          <option>NE</option>
          <option>NH</option>
          <option>NJ</option>
          <option>NM</option>
          <option>NV</option>
          <option>NY</option>
          <option>OH</option>
          <option>OK</option>
          <option>OR</option>
          <option>PA</option>
          <option>RI</option>
          <option>SC</option>
          <option>SD</option>
          <option>TN</option>
          <option>TX</option>
          <option>UT</option>
          <option>VA</option>
          <option>VT</option>
          <option>WA</option>
          <option>WI</option>
          <option>WV</option>
          <option>WY</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-6">
      <label for="CreditCard">Credit Card Number</label>
      <input type="text" class="form-control" id="CreditCard" placeholder="123456789">
    </div>
    <div class="form-group col-6">
      <label for="CreditCard">Credit Card Number</label>
      <input type="text" class="form-control" id="CreditCard" placeholder="123456789">
    </div>
  </div>

  </form>

  <h3 class="text-center">total - ${{ $id }}.00</h3>

  <div class="clearfix">
    <button type="submit" class="btn btn-secondary float-right">Finalize Purchase</button>
  </div>

</div>
@endsection