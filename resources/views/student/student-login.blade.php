<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student login</title>
    <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container py-5 mt-5 shadow-lg" style="border: 1px solid black; background: lightgray;">
      <div class="row justify-content-center">
        <h1 class="text-center">Student Login Form</h1>
      </div>
      @if(session()->has('message'))
      <div class="alert alert-danger text-center">
        {{ session()->get('message') }}
      </div>
        
      @endif
      <div class="row justify-content-center">
        <table>
          <form class="" id="loginForm" onsubmit="return validateForm()" action="student-login" method="post">
            @csrf
            <tr>
              <td>Enter Mobile number: </td>
            <td><input type="text" name = 'mobile' id="mobile" value="{{ old('mobile') }}"></td>
              <td><span id="mobile_error"></span></td>
            </tr>
            <tr>
              <td>Enter Password: </td>
            <td><input type="password" name = "password" id="password"></td>
              <td><span id="pass_error"></span></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name = "submit" id="submit" value="Login" class="btn btn-success btn-block"></td>
            </tr>
            <tr class="mt-5" style="margin-top: 10px;">              
              <td><p>Not a student?</p></td> <td><a href="/">Click here to Login</a></td>
            </tr>
          </form>
        </table>
      </div>
    </div>
  </body>
  <script>
    var submit = document.getElementById('submit');
    submit.onclick = function(event) {
      event = EventUtil.getEvent(event);
      EventUtil.preventDefault(event);
      // event.preventDefault();
    }

    var form = document.getElementById('loginForm');
    EventUtil.addHandler(form, 'submit', function(event) {
      var event = EventUtil.getEvent(event);
      EventUtil.preventDefault(event);
    });
    function validateForm() {
      var form = document.getElementById('loginForm');
      var mobile = form[1].value;
      var pass = form[2].value;

      if(mobile == "") {
        var mobile_error = document.getElementById('mobile_error');
        mobile_error.innerHTML = "Fill with a mobile number";
        mobile_error.style.color = "red";
        return false;
      }
      else {
        var mobile_error = document.getElementById('mobile_error');
        mobile_error.innerHTML = "";
      }

      if(pass == "") {
        var pass_error = document.getElementById('pass_error');
        pass_error.innerHTML = "Enter a Correct password";
        pass_error.style.color = "red";
        return false;
      }


    }
  </script>
</html>
