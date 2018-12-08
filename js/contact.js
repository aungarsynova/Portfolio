var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

new Vue({
  // root node
  el: "#app",
  // the instance state
  data: function data() {
    return {
      name: "John Doe",
      email: {
        value: "jo@hnd.oe",
        valid: true },

      message: {
        text: "MSG,\n...",
        maxlength: 255 },

      submitted: false };

  },
  methods: {
    // submit form handler
    submit: function submit() {
      this.submitted = true;
    },
    // validate by type and value
    validate: function validate(type, value) {
      if (type === "email") {
        this.email.valid = this.isEmail(value) ? true : false;
      }
    },
    // check for valid email adress
    isEmail: function isEmail(value) {
      return emailRegExp.test(value);
    }
    },

  watch: {
    // watching nested property
    "email.value": function emailValue(value) {
      this.validate("email", value);
    } } });

    var menu = document.querySelector(".menu"),
    toggle = document.querySelector(".menu-toggle");

function toggleToggle() {
  toggle.classList.toggle("menu-open");
};

function toggleMenu() {
  menu.classList.toggle("active");
};

toggle.addEventListener("click", toggleToggle, false);
toggle.addEventListener("click", toggleMenu, false);
