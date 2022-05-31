$('#contact-us-form').validate({
    rules: {
        name: {
            required: true,
           },
        company: {
          required: true,
        },
        email: {
          required: true,
          email: true,
          pattern: /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
        },
        contactNumber: {
          required: true,
          digits:true,
          pattern : /^-?\d*$/,
          minlength: 8,
          maxlength: 15,
         },
         message: {
          required: true,
         },
      },
    messages: {
        name: {
            required: "The name field is required.",
          },
          company: {
          required: "The company field is required.",
        },
        email: {
          required: "The email field is required.",
          pattern: "Please enter a valid email address.",
        },
        contactNumber: {
          required: "The phone number field is required.",
          pattern:  "The phone number must be a number",
        },
        message: {
          required: "The message field is required.",
        },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },

});




$('#enquiry-form').validate({
    rules: {
    name: {
        required: true,
       },
    country: {
      required: true,
    },
    email: {
      required: true,
      email: true,
      pattern: /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
    },
    phone_no: {
      required: true,
      digits:true,
      pattern : /^-?\d*$/,
      minlength: 8,
      maxlength: 15,
     },
     requirement: {
      required: true,
     },
     file: {
        required: true,
       },
    },
    messages: {
      name: {
        required: "The name field is required.",
      },
      country: {
      required: "The country field is required.",
    },
    email: {
      required: "The email field is required.",
      pattern: "Please enter a valid email address.",
    },
    phone_no: {
      required: "The phone number field is required.",
      pattern:  "The phone number must be a number",
    },
    requirement: {
      required: "The requirement field is required.",
    },
    file: {
        required: "The file field is required.",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },

  });


  $('#login-form').validate({
    rules: {
    email: {
      required: true,
      email: true,
      pattern: /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
    },
    password: {
      required: true,
      minlength: 3,

     },

      },
    messages: {

    email: {
      required: "The email field is required.",
      pattern: "Please enter a valid email address.",
    },
    password: {
        required: "The password field is required.",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },

  });


//   $('#admin-profile-form').validate({
//     rules: {
//     name: {
//       required: true,

//     },
//     phoneNumber: {
//         required: true,
//         digits:true,
//         pattern : /^-?\d*$/,
//         minlength: 10,
//         maxlength: 10,

//      },

//       },
//     messages: {

//     name: {
//       required: "The email field is required.",

//     },
//     phoneNumber: {
//         required: "The password field is required.",
//         pattern:  "The phone number must be a number",
//       },
//     },
//     errorElement: 'span',
//     errorPlacement: function (error, element) {
//       error.addClass('invalid-feedback');
//       element.closest('.form-group').append(error);
//     },
//     highlight: function (element, errorClass, validClass) {
//       $(element).addClass('is-invalid');
//     },
//     unhighlight: function (element, errorClass, validClass) {
//       $(element).removeClass('is-invalid');
//     },

//   });

//   $('#change-password-form').validate({
//     rules: {
//     email: {
//       required: true,
//       email: true,
//       pattern: /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
//     },
//     password: {
//       required: true,
//       minlength: 3,

//      },

//       },
//     messages: {

//     email: {
//       required: "The email field is required.",
//       pattern: "Please enter a valid email address.",
//     },
//     password: {
//         required: "The password field is required.",
//       },
//     },
//     errorElement: 'span',
//     errorPlacement: function (error, element) {
//       error.addClass('invalid-feedback');
//       element.closest('.form-group').append(error);
//     },
//     highlight: function (element, errorClass, validClass) {
//       $(element).addClass('is-invalid');
//     },
//     unhighlight: function (element, errorClass, validClass) {
//       $(element).removeClass('is-invalid');
//     },

//   });
