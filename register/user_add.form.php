<style>table { float:left; border:0; border-collapse:collapse;}table tr td { border:0; border-collapse:collapse;}</style><form accept-charset="utf-8" name="LoginForm" method="post" action="user_add_save.php">   <table>      <tr>      <td>Username:</td>   <td><input value="<? echo $username; ?>" name="username"/></td>   </tr>      <tr>      <td>Password:</td>   <td><input value="<? echo $password; ?>" name="password" type="password"/></td>   </tr>      <tr>      <td>E-Mail:</td>   <td><input value="<? echo $email; ?>" name="email"/></td>   </tr>   <tr>      <td>Extension:</td>   <td><input value="<? echo $phone; ?>" name="extension"/></td>   </tr>      <tr>      <td></td>   <td>&nbsp;</td>   </tr>   <tr>      <td></td>   <td><input type=submit value="Sign-Up"/></td>   </tr>   </table>   </form>  <script>				    document.LoginForm.user.focus();  </script>