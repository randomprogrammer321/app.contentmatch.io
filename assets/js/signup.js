import { sectionOne } from "../../components/sign-up/section-one.js";
import { sectionTwo } from "../../components/sign-up/section-two.js";

const content = `
  ${sectionOne()}
  ${sectionTwo()}
`;

document.getElementById("content").innerHTML = content;
