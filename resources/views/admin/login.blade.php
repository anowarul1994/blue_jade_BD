<style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body {
  background: #e0e0e0;
}

.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
  border-radius: 50px;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 600px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  border-radius: 50px;
  background: #e0e0e0;
  box-shadow:  -11px 11px 22px #bebebe, 11px -11px 22px #ffffff;
}

.form input {
  outline: 0;
  background: #e0e0e0;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #e0e0e0;
}

.form button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #e0e0e0;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: black;
  font-size: 19px;
  font-width:700;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:active {
  background: #395591;
}
</style>
<div class="login">
  <div class="form">
    <p>welcome</p>
    <form class="login-form" method="post" action="{{ url('/login/admin') }}">
      @csrf
      <input type="text" placeholder="email" name="email" required />
      <input type="password" name="password" placeholder="password" required />
      <button type="submit">login</button>
    </form>  
  </div>
</div>