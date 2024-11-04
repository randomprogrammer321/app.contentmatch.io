document.addEventListener("DOMContentLoaded", () => {
  const togglePassword = document.querySelector("#togglePassword");
  const toggleConfirmPassword = document.querySelector(
    "#toggleConfirmPassword"
  );
  const password = document.querySelector("#password");
  const confirmPassword = document.querySelector("#confirmPassword");

  if (togglePassword) {
    togglePassword.addEventListener("click", function (e) {
      const passwordType =
        password.getAttribute("type") === "password" ? "text" : "password";

      password.setAttribute("type", passwordType);

      const passwordIconSrc =
        passwordType === "password"
          ? "/assets/icon/humbleicons_eye-close.svg"
          : "/assets/icon/lucide_eye.svg";

      togglePassword.setAttribute("src", passwordIconSrc);
    });
  }

  if (toggleConfirmPassword) {
    toggleConfirmPassword.addEventListener("click", function (e) {
      const confirmPasswordType =
        confirmPassword.getAttribute("type") === "password"
          ? "text"
          : "password";

      confirmPassword.setAttribute("type", confirmPasswordType);

      const confirmPassworfIconSrc =
        confirmPasswordType === "password"
          ? "/assets/icon/humbleicons_eye-close.svg"
          : "/assets/icon/lucide_eye.svg";

      toggleConfirmPassword.setAttribute("src", confirmPassworfIconSrc);
    });
  }
});
