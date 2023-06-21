<!-- ====== All Scripts -->
{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
        new Swiper('#testimonial .swiper-container', {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 9,
          observer: true,
          autoplay: {
            delay: 8000,
            disableOnInteraction:false,
            reverseDirection:true,
          },
          pagination: {
            el: '.swiper-pagination2',
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            640: {
              slidesPerView: 1.5,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        })
        new Swiper('#partners .swiper-container', {
          loop: true,
          slidesPerView: 2,
          spaceBetween: 9,
          autoplay: {
            delay: 2000,
            disableOnInteraction:false,
            reverseDirection:true,
          },
          navigation: {
            nextEl: ".swiper-button-next2",
            prevEl: ".swiper-button-prev2",
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 1.5,
            },
            1024: {
              slidesPerView: 4,
            },
          },
        })
      })

</script>
<script>
  // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          
          if(elem.getAttribute("href") !='categories.html' && elem.getAttribute("href") !='blog.html'){
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
              behavior: "smooth",
              offsetTop: 1 - 60,
            });
          }
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll");
              //.classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);

      //listen to browser event

</script>