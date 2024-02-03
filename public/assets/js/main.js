(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
    
})(jQuery);


// <!--#############################> language converter <################# -->
    
            var Cookie = {
        set: function (name, value, days) {
            var domain, domainParts, date, expires, host;
    
            if (days) {
                date = new Date();
                date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
                expires = "; expires=" + date.toGMTString();
            } else {
                expires = "";
            }
    
            host = location.host;
            if (host.split(".").length === 1) {
                // no "." in a domain - it's localhost or something similar
                document.cookie = name + "=" + value + expires + "; path=/";
            } else {
                // Remember the cookie on all subdomains.
                //
                // Start with trying to set cookie to the top domain.
                // (example: if user is on foo.com, try to set
                //  cookie to domain ".com")
                //
                // If the cookie will not be set, it means ".com"
                // is a top level domain and we need to
                // set the cookie to ".foo.com"
                domainParts = host.split(".");
                domainParts.shift();
                domain = "." + domainParts.join(".");
    
                document.cookie =
                    name + "=" + value + expires + "; path=/; domain=" + domain;
    
                // check if cookie was successfuly set to the given domain
                // (otherwise it was a Top-Level Domain)
                if (Cookie.get(name) == null || Cookie.get(name) != value) {
                    // append "." to current domain
                    domain = "." + host;
                    document.cookie =
                        name + "=" + value + expires + "; path=/; domain=" + domain;
                }
            }
        },
    
        get: function (name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(";");
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1, c.length);
                }
    
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        },
    
        erase: function (name) {
            Cookie.set(name, "", -1);
        }
    };
    
    function googleTranslateElementInit() {
        let url = new URL(window.location);
        let lang = url.searchParams.get("lang");
        if (lang) {
            console.log(lang);
            Cookies.set("googtrans", `/en/${lang}`, { path: "" });
            Cookie.set("googtrans", `/en/${lang}`);
            Cookies.set("googtrans", `/en/${lang}`, { path: "", domain: location.host });
        } else {
            Cookie.erase("googtrans");
            Cookies.remove("googtrans", { path: "" });
        }
        new google.translate.TranslateElement({ pageLanguage: "en" }, "translate");
        // add event listener to change url param on language selection change
        let langSelector = document.querySelector(".goog-te-combo");
        langSelector.addEventListener("change", function () {
            let lang = langSelector.value;
            var newurl =
                window.location.protocol +
                "//" +
                window.location.host +
                window.location.pathname +
                "?lang=" +
                lang;
            window.history.pushState({ path: newurl }, "", newurl);
        });
    }
    document.addEventListener("DOMContentLoaded", function () {
        (function () {
            Cookie.erase("googtrans");
            var googleTranslateScript = document.createElement("script");
            googleTranslateScript.type = "text/javascript";
            googleTranslateScript.async = true;
            googleTranslateScript.src =
                "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
            (
                document.getElementsByTagName("head")[0] ||
                document.getElementsByTagName("body")[0]
            ).appendChild(googleTranslateScript);
        })();
    });
    
   
// <!--#############################> language converter  End<################# -->


// <!-- chat js  start -->

    const chatbotToggle = document.querySelector('.chatbot__button');
const sendChatBtn = document.querySelector('.chatbot__input-box span');
const chatInput = document.querySelector('.chatbot__textarea');
const chatBox = document.querySelector('.chatbot__box');
const chatbotCloseBtn = document.querySelector('.chatbot__header span');

let userMessage;
// Need GPT key
const inputInitHeight = chatInput.scrollHeight;
const API_KEY = 'HERE';

const createChatLi = (message, className) => {
  const chatLi = document.createElement('li');
  chatLi.classList.add('chatbot__chat', className);
  let chatContent =
    className === 'outgoing'
      ? `<p></p>`
      : `<span class="material-symbols-outlined">smart_toy</span> <p></p>`;
  chatLi.innerHTML = chatContent;
  chatLi.querySelector('p').textContent = message;
  return chatLi;
};

const generateResponse = (incomingChatLi) => {
  const API_URL = 'https://api.openai.com/v1/chat/completions';
  const messageElement = incomingChatLi.querySelector('p');

  const requestOptions = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      Authorization: `Bearer ${API_KEY}`,
    },
    body: JSON.stringify({
      model: 'gpt-3.5-turbo',
      message: [{ role: 'user', content: userMessage }],
    }),
  };
  fetch(API_URL, requestOptions)
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      messageElement.textContent = data.choices[0].message.content;
    })
    .catch((error) => {
      messageElement.classList.add('error');
      messageElement.textContent = 'Oops! Please try again!';
      console.log(error);
    })
    .finally(() => chatBox.scrollTo(0, chatBox.scrollHeight));
};

const handleChat = () => {
  userMessage = chatInput.value.trim();
  if (!userMessage) return;
  chatInput.value = '';
  chatInput.style.height = `${inputInitHeight}px`;

  chatBox.appendChild(createChatLi(userMessage, 'outgoing'));
  chatBox.scrollTo(0, chatBox.scrollHeight);

  setTimeout(() => {
    const incomingChatLi = createChatLi('Thinking...', 'incoming');
    chatBox.appendChild(incomingChatLi);
    chatBox.scrollTo(0, chatBox.scrollHeight);
    generateResponse(incomingChatLi);
  }, 600);
};

chatInput.addEventListener('input', () => {
  chatInput.style.height = `${inputInitHeight}px`;
  chatInput.style.height = `${chatInput.scrollHeight}px`;
});
chatInput.addEventListener('keydown', (e) => {
  if (e.key === 'Enter' && !e.shiftKey && window.innerWidth > 800) {
    e.preventDefault();
    handleChat();
  }
});
chatbotToggle.addEventListener('click', () =>
  document.body.classList.toggle('show-chatbot')
);
chatbotCloseBtn.addEventListener('click', () =>
  document.body.classList.remove('show-chatbot')
);
sendChatBtn.addEventListener('click', handleChat);

 

// <!-- chat js end -->
