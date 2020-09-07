<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
            <div class="alert alert-secondary">
                    <form method="POST" action="/login">
                      @csrf
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          name="email"
                        />
                      </div>
                
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input 
                          type="password"
                          class="form-control"
                          id="password"
                          name="password"
                        />
                      </div>
                
                      @if($loginFailed ?? false)
                        <div class="alert alert-danger">
                          Email or password are incorrect
                        </div>
                      @endif
                
                      <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                  </div>
    </body>
</html>