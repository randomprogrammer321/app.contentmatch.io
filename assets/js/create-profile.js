import { header } from "../../components/create-profile/header.js";
import { otpForm } from "../../components/create-profile/otp.js";
import { userNamePasswordForm } from "../../components/create-profile/username-password.js";
import { profileSetupForm } from "../../components/create-profile/profile-setup-form.js";
import { socialsForm } from "../../components/create-profile/socials.js";
import { aboutOneForm } from "../../components/create-profile/about-one.js";
import { aboutTwoForm } from "../../components/create-profile/about-two.js";
import { stepFive } from "../../components/create-profile/step-five.js";

const content = `
  ${header()}
  ${stepFive()}
  ${otpForm()}
  ${userNamePasswordForm()}
  ${profileSetupForm()}
  ${socialsForm()}
  ${aboutOneForm()}
  ${aboutTwoForm()}
`;
document.getElementById("content").innerHTML = content;

document.addEventListener("DOMContentLoaded", () => {

const forms = {
  otpForm: document.getElementById("otp-form"),
  userPassForm: document.getElementById("creat-user-pass"),
  profileSetupForm: document.getElementById("profile-setup"),
  socialsForm: document.getElementById("socials"),
  aboutOneForm: document.getElementById("about-one"),
  aboutTwoForm: document.getElementById("about-two"),
  stepFiveForm: document.getElementById("step-five"),
};

const switchForm = (formToShow, formToHide) => {
  formToHide.classList.add("hidden");
  formToHide.classList.remove("flex");
  formToShow.classList.remove("hidden");
  formToShow.classList.add("flex");
};

document.getElementById("to-user-pass").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.userPassForm, forms.otpForm);
});

document.getElementById("creat-user-pass-bk-btn").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.otpForm, forms.userPassForm);
});

document.getElementById("to-profile-setup").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.profileSetupForm, forms.userPassForm);
});

document.getElementById("profile-setup-bk-btn").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.userPassForm, forms.profileSetupForm);
});

document.getElementById("to-socials").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.socialsForm, forms.profileSetupForm);
});

document.getElementById("socials-bk-btn").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.profileSetupForm, forms.socialsForm);
});

document.getElementById("to-about-one").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.aboutOneForm, forms.socialsForm);
});

document.getElementById("about-one-bk-btn").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.socialsForm, forms.aboutOneForm);
});

document.getElementById("to-about-two").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.aboutTwoForm, forms.aboutOneForm);
});

document.getElementById("about-two-bk-btn").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.aboutOneForm, forms.aboutTwoForm);
});

document.getElementById("to-step-five").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.stepFiveForm, forms.aboutTwoForm);
});

document.getElementById("step-five-bk-btn").addEventListener("click", (event) => {
  event.preventDefault();
  switchForm(forms.aboutTwoForm, forms.stepFiveForm);
});

});
