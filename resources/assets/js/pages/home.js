import "owl.carousel/dist/owl.carousel";
import RunSelect2 from "../helpers/run_select2"; "./../helpers/run_select2"
import CoreJs from "./../common/_base";
import Auth from "../components/auth";
import Sidebar from "../components/_inc_sidebar";
import Messages from "../../../js/components/_inc_run_message";

import "@chenfengyuan/datepicker";
import "@chenfengyuan/datepicker/i18n/datepicker.vi-VN";
let Home = {
    init() {
        this.runProjectCarousel();
        this.tabMenuSearch();
        this.focusInputSearch();
        this.clickSearchAdvanced();
        this.loadEsateByDistrict();
        $('[data-toggle="datepicker"]').datepicker({
            language: 'vi-VN',
            format: 'yyyy-mm-dd',
            startDate :  new Date()
        });
    },
    runProjectCarousel(){
        $('.carousel-review-location').owlCarousel({
            loop:3,
            margin:10,
            dots: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            navContainer: '#js-owl-style-buttons',
            navClass: [ 'owl-style-buttons__btn owl-style-buttons__btn--prev', 'owl-style-buttons__btn owl-style-buttons__btn--next' ],
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
    },

    focusInputSearch()
    {
        let $inputSearch = $(".js-input-search");
        $inputSearch.focus( function(){
            $("#box-suggest-search-advanced").hide();
            $("#box-suggest-search").show();
        })

        $inputSearch.blur( function() {
            $("#box-suggest-search").hide();
        });
    },

    tabMenuSearch()
    {
        $(".thue").hide();
        let $element = $("#tab-menu-search li");
        $element.click( function (event) {
            event.preventDefault();
            $element.removeClass('active');
            $(this).addClass('active');
            let $classTrigger  = $(this).attr('data-class');

            if ($classTrigger === 'tab-3') {
                $(".form-2").hide();
            }else {
                $(".form-2").show();
            }

            if ($classTrigger === 'tab-1') {
                $(".sotang").show()
                $(".thue").hide();
                $(".ban").show();
            }else {
                $(".thue").show();
                $(".ban").hide();
                $(".sotang").hide()
            }
        })
    },

    loadEsateByDistrict()
    {
        $("body").on("click",".js-district", function(event){
            event.preventDefault();
            $(".js-district").removeClass('btn-active')
            let $this = $(this);
            $this.addClass('btn-active');
            $.ajax({
                type: 'GET',
                url: URL_SHOW_LIST_ESTATE,
                sync: false,
                beforeSend: function () {
                    // $('.timeline-wrapper').show();
                    // check = false;
                },
                success: function (results) {
                    if (results.html) {
                        $("#list-estate").html(results.html);
                        CoreJs.init();
                    }
                },
                complete: function () {
                    // $('.timeline-wrapper').hide();
                    // check = true;
                },
                dataType: 'json'
            });
        })
    },

    clickSearchAdvanced()
    {
        let $element = $(".js-search-advanced");

        $element.click( function(){
            $("#box-suggest-search").hide();
            $("#box-suggest-search-advanced").show();
        })

        $element.blur( function() {
            $("#box-suggest-search-advanced").hide();
        });
    },
};

$(function () {
    Home.init()
    CoreJs.init()
    Auth.init()
    RunSelect2.init({
        element : '.js-select2-districts'
    });
    Sidebar.init()
    Messages.init()
});
