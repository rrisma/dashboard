@extends('dashboard.dashboard')

@section('content')
<main class="col-md-9 " style="margin-left: 243px !important;">
  <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow" style="margin-left: -12px;z-index:2px!important">
    <a class="navbar col-md-3 col-lg-2 me-0 px-3" href="#"></a>
    <div class="navbar-icon" style="display: flex;align-items: center;">
      <div class="nav-item dropdown" style="padding-right: 18px">
				<a href="#" data-toggle="dropdown" class="nav-item"><img src="{{ asset('asset/images/search.png') }}" class="icons" alt="Avatar"></a>
			</div>
      <div class="nav-item dropdown" style="padding-right: 18px">
				<a href="#" data-toggle="dropdown" class="nav-item"><img src="{{ asset('asset/images/Notifitcation.png') }}" class="icons" alt="Avatar"></a>
			</div>
      <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item"><img src="{{ asset('asset/images/Message.png') }}" class="icons" alt="Avatar"></a>
			</div>
      <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="{{ asset('asset/images/icon.png') }}" class="avatar" alt="Avatar"><span><img src="{{ asset('asset/images/arrow.png') }}"></span></a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
					<a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
					<div class="divider dropdown-divider"></div>
					<a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a>
				</div>
			</div>
    </div>
  </header>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  
    <div class="row" style="width: 100%">
      <div class="col-md-5">
        <div class="card" style="width: 18.4rem;">
          <div class="card-body">
            <h5 class="card-title fw-bold">My Credit Card</h5>
              <img src="{{ asset('asset/images/Card.png') }}" class="card-img-top" alt="" />
              <div class="text-info border-top">
                <div class="row mb-2 mt-4">
                  <div class="col-md-6"><p class="card-text text-muted">Card Number:</p></div>
                  <div class="col-md-6"><p class="card-text fw-normal text-dark">2450 24512 25412</p></div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-6"><p class="card-text text-muted">Account Name:</p></div>
                  <div class="col-md-6"><p class="card-text fw-normal text-dark">Subash Chandra</p></div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-6"><p class="card-text text-muted">Card Status:</p></div>
                  <div class="col-md-6"><p class="card-text fw-normal text-dark">Active</p></div>
                </div>
                {{-- <p class="card-text text-muted mt-2">Card Number: <span class="fw-bold">2450  24512   25412</span></p>
                <p class="card-text text-muted">Account Name: <span class="fw-bold">Subash Chandra</span></p>
                <p class="card-text text-muted">Card Status: <span class="fw-bold">Active</span></p> --}}
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <div class="card-body">
            <div class="card-head" style="display: flex; justify-content:space-between">
              <h5 class="card-title fw-bold">Statistics</h5>
              <div class="dates">
                <select name="" id="">
                  <option value="">2018</option>
                </select>
                <select name="" id="">
                  <option value="">Month</option>
                </select>
              </div>
              
            </div>
           
            <div class="card-img" style="width: 100%; ">
              <img src="{{ asset('asset/images/Statistics.png') }}" alt="" class="card-img-top"/>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-bold">Earning in Month</h5>
            <div class="card-img" style="width: 100%; ">
              <img src="{{ asset('asset/images/pie.png') }}" alt="" class="card-img-top"/>
            </div>
            <div class="text-info border-top">
              <div class="row mb-2 mt-4">
                <div class="col-md-6"><p class="card-text text-muted">Deposit:</p></div>
                <div class="col-md-6"><p class="card-text fw-normal text-dark">$20 54 1 875 574 $54 1 875 574</p></div>
              </div>
              <div class="row mb-2">
                <div class="col-md-6"><p class="card-text text-muted">Expese:</p></div>
                <div class="col-md-6"><p class="card-text fw-normal text-dark"> $805 875 574</p></div>
              </div>
              <div class="row mb-2">
                <div class="col-md-6"><p class="card-text text-muted">Payable:</p></div>
                <div class="col-md-6"><p class="card-text fw-normal text-dark">$805 875 574</p></div>
              </div>
              {{-- <p class="card-text text-muted mt-2">Card Number: <span class="fw-bold">2450  24512   25412</span></p>
              <p class="card-text text-muted">Account Name: <span class="fw-bold">Subash Chandra</span></p>
              <p class="card-text text-muted">Card Status: <span class="fw-bold">Active</span></p> --}}
            </div>
          </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12"><div class="card">
            <div class="card-body"> 
              <h5 class="card-title fw-bold">Monthly Sale</h5>
            </div>  
            <img src="{{ asset('asset/images/Montly.png') }}" alt="" class="card-img-top"/></div></div>
          <div class="col-md-12 mt-3"><div class="card">
            <div class="card-body"> 
              <h5 class="card-title fw-bold">Yearly Sale</h5>
              <div class="card-img" style="width: 100%; ">
              <img src="{{ asset('asset/images/Yeally.png') }}" alt="" class="card-img-top"/>
            </div>
            
            </div>
          </div>
        </div>
          </div>
      
        </div>
  
    <div class="col-md-4">
      <div class="card"> 
        <div class="card-img" style="width: 100%; ">
        <img src="{{ asset('asset/images/Calander.png') }}" alt="" class="card-img-top"/>
      </div>
    </div>
            </div>
    </div>
  </main>
@endsection