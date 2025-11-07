<!DOCTYPE html>
<html>
    <style>
    form {
        border-radius: 5px;
        /* background-color: #f2f2f2; */
        padding: 20px;
        }

    label {display: block;}

    input[type=text], select {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

    .seccuss {
        color: green;
        }

    .failed {
        color: red;
        }

    input[type=submit]:hover {
    background-color: #45a049;
        }
    </style>
    <body>

        @if (session('seccuss'))
            <p class="seccuss"> {{session('seccuss')}}  </p>       
        
        @endif
        <h2>Form submit </h2>

        <form action="{{route('register.submit')}}" method="POST">
            @csrf
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name..">
            @error('name')

                <p class="failed">{{$message}}</p>
            @enderror

            <label for="email">email</label>
            <input type="text" name="email" placeholder="Your email..">
            @error('email')

                <p class="failed">{{$message}}</p>
            @enderror
            <label for="password">password</label>
            <input type="text" name="password" placeholder="Your password..">
            @error('password')

                <p class="failed">{{$message}}</p>
            @enderror
            <label for="confirmer password">confirmer password</label>
            <input type="text" name="password_confirmation" placeholder="Your confirmer password..">
            @error('password_confirmation')

                <p class="failed">{{$message}}</p>
            @enderror
            <input type="submit" value="Submit">
        </form>

    </body>
</html>