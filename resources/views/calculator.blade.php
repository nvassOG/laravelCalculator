<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>
        <link rel="stylesheet" type="text/css" href="/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body style="background-color: #5e5e5e;">
        <br><br><br>
          <div class="container text-center">
              <div class="row">
                  <div class="col-md-3 m-auto">
                    <form action="calculation" method="POST">
                        @csrf
                        <div class="card" style="background-color: #262626;">
                          <div class="card-body m-auto">
                              <h1 class="text-center text-light">Nick's Calculator</h1>
                              <div class="form-group row">
                                  <div class="col-md-12">
                                    @if(session('message'))
                                        <input type="text" name="input" class="form-control" placeholder="" required="" id="input" value="{{ session('message') }}">
                                        @else 
                                            <input type="text" name="input" class="form-control" placeholder="" required="" id="input">
                                    @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-md-3 text-light btn calc">
                                      7
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      8
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      9
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      /
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-md-3 text-light btn calc">
                                      4
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      5
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      6
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      *
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-md-3 text-light btn calc">
                                      1
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      2
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      3
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      -
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-md-3 text-light btn calc">
                                      C
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      0
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      .
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      +
                                  </div>
                                  <div class="col-md-3 text-light btn calc">
                                      +-
                                  </div>
                              </div>
                          </div>
                          <input type="submit" name="btn" class="btn btn-success btn-lg font-weight-bold" value="=">
                      </div>
                      <h1 class="text-center text-gray">History</h1>
                      <div class="form-group row">
                          <div class="col-md-12">
                          @foreach($history as $h)
                          <div>
                            {{$h->result}}
                          </div> 
                          @endforeach  
                        </div>
                          </div>
                        </div>
                    </form>
                  </div>
              </div>
          </div> 
          <script src="/app.js" ></script>
    </body>
</html>