<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>jacob christiansen</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Forum About Apples</h1>


  <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
    <fieldset>
    <legend>Login</legend>
      <input type='hidden' name='submitted' id='submitted' value='1'/>

      <label for='username'>Username:</label>
      <input type='text' name='username' id='username'  maxlength="50" />

      <label for='password' >Password:</label>
      <input type='password' name='password' id='password' maxlength="50" />

      <input type='submit' name='submit' value='Submit' />
    </fieldset>
  </form>

  <p><b>Logins to test:</b><br/>
    1234, pass<br/>
    testing, thispassword<br/>
    rawr, dino987
  </p>

    <h1> </h1>

      <img src="images/apple1.png" alt="apple1">
      <h5>Click image to switch!</h5>

      <b><p>What's your favorite type of apple? Discuss below.</p></b>
  <div>
    <table style="width:100%">

      <tr>
        <th>User</th>
        <th>Post</th>
      </tr>
      <tr>
        <td>JillianB</td>
        <td><p>Honeycrisp, one hundred percent. It’s got a nice bite, and it’s really sweet. Fuji is second. Not quite as crisp as an HC, but just as sweet.</p></td>
      </tr>

      <tr>
        <td>Dave_420</td>
        <td><p>Sorry, I'm more of an android guy. I'm happy with my Galaxy S7 though.</p></td>
      </tr>

      <tr>
        <td>AVA_lanche</td>
        <td><p>@Dave_420 Hilarious. My favorite is Yellow Transparent. It has the most amazing flavor. Also Empire, if you can find them. Usually you'll have to go to an actual orchard for decent apples.</p></td>
      </tr>

    </table>
  </div>
    
  <script src="scripts/main.js"></script>
  </body>
</html>