jQuery( document ).ready(function( $ ) {


	"use strict";


        // Page loading animation

        $("#preloader").animate({
            'opacity': '0'
        }, 600, function(){
            setTimeout(function(){
                $("#preloader").css("visibility", "hidden").fadeOut();
            }, 300);
        });
        

        $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          var box = $('.header-text').height();
          var header = $('header').height();

          if (scroll >= box - header) {
            $("header").addClass("background-header");
          } else {
            $("header").removeClass("background-header");
          }
        });

        if ($('.owl-clients').length) {
            $('.owl-clients').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                items: 1,
                margin: 30,
                autoplay: false,
                smartSpeed: 700,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 1,
                        margin: 0
                    },
                    460: {
                        items: 1,
                        margin: 0
                    },
                    576: {
                        items: 3,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 30
                    }
                }
            });
        }

        if ($('.owl-banner').length) {
            $('.owl-banner').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                items: 3,
                margin: 10,
                autoplay: false,
                smartSpeed: 700,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                      items: 1,
                      margin: 0
                    },
                    460: {
                        items: 1,
                        margin: 0
                    },
                    576: {
                        items: 1,
                        margin: 10
                    },
                    992: {
                      items: 3,
                      margin: 10
                    }
                }
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#form-submit').click(function(){
            $.ajax({
                url: "/comment", // địa chỉ URL của API
                method: "POST", // phương thức HTTP
                data: {
                    post_id: $(this).data('id'), 
                    parent_id: 0, 
                    content: $('#message').val(), 
                    // _token: $('meta[name="csrf-token"]').attr('content')
                },
                headers: {
                    // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    // 'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                dataType: "json", // kiểu dữ liệu trả về từ server
                success: function(response) {
                    // xử lý kết quả trả về
                    if(response && response.success == 1){
                        window.location.href = window.location.href+'#submit-comment';
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    // xử lý lỗi khi không thể gọi API
                    console.log(xhr.responseText);
                }
            });
        })
 
});
