(function ($) {
  // TODO: have to change the duplicate homeUrl;
  //   const homeUrl = window.location.origin;
  const homeUrl =
    window.location.origin + "/" + window.location.pathname.split("/")[1];

  console.log("script loaded");
  $("#demo-login-btn").on("click", function (event) {
    const data = {
      email: "galdib@gamil.com",
      password: "123456",
      remember: true,
    };

    try {
      fetch(`${homeUrl}/wp-json/authentication/v1/login`, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then((res) => {
          if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
          }
          return res.json();
        })
        .then((result) => {
          console.log(result);
        });
    } catch (error) {
      console.log(error);
    }
  });

  //   registration ======
  $("#registrationform").on("submit", function (event) {
    event.preventDefault();
    const form = event.target;
    // const agreeTerms = form.i_agree?.value;
    const firstName = form.first_name?.value;
    const lastName = form.last_name?.value;
    const email = form.email?.value;
    const userName = form.username?.value;
    const sponsor = form.sponsor?.value;
    const country = form.country?.value;
    const phone = form.phone?.value;
    const password = form.password?.value;
    const confirmPassword = form.confirm_password?.value;
    const data = {
      firstName,
      lastName,
      email,
      sponsor,
      country,
      userName,
      phone,
      password,
    };

    if (password !== confirmPassword) {
      $("#registration_error")
        .removeClass("d-none")
        .text("Confirm password doesn't match");
      return;
    }

    // ====== show loading state =======
    $("#register-spinner").removeClass("d-none").addClass("d-flex");
    $("#registration-submit-btn").addClass("d-none");
    $("#register-sign-in-btn").addClass("d-none");
    $("#registration_error").addClass("d-none");
    $("#registrationform").css("pointer-events", "none");

    try {
      fetch(`${homeUrl}/wp-json/authentication/v1/register`, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then((res) => {
          if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
          }
          return res.json();
        })
        .then((result) => {
          $("#registration_error").removeClass("d-none");
          $("#registration_error").addClass("d-none");
          $("#registrationform").css("pointer-events", "auto");
          if (result?.status === "fail") {
            $("#registration_error")
              .removeClass("d-none")
              .text(result?.message ? result?.message : "Some error occurs.");
          }
          console.log(result);
        });
    } catch (error) {
      $("#registration_error")
        .removeClass("d-none")
        .text(error?.message ? error.message : "Some error occurs.");
      $("#registrationform").css("pointer-events", "auto");
      console.log(error);
    }
    $("#register-spinner").removeClass("d-flex").addClass("d-none");
    $("#registration-submit-btn").removeClass("d-none");
    $("#register-sign-in-btn").removeClass("d-none");
  });

  //   Login ======
  $("#login-form").on("submit", function (event) {
    event.preventDefault();
    const form = event.target;
    // const agreeTerms = form.i_agree?.value;
    const email = form.email?.value;
    const password = form.password?.value;
    const remember = $(form.remember).is(":checked");

    const data = {
      email,
      password,
      remember,
    };

    // ====== show loading state =======
    $("#login-spinner").removeClass("d-none").addClass("d-flex");
    $("#login-submit-btn").addClass("d-none");
    $("#login-regestration-btn").addClass("d-none");
    $("#login_error").addClass("d-none");
    $("#login-form").css("pointer-events", "none");

    try {
      fetch(`${homeUrl}/wp-json/authentication/v1/login`, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then((res) => {
          if (!res.ok) {
            throw new Error(`HTTP error! status: ${res.status}`);
          }
          return res.json();
        })
        .then((result) => {
          $("#login-spinner").addClass("d-none");
          $("#login-submit-btn").removeClass("d-none");
          $("#login-regestration-btn").removeClass("d-none");
          $("#login-form").css("pointer-events", "auto");
          if (result?.status === "fail") {
            $("#login_error")
              .removeClass("d-none")
              .text(result?.message ? result?.message : "Some error occurs.");
          } else {
            window.location.href = `${homeUrl}/dashboard`;
          }
        });
    } catch (error) {
      $("#login-spinner").addClass("d-none");
      $("#login-submit-btn").removeClass("d-none");
      $("#login-regestration-btn").removeClass("d-none");
      $("#login-form").css("pointer-events", "auto");
      $("#login_error").removeClass("d-none").text(error.message);
      console.log(error);
    }
    $("#register-spinner").removeClass("d-flex").addClass("d-none");
    $("#registration-submit-btn").removeClass("d-none");
    $("#register-sign-in-btn").removeClass("d-none");
  });
})(jQuery);
