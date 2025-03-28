import 'jquery-modal'
var InfoTicket = {
    init : function ()
    {
        this.showModalTicket()
    },

    showModalTicket()
    {
        $(".js-info-guest-ticket").click(function (event){
            event.preventDefault()
            let $this = $(this)
            let URL = $this.attr('href')
            $.ajax({
                type: 'GET',
                url: URL,
                sync: false,
                beforeSend: function () {

                },
                success: function (results) {
                    $("#js-info-ticket").html(results.html)
                    $("#popup-ticket").modal({
                        escapeClose: true,
                        clickClose: true,
                        // HTML appended to the default spinner during AJAX requests.
                        spinnerHtml: '<div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div>',
                        showClose: true
                    });
                },
            });
        })
    }

}

export default InfoTicket