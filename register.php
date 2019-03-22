<!DOCTYPE html>
<html>

<div class="col-md-12" style="background-color: #FFFEF0;" >
  <br>
  <h4 class="text-center"><b>สมัครสมาชิก</b></h4>
  <hr>
  <center>
    <div class="col-md-6" >
      <form class="" id="c_form-h" action="register_db.php" method="post" >
        <div class="md-form input-group mb-3 ">
         
          <input type="text" name="Username" class="form-control text-left" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" id="input-user" required placeholder="ชื่อผู้ใช้" pattern="^[a-zA-Z0-9]+$" aria-label="Sizing example input" autocomplete="off" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="3" maxlength="25" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeyup="user();" >

          <font color="red" size="5">*</font>
        </div>

        <div class="md-form input-group mb-3 ">
          
          <input type="password" name="Password" id="txtNewPassword" class="form-control text-left" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" id="inputpasswordh" required placeholder="รหัสผ่าน ต้องมี ตัวเล็ก ตัวใหญ่ ตัวเลข อย่างน้อย 8 ตัวขึ้นไป" autocomplete="off" title="รหัสผ่านต้องมี ภาษาอังกฤษตัวใหญ่ ตัวเล็ก ตัวเลข 8 ตัวขึ้นไป"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="25" >
          <span id="result"></span>

          <font color="red" size="5">*</font>
        </div>
        <div class="md-form input-group mb-3 ">
        
          <input type="password" id="txtConfirmPassword" onkeyup="checkPasswordMatch();" class="form-control text-left" id="inputpasswordh" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" autocomplete="off" title="รหัสผ่านต้องมี ภาษาอังกฤษตัวใหญ่ ตัวเล็ก ตัวเลข 8 ตัวขึ้นไป"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="ยืนยันรหัสผ่าน" minlength="6" maxlength="25"  >
          <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
          <font color="red" size="5">*</font>
        </div>

        <div class="md-form input-group mb-3 ">
         
          <input type="text" name="Firstname" class="form-control text-left" id="inlineFormInputGroup" required="กรุณากรอกชื่อ" placeholder="ชื่อ" onkeyup="validate();" minlength="3" maxlength="25"  aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" autocomplete="off" title="ใส่ ก-ฮ หรือ a-z อย่างน้อย 3 ตัว">
          <font color="red" size="5">*</font>
        </div>

        <div class="md-form input-group mb-3 ">
         
          <input type="text" name="Lastname" class="form-control text-left" id="inlineFormInputGroup" required="กรุณากรอกนามสกุล อย่างน้อย 3 ตัว" placeholder="นามสกุล" onkeyup="validate();" minlength="3" maxlength="25"  aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" autocomplete="off" title="ใส่ ก-ฮ หรือ a-z อย่างน้อย 3 ตัว">
          <font color="red" size="5">*</font>
        </div>
        <div class="md-form input-group mb-3 ">
        
          <input type="email" name="email" class="form-control text-left" id="inputmailh" required="กรุณากรอกอีเมล์" placeholder="อีเมล์" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" autocomplete="off" title="กรุณาใช้ อีเมล์ ที่ใช้งานได้จริง" />
          <font color="red" size="5">*</font>
        </div>
        <div class="md-form input-group mb-3 ">
         
          <input name="phone" class="form-control text-left" id="input-num" required="กรุณากรอกเบอร์โทร" placeholder="เบอร์โทร" value="" size="10" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" autocomplete="off" title="เบอร์โทร 0-9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
          type="tel"
          maxlength = "10" onkeyup="num();">
          <font color="red" size="5">*</font>
        </div>
        <label></label>
        <label class="pull-left"><font color="red">*</font>กรุณากรอกข้อมูลให้ครบ</label>
        <div class="py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <button name="btn" class="btn btn-success text-light mx-1">สมัครสมาชิก</button>
                <!-- <a class="btn btn-danger text-light mx-1" href="index.php">ยกเลิก</a> -->
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </center>
</div>

</html>


<script type="text/javascript">

  function validate() {
    var element = document.getElementById('input-field');
    element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
  };

  function num() {
    var element = document.getElementById('input-num');
    element.value = element.value.replace(/[^0-9]+/, '');
  };

  function user() {
    var element = document.getElementById('input-user');
    element.value = element.value.replace(/[^a-zA-Z0-9]+/, '');
  };
</script>

<script type="text/javascript">
  function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();
    if (password != confirmPassword)
      $("#divCheckPasswordMatch").html("รหัสผ่านไม่ตรงกัน!");
    else
      $("#divCheckPasswordMatch").html("รหัสผ่านตรงกัน");
  }

//           /*
//   jQuery document ready.
//   */
//   $(document).ready(function()
//   {
//   /*
//     assigning keyup event to password field
//     so everytime user type code will execute
//     */

//     $('#txtNewPassword').keyup(function()
//     {
//       $('#result').html(checkStrength($('#txtNewPassword').val()))
//     })  

//   /*
//     checkStrength is function which will do the 
//     main password strength checking for us
//     */

//   //   function checkStrength(password)
//   //   {
//   //   //initial strength
//   //   var strength = 0

//   //   //if the password length is less than 6, return message.
//   //   if (password.length < 6) { 
//   //     $('#result').removeClass()
//   //     $('#result').addClass('short')
//   //     return 'รหัสสั้นเกินไป' 
//   //   }

//   //   //length is ok, lets continue.

//   //   //if length is 8 characters or more, increase strength value
//   //   if (password.length > 7) strength += 1

//   //   //if password contains both lower and uppercase characters, increase strength value
//   // if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1

//   //   //if it has numbers and characters, increase strength value
//   // if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1 

//   //   //if it has one special character, increase strength value
//   // if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1

//   //   //if it has two special characters, increase strength value
//   // if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1

//   //   //now we have calculated strength value, we can return messages

//   //   //if value is less than 2
//   //   if (strength < 2 )
//   //   {
//   //     $('#result').removeClass()
//   //     $('#result').addClass('weak')
//   //     return 'รหัสง่ายเกินไป'     
//   //   }
//   //   else if (strength == 2 )
//   //   {
//   //     $('#result').removeClass()
//   //     $('#result').addClass('good')
//   //     return 'รหัสปลอดภัย'   
//   //   }
//   //   else
//   //   {
//   //     $('#result').removeClass()
//   //     $('#result').addClass('strong')
//   //     return 'รหัสปลอดภัยมาก'
//   //   }
//   // }
// });

</script>