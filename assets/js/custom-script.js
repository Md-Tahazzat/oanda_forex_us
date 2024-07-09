(function ($) {
  // TODO: have to change the duplicate homeUrl;
  //   const homeUrl = window.location.origin;
  const homeUrl =
    window.location.origin + "/" + window.location.pathname.split("/")[1];

  console.log("custom script file loaded");
  // $(".panel-nav-btn").on("click", function (event) {
  //   console.log("clicked");
  //   const btn = event.currentTarget;
  //   const activeEl = $(btn).attr("data-name");
  //   console.log(activeEl);
  // });

  // ====== Deposite functionality
  let depositVal;
  $("#deposit-input").on("keyup", function (e) {
    depositVal = e.target.value;
  });

  $("#deposit-input-submit-btn").on("click", function (e) {
    e.preventDefault();

    // ======== send deposit request to the server
    try {
      fetch(`${homeUrl}/wp-json/authentication/v1/register`, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then((res) => {
          console.log(res);
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
  });
})(jQuery);
