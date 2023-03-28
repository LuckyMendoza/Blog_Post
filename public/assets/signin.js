// $(document).ready(function () {
//     $("btn").submit(function (event) {
//       var formData = {
//         username: $("#username").val(),
//         password: $("#password").val(),
     
//       };
  
//       $.ajax({
//         type: "POST",
//         url: "/signin",
//         data: formData,
//         dataType: "json",
//         encode: true,
//       }).done(function (data) {
//         console.log(data);

        
//       if (!data.success) {
//         if (data.errors.name) {
//           $("#username-group").addClass("has-error");
//           $("#username-group").append(
//             '<div class="help-block">' + data.errors.username + "</div>"
//           );
//         }

//         if (data.errors.password) {
//           $("#password-group").addClass("has-error");
//           $("#password-group").append(
//             '<div class="help-block">' + data.errors.password + "</div>"
//           );
//         }

       
//       } else {
//         $("form").html(
//           '<div class="alert alert-success">' + data.message + "</div>"
//         );
//       }



//       });
  
//       event.preventDefault();
//     });
//   });