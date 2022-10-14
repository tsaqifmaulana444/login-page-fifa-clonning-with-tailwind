<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(){
    $(document).ready(function(){
      var data = {
        username: $("#username").val(),
        gmail: $("#gmail").val(),
        password: $("#password").val(),
        password2: $("#password2").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response === "Login Successful"){
            document.location.href = "display.php"
          }else if(response === "Registration Success"){
            document.location.href = "login.php"
          }
        }
      });
    });
  }
 
  function submitLogin(){
    $(document).ready(function(){
      var data = {
        username: $("#username").val(),
        gmail: $("#gmail").val(),
        password: $("#password").val(),
        password2: $("#password2").val(),
        action: $("#action").val(),
        login: $("#login").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response === "Login Successful"){
            location.href = "display.php"
          }
        }
      });
    });
  }
  
  let images_list = [
    '/img/cr.png',
    '/img/lm.png',
    '/img/benz.png',
    '/img/eh.png',
    '/img/kakaaa.png',
    '/img/jrodriguez.png',
    '/img/knavas.png',
    '/img/son.png',
    '/img/hziyech.png',
  ]

  let pic = $('#gambar')
  let i = 0
  setInterval(function(){
    i =(i + 1) % images_list.length //mengembalikan value 0 1 2 3 seperti indexing array
    $(document).ready(function(){
      pic.fadeOut(1500, () => {
        pic.attr('src', images_list[i])
        pic.fadeIn(1500)  
      })
    })
  }, 6000)
</script>